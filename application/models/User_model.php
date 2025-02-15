<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function get_user_by_username($username)
    {
        $query = $this->db->get_where('users', ['username' => $username]);
        return $query->row_array();  // Return user data or NULL if not found
    }
}
