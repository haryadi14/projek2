<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function keHalamanLogin(){
		$this->load->view('admin/login');
	}
	public function login(){
		$data = array(
			'username' => $this-> input->post('Username'),
			'password' => $this-> input->post('Password') 
			 );
		$cek = $this->M_admin->cekLogin($data);
		if ($cek > 0){

			$sess = array('status'=> TRUE,
					'level'=>'admin' );
			//men set data atau sesi
			$this->session->set_userdata($sess) ;
			redirect(base_url('admin/dashboard'));
		}else{

		redirect(base_url('login'));

		}
}
	public function keHalamanDashboard () {
			if ($this->session->status == TRUE ) {

			$data['stasiun']= $this->M_admin->getDataStasiun()->result();

				$this->load->view('admin/dashboard',$data);
			}else{

				redirect(base_url('login'));
			}


	}

	public function logout(){
		session_destroy();
		redirect (base_url());
	}



public function tambah_stasiun ()
{
$nama = $this->input->post('stasiun');
$input = $this->M_admin->tambah_stasiun($nama);

redirect (base_url('admin/dashboard'));

}

public function hapus_stasiun($id){
	
$delete = $this->M_admin->delete_stasiun($id);
redirect (base_url('admin/dashboard'));
}

public function keHalamanEdit($id)
{
$data['data_stasiun']= $this->M_admin->getDataEditStasiun($id)->row();
$this->load->view('admin/edit_stasiun',$data);

}
public function edit_stasiun()
{
	$nama = $this->input->post('nama_stasiun');
	$edit = $this->M_admin->edit_stasiun($nama);
	redirect (base_url('admin/dashboard'));
}

}
