<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{

public function cekLogin($data){

 return	$this->db->get_where('admin',$data)->num_rows();
	
}
public function getDataStasiun()
{
	 return	$this->db->get('stasiun');

}
public function tambah_stasiun($nama)
{
	$data = array('nama_stasiun' => $nama,
);
	return $this->db->insert('stasiun',$data);
}

public function delete_stasiun($id){

$this->db->where('id', $id);
return $this->db->delete('stasiun');
	}

	public function getDataEditStasiun($id)
	{
$data = array('id' => $id, );	
	return $this->db->get_where('stasiun',$data);
}

public function edit_stasiun($nama)
{
	$data = array('nama_stasiun' => $nama , );
$this->db->where('id',$this->input->post('id')); 
return $this->db->update('stasiun',$data);
}
}
