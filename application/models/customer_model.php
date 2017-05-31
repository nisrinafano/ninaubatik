<?php 
class Customer_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function getCustomer() {
        $res = $this->db->get('datacustomer');
        return $res->result_array();
    }
    
    public function getCustomer_id($idCustomer) {
        $this->db->where('idCustomer', $idCustomer);
        $res = $this->db->get('datacustomer');
        return $res->row_array();
    }
    
    public function getCustomer_email($email) {
        $this->db->where('email', $email);
        $res = $this->db->get('datacustomer');
        return $res->row_array();
    }
    
    public function login_authen($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from('admin');
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        }
        else{
            return false;
        }    
    }
    
    function authen_user($username) {
        $this->db->select('auth');
        $this->db->where('username', $username);
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    public function wrong_password($username, $value){
        $this->db->set('auth', $value);
        $this->db->where("username", $username);
        $this->db->update('admin');
    }
}

?>