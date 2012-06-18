<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_agricultura extends CI_Controller {

     
    public function view($page='agricultura') {
        		
	if ( ! file_exists('application/views/pages/mainPages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/header_agricultura', $data);
	$this->load->view('pages/mainPages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }

}
