<?php 
class Customer_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('produk_model');
        $this->load->helper('url_helper');
    }
    
    public function index() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/loginadmin', $datacustomer);
    }
    
    public function seecustomer() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/datacustomer', $datacustomer);
    }
    
    /*public function update(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        if(isset($is_submit) && $is_submit == 1) {
            $fileUpload = array();
            $isUpload = FALSE;
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
            if($isUpload) {
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
                    'gambar' => $fileUpload['file_name']
                );
                $this->produk_model->set_barang($data);
                redirect('dataproduk');
            }
        } else {
            $data['dataproduk'] = $this->produk_model->getProduk_id($kode_barang);
            $this->load->view('views/pages/produk-upload', $data);
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
    
    public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
    $is_submit = $this->input->post('is_submit');
    if(isset($is_submit) && $is_submit == 1) {
        $fileUpload = array();
        $isUpload = FALSE;
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
        if($isUpload) {
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
                    'gambar' => $fileUpload['file_name']
                );
                $this->produk_model->set_barang($data);
                redirect('admin_control/produk');
            }
        } else {
            $data['dataproduk'] = $this->produk_model->getProduk_id($kode_barang);
            $this->load->view('views/pages/produk-upload', $data);
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
    }
}
?>