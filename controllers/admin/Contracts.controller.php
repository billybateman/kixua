<?php

class contractsController extends BaseController
{
    public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->contracts_model->total_rows();
        $this->registry->template->contracts_data = $this->registry->contracts_model->get_limit_data(10, $start, $query);

        $this->registry->template->show('admin/contracts/browse.view.php');
    }

    public function create()
    {
        $this->registry->template->show('admin/contracts/create.view.php');
    }

    public function createAction()
    {
        $data = [
            'contracts_name' => $_REQUEST['contracts_name'],
            'contracts_value' => $_REQUEST['contracts_value']
        ];

        $this->registry->contracts_model->insert($data);
        redirect('/admin/contracts');
    }

    public function update($id)
    {
        $data = $this->registry->contracts_model->get_by_id($id);

        if ($data) {
            $this->registry->template->data = $data;
            $this->registry->template->show('admin/contracts/update.view.php');
        } else {
            redirect('/admin/contracts');
        }
    }

    public function updateAction()
    {
        $data = [
            'contracts_name' => $_REQUEST['contracts_name'],
            'contracts_value' => $_REQUEST['contracts_value']
        ];

        $this->registry->contracts_model->update($_REQUEST['contracts_id'], $data);
        redirect('/admin/contracts');
    }

    public function delete($id)
    {
        $data = $this->registry->contracts_model->get_by_id($id);

        if ($data) {
            $this->registry->contracts_model->delete($id);
        }

        redirect('/admin/contracts');
    }
}
