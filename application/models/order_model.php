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
    
    public function process($userID, $dataupdate, $kota, $paket) {
        $bayar = $this->cart->total();
        $order = array(
            'emailUser' => $userID,
            'date' => date('Y-m-d H:i:s'),
            'orderStatus' => 'unpaid'
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

}
?>