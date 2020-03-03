<?php

/**
 * 
 */
class Film extends CI_Controller // Mahasiswa = harus sama dengan nama file // enxtend tergantung kegunaan class CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_film','flm'); //mhs = alias, biar pendek
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}

	function index() // diganti dengan index sebelumnya default code
	{

		if(!isset($this->session->login_status))
		{
			$this->load->view('view_login');
		}
		else
		{
			if($_SESSION['username']=="admin"){
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
		$id_film=$this->input->post('id_film');
		$nama_film=$this->input->post('nama_film');
		$kategori =$this->input->post('kategori');
		$rating =$this->input->post('rating');
		$tgl_rilis =$this->input->post('tgl_rilis');
		$produksi =$this->input->post('produksi');
		$sinopsis =$this->input->post('sinopsis');
		$durasi =$this->input->post('durasi');
		$trailer =$this->input->post('trailer');
		$trailer2 = str_replace("watch?v=", "embed/", $trailer);
		 // get foto
		$config['upload_path'] = './assets/images/gambar';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
      	if ( $this->upload->do_upload('fotopost') ) {
      		$foto = $this->upload->data();
      		$data = array(
      			'nama_film'=>$nama_film,
      			'kategori'=>$kategori,
      			'rating'=>$rating,
      			'tgl_rilis'=>$tgl_rilis,
      			'produksi'=>$produksi,
      			'sinopsis'=>$sinopsis,
      			'durasi'=>$durasi,
      			'trailer'=>$trailer2,
      			'gambar'       => $foto['file_name']

      		);
      		$cek = $this->flm->insert($data);
      		redirect('');
      	}else {
      		die("gagal upload");
      	}
      }else {
      	echo "tidak masuk";
      }



      //array asosiatif agar semua data jadi 1 array, di model_mahasiswa cuma 1 parameter (function insert($data))

		 // pakai array asosiatif biar ga ribet $data1, $data2, $data3.....

		if($cek>0)
		{
			echo "<script type='text/javascript'>alert('Berhasil Ditambah');</script>";
			//$this->load->view('view_dashboard'); sama dengan redirect
			//redirect(base_url('index.php/Mahasiswa?m=sukses'));
			$this->tambah();
		}
	}

	function delete_mahasiswa()
	{
		$id_film = $this->input->get('id_film'); //pakai get karena dari view dilempar pakai '?id=' jadi nampak di url 
		$cek = $this->flm->delete($id_film);


		if($cek>0){
			//echo "<script type='text/javascript'>alert('Berhasil Dihapus');</script>";
			$this->admin();
		}
	}
	function delete_kelola()
	{
		$id = $this->input->get('id'); //pakai get karena dari view dilempar pakai '?id=' jadi nampak di url 
		$cek = $this->flm->deleteKelola($id);


		if($cek>0){
			//echo "<script type='text/javascript'>alert('Berhasil Dihapus');</script>";
			$data = $this->flm->readKelola();
			$this->load->view('view_kelola',array('data' => $data));
		}
	}


	function update_mahasiswa() //digunakan untuk mengambil data dan ditampilkan di view_formedit.php
	{
		$id_film = $this->input->get('id_film'); //get id yg diinginkan

		$data = $this->flm->getDataById($id_film); //mengambil data dari database berdasar id diatas

		$this->load->view('view_detail',array('data'=>$data));

	}

	function update_mahasiswa2() //digunakan untuk mengambil data dan ditampilkan di view_formedit.php
	{
		$id_film = $this->input->get('id_film'); //get id yg diinginkan

		$data = $this->flm->getDataById($id_film); //mengambil data dari database berdasar id diatas

		$this->load->view('view_formedit',array('data'=>$data));

	}

	function update_kelola() //digunakan untuk mengambil data dan ditampilkan di view_formedit.php
	{
		$id = $this->input->get('id'); //get id yg diinginkan

		$data = $this->flm->getDataById_kelola($id); //mengambil data dari database berdasar id diatas

		$this->load->view('view_formedit_kelola',array('data'=>$data));

	}

	function update_proses() //proses saat di pencet tombol Edit
	{	
		$id_film=$this->input->post('id_film');
		$nama_film=$this->input->post('nama_film');
		$kategori =$this->input->post('kategori');
		$rating =$this->input->post('rating');
		$tgl_rilis =$this->input->post('tgl_rilis');
		$produksi =$this->input->post('produksi');
		$sinopsis =$this->input->post('sinopsis');
		$durasi =$this->input->post('durasi');
		$trailer =$this->input->post('trailer');
		$trailer2 = str_replace("watch?v=", "embed/", $trailer);


		$path = './assets/images/gambar/';


	      // get foto
	      $config['upload_path'] = './assets/images/gambar';
	      $config['allowed_types'] = 'jpg|png|jpeg|gif';
	      $config['max_size'] = '2048';  //2MB max
	      $config['max_width'] = '4480'; // pixel
	      $config['max_height'] = '4480'; // pixel
	      $config['file_name'] = $_FILES['fotopost']['name'];

	      $this->upload->initialize($config);

		    if (!empty($_FILES['fotopost']['name'])) {
		        if ( $this->upload->do_upload('fotopost') ) {
		            $foto = $this->upload->data();
		            $data = array(
		                          'nama_film'=>$nama_film,
					      			'kategori'=>$kategori,
					      			'rating'=>$rating,
					      			'tgl_rilis'=>$tgl_rilis,
					      			'produksi'=>$produksi,
					      			'sinopsis'=>$sinopsis,
					      			'durasi'=>$durasi,
					      			'trailer'=>$trailer2,
					      			'gambar'=> $foto['file_name']
	                            
		                        );
	              // hapus foto pada direktori
	             @unlink($path.$this->input->post('filelama'));

								$cek = $this->flm->update($id_film,$data);
	              $this->index();
		        }else {
	              die("gagal update");
		        }
		    }else {
		      echo "tidak masuk";
		    }



	}

	function update_proses_kelola() //proses saat di pencet tombol Edit
	{	
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$role = $this->input->post('role');

		$data = array( // dijadikan array asosiatif dulu sebelum di kirim ke model
			'id' => $id,
			'nama' => $nama,
			'nim' => $nim,
			'role' => $role
		);

		$cek = $this->flm->update_kelola($id,$data);
		if($cek){
			$data = $this->flm->readKelola();
			$this->load->view('view_kelola',array('data' => $data));
		}
		else{
			echo "<script type='text/javascript'>alert('Gagal Diedit');</script>";
			$data = $this->flm->readKelola();
			$this->load->view('view_kelola',array('data' => $data));
		}

		



	}


	function login()
	{
		$data['nama'] = $this->input->post('username');
		$data['nim'] = $this->input->post('password');

		$cek = $this->flm->getLogin($data);

		if($cek->num_rows() > 0) //mengecek apakah ada data username dan passowrd di DB, menampilkan brp byk data yg ada di DB
		{
			$data_session = array(
				'username' => $data['nama'],
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
		unset($_SESSION['login_status']);
		$this->index();
	}
	function admin()
	{	
		$data = $this->flm->read();
		$this->load->view('view_admin',array('data' => $data));
	}
	function tambah()
	{
		$this->load->view('view_tambah');
	}
	function kategori(){
		$kategori = $this->input->get('kategori'); //get id yg diinginkan

		$data = $this->flm->getKategori($kategori); //mengambil data dari database berdasar id diatas

		$this->load->view('view_kategori',array('data'=>$data));


	}
	function kelola()
	{	
		$data = $this->flm->readKelola();
		$this->load->view('view_kelola',array('data' => $data));
	}


}

?>