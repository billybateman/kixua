<?php

class ProfileController extends BaseController
{
    public function index()
    {
        //$this->registry->template->data = $this->registry->profileModel->get_limit_data(10, $start, $query);

        $this->registry->template->show('admin/profile/update.view.php');
    }


    public function updateAction()
    {
        $data = [
            'bio' => $_REQUEST['bio'],
            'website' => $_REQUEST['website'],
            'twitter_handle' => $_REQUEST['twitter_handle']
        ];

        $this->registry->profileModel->update($_REQUEST['profile_id'], $data);
        $this->index();
    }
}
?>
