<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 11/05/18
 * Time: 11:07 AM
 */

class Search_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getUsers()
    {
        $query = "SELECT * from users";

        $result = $this->db->query($query);

        if($result->num_rows() > 0) {
            return $result->result();
        }

        return false;

    }
}