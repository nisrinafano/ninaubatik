<?php 

Class Page extends CI_Controller {
	
public function __construct() {
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->model('produk_model');
        $this->load->model('customer_model');
        $this->load->model('order_model');
        $this->load->model('testi_model');
}
	public function index() {
		$this->session->set_userdata('page','home');
	
		    $data['kain'] =$this->produk_model->getProdukKain();
		    $data['kemeja']=$this->produk_model->getProdukKemeja();
		    $data['mukena']=$this->produk_model->getProdukMukenaHome();
		    $data['testimoni']=$this->testi_model->getTesti_status();
		$this->load->view('header');
		$this->load->view('home', array('data' =>  $data));
		$this->load->view('footer');
	}
	public function about() {
		$this->session->set_userdata('page', 'about'); 
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function hometesti() {
		$this->session->set_userdata('page','home2');
		 $data['kain'] =$this->produk_model->getProdukKain();
		    $data['kemeja']=$this->produk_model->getProdukKemeja();
		    $data['mukena']=$this->produk_model->getProdukMukenaHome();
		    $data['testimoni']=$this->testi_model->getTesti_status();
		echo '<script>
        window.onload = function() {
        return confirm("Terima kasih atas testimoni yang anda berikan. Testimoni akan terpasang setelah diapprove oleh admin");
        }
            </script>';
		//confirm("Terima kasih atas testimoni yang anda berikan. Testimoni akan terpasang setelah diapprove oleh admin");
		$this->load->view('header');
		$this->load->view('hometesti', array('data' => $data));
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
	public function form_confirm(){
	    if($this->session->userdata('status') != "login" || $this->session->userdata('status') == "" || $this->session->userdata('status') == null ){
			redirect(base_url());
			}
		$this->session->set_userdata('page', 'mail');
		$this->load->view('header');
		$this->load->view('form-confirm');
		$this->load->view('footer');
	}
	public function sandals() {
		$this->session->set_userdata('page','sandals');
		$dataProduk = $this->produk_model->getProdukMukena();
		$this->load->view('header');
		$this->load->view('sandals', array('dataproduk' => $dataProduk));
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
	    $this->session->set_userdata('page','salwars');
		$dataProduk = $this->produk_model->getProdukKemejaA();
		$this->load->view('header');
		$this->load->view('salwars', array('dataproduk' => $dataProduk));
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
	    $this->session->set_userdata('page','sarees');
		$dataProduk = $this->produk_model->getProdukKemejaB();
		$this->load->view('header');
		$this->load->view('sarees', array('dataproduk' => $dataProduk));
		$this->load->view('footer');
	}
	public function skirts(){
	    $this->session->set_userdata('page','skirts');
		$dataProduk = $this->produk_model->getProdukKainC();
		$this->load->view('header');
		$this->load->view('skirts', array('dataproduk' => $dataProduk));
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
        $order['order'] = $this->order_model->getOrder_session($this->session->userdata('idSession'));
        $this->load->view('header');
		$this->load->view('inputAlamat', $order);
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