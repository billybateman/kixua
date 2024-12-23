<?php

class PaginationHelper extends Helper
{
    public function pagination($options = null)
    {
        /**
         * [Options]
         * total        Total number of items
         * per_page     Items to show each page
         * current      The current page that the user is on
         * num_links    The number of links to show before and after the current page
         * url          URI value to place in the links (must include "[[page]]")
         *              Example: /home/blog/page/[[page]]/
         */

        // Set default number of links if not provided
        $numLinks = $options['num_links'] ?? 2;

        // Ensure current page is at least 1
        $currentPage = max(1, $options['current']);

        // Calculate total number of pages
        $totalPages = ceil($options['total'] / $options['per_page']);

        // Ensure current page does not exceed total pages
        $currentPage = min($currentPage, $totalPages);

        // Return early if there is only one or no pages
        if ($totalPages <= 1) {
            return '';
        }

        // Generate previous page link
        $previous = $currentPage > 1 ? str_replace('[[page]]', $currentPage - 1, $options['url']) : null;

        // Generate next page link
        $next = $currentPage < $totalPages ? str_replace('[[page]]', $currentPage + 1, $options['url']) : null;

        // Generate first page link
        $first = $currentPage > $numLinks + 1 ? str_replace('[[page]]', 1, $options['url']) : null;

        // Generate last page link
        $last = $currentPage + $numLinks < $totalPages ? str_replace('[[page]]', $totalPages, $options['url']) : null;

        // Determine start and end page numbers for links
        $start = max(1, $currentPage - $numLinks);
        $end = min($totalPages, $currentPage + $numLinks);

        // Generate page links
        $links = [];
        for ($i = $start; $i <= $end; $i++) {
            $links[$i] = $currentPage == $i ? '' : str_replace('[[page]]', $i, $options['url']);
        }

        // Build pagination HTML
        $output = '<ul id="pagination-clean" class="extra-space-bottom">';

        if ($previous) {
            $output .= '<li class="previous"><a href="' . $previous . '">Previous</a></li>';
        }
        if ($first) {
            $output .= '<li class="first"><a href="' . $first . '">&lt;</a></li>';
        }
        foreach ($links as $page => $url) {
            $output .= $url ? '<li><a href="' . $url . '">' . $page . '</a></li>' : '<li class="active">' . $page . '</li>';
        }
        if ($last) {
            $output .= '<li class="next"><a href="' . $last . '">Last</a></li>';
        }
        if ($next) {
            $output .= '<li class="next"><a href="' . $next . '">Next ></a></li>';
        }

        $output .= '</ul>';

        return $output;
    }
}
