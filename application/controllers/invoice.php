<?php
class Invoice extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ) {
            $this->session->set_flashdata('error', 'Maaf, Anda belum login!');
            redirect('page');
        }
        $this->load->model('order_model');
        $this->load->model('produk_model');
    }
    
    public function index() {
        $idCustomer = $this->session->userdata('email');
        $isProcessed = $this->order_model->process($idCustomer);
        if($isProcessed) {
            $this->cart->destroy();
            redirect('page/alamat');
        } else {
            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
        }
    }
    
    public function addOrder() {
        $idCustomer = $this->session->userdata('email');
        $namaCustomer = $this->input->post('customerName');
        $telpCustomer = $this->input->post('customerPhone');
        $alamatCustomer = $this->input->post('customerAddress');
        $kotaKirim = $this->input->post('customerCity');
        $shipping = $this->input->post('shippingMethod');
        $dataupdate = array(
            'customerName' => $namaCustomer,
            'customerPhone' => $telpCustomer,
            'customerAddress' => $alamatCustomer,
            'customerCity' => $kotaKirim,
            'shippingMethod' => $shipping
        );
        foreach($this->cart->contents() as $d) {
            $stok = $this->produk_model->getProduk_id($d['name'])['jumlah'];
            if ($d['qty'] < $stok || $d['qty'] == $stok) {
                $updatecheck = $this->updateBarang($d['name'], $d['qty']);    
            }
            else $updatecheck = false;
        }
        if ($updatecheck) {
            $isProcessed = $this->order_model->process($idCustomer, $dataupdate, $kotaKirim, $shipping);    
        }
        else $isProcessed = false;
        if($isProcessed && $updatecheck) {
            $this->cart->destroy();
            redirect('page/alamat');
        } else {
            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
            redirect('page/orderwrong');
        }
    }
    
    public function updateBarang($kodeProduk, $qty) {
        $stokbarang = $this->produk_model->getProduk_id($kodeProduk)['jumlah'];
        $stokbaru = array('jumlah' => $stokbarang - $qty);
        $this->produk_model->update_barang($kodeProduk, $stokbaru);
        return true;
    }
}
?>