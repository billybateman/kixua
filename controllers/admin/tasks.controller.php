<?php

class tasksController extends BaseController
{
    public function index()
    {
        $this->browse();
    }

    public function browse($limit = 10, $start = 0)
    {
        // ...existing code...
        $this->registry->template->total_rows = $this->registry->tasksModel->total_rows();
        $this->registry->template->data = $this->registry->tasksModel->get_limit_data($limit, $start, $query);
        $this->registry->template->show('admin/tasks/browse.view.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'tasks_name' => $_REQUEST['tasks_name'],
                'tasks_description' => $_REQUEST['tasks_description'],
                'tasks_projects_id' => $_REQUEST['tasks_projects_id'],
                'tasks_users_id' => $_REQUEST['tasks_users_id'],
                'tasks_due_date' => $_REQUEST['tasks_due_date'],
                'tasks_status' => $_REQUEST['tasks_status'],
                'tasks_progress' => $_REQUEST['tasks_progress'],
                'tasks_is_child' => isset($_REQUEST['tasks_is_child']) ? 1 : 0,
                'tasks_parent_tasks_id' => $_REQUEST['tasks_parent_tasks_id']
            ];
            $this->registry->tasksModel->insert($data);
            $this->index();
        } else {
            $this->registry->template->projects = $this->registry->projectsModel->get_all();
            $this->registry->template->tasks = $this->registry->tasksModel->get_all();
            $this->registry->template->show('admin/tasks/create.view.php');
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'tasks_name' => $_REQUEST['tasks_name'],
                'tasks_description' => $_REQUEST['tasks_description'],
                'tasks_projects_id' => $_REQUEST['tasks_projects_id'],
                'tasks_users_id' => $_REQUEST['tasks_users_id'],
                'tasks_due_date' => $_REQUEST['tasks_due_date'],
                'tasks_status' => $_REQUEST['tasks_status'],
                'tasks_progress' => $_REQUEST['tasks_progress'],
                'tasks_is_child' => isset($_REQUEST['tasks_is_child']) ? 1 : 0,
                'tasks_parent_tasks_id' => $_REQUEST['tasks_parent_tasks_id']
            ];
            $this->registry->tasksModel->update($id, $data);
            $this->index();
        } else {
            $data = $this->registry->tasksModel->get_by_id($id);
            if ($data) {
                $this->registry->template->data = $data;
                $this->registry->template->projects = $this->registry->projectsModel->get_all();
                $this->registry->template->tasks = $this->registry->tasksModel->get_all();
                $this->registry->template->show('admin/tasks/update.view.php');
            } else {
                $this->index();
            }
        }
    }

    public function delete($id)
    {
        $data = $this->registry->tasksModel->get_by_id($id);
        if ($data) {
            $this->registry->tasksModel->delete($id);
        }
        $this->index();
    }
}
?>
