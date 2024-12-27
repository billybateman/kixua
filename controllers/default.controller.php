<?php

class defaultController extends BaseController
{
	public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->defaultModel->total_rows();
        $this->registry->template->data = $this->registry->defaultModel->get_limit_data(10, $start, $query);

        $this->registry->template->show('admin/default/browse.view.php');
    }

    public function create()
    {
        $this->registry->template->show('admin/default/create.view.php');
    }

    public function createAction()
    {
        $data = [
            'column_name' => $_REQUEST['column_name'],
            'column_name' => $_REQUEST['column_name']
        ];

        $this->registry->defaultModel->insert($data);
        $this->index();
    }

    public function update($id)
    {
        $data = $this->registry->defaultModel->get_by_id($id);

        if ($data) {
            $this->registry->template->data = $data;
            $this->registry->template->show('admin/default/nupdate.view.php');
        } else {
            $this->index();
        }
    }

    public function updateAction()
    {
        $data = [
            'column_name' => $_REQUEST['column_name'],
            'column_name' => $_REQUEST['column_name']
        ];

        $this->registry->defaultModel->update($_REQUEST['default_id'], $data);
        $this->index();
    }

    public function delete($id)
    {
        $data = $this->registry->defaultModel->get_by_id($id);

        if ($data) {
            $this->registry->defaultModel->delete($id);
        }

        $this->index();
    }
}
?>