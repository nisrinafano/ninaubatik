<?php 
class Produk_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function getProduk() {
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
	
	public function getProdukKain() {
        $this->db->where('jenis', 'Kain');
        $this->db->limit(4);
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKemeja() {
        $this->db->where('jenis', 'Kemeja');
        $this->db->limit(4);
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukMukenaHome() {
        $this->db->where('jenis', 'Mukena');
        $this->db->limit(4);
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKainA() {
        $this->db->where('kategori', 'Kain A');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKainB() {
        $this->db->where('kategori', 'Kain B');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKainC() {
        $this->db->where('kategori', 'Kain C');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKemejaA() {
        $this->db->where('kategori', 'Kemeja A');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProdukKemejaB() {
        $this->db->where('kategori', 'Kemeja B');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
	
	public function getProdukMukena() {
        $this->db->where('kategori', 'Mukena');
        $res = $this->db->get('dataproduk');
        return $res->result_array();
    }
    
    public function getProduk_id($kodeProduk) {
        $this->db->where('kodeProduk', $kodeProduk);
        $res = $this->db->get('dataproduk');
        return $res->row_array();
    }
    
    public function set_barang($data){
    /*$data =array(
      'kode_barang' => $this->input->post('kode_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'satuan' => $this->input->post('satuan'),
      'jumlah' => $this->input->post('jumlah'),
      'harga' => $this->input->post('harga'),
      'kategori' => $this->input->post('kategori')
    );*/
        return $this->db->insert('dataproduk', $data); //insert ke database 'barang' data yg ada di dalam $data
    }
    
    public function update_barang($kodeProduk, $data){
    /*$data =array(
      'kode_barang' => $this->input->post('kode_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'satuan' => $this->input->post('satuan'),
      'jumlah' => $this->input->post('jumlah'),
      'harga' => $this->input->post('harga'),
      'kategori' => $this->input->post('kategori')
    );*/
        $this->db->where('kodeProduk', $kodeProduk);
        return $this->db->update('dataproduk', $data); //insert ke database 'barang' data yg ada di dalam $data
    }
    
    public function delete_barang($kodeProduk){
        $this->db->where('kodeProduk', $kodeProduk);
        return $this->db->delete('dataproduk');
    }
    
}

?>