<?php

class site_infoController extends BaseController
{
    public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->url = "/admin/site_info/" . ($query ? "?q=" . urlencode($query) : "");
        $this->registry->template->first_url = "/admin/site_info/" . ($query ? "?q=" . urlencode($query) : "");
        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->site_info_model->total_rows();
        $this->registry->template->site_info_data = $this->registry->site_info_model->get_limit_data(10, $start, $query);

        $this->showTemplate('admin/site_info/site_info_browse.view.php');
    }

    public function view($id)
    {
        $siteInfo = $this->registry->site_info_model->get_by_id($id);

        if ($siteInfo) {
            $this->registry->template->data = [
                'site_info_id' => $siteInfo->site_info_id,
                'site_info_name' => $siteInfo->site_info_name,
                'site_info_description' => $siteInfo->site_info_description,
                'site_info_keywords' => $siteInfo->site_info_keywords,
                'site_info_modified' => $siteInfo->site_info_modified,
            ];
            $this->showTemplate('admin/site_info/site_info_view.view.php');
        } else {
            redirect('/admin/site_info');
        }
    }

    public function create()
    {
        $this->registry->template->data = [
            'button' => 'Create',
            'action' => '/admin/site_info/create_action'
        ];
        $this->showTemplate('admin/site_info/site_info_form.view.php');
    }

    public function createAction()
    {
        $data = $this->getRequestData();
        $this->registry->site_info_model->insert($data);
        redirect('/admin/site_info');
    }

    public function update($id)
    {
        $siteInfo = $this->registry->site_info_model->get_by_id($id);

        if ($siteInfo) {
            $this->registry->template->data = [
                'site_info_id' => $siteInfo->site_info_id,
                'site_info_name' => $siteInfo->site_info_name,
                'site_info_description' => $siteInfo->site_info_description,
                'site_info_keywords' => $siteInfo->site_info_keywords,
                'site_info_modified' => $siteInfo->site_info_modified,
            ];
            $this->showTemplate('admin/site_info/site_info_update_form.view.php');
        } else {
            redirect('/admin/site_info');
        }
    }

    public function updateAction()
    {
        $data = $this->getRequestData();
        $this->registry->site_info_model->update($_REQUEST['site_info_id'], $data);
        redirect('/admin/site_info');
    }

    public function delete($id)
    {
        $siteInfo = $this->registry->site_info_model->get_by_id($id);

        if ($siteInfo) {
            $this->registry->site_info_model->delete($id);
        }

        redirect('/admin/site_info');
    }

    private function getRequestData()
    {
        return [
            'site_info_id' => $_REQUEST['site_info_id'],
            'site_info_name' => $_REQUEST['site_info_name'],
            'site_info_description' => $_REQUEST['site_info_description'],
            'site_info_keywords' => $_REQUEST['site_info_keywords'],
            'site_info_modified' => $_REQUEST['site_info_modified'],
        ];
    }

    private function showTemplate($view)
    {
        $this->registry->template->show('admin/header.view.php');
        $this->registry->template->show($view);
        $this->registry->template->show('admin/footer.view.php');
    }
}
