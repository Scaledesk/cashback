<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Store_model extends CI_Model {
public function __construct()
{
parent::__construct();
	$this->load->database();
}
public function add_store($n)
{
	$img=base_url().'application/images/store/'.$n;
  $data=array(
 'store_name'=>$this->input->post('store_name'),
 'store_description'=>$this->input->post('store_description'),
 'store_link'=>$this->input->post('store_link'),
 'store_image'=>$img
 );
 $this->db->insert('store_details',$data);
 return true;
}

public function getStoreDetails()
{
  $query=$this->db->query("select * from store_details");
  return $query;
}
public function editStore($id)
	{

		$this->db->where("store_id",$id);
  		$query=$this->db->get("store_details");
  		return $query->result();
	}

	public function do_editStore($id)
	{
    $img=base_url().'application/images/store/'.$n;
    $data=array(
   'store_name'=>$this->input->post('store_name'),
   'store_description'=>$this->input->post('store_description'),
   'store_link'=>$this->input->post('store_link'),
   'store_image'=>$img
    );
		$this->db->where('store_id', $id);
		$this->db->update('store_details',$data);
		return true;

	}
public function delete_store($id)
	{
		$this->db->where("store_id",$id);
  		if($this->db->delete("store_details"))
  		{
  			return true;
  		}
	}



}
