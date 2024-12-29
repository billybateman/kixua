<?php

class defaultController extends BaseController
{

    public function index()
    {
        $this->browse();
    }

	public function browse($limit = 10, $start = 0)
    {
         
        if(isset($_REQUEST['q'])){
            $q = explode(":",$_REQUEST['q']);
            $query = new stdClass;
            $query->column = $q[0];
            $query->value = $q[1];
        } else {
            $query = null;
        }

        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = $limit;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->defaultModel->total_rows();
        $this->registry->template->data = $this->registry->defaultModel->get_limit_data($limit, $start, $query);

        $this->registry->template->show('admin/default/browse.view.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'column_name' => $_REQUEST['column_name'],
                'column_name_two' => $_REQUEST['column_name_two']
            ];
    
            $this->registry->defaultModel->insert($data);
            $this->index();
        } else {

            $this->registry->template->show('admin/default/create.view.php');
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'column_name' => $_REQUEST['column_name'],
                'column_name_two' => $_REQUEST['column_name_two']
            ];
    
            $this->registry->defaultModel->update($id, $data);
            $this->index();
        } else {
            $data = $this->registry->defaultModel->get_by_id($id);

            if ($data) {
                $this->registry->template->data = $data;
                $this->registry->template->show('admin/default/nupdate.view.php');
            } else {
                $this->index();
            }
        }
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