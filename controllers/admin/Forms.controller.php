<?php

class FormsController extends BaseController
{
    public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->forms_model->total_rows();
        $this->registry->template->forms_data = $this->registry->forms_model->get_limit_data(10, $start, $query);

        $this->registry->template->show('admin/forms/browse.view.php');
    }

    public function create()
    {
        $this->registry->template->show('admin/forms/create.view.php');
    }

    public function createAction()
    {
        $data = [
            'forms_name' => $_REQUEST['forms_name'],
            'forms_value' => $_REQUEST['forms_value']
        ];

        $this->registry->forms_model->insert($data);
        redirect('/admin/forms');
    }

    public function update($id)
    {
        $data = $this->registry->forms_model->get_by_id($id);

        if ($data) {
            $this->registry->template->data = $data;
            $this->registry->template->show('admin/forms/update.view.php');
        } else {
            redirect('/admin/forms');
        }
    }

    public function updateAction()
    {
        $data = [
            'forms_name' => $_REQUEST['forms_name'],
            'forms_value' => $_REQUEST['forms_value']
        ];

        $this->registry->forms_model->update($_REQUEST['forms_id'], $data);
        redirect('/admin/forms');
    }

    public function delete($id)
    {
        $data = $this->registry->forms_model->get_by_id($id);

        if ($data) {
            $this->registry->forms_model->delete($id);
        }

        redirect('/admin/forms');
    }
}
