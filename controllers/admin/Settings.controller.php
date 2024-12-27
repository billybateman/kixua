<?php

class SettingsController extends BaseController
{
    public function index()
    {
        // Handle the settings index view
        $this->registry->template->show('admin/settings/index.view.php');
    }

    public function general()
    {
        // Handle the general settings view
        $this->registry->template->show('admin/settings/general.view.php');
    }

    public function security()
    {
        // Handle the security settings view
        $this->registry->template->show('admin/settings/security.view.php');
    }

    public function notifications()
    {
        // Handle the notifications settings view
        $this->registry->template->show('admin/settings/notifications.view.php');
    }

    public function profile()
    {
        // Handle the notifications settings view
        $this->registry->template->show('admin/settings/profile.view.php');
    }

    // ...existing code...
}
