<?php
class Cart_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function addToCart($data) {
        return $this->db->insert('carttemp', $data);
    }
    
    public function updateAmount($kodeProduk, $data) {
        $this->db->where('kodeProduk', $kodeProduk);
        return $this->db->update('dataproduk', $data); 
    }
    public function find($id){
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('ID', $id)
                          ->limit(1)
                          ->get('dataproduk');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
}
?>