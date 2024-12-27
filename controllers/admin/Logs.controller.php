<?php

class LogsController extends BaseController
{
    public function index()
    {
    }

    public function users()
    {
        $this->registry->template->show('admin/users/logs.view.php');
    }

    public function developer()
    {
        $this->registry->template->show('admin/developer/logs.view.php');
    }

    public function errors()
    {
        $this->registry->template->show('admin/system/logs.view.php');
    }
}
