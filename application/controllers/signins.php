<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
    }

    public function index()
    {
        $this->load->view('/signins/home');
    }
    public function signinpage() {
        $this->load->view('signins/signin');
    }
    public function registerpage(){
        $this->load->view('signins/register');
    }
    public function registration(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_valdation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|md5');
        $this->form_validation->set_rules('confirm', 'Confirm', 'required|md5|matches[password]');

        if($this->form_validation->run()) {
            // register and login user
            $post = array($email, $first_name, $last_name, $password);
        }

        else {
            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect('/');
        }
    }
    public function signin(){
        $post = $this->input->post();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_valdation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');



    }

}


//end of main controller