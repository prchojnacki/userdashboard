<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
    }

    public function index()
    {
        $this->load->view('home');
    }
}


//end of main controller