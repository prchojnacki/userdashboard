<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Walls extends CI_Controller {    

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Wall');
    }

    public function new_message() {
    	$this->Wall->new_message($this->input->post());
    	$path = '/normaldashboard/view_wall/' . $this->input->post('recipient_id');
    	redirect($path);
    }

    public function new_comment() {
    	$this->Wall->new_comment($this->input->post());
    	$path = '/normaldashboard/view_wall/' . $this->input->post('recipient_id');
    	redirect($path);
    }
}