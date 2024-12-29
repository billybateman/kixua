<?php

class projectsController extends BaseController
{
    public function index()
    {
        $this->browse();
    }

    public function browse($limit = 10, $start = 0)
    {
        // ...existing code...
        $this->registry->template->total_rows = $this->registry->projects_model->total_rows();
        $this->registry->template->data = $this->registry->projects_model->get_limit_data($limit, $start);
        $this->registry->template->show('admin/projects/browse.view.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'projects_name' => $_REQUEST['projects_name'],
                'projects_details' => $_REQUEST['projects_details'],
                'projects_status' => $_REQUEST['projects_status'],
                'projects_due_date' => $_REQUEST['projects_due_date'],
                'projects_managers_users_id' => $_REQUEST['projects_managers_users_id'],
                'projects_progress_percent' => $_REQUEST['projects_progress_percent'],
                'projects_priority' => $_REQUEST['projects_priority']
            ];
            $this->registry->projects_model->create($data);
            $this->index();
        } else {
            $this->registry->template->show('admin/projects/create.view.php');
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'projects_name' => $_REQUEST['projects_name'],
                'projects_details' => $_REQUEST['projects_details'],
                'projects_status' => $_REQUEST['projects_status'],
                'projects_due_date' => $_REQUEST['projects_due_date'],
                'projects_managers_users_id' => $_REQUEST['projects_managers_users_id'],
                'projects_progress_percent' => $_REQUEST['projects_progress_percent'],
                'projects_priority' => $_REQUEST['projects_priority']
            ];
            $this->registry->projects_model->update($id, $data);
            $this->index();
        } else {
            $data = $this->registry->projects_model->get_by_id($id);
            if ($data) {
                $this->registry->template->data = $data;
                $this->registry->template->show('admin/projects/update.view.php');
            } else {
                $this->index();
            }
        }
    }

    public function delete($id)
    {
        $data = $this->registry->projects_model->get_by_id($id);
        if ($data) {
            $this->registry->projects_model->delete($id);
        }
        $this->index();
    }
}
?>
