<?php

class DashboardController extends BaseController
{
    public function index()
    {
        // Handle the dashboard index view
        $this->registry->template->show('admin/dashboard/index.view.php');
    }

    public function dashboard()
    {
        // Handle the dashboard view
        $this->registry->template->show('admin/dashboard/dashboard.view.php');
    }

    public function analytics()
    {
        // Handle the analytics overview view
        $this->registry->template->show('admin/dashboard/analytics.view.php');
    }

    public function reports()
    {
        // Handle the reports view
        $this->registry->template->show('admin/dashboard/reports.view.php');
    }

    public function stats()
    {
        // Handle the real-time statistics view
        $this->registry->template->show('admin/dashboard/stats.view.php');
    }
}
