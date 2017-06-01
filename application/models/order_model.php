<?php
class Order_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function hitungOngkir($kota, $paket) {
        $this->db->select('ongkir'); 
        $this->db->where('kota', $kota);
        $this->db->where('jenisPaket', $paket);
        $res = $this->db->get('ongkir');
        return $res->row_array();
    }
    
    public function process($userID, $idSession, $dataupdate, $kota, $paket) {
        $bayar = $this->cart->total();
        $order = array(
            'emailUser' => $userID,
            'date' => date('Y-m-d H:i:s'),
            'orderStatus' => 'unpaid',
            'sess' => $idSession
        );
        $this->db->insert('order', $order);
        $order_id = $this->db->insert_id();
        $invoice = 'NB-00'.$order_id;
        $biayaongkir = $this->hitungOngkir($kota, $paket)['ongkir'];
        $amountUpdate = $bayar + $biayaongkir;
        $biayaOngkir1 = array('shippingValue'=>$biayaongkir, 'invoiceNumber'=>$invoice, 'amount'=>$amountUpdate);
        $this->db->where('ID', $order_id);
        $this->db->update('order', $biayaOngkir1);
        $this->db->where('ID', $order_id);
        $this->db->update('order', $dataupdate);
        
        $totalTrans = $this->getAmount($userID)['totalTransaksi'];
        $totalTrans1 = $totalTrans + $amountUpdate;
        $this->db->where('email', $userID);
        $this->db->update('datacustomer', array('totalTransaksi'=>$totalTrans1));
        foreach($this->cart->contents() as $item) {
            $data = array(
                'orderId' => $order_id,
                'kodeProduk' => $item['name'],
                'hargaJual' => $item['price'],
                'jumlah' => $item['qty']
            );
            $this->db->insert('orderdetail', $data);
        }
        return TRUE;
    }
    
    public function getOrder() {
        $res = $this->db->get('order');
        return $res->result_array();
    }
	
	public function getOrder_session($kodeProduk) {
        $this->db->where('sess', $kodeProduk);
        $res = $this->db->get('order');
        return $res->row_array();
    }
    
    public function getOrder_id($kodeProduk) {
        $this->db->where('kodeProduk', $kodeProduk);
        $res = $this->db->get('dataproduk');
        return $res->row_array();
    }
    
    public function getKotaOngkir() {
        $this->db->distinct();
        $this->db->select('kota');
        $res = $this->db->get('ongkir');
        return $res->result_array();
    }
    
    public function getMetodeOngkir() {
        $this->db->distinct();
        $this->db->select('jenisPaket');
        $res = $this->db->get('ongkir');
        return $res->result_array();
    }
	
	public function getAmount($email) {
        $this->db->where('email', $email);
        $res = $this->db->get('datacustomer');
        return $res->row_array();
    }
    
    public function update_barang($id, $data){
        $this->db->where('ID', $id);
        return $this->db->update('order', $data); //insert ke database 'barang' data yg ada di dalam $data
    }

}
?>