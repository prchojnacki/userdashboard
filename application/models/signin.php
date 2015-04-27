<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Model {

    public function register($post){

    return $this->db->query("INSERT INTO users (email, first_name, last_name, password) VALUES (?,?,?,?)", $posts);

    }
    public function signin() {

    }
}