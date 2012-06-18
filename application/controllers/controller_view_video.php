<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_view_video extends CI_Controller {

     
    public function view($page='view_video') {
        		
	if ( ! file_exists('application/views/pages/mainPages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
          $this->load->model('database_model');
        
        $id_video = $_GET['id'];
        
        $data['user_information'] = $this->database_model->get_allinformation_user();
        $data['get_video'] = $this->database_model->get_video($data['user_information']['id'],$id_video);
        
        
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
        
        
        
	$this->load->view('templates/header_videos', $data);
	$this->load->view('pages/mainPages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }

}