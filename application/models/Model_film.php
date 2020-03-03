<?php

/**
 * 
 */
class Model_film extends CI_Model
{
	
	function insert($data) //$data = array asosiatif
	{
		return $this->db->insert('film',$data);
	}

	function read()
	{
		$this->db->select('*');
		$this->db->from('film');

		return $this->db->get()->result();
	}
	function readKelola()
	{
		$this->db->select('*');
		$this->db->from('akun');

		return $this->db->get()->result();
	}

	function delete($id_film)
	{
		$this->db->where('id_film',$id_film);
		return $this->db->delete('film');
	}
	function deleteKelola($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('akun');
	}

	function getDataById($id) //digunakan untuk menampilkan data dari databse ke view_formedit.php
	{
		$this->db->select('*');
		$this->db->from('film');
		$this->db->where('id_film',$id);
		return $this->db->get()->result();
	}
	function getDataById_kelola($id) //digunakan untuk menampilkan data dari databse ke view_formedit.php
	{
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}

	function update($id_film, $data)
	{
		$this->db->where('id_film',$id_film);
		$this->db->update('film',$data);
		return $this->db->affected_rows(); //fungsinya untuk memberikan informasi berapa banyak row yang berubah
	}
	function update_kelola($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('akun',$data);
		return $this->db->affected_rows(); //fungsinya untuk memberikan informasi berapa banyak row yang berubah
	}

	function getLogin($data)
	{
		return $this->db->get_where('film',$data);
	}
	
	function getKategori($kategori) //digunakan untuk menampilkan data dari databse ke view_formedit.php
	{
		$this->db->select('*');
		$this->db->from('film');
		$this->db->where('kategori',$kategori);
		return $this->db->get()->result();
	}


}

?>