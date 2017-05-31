<?php
class Cart extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('produk_model');
        $this->load->model('mymodel');
        $this->load->helper('url_helper');
        $this->load->library('cart');
    }

    public function add_to_cart($product_id)
	{
		$product = $this->mymodel->find($product_id);
		$data = array(
					   'id'      => $product->ID,
					   'qty'     => 1,
					   'price'   => $product->hargaJual,
					   'name'    => $product->namaProduk
					);
 
		$this->cart->insert($data);
		redirect('page/dresses');
		
	}

	
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}

	public function clear_cartsatu($id)
	{
		$data = array();
		   foreach($this->cart->contents() as $product){
		       if($product['id'] != $id){
		           $data[] = array('id'      => $product->ID,
					   'qty'     => $product->qty,
					   'price'   => $product->hargaJual,
					   'name'    => $product->namaProduk);
		       }
		   }

   $this->cart->destroy();
   $this->cart->insert($data);

		redirect('page/checkout'); 
	}
}

?>