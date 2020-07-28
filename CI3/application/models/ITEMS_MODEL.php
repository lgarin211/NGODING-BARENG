<?php
class ITEMS_MODEL extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('item');
		return $query->result();
	}
	public function create($data)
	{
		$this->NAMA    = $data['penjual'];
		$this->PRODUK    = $data['produk'];
		$this->ASAL    = $data['asal'];
		$this->IMG_link    = $data['link'];
		$this->HARGA    = $data['harga'];
		$kirim = $this;
		$this->db->insert('item', $kirim);
	}
	public function get_one($id)
	{
		$query = $this->db->get_where('item', array('id' => $id));
		return $query->result();
	}
	public function create2($data)
	{
		$this->NAMA    = $data['namad'] + $data['b'];
		$this->ID_PRODUK    = $data['id_produk'];
		$this->ASAL    = $data['asal'];
		$this->ALAMAT   = $data['alamat'];
		$this->HARGA    = $data['harga'];
		$this->EMAIL    = $data['email'];
		$kirim = $this;
		$this->db->insert('transaksi', $kirim);
	}
}
