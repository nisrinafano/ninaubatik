<?php 
class Admin_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('produk_model');
        $this->load->model('order_model');
        $this->load->helper('url_helper');
    }
    
    public function index() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/loginadmin', $datacustomer);
    }
    
    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isLogin = $this->customer_model->login_authen($username, $password);
        
        $i = $this->customer_model->authen_user($username);
        
        if ($isLogin == true) {
            $this->produk();
        }
        else {
            if ($i[0]['auth'] < 3) {
                $update = $this->customer_model->wrong_password($username, $i[0]['auth'+1]);
                $data['err_message'] = "GAGAL LOGIN " . ($i[0]['auth']+1);
                $this->load->view('admin/loginadmin', $data);
            }
            else{
                $data['err_message'] = "AKUN ANDA TERBLOCK";
                $this->load->view('admin/loginadmin', $data);
            }
        }
    }
    
    public function customer() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/datacustomer', $datacustomer);
    }
    
    public function transcustomer() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/datacustomerTransaksi', $datacustomer);
    }
    
    public function report() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/report-transaksi', $datacustomer);
    }
    
    public function produk() {
        $dataproduk['dataproduk'] = $this->produk_model->getProduk();
        $this->load->view('admin/produk-upload', $dataproduk);
    }
    
    public function seeproduk() {
        $dataproduk['dataproduk'] = $this->produk_model->getProduk();
        $this->load->view('admin/produk-see', $dataproduk);
    }
    
    public function trans_month() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/report-transaksibulanan', $datacustomer);   
    }
    
    public function trans_prod() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('admin/report-transaksiproduk', $datacustomer);   
    }
    
    public function order() {
        $order['order'] = $this->order_model->getOrder();
        $this->load->view('admin/order', $order);
    }
    
    public function invoice() {
        $order['order'] = $this->order_model->getInvoice();
        $this->load->view('admin/invoice', $order);
    }
    
    public function konfirmasi_pembayaran() {
        $this->load->helper('form');
        $this->load->library('upload');

        $fileUpload = array();
        $isUpload = FALSE;

        $userFile = array( 'upload_path' => './uploads/pembayaran/',
                            'allowed_type' => 'jpg|jpeg|png|gif',
                            'max_size' => 512
                         );
        $this->upload->initialize($userFile);
        if($this->upload->do_upload('userFile')){
            $fileUpload = $this->upload->data();
            $isUpload =TRUE;
        }
        if ($isUpload) {
            $namapengirim = $this->input->post('namapengirim');
            $noivoice = $this->input->post('noinvoice');
            $gambar = $fileUpload['file_name'];
            $data_insert = array(
                            'namapengirim' =>$namapengirim,
                            'noinvoice' => $noinvoice,
                            'gambar' => $gambar);

            print_r($data_insert);  
            $this->invoice_model->insert_data($data_insert);
            /*if ($res >=1) {
                redirect(base_url().'page/form_konfirm');
                $this->session->set_flashdata('message_konf','Berhasil Menyimpan Bukti Pembayaran');
            } $this->session->set_flashdata('message_konf','Gagal Menyimpan Bukti Pembayaran');
            */
        }
    }
}
?>