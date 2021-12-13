<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
$systemDate = "login_date";
class Shopper_model extends CI_Model {
    //View all Details
    function getAllDetails($data, $tableName, $where){
        $getDetails = $this->db->select($data)
                          ->from($tableName)
                          ->where($where)
                          ->get();
        return $getDetails->result();
    }
    public function insert_id($tableName, $data){
        $this->db->insert($tableName, $data);
        return $this->db->insert_id();
    }

    public function insertAll($tableName, $data){
        $this->db->insert($tableName, $data);
        return true;
    }

    public function insertBatch($tableName, $data = array()){
        $this->db->insert_batch($tableName, $data);
         $insert_id = $this->db->insert_id();return true;
    }

    /*****
     *  Login Controller
     * */
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
    /*****
     *  Account Controller
     * */


     /*****
     *  Bill Controller
     * */

     /*****
     *  Customer Controller
     * */
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

     /*****
     *  Employee Controller
     * */


    /*****
     * HOME Controller
     * */
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
    /*****
     *  Profile Controller
     * */

     /*****
     *  Sales Controller
     * */

     
    /*****
     * Stock Controller
     */
    public function addVendor($vendor){
        $ven = $this->db->insert('vendors', $vendor);
    }

    public function itemMaster($items){
        $items = $this->db->insert('inventory', $items);
    }


    public function fetch($tableName, $orderName){
        $this->db->order_by($orderName, "ASC");
        $query = $this->db->get($tableName);
        return $query->result();
        }
    
    public function fetchByID($id, $tableName, $where){
        $this->db->where($where, $id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get($tableName);
        $output = '<option value="">Select Category</option>';
        foreach($query->result() as $row)
        {
        $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        return $output;
        }

}
?>