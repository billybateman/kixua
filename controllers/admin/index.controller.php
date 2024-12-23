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

    /**
     * Register a new user.
     *
     * @return void
     */
    public function register(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'] ?? null;

            if ($email && $password) {
                // Hash the password securely
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Save the user to the database (assuming a saveUser method exists)
                $this->registry->user_model->saveUser($email, $hashedPassword);

                // Redirect to login page after successful registration
                redirect('/login');
            } else {
                // Handle invalid input
                $this->registry->template->error = 'Invalid email or password.';
                $this->registry->template->show('register.view.php');
            }
        } else {
            $this->registry->template->show('register.view.php');
        }
    }

    /**
     * Authenticate and log in a user.
     *
     * @return void
     */
    public function login(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'] ?? null;

            if ($email && $password) {
                $authenticatedUser = $this->registry->usersmodel->authenticate_user($email, $password);
                if ($authenticatedUser) {
                    $this->registry->session->set('user', $authenticatedUser);
                    redirect('/admin');
                } else {
                    $this->registry->template->error = 'Invalid email or password.';
                }
            } else {
                $this->registry->template->error = 'Email and password are required.';
            }
        }

        $this->registry->template->show('authentication/login.view.php');
    }

    

    /**
     * Log out the current user.
     *
     * @return void
     */
    public function logout(): void {
        $this->registry->session->destroy();
        redirect('/login');
    }

    /**
     * Handle forgot password functionality.
     *
     * @return void
     */
    public function forgot(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? null;

            if ($email) {
                $found = $this->registry->usersmodel->forgot_user($email);
                if ($found) {
                    // Send email logic here
                }
                $this->registry->template->forgot = true;
                $this->registry->template->error = 'If the email is registered, you will receive a reset link.';
            } else {
                $this->registry->template->error = 'Email is required.';
            }
        }

        $this->registry->template->show('authentication/forgot.view.php');
    }
}
