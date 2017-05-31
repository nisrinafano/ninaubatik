<?php
class Mymodel extends CI_Model {
    function getData($email) {
       $query = $this->db->get_where('datacustomer', array('email' => $email));
        return $query->result_array();
    }
    function addUser($data) {
        $this->db->insert('datacustomer',$data);
        
    }
    function login_authen($email, $password) {
    	$this->db->select('*');
    	$this->db->where('email', $email);
    	$this->db->where('password', $password);
    	$this->db->from('datacustomer');

    	$query = $this->db->get();
    	if($query->num_rows() == 1){
    		return true;
    	} else return false;
    	
    }
    function getIdLogin($email) {
        $this->db->select('idCustomer');
        //$this->db->where('email', $email);
    	//$this->db->from('datacustomer');

    	$query = $this->db->get_where('datacustomer', array('email'=>$email));
    	if($query->num_rows() == 1){
    		return $query->row();
        }
    }
    function update_data($where, $dataedit, $table) {
        $this->db->where($where);
        $this->db->update($table,$dataedit);
    }
    function getProduct() {
        $query= $this->db->get('dataproduk');
        return $query->result_array();
    }
   function find($id) {
    $result= $this->db->get_where('dataproduk', array('ID' => $id));
    if($result->num_rows() > 0) {
        return $result->row();

    } else {
        return array();
    }
   }
}
?>