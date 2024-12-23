<?php

class AuthenticationController extends BaseController
{
    public function index($invar = 'notset')
    {
        $this->redirectToLogin();
    }

    public function register()
    {
        if ($this->isRegistrationDataProvided()) {
            $created = $this->registry->usersmodel->create_user(
                $_REQUEST['email'],
                $_REQUEST['password'],
                $_REQUEST['name'],
                '3'
            );

            if ($created) {
                $this->registry->session->set('user', $created);
                $this->redirectToHome();
            } else {
                $this->showRegistrationError();
            }
        } elseif ($this->registry->session->get('user')) {
            $this->redirectToHome();
        } else {
            $this->showRegistrationForm();
        }
    }

    public function login()
    {
        if ($this->isLoginDataProvided()) {
            $authenticated = $this->registry->usersmodel->authenticate_user(
                $_REQUEST['email'],
                $_REQUEST['password']
            );

            if ($authenticated) {
                $this->registry->session->set('user', $authenticated);
                $this->redirectToHome();
            } else {
                $this->showLoginError();
            }
        } else {
            $this->showLoginForm();
        }
    }

    public function logout()
    {
        $this->registry->session->destroy();
        $this->redirectToLogin();
    }

    public function forgot()
    {
        if (isset($_REQUEST['email'])) {
            $found = $this->registry->usersmodel->forgot_user($_REQUEST['email']);
            if ($found) {
                $this->showForgotSuccess();
            } else {
                $this->showForgotError();
            }
        } else {
            $this->showForgotForm();
        }
    }

    private function redirectToLogin()
    {
        redirect('/login');
    }

    private function redirectToHome()
    {
        redirect('/');
    }

    private function isRegistrationDataProvided()
    {
        return isset($_REQUEST['email'], $_REQUEST['password'], $_REQUEST['name']);
    }

    private function isLoginDataProvided()
    {
        return isset($_REQUEST['email'], $_REQUEST['password']);
    }

    private function showRegistrationError()
    {
        $this->registry->template->error = true;
        $this->registry->template->show('authentication/register.view.php');
    }

    private function showRegistrationForm()
    {
        $this->registry->template->show('authentication/register.view.php');
    }

    private function showLoginError()
    {
        $this->registry->template->error = true;
        $this->registry->template->show('authentication/login.view.php');
    }

    private function showLoginForm()
    {
        $this->registry->template->error = false;
        $this->registry->template->show('authentication/login.view.php');
    }

    private function showForgotSuccess()
    {
        $this->registry->template->show('authentication/login.view.php');
    }

    private function showForgotError()
    {
        $this->registry->template->show('authentication/forgot.view.php');
    }

    private function showForgotForm()
    {
        $this->registry->template->show('authentication/forgot.view.php');
    }
}
