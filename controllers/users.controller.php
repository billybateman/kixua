<?php

class UsersController extends BaseController
{      
    public function index()
    {
        redirect('/profile');
    }

    
    public function update() {
        
        if($this->registry->session->get('user')){
            
            $user = $this->registry->session->get('user');

            $row = $this->registry->usersmodel->get_user($user['users_id']);
            if ($row) {
                $this->registry->template->data =  $row;
                $this->registry->template->show('header.view.php');
                $this->registry->template->show('users/users_update_form.view.php');
                $this->registry->template->show('footer.view.php'); 
            } else {
                //$this->session->set_flashdata('message', 'Record Not Found');
                redirect('/admin/users');
            }

        } else {

            redirect('/login');
        }
    }
    
    public function update_action(){
        
        if($this->registry->session->get('user')){
            
            $user = $this->registry->session->get('user');
            
            $images_id = $user['images_id'];

            if(isset($_FILES['fileToUpload'])){
                
                $dirpath = CDN_FOLDER . "/users"."/";

                $uploader   =   new Uploader();
            
                $uploader->setExtensions(array('jpg','jpeg','png','gif', 'png'));  //allowed extensions list//
            
                $uploader->setMaxSize(10);                          //set max file size to be allowed in MB//
            
                $uploader->setDir($dirpath);
            
                $suc_file = '';  // Initialize $suc_file
                $images_id = null;  // Initialize $images_id

                if($uploader->uploadFile('fileToUpload')){
                    $suc_file  =   $uploader->getUploadName(); //get uploaded file name, renames on upload//

                    $data = array(
                    'images_users_id' => $user['users_id'],
                    'images_file' => CDN_URL ."/users"."/" . $suc_file
                    );
            
                    if($this->registry->images_model->create($data)){
                        $image = $this->registry->images_model->get_by_file(CDN_URL ."/users"."/" . $suc_file);
                        $images_id = $image->images_id;
                        //echo $images_id. " image saved";
                    }

                   
                    
                } else {                    //upload failed
                    //echo $uploader->getMessage(); //get upload error message
                }

            
            }

            if(!empty($_REQUEST['users_password']) || !empty($_REQUEST['users_password_confirm'])){
                if($_REQUEST['users_password'] == $_REQUEST['users_password_confirm']){
                    $password = md5($_REQUEST['users_password']);
                    $data = array('users_password' => $password);
                    $this->registry->usersmodel->update($user['users_id'], $data);
                } else {
                    $password = $user['users_password'];
                }
                
            } else {
                $password = $user['users_password'];
            }

            $data = array(
            'users_images_id' => $images_id,
            'users_first_name' => $_REQUEST['users_first_name'],
            'users_last_name' => $_REQUEST['users_last_name'],
            'users_email' => $_REQUEST['users_email'],
            'users_phone' => $_REQUEST['users_phone'],
            'users_address' => $_REQUEST['users_address'],
            'users_city' => $_REQUEST['users_city'],
            'users_state' => $_REQUEST['users_state'],
            'users_zip' => $_REQUEST['users_zip']
            );

            $this->registry->usersmodel->update($user['users_id'], $data);
            //$this->session->set_flashdata('message', 'Update Record Success');
            redirect('/profile');
        } else {

            redirect('/login');
        }
        
    }


}