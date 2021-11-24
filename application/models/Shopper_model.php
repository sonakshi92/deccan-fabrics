<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Shopper_model extends CI_Model {
    // Login
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
    //home
    public function signup($reg){
        $this->db->insert('authentication', $reg);
      //  return $this->db->insert_id();
    }

    public function getdata($id){
       // $this->db->where('id', $id);
        $profile = $this->db->get_where('authentication', array('id' => $id));
        return $profile->result();
    }

    public function updateAdmin($u_data, $uid){
        //print_r($u_data);exit;
        $this->db->where('id', $uid);
        $q2= $this->db->update('authentication', $u_data);
        //return true;
    }
    public function viewAdmins(){
        $aData = $this->db->get('authentication');
        return $aData->result();
    }

    //stock
    public function addVendor($vendor){
        $ven = $this->db->insert('vendors', $vendor);
    }

    public function itemMaster($items){
        $inward = $this->db->insert('inventory', $items);
    }
}
?>