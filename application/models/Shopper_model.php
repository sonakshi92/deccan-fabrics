<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Shopper_model extends CI_Model {
 
    public function login($name, $pass)
	{
        $this->db->where('username', $name);
        $this->db->where('password', md5($pass));
        $query = $this->db->get('authentication');

        if($query->num_rows() == 1){
            return $query->row();
        }
        return false;
	}
}
?>