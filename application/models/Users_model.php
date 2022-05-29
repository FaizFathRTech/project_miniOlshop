<?php 

class Users_model extends CI_Model{

    public function countUser()
    {
        return $this->db->count_all('users');
    }

    public function getAllUsersData()
    {
        return $this->db->get('users')->result_array();
    }

    public function getUserByID($id)
    {
        return $this->db->get_where('users', array('UserID' => $id))->result_arry();
    }
}