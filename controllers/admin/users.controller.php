<?php

class UsersController extends BaseController
{
    public function index()
    {
        $query = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
        $start = isset($_REQUEST['start']) ? intval($_REQUEST['start']) : 0;

        $this->registry->template->url = "/admin/users/" . ($query ? "?q=" . urlencode($query) : "");
        $this->registry->template->first_url = "/admin/users/" . ($query ? "?q=" . urlencode($query) : "");
        $this->registry->template->q = $query;
        $this->registry->template->start = $start;
        $this->registry->template->per_page = 10;
        $this->registry->template->page_query_string = true;
        $this->registry->template->total_rows = $this->registry->usersmodel->total_rows();
        $this->registry->template->users_data = $this->registry->usersmodel->get_limit_data(10, $start, $query);
        $this->registry->template->show('admin/users/users_browse.view.php');
    }

    public function view($id)
    {
        $user = $this->registry->usersmodel->get_user($id);

        if ($user) {
            $this->registry->template->data = [
                'users_id' => $user->users_id,
                'users_name' => $user->users_name,
                'users_password' => $user->users_password,
                'users_email' => $user->users_email,
                'users_type' => $user->users_type
            ];
            $this->registry->template->show('admin/users/users_view.view.php');
        } else {
            redirect('/admin/users');
        }
    }

    private function checkUserSession()
    {
        if (!$this->registry->session->get('user')) {
            redirect('/login');
        }
    }

    private function checkAdminPrivileges($user)
    {
        if ($user['users_types_id'] != 1) {
            redirect('/admin/users');
        }
    }

    public function create()
    {
        $this->checkUserSession();
        $user = $this->registry->session->get('user');
        $this->checkAdminPrivileges($user);

        $this->registry->template->users_types = $this->registry->users_types_model->get_all();
        $this->registry->template->show('admin/users/users_form.view.php');
    }

    public function createAction()
    {
        $user = $this->registry->session->get('user');
        $imagesId = $this->handleFileUpload($user['users_id']);

        $data = [
            'users_images_id' => $imagesId,
            'users_first_name' => $_REQUEST['users_first_name'],
            'users_last_name' => $_REQUEST['users_last_name'],
            'users_email' => $_REQUEST['users_email'],
            'users_phone' => $_REQUEST['users_phone'],
            'users_address' => $_REQUEST['users_address'],
            'users_city' => $_REQUEST['users_city'],
            'users_state' => $_REQUEST['users_state'],
            'users_zip' => $_REQUEST['users_zip'],
            'users_password' => $_REQUEST['users_password'],
            'users_types_id' => $_REQUEST['users_types_id']
        ];

        $this->registry->usersmodel->create($data);
        redirect('/admin/users');
    }

    private function handleFileUpload($userId)
    {
        $imagesId = 0;

        if (isset($_FILES['fileToUpload'])) {
            $dirPath = CDN_FOLDER . "/users/";
            $uploader = new Uploader();

            $uploader->setExtensions(['jpg', 'jpeg', 'png', 'gif']);
            $uploader->setMaxSize(10);
            $uploader->setDir($dirPath);

            if ($uploader->uploadFile('fileToUpload')) {
                $uploadedFile = $uploader->getUploadName();
                $data = [
                    'images_users_id' => $userId,
                    'images_file' => CDN_URL . "/users/" . $uploadedFile
                ];

                if ($this->registry->images_model->create($data)) {
                    $image = $this->registry->images_model->get_by_file(CDN_URL . "/users/" . $uploadedFile);
                    $imagesId = $image->images_id;
                }
            }
        }

        return $imagesId;
    }

    public function profile()
    {
        if ($this->registry->session->get('user')) {
            $user = $this->registry->session->get('user');
            $userData = $this->registry->usersmodel->get_user($user['users_id']);

            if ($userData) {
                $this->registry->template->data = $userData;
                $this->registry->template->users_types = $this->registry->users_types_model->get_all();
                $this->registry->template->show('admin/users/users_update_form.view.php');
            } else {
                redirect('/admin/users');
            }
        } else {
            redirect('/login');
        }
    }

    public function update($id)
    {
        if ($this->registry->session->get('user')) {
            $user = $this->registry->session->get('user');
            $userData = $id ? $this->registry->usersmodel->get_user($id) : $this->registry->usersmodel->get_user($user['users_id']);

            if ($userData) {
                $this->registry->template->data = $userData;
                $this->registry->template->users_types = $this->registry->users_types_model->get_all();
                $this->registry->template->show('admin/users/users_update_form.view.php');
            } else {
                redirect('/admin/users');
            }
        } else {
            redirect('/login');
        }
    }

    public function updateAction()
    {
        if ($this->registry->session->get('user')) {
            $user = $this->registry->session->get('user');
            $userId = $_REQUEST['users_id'];
            $imagesId = $this->handleFileUpload($userId);

            if (!empty($_REQUEST['users_password']) && $_REQUEST['users_password'] === $_REQUEST['users_password_confirm']) {
                $password = md5($_REQUEST['users_password']);
                $this->registry->usersmodel->update($userId, ['users_password' => $password]);
            }

            if (!empty($_REQUEST['users_types_id'])) {
                $data = [
                    'users_images_id' => $imagesId,
                    'users_first_name' => $_REQUEST['users_first_name'],
                    'users_last_name' => $_REQUEST['users_last_name'],
                    'users_email' => $_REQUEST['users_email'],
                    'users_phone' => $_REQUEST['users_phone'],
                    'users_address' => $_REQUEST['users_address'],
                    'users_city' => $_REQUEST['users_city'],
                    'users_state' => $_REQUEST['users_state'],
                    'users_zip' => $_REQUEST['users_zip']
                ];

                $this->registry->usersmodel->update($userId, $data);
            }

            redirect('/admin/users');
        } else {
            redirect('/login');
        }
    }

    public function delete($id)
    {
        $user = $this->registry->usersmodel->get_user($id);

        if ($user) {
            $this->registry->usersmodel->delete($id);
            redirect('/admin/users');
        } else {
            redirect('/admin/users');
        }
    }

    public function block($id, $status)
    {
        if ($this->registry->session->get('user')) {
            $this->registry->usersmodel->update($id, ['users_blocked' => $status]);
        } else {
            redirect('/login');
        }
    }

    public function subscribe($id, $status)
    {
        if ($this->registry->session->get('user')) {
            $this->registry->usersmodel->update($id, ['users_subscriber' => $status]);
        } else {
            redirect('/login');
        }
    }
}
