<?php

/**
 * 
 */
class Mahasiswa extends CI_Controller // Mahasiswa = harus sama dengan nama file // enxtend tergantung kegunaan class CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_mahasiswa','mhs'); //mhs = alias, biar pendek
		$this->load->model('Model_film','flm');
		error_reporting(0);
	}

	function index() // diganti dengan index sebelumnya default code
	{
		if(!isset($this->session->login_status))
		{	
			$this->load->view('view_login');

		}
		else
		{	
			if($this->session->role=="admin"){
				$data = $this->flm->read();
			$this->load->view('view_admin',array('data' => $data));
			}
			else{
			$data = $this->flm->read();
			$this->load->view('view_home',array('data' => $data)); //fungsi yang dimiliki CI_Controller
			}
		}		
	}

	function insert_mahasiswa()
	{
		$nama=$this->input->post('nama');
		$nim=$this->input->post('nim');

		$data = array(
			'nama'=>$nama,
			'nim'=>$nim
		); //array asosiatif agar semua data jadi 1 array, di model_mahasiswa cuma 1 parameter (function insert($data))

		$cek = $this->mhs->insert($data); // pakai array asosiatif biar ga ribet $data1, $data2, $data3.....

		if($cek>0)
		{
			echo "<script type='text/javascript'>alert('Berhasil Ditambah');</script>";
			//$this->load->view('view_dashboard'); sama dengan redirect
			//redirect(base_url('index.php/Mahasiswa?m=sukses'));
			$this->index();
		}
	}

	function delete_mahasiswa()
	{
		$id = $this->input->get('id'); //pakai get karena dari view dilempar pakai '?id=' jadi nampak di url 
		$cek = $this->mhs->delete($id);


		if($cek>0){
			echo "<script type='text/javascript'>alert('Berhasil Dihapus');</script>";
			$this->index();
		}
	}

	function update_mahasiswa() //digunakan untuk mengambil data dan ditampilkan di view_formedit.php
	{
		$id = $this->input->get('id'); //get id yg diinginkan

		$data = $this->mhs->getDataById($id); //mengambil data dari database berdasar id diatas

		$this->load->view('view_formedit',array('data'=>$data));

	}

	function update_proses() //proses saat di pencet tombol Edit
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');

		$data = array( // dijadikan array asosiatif dulu sebelum di kirim ke model
			'id' => $id,
			'nama' => $nama,
			'nim' => $nim
		);

		$cek = $this->mhs->update($id,$data);
		if($cek){
			echo "<script type='text/javascript'>alert('Berhasil Diedit');</script>";
			$this->index();
		}
		else{
			echo "<script type='text/javascript'>alert('Gagal Diedit');</script>";
			$this->index();
		}


	}


	function login()
	{
		$data['nama'] = $this->input->post('username');
		$data['nim'] = $this->input->post('password');
		$data['role'] = $this->input->post('role');

		$cek = $this->mhs->getLogin($data);

		if($cek->num_rows() > 0) //mengecek apakah ada data username dan passowrd di DB, menampilkan brp byk data yg ada di DB
		{
			$data_session = array(
				'username' => $data['nama'],
				'role' => $data['role'],
				'login_status' => TRUE

			);

			$this->session->set_userdata($data_session);


			$this->index();
		}
		else
		{
			$this->index();
		}
	}

	function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['role']);
		unset($_SESSION['login_status']);
		$this->index();
	}

	function masuk()
	{
		$this->load->view('view_login');

	}

	
}

?>