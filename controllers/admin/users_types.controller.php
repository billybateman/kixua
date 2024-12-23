<?php

class users_typesController extends BaseController
{
    public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->users_types_model->total_rows();
        $this->registry->template->users_types_data = $this->registry->users_types_model->get_limit_data(10, $start, $query);

        $this->registry->template->show('admin/users_types/users_types_browse.view.php');
    }

    public function create()
    {
        $this->registry->template->show('admin/users_types/users_types_form.view.php');
    }

    public function createAction()
    {
        $data = [
            'users_types_name' => $_REQUEST['users_types_name'],
            'users_types_value' => $_REQUEST['users_types_value']
        ];

        $this->registry->users_types_model->insert($data);
        redirect('/admin/users_types');
    }

    public function update($id)
    {
        $userType = $this->registry->users_types_model->get_by_id($id);

        if ($userType) {
            $this->registry->template->data = $userType;
            $this->registry->template->show('admin/users_types/users_types_update_form.view.php');
        } else {
            redirect('/admin/users_types');
        }
    }

    public function updateAction()
    {
        $data = [
            'users_types_name' => $_REQUEST['users_types_name'],
            'users_types_value' => $_REQUEST['users_types_value']
        ];

        $this->registry->users_types_model->update($_REQUEST['users_types_id'], $data);
        redirect('/admin/users_types');
    }

    public function delete($id)
    {
        $userType = $this->registry->users_types_model->get_by_id($id);

        if ($userType) {
            $this->registry->users_types_model->delete($id);
        }

        redirect('/admin/users_types');
    }
}
