<?php 

class Home extends CI_Controller {
	
public function __construct() {
            parent::__construct();
            $this->load->model('mymodel');
            $this->load->library('cart');
            //if($this->session->userdata('status') != "login"){
			//redirect(base_url('index.php/home'));
        //}
}

	
	 function signUp() {
		$this->load->helper('form');
   		$this->load->library('form_validation');
         $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $confpassword = $this->input->post('confirmpassword');

		//if($password == $confpassword){
			$data = array(
              'namaDepan' =>$this->input->post('namadepan'),
              'namaBelakang' => $this->input->post('namabelakang'),
              'email' => $this->input->post('email'),
              'password' => md5($password),
            );

            $id = $this->mymodel->addUser($data);
            $encrypted_id = md5($id);
            redirect('page');
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_port'] = '465';
			$config['smtp_timeout'] = '7';
			$config['smtp_user'] = 'ninaubatik@gmail.com';
			$config['smtp_pass'] = '';
			$config['charset'] = 'utf-8';
			$config['newline'] = "\r\n";
			$config['mailtype'] = 'html';
			$config['validation'] = TRUE;
			$this->email->initialize($config); 
				$this->email->from($config['smtp_user']);
			    $this->email->to($email);
			    $this->email->subject("Verifikasi Akun");
			    $this->email->message(
                    <div>Dear {$customers_fname},</div>
                    <div>&nbsp;</div>
                    <div>Terimakasih telah bergabung menjadi bagian dari website Ninau Batik.</div>
                    <div>&nbsp;</div>
                    <div>Berikut adalah informasi akun Anda di website kami :</div>
                    <div>&nbsp;</div>
                    <div>Username : {$email}</div>
                    <div>Password : {$password}</div>
                    <div>&nbsp;</div>
                    <div>Anda dapat menggunakan username dan password diatas setiap kali melakukan belanja online di Ninau Batik.</div>
                    <div>&nbsp;</div>
                    <div>Untuk login ke website dapat melalui link : {site_url()}</div>
                    <div>&nbsp;</div>
                    <div>Silahkan menghubungi kami kapan saja untuk mendapatkan informasi tentang akun Anda.</div>
                    <div>&nbsp;</div>
                    <div>Regards</div>
                    <div>Ninau Batik</div>
                    <div>&nbsp;</div>
			    );
			  
			    if($this->email->send())
			    {
			      redirect(base_url());
			    }else
			    {
			    	show_error($this->email->print_debugger());
			    }

		//} 
	}
	function login() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$isLogin = $this->mymodel->login_authen($email,$password);
        $idLogin = $this->mymodel->getIdLogin($email);
		if($isLogin == true) {
			$data_session =   array('email' => $email,
									'status' => "login",
                                    'idCustomer' => $idLogin
									 );
			$this->session->set_userdata($data_session);
			redirect('page');
		} else {
			$this->session->set_flashdata('error', 'password/email yang anda masukkan salah');
			redirect();
		}

	}
	function logout() {
		$data_session = array('email','status');
		$this->session->set_userdata("");
		$this->session->unset_userdata($data_session);
		$this->session->sess_destroy();
		redirect('page');
	}

	function aksi_edit() {
		$dataedit = array(
					'username' =>$this->input->post('username') ,
					'namaDepan' => $this->input->post('namadepan'),
					'namaBelakang' =>$this->input->post('namabelakang'),
					'alamat'=>$this->input->post('alamat'),
					'kotaKab'=>$this->input->post('kabupaten'),
					'provinsi'=>$this->input->post('provinsi'),
					'noTelp'=>$this->input->post('notelp')
					);
		$where = array('email'=>$this->session->userdata('email'));
		$this->mymodel->update_data($where,$dataedit,'user');
		redirect('page/myprofile');
	}
	function gantipassword() {
		$password = $this->input->post('password');
		$dataedit=  array(
					 'password' => md5($password), 
					 );
		$where = array('email' =>$this->session->userdata('email') , );
		$this->mymodel->update_data($where,$dataedit,'user');
		$this->session->set_flashdata('message', 'Password berhasil diubah');
			redirect('page/gantipassword');
		
	}

	function email() {
		$email = $this->session->userdata('email');

				  
		
	}



	
	}

	




?>