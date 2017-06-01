<?php 

class Testi_control extends CI_Controller {
	
public function __construct() {
            parent::__construct();
            $this->load->model('testi_model');
     
            //if($this->session->userdata('status') != "login"){
			//redirect(base_url('index.php/home'));
        //}
}
public function add_data() {
	$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'testimoni' => $this->input->post('testimoni'),
				'status' => 'pending'
				); 
    $this->testi_model->insert_data($data);
    redirect('page/hometesti');
}
    public function update($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $is_submit = $this->input->post('is_submit');
        $statusOrder = $this->input->post('orderStatus');
        $payment = $this->input->post('paymentMethod');
        if(isset($is_submit)) {
            $dataupdate = array(
            'status' => $statusOrder,
            );
            $this->testi_model->updateTesti($id, $dataupdate);
            redirect('admin_control/testi');
        }
        else {
            $testimoni['testimoni'] = $this->testi_model->getTesti_id($id);
            $this->load->view('admin/testi-update', $testimoni);
        }        
    }
}

?>