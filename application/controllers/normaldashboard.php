<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Normaldashbaord extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
    }

    public function index() {
    $userquery = $this->Signin->load_all_users();

    $this->load->view('normaldashboard/normaldashboard', array('userquery' => $userquery));
    }
}