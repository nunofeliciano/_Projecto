<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    
    public function index() {
        $this->load->model('database_model');

        $data['user_information'] = $this->database_model->get_allinformation_user();
        
        $data['all_user'] = $this->database_model->get_alluser($data['user_information']['id']);
        $data['count_user'] = $this->database_model->count_users($data['user_information']['id']);
        $data['count_user_friends'] = $this->database_model->count_users_friends($data['user_information']['id']);
        
        $data['friends'] = $this->database_model->get_user_friend($data['user_information']['id']);
        
       
        
//        echo $data['friends'][0]['name'];
        
        $this->load->view('templates/header');
        $this->load->view('welcome_message',$data);
        $this->load->view('templates/footer');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */