<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller_add_amigos extends CI_Controller {

    public function view($page = 'add_amigos') {

        if (!file_exists('application/views/pages/mainPages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->model('database_model');
        
        
        $data['user_information'] = $this->database_model->get_allinformation_user();
        $data['not_friends'] = $this->database_model->get_user_not_friend($data['user_information']['id']);
        $data['count_users_not_friends'] = $this->database_model->count_users_not_friends($data['user_information']['id']);

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/mainPages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

}
