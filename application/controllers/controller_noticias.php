<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_noticias extends CI_Controller {

     
    public function view($page='noticias') {
        		
	if ( ! file_exists('application/views/pages/mainPages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	$this->load->model('database_model');
        
        $data['user_information'] = $this->database_model->get_allinformation_user();   
        $data['count_users_news'] = $this->database_model->count_users_news($data['user_information']['id']);   
        $data['news'] = $this->database_model->get_all_news($data['user_information']['id']);
        
	$this->load->view('templates/header_noticias', $data);
	$this->load->view('pages/mainPages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }

}