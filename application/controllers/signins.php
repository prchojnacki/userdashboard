<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
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
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|md5');
        $this->form_validation->set_rules('confirm', 'Confirm', 'required|matches[password]');
     
        if($this->form_validation->run()) {
            // register and login user
            $posts = array(set_value('email'), set_value('first_name'), set_value('last_name'), set_value('password'));
            
            $id = $this->Signin->register($posts);

            if($id)
            {
                redirect('/admindashboard/index');
            }
            else
            {
                redirect('/normaldashboard/index');
            }
        }
        else {

            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect('/signins/registerpage');
        }
    }
    public function signin(){
        $post = $this->input->post();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        $this->form_validation->run();
        
        $check = $this->Signin->check_signin(set_value('email'), set_value('password'));


        if (count($check)==1)
        {
            if ($check)
            {
                $this->session->set_userdata('admin','admin');
                redirect('/admindashboard/index');
            }
            else
            {
                $this->session->set_userdata('admin','normal');
                redirect('/normaldashboard/index');
            }
        }
        else
        {
            $this->session->set_flashdata('login_error',$check);
            $this->load->view('signins/signin');
        }

    }

}


//end of main controller