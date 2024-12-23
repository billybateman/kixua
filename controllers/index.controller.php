<?php

class indexController extends BaseController
{
	public function index($invar = 'notset'){
	
        $this->registry->template->show('header.view.php');
        $this->registry->template->show('index.view.php');
        $this->registry->template->show('footer.view.php');
        
	}   
        
    public function page($slug = ''){
	
            if($slug != ''){
                $this->registry->template->site = $this->registry->site_content_model->get_by_slug($slug);
                $this->registry->template->show('page.view.php');
            } else {
                $this->index();
            }
	}

}
