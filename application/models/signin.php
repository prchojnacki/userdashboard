<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Model {

    public function register($posts){
    $this->db->query("INSERT INTO users (email, first_name, last_name, password, user_level) VALUES (?,?,?,?, 0)", $posts);
    $query = 'SELECT id FROM users WHERE email = ?';
    $user = $this->db->query($query, $posts[0])->row_array();
    if($user['id']==1)
    {
    	$query = 'UPDATE users SET user_level = 1 WHERE id=1';
    	$this->db->query($query);
    }
    $id = $this->db->query('SELECT user_level FROM users WHERE id=?',$user['id'])->row_array();
    return $id['user_level'];

    }
    public function check_signin($email, $password) {
    	$user = $this->db->query("SELECT password, user_level FROM users WHERE email = ?", $email)->row_array();
    	if (!empty($user) && $user['password']==$password)
    	{
    		return $user['user_level'];
    	}
    	else
    	{
    		return "Incorrect email/password combination";
    	}
    }
}