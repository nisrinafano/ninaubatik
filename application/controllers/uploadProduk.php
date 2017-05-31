<?php 
class Customer_control extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->helper('url_helper');
    }
    
    public function index() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('pages/report-transaksi', $datacustomer);
    }
    
    public function seecustomer() {
        $datacustomer['datacustomer'] = $this->customer_model->getCustomer();
        $this->load->view('pages/datacustomer', $datacustomer);
    }
}
?>