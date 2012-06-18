<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_videos extends CI_Controller {

     
    public function view($page='Videos') {
        		
	if ( ! file_exists('application/views/pages/mainPages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
          $this->load->model('database_model');
        
        $data['user_information'] = $this->database_model->get_allinformation_user();
        $data['videos'] = $this->database_model->get_all_user_videos($data['user_information']['id']);
        $data['count_videos'] = $this->database_model->count_users_videos($data['user_information']['id']);
        
        
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/header_videos', $data);
	$this->load->view('pages/mainPages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }

}