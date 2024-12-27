<?php

class IndexController extends BaseController
{
   /**
     * Display the index page for the admin.
     *
     * @return void
     */
    public function index(): void {
        if($this->registry->session->get('user')){
            
            $user = $this->registry->session->get('user');
            $this->registry->template->user = $user;

            $this->registry->template->notifications = $this->registry->notifications_model->get_limit_data($user['users_id'], 10, 0, '');
            $this->registry->template->new_notifications = $this->registry->notifications_model->get_new($user['users_id']);
            $this->registry->template->users_online = $this->registry->users_online_model->get_all($user['users_id']);
                

            $this->registry->template->show('admin/header.view.php');
            $this->registry->template->show('admin/index.view.php');
            $this->registry->template->show('admin/footer.view.php');
        } else {
            redirect('/login');
        }
    }

   
}
