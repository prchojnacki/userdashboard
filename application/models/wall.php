<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall extends CI_Model {

	public function new_message($post) {
		$query = 'INSERT INTO messages (message, created_at, updated_at, user_id, recipient_id) VALUES (?, NOW(), NOW(), ?, ?)';
		$values = array($post['message'], $this->session->userdata('userid'), $post['recipient_id']);
		return $this->db->query($query, $values);
	}

	public function get_messages($profile_id) {
		$query = 'SELECT messages.*, users.first_name, users.last_name FROM messages JOIN users ON users.id = messages.user_id WHERE recipient_id = ?';
		return $this->db->query($query, $profile_id)->result_array();
	}

	public function new_comment($post) {
		$query = 'INSERT INTO comments(comment, created_at, updated_at, message_id, user_id, recipient_id) VALUES (?, NOW(), NOW(), ?, ?, ?)';
		$values = array($post['comment'], $post['message_id'], $this->session->userdata('userid'), $post['recipient_id']);
		return $this->db->query($query, $values);
	}

	public function get_comments($profile_id) {
		$query = 'SELECT comments.*, CONCAT(users.first_name, " ", users.last_name) AS name from comments JOIN users on comments.user_id = users.id WHERE recipient_id = ?';
		return $this->db->query($query, $profile_id)->result_array();
	}
}