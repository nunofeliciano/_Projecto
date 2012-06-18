<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_added_video extends CI_Controller {

    public function view($page = 'videos') {

        if (!file_exists('application/views/pages/mainPages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->model('database_model');

        $data['user_information'] = $this->database_model->get_allinformation_user();
        
        $name = $_GET['name'];

        $size = strlen($data['user_information']['name'])+20;
        $rest = substr($name, $size);
        $rest2 = substr($rest,0,-4);

        $value = "application/views/pages/mainPages/videofiles/" . $data['user_information']['id'] . "/mp4/".$name;
       
        $this->database_model->add_video($value,$rest2,$data['user_information']['id']);
        
        $data['videos'] = $this->database_model->get_all_user_videos($data['user_information']['id']);
        $data['count_videos'] = $this->database_model->count_users_videos($data['user_information']['id']);
        
        
	$this->load->view('templates/header_videos', $data);
	$this->load->view('pages/mainPages/'.$page, $data);
	$this->load->view('templates/footer', $data);
    }

}
