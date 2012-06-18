<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_added extends CI_Controller {

    public function view($page = 'added') {

        if (!file_exists('application/views/pages/mainPages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->model('database_model');


        $data['user_information'] = $this->database_model->get_allinformation_user();

        //echo $data['user_information']['id'];

        $index_friend = $_GET['index'];

        //echo $index_friend;
        $this->database_model->add_friend($data['user_information']['id'], $index_friend);
        
        
        $data['user_information'] = $this->database_model->get_allinformation_user();
        
        $data['all_user'] = $this->database_model->get_alluser($data['user_information']['id']);
        $data['count_user'] = $this->database_model->count_users($data['user_information']['id']);
        $data['count_user_friends'] = $this->database_model->count_users_friends($data['user_information']['id']);
        
        $data['friends'] = $this->database_model->get_user_friend($data['user_information']['id']);
        $this->load->view('templates/header');
        $this->load->view('welcome_message',$data);
        $this->load->view('templates/footer');
    }

}
