<?php

class ContentController extends BaseController
{
    public function index()
    {
        // Handle the content management index view
        $this->registry->template->show('admin/content/index.view.php');
    }
    // ...existing code...
}
