<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
$systemDate = "login_date";
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

    public function addCust($reg){
        $this->db->insert('customers', $reg);
        return true;
      //  return $this->db->insert_id();
    }

    public function itemMaster($items){
        $inward = $this->db->insert('inventory', $items);
    }

    //Country state city
    function fetch_country(){
    $this->db->order_by("name", "ASC");
    $query = $this->db->get("countries");
    return $query->result();
    }

    function fetch_state($country_id){
    $this->db->where('country_id', $country_id);
    $this->db->order_by('name', 'ASC');
    $query = $this->db->get('states');
    $output = '<option value="">Select State</option>';
    foreach($query->result() as $row)
    {
    $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    }
    return $output;
    }

    function fetch_city($state_id)
    {
    $this->db->where('state_id', $state_id);
    $this->db->order_by('name', 'ASC');
    $query = $this->db->get('cities');
    $output = '<option value="">Select City</option>';
    foreach($query->result() as $row)
    {
    $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    }
    return $output;
    }

    //View all Details
    function allDetails($data, $tableName, $where){
        $getDetails = $this->db->select($data)
                          ->from($tableName)
                          ->where($where)
                          ->get();
        return $getDetails->result();
    }

    public function insertAll($tableName, $data){
        $insert = $this->db->insert($tableName, $data);
        return $this->db->insert_id();
    }
}
?>