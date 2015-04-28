<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Model {

    public function register($posts){
    $this->db->query("INSERT INTO users (email, first_name, last_name, password, created_at, user_level) VALUES (?,?,?,?, NOW(), 0)", $posts);
    $query = 'SELECT id FROM users WHERE email = ?';
    $user = $this->db->query($query, $posts[0])->row_array();
    if($user['id']==1)
    {
    	$query = 'UPDATE users SET user_level = 1 WHERE id=1';
    	$this->db->query($query);
    }
    $id = $this->db->query('SELECT user_level FROM users WHERE id=?',$user['id'])->row_array();
    return array($id['user_level'], $user['id']);

    }
    public function check_signin ($email, $password) {
    	$user = $this->db->query("SELECT password, user_level, id FROM users WHERE email = ?", $email)->row_array();
    	if (!empty($user) && $user['password']==$password)
    	{
    		return array($user['user_level'], $user['id']);
    	}
    	else
    	{
    		return "Incorrect email/password combination";
    	}
    }

    public function load_all_users (){
        return $this->db->query("SELECT id, email, first_name, last_name, created_at, user_level FROM users")->result_array();
    }

    public function remove_user($id) {
        return $this->db->query("DELETE FROM users WHERE id = ?", $id);
    }

    public function get_user_by_id($id) {
    	return $this->db->query("SELECT email, first_name, last_name, created_at, user_level FROM users WHERE id=?", $id)->row_array();
    }

    public function update_user($posts){
    	if($posts[3]=="Admin"){
    		$level = 1;
    	}
    	else {
    		$level = 0;
    	}
    	return $this->db->query("UPDATE users SET email=?, first_name=?, last_name = ?, user_level = ? WHERE id = ?", 
    		array($posts[0], $posts[1], $posts[2], $level, $posts[3]));
    }
    public function update_user_password($id, $password){
        return $this->db->query("UPDATE users SET password = ? WHERE id = ?", array($password, $id));
    }

    public function update_profile($post){

        return $this->db->query("UPDATE users SET email = ?, first_name = ?, last_name = ?, description = ? WHERE id = ?", 
            array($post[0], $post[1], $post[2], $post[3], $this->session->userdata('userid')));
    }

    public function update_password($password){
        return $this->db->query("UPDATE users SET password = ? WHERE id = ?", 
            array($password, $this->session->userdata('userid')));
    }



}