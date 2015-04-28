<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Normaldashboard extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
        $this->load->model('Wall');
    }

    public function index() {
        $userquery = $this->Signin->load_all_users();

        $this->load->view('normaldashboard/normaldashboard', array('userquery' => $userquery));
    }

    public function editprofile() {

        $this->load->view('normaldashboard/editprofile');
    }

    public function update_profile(){
        
        // form validation
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');

        $path = '/normaldashboard/editprofile'; 

        if($this->form_validation->run()) {
            $post = array(set_value('email'), set_value('first_name'), set_value('last_name'), $this->input->post('description')); 

            $this->Signin->update_profile($post);
            redirect($path);
        }
        else {
            $id = $this->input->post('id');
            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect($path);
        }
        $this->Signin->update_profile();

        redirect($path);
    }

    public function update_password() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|md5');
        $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');

        $path = '/normaldashboard/editprofile';

        if($this->form_validation->run()){
            $this->Signin->update_password(set_value('password'));
            redirect($path);
        } else {

            redirect($path);
        }
    }
    public function view_wall($profile_id) {
        $user_info = $this->Signin->get_user_by_id($profile_id);
        $messages = $this->Wall->get_messages($profile_id);
        $comments = $this->Wall->get_comments($profile_id);
        $this->load->view('normaldashboard/wall', array('profile_id' => $profile_id, 'user_info'=>$user_info, 'messages'=>$messages, 'comments'=>$comments));
    }

}