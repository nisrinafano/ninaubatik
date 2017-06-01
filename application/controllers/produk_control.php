<?php 
class Produk_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('produk_model');
        $this->load->model('order_model');
        $this->load->helper('url_helper');
    }
    
    public function index() {
        $dataproduk['dataproduk'] = $this->produk_model->getProduk();
        $this->load->view('admin/loginadmin', $dataproduk);
    }
    
    public function seeproduk() {
        $dataproduk['dataproduk'] = $this->produk_model->getProduk();
        $this->load->view('admin/produk-see', $dataproduk);
    }
    
    /*public function update($kodeProduk){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        if(isset($is_submit) && $is_submit == 1) {
            $fileUpload = array();
            $fileUpload1 = array();
            $isUpload = FALSE;
            $isUpload1 = FALSE;
            $config = array(
                'upload_path' => './uploads/',
                'allowed_types' => 'jpg|jpeg|png',
                'max_size' => 512
            );
            $this->upload->initialize($config);
            if($this->upload->do_upload('userfile')) {
                $fileUpload = $this->upload->data();
                $isUpload = TRUE;
            }
            if($this->upload->do_upload('userfile1')) {
                $fileUpload1 = $this->upload->data();
                $isUpload1 = TRUE;
            }
            if($isUpload && $isUpload1) {
                $data = array(
                    'kodeProduk' => $this->input->post('kodeProduk'),
                    'namaProduk' => $this->input->post('namaProduk'),
                    'tanggalBeli' => $this->input->post('tanggalBeli'),
                    'jumlah' => $this->input->post('jumlah'),
                    'ukuran' => $this->input->post('ukuran'),
                    'berat' => $this->input->post('berat'),
                    'tokoBeli' => $this->input->post('tokoBeli'),
                    'kotaBeli' => $this->input->post('kotaBeli'),
                    'hargaBeli' => $this->input->post('hargaBeli'),
                    'keterangan' => $this->input->post('keterangan'),
                    //'gambar' => $fileUpload['file_name'],
                    //'gambar1' => $fileUpload1['file_name']
                );
                $this->produk_model->update_barang($kodeProduk, $data);
                redirect('admin/produk-update');
            }
        } else {
            $dataproduk['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk);
            $this->load->view('admin/produk-update', $dataproduk);
        }
        $this->form_validation->set_rules('kodeProduk', 'Kode Barang', 'required');
        $this->form_validation->set_rules('namaProduk', 'Nama Barang', 'required');
        $this->form_validation->set_rules('tanggalBeli', 'Tanggal Beli', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('tokoBeli', 'Toko Beli', 'required');
        $this->form_validation->set_rules('kotaBeli', 'Kota Beli', 'required');
        $this->form_validation->set_rules('hargaBeli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        

        if ($this->form_validation->run() === FALSE) {
          $data['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk); //panggil barang_model lalu jalankan function get_barang
          $this->load->view('views/update', $data);
        } else{
          $this->barang_model->set_barang($kodeProduk); //update datanya
          redirect('customer_control');
        }
    }*/
    
    public function update($kodeProduk){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        if(isset($is_submit)) {
            $data = array(
                'kodeProduk' => $this->input->post('kodeProduk'),
                'namaProduk' => $this->input->post('namaProduk'),
                'tanggalBeli' => $this->input->post('tanggalBeli'),
                'jumlah' => $this->input->post('jumlah'),
                'ukuran' => $this->input->post('ukuran'),
                'berat' => $this->input->post('berat'),
                'tokoBeli' => $this->input->post('tokoBeli'),
                'kotaBeli' => $this->input->post('kotaBeli'),
                'hargaBeli' => $this->input->post('hargaBeli'),
                'keterangan' => $this->input->post('keterangan'),
                //'gambar' => $fileUpload['file_name'],
                //'gambar1' => $fileUpload1['file_name']
            );
            $this->produk_model->update_barang($kodeProduk, $data);
            redirect('admin_control/seeproduk');
        }
        else {
            $dataproduk['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk);
            $this->load->view('admin/produk-update', $dataproduk);
        }
        /*$this->form_validation->set_rules('kodeProduk', 'Kode Barang', 'required');
        $this->form_validation->set_rules('namaProduk', 'Nama Barang', 'required');
        $this->form_validation->set_rules('tanggalBeli', 'Tanggal Beli', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('tokoBeli', 'Toko Beli', 'required');
        $this->form_validation->set_rules('kotaBeli', 'Kota Beli', 'required');
        $this->form_validation->set_rules('hargaBeli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        

        if ($this->form_validation->run() === FALSE) {
          $data['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk); //panggil barang_model lalu jalankan function get_barang
          $this->load->view('views/update', $data);
        } else{
          $this->barang_model->set_barang($kodeProduk); //update datanya
          redirect('customer_control');
        }*/
    }
    
    
    /*public function update($kodeProduk) {
        $this->load->helper('form');
        $data = array(
                    'kodeProduk' => $this->input->post('kodeProduk'),
                    'namaProduk' => $this->input->post('namaProduk'),
                    'tanggalBeli' => $this->input->post('tanggalBeli'),
                    'jumlah' => $this->input->post('jumlah'),
                    'ukuran' => $this->input->post('ukuran'),
                    'berat' => $this->input->post('berat'),
                    'tokoBeli' => $this->input->post('tokoBeli'),
                    'kotaBeli' => $this->input->post('kotaBeli'),
                    'hargaBeli' => $this->input->post('hargaBeli'),
                    'keterangan' => $this->input->post('keterangan'));
        $this->produk_model->update_barang($kodeProduk, $data);
        $this->load->view('admin_control/produk-update');
    }*/
    
    public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
    $is_submit = $this->input->post('is_submit');
    if(isset($is_submit) && $is_submit == 1) {
        $fileUpload = array();
        $fileUpload1 = array();
        $isUpload = FALSE;
        $isUpload1 = FALSE;
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size' => 512
        );
        $this->upload->initialize($config);
        if($this->upload->do_upload('userfile')) {
            $fileUpload = $this->upload->data();
            $isUpload = TRUE;
        }
        if($this->upload->do_upload('userfile1')) {
            $fileUpload1 = $this->upload->data();
            $isUpload1 = TRUE;
        }
        if($isUpload && $isUpload1) {
                $data = array(
                    'kodeProduk' => $this->input->post('kodeProduk'),
                    'namaProduk' => $this->input->post('namaProduk'),
                    'tanggalBeli' => $this->input->post('tanggalBeli'),
                    'jumlah' => $this->input->post('jumlah'),
                    'ukuran' => $this->input->post('ukuran'),
                    'berat' => $this->input->post('berat'),
                    'tokoBeli' => $this->input->post('tokoBeli'),
                    'kotaBeli' => $this->input->post('kotaBeli'),
                    'hargaBeli' => $this->input->post('hargaBeli'),
                    'hargaJual' => $this->input->post('hargaJual'),
                    'keterangan' => $this->input->post('keterangan'),
                    'gambar' => $fileUpload['file_name'],
                    'gambar1' => $fileUpload1['file_name']
                );
                $this->produk_model->set_barang($data);
                redirect('admin_control/produk');
            }
        } else {
            $data['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk);
            $this->load->view('views/admin/produk-upload', $data);
        }
        /*$this->form_validation->set_rules('kodeProduk', 'Kode Barang', 'required');
        $this->form_validation->set_rules('namaProduk', 'Nama Barang', 'required');
        $this->form_validation->set_rules('tanggalBeli', 'Tanggal Beli', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('tokoBeli', 'Toko Beli', 'required');
        $this->form_validation->set_rules('kotaBeli', 'Kota Beli', 'required');
        $this->form_validation->set_rules('hargaBeli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('hargaJual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        

        if ($this->form_validation->run() === FALSE) {
          $data['dataproduk'] = $this->produk_model->getProduk_id($kodeProduk); //panggil barang_model lalu jalankan function get_barang
          $this->load->view('views/pages/produk-upload', $data);
        } else{
          $this->produk_model->set_barang($data); //update datanya
          redirect('customer_control');
        }*/
    }
    public function delete($kodeProduk){
        $this->produk_model->delete_barang($kodeProduk); //update datanya
        redirect('produk_control');
    }
	public function updateOrder() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        $statusOrder = $this->input->post('orderStatus');
        $id = $this->input->post('kodeProduk');
        $resi = $this->input->post('shippingResi');
        $payment = $this->input->post('paymentMethod');
        if(isset($is_submit)) {
            $dataupdate = array(
            'orderStatus' => $statusOrder,
            'shippingResi' => $resi,
            'paymentMethod' => $payment
            );
            $this->order_model->update_barang($id, $dataupdate);
            redirect('admin_control/order');
        }
        else {
            $dataorder['order'] = $this->order_model->getOrder_id($id);
            $this->load->view('admin/order-update', $dataorder);
        }        
    }
}
?>