<?php

/**
 * 
 */
class Model_mahasiswa extends CI_Model
{
	
	function insert($data) //$data = array asosiatif
	{
		return $this->db->insert('akun',$data);
	}

	function read()
	{
		$this->db->select('*');
		$this->db->from('akun');

		return $this->db->get()->result();
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('akun');
	}

	function getDataById($id) //digunakan untuk menampilkan data dari databse ke view_formedit.php
	{
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}

	function update($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('akun',$data);
		return $this->db->affected_rows(); //fungsinya untuk memberikan informasi berapa banyak row yang berubah
	}

	function getLogin($data)
	{
		return $this->db->get_where('akun',$data);
	}
	


}

?>