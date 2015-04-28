<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admindashboard extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
    }

    public function index() {
        $userquery = $this->Signin->load_all_users();

        $this->load->view('admindashboard/manage_users', array('userquery' => $userquery));
    }

    public function newuser() {
        $this->load->view('admindashboard/add_user');
    }

    public function create_new_user() {

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
            $this->Signin->register($posts);
            $this->load->view('admindashboard/add_user', array('message' => 'Success!'));
        }
        else {

            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect('/admindashboard/newuser');
        }
    }

    public function remove_user ($id) {
        $this->Signin->remove_user($id);
        redirect('/admindashboard/index');
    }

    public function edit_user($id) {
        $user = $this->Signin->get_user_by_id($id);
        $this->load->view('admindashboard/edit_user',array('user'=>$user,'id'=>$id));
    }

    public function change_user_info() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        if($this->form_validation->run()) {
            $id = $this->input->post('id');
            $posts = array(set_value('email'), set_value('first_name'), set_value('last_name'), $this->input->post('level'), $id); 
            $path = '/admindashboard/edit_user/' . $id;           
            $this->Signin->update_user($posts);
            redirect($path);
        }
        else {
            $id = $this->input->post('id');
            $path = '/admindashboard/edit_user/' . $id; 
            $this->session->set_flashdata('registration_errors', validation_errors());
            redirect($path);
        }

    }
}