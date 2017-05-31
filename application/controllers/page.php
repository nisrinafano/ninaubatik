<?php 

Class Page extends CI_Controller {
	
public function __construct() {
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->model('produk_model');
        $this->load->model('customer_model');
        $this->load->model('order_model');
}
	public function index() {
		$this->session->set_userdata('page','home');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function about() {
		$this->session->set_userdata('page', 'about'); 
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function myprofile(){
		
		 if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
			}
		$email = $this->session->userdata('email');
		$dataProfile = $this->mymodel->getData($email);
		
		$this->load->view('header');
		$this->load->view('short-codes', array('data'=> $dataProfile));
		$this->load->view('footer');
	}
	public function editprofile() {
				 if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
			}
		$email = $this->session->userdata('email');
		$dataProfile = $this->mymodel->getData($email);
		$this->load->view('header');
		$this->load->view('editprofile', array('data' => $dataProfile));
		$this->load->view('footer');
	}
	public function gantipassword() {
		if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
		}
		$this->load->view('header');
		$this->load->view('gantipassword');
		$this->load->view('footer');
	}
	public function mail(){
		$this->session->set_userdata('page', 'mail');
		$this->load->view('header');
		$this->load->view('mail');
		$this->load->view('footer');
	}
	public function form_confirm() {
		$this->session->set_userdata('page','form-confirm');
		$this->load->view('header');
		$this->load->view('form-confirm');
		$this->load->view('footer');
	}
	public function products() {
		$this->session->set_userdata('page','mail');
		$this->load->view('header');
		$this->load->view('products');
		$this->load->view('footer');
	}
	public function dresses(){
        $this->session->set_userdata('page','dresses');
		$dataProduk = $this->produk_model->getProdukKainA();
		$this->load->view('header');
		$this->load->view('dresses', array('dataproduk' => $dataProduk) );
		$this->load->view('footer');
	}
	public function faq() {
		$this->session->set_userdata('page', 'faq');
		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');
	}
	public function salwars(){
		$this->load->view('header');
		$this->load->view('salwars');
		$this->load->view('footer');
	}
	public function jeans(){
		$this->load->view('header');
		$this->load->view('jeans');
		$this->load->view('footer');
	}
	public function single($kodeProduk){
		$this->load->view('header');
		$dataproduk = $this->produk_model->getProduk_id($kodeProduk);
		$this->load->view('single', array('dataproduk'=>$dataproduk));
		$this->load->view('footer');
	}
	public function shirts(){
		$this->load->view('header');
		$this->load->view('shirts');
		$this->load->view('footer');
	}
	public function sweaters(){
        $this->session->set_userdata('page','sweaters');
		$dataProduk = $this->produk_model->getProdukKainB();
		$this->load->view('header');
		$this->load->view('sweaters', array('dataproduk' => $dataProduk));
		$this->load->view('footer');
	}
	public function sarees(){
		$this->load->view('header');
		$this->load->view('sarees');
		$this->load->view('footer');
	}
	public function skirt(){
		$this->load->view('header');
		$this->load->view('skirts');
		$this->load->view('footer');
	}
    public function orderwrong(){
        $this->session->set_userdata('page','orderwrong');
		$this->load->view('header');
		$this->load->view('orderwrong');
		$this->load->view('footer');
	}
    public function alamat(){
        $this->session->set_userdata('page','alamat');
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer_email($this->session->userdata('email'));
        $datacustomer['ongkir'] = $this->order_model->getKotaOngkir();
        $datacustomer['metode'] = $this->order_model->getMetodeOngkir();
        $this->load->view('header');
		$this->load->view('inputAlamat', $datacustomer);
		$this->load->view('footer');
	}
	public function checkout(){
        if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
			}
        $this->session->set_userdata('page','checkout');
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer_email($this->session->userdata('email'));
        $datacustomer['ongkir'] = $this->order_model->getKotaOngkir();
        $datacustomer['metode'] = $this->order_model->getMetodeOngkir();
		$this->load->view('header');
		$this->load->view('checkout', $datacustomer);
		$this->load->view('footer');
	}
	

}

?>