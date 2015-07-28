<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}



public function add_product($newimage)
{
   $newimage_file = base_url().'application/upload/'.$newimage; 
 $data=array(
'product_category'=>$this->input->post('category'),
'product_link'=>$this->input->post('link'),
'product_price'=>$this->input->post('price'),
'product_title'=>$this->input->post('product_title'),
'product_image'=>$newimage_file

);

$this->db->insert('product',$data);
return true;
}


public function delete_product($id)
	{
		$this->db->where("product_id",$id);
  		if($this->db->delete("product"))
  		{
  			return true;
  		}		
	}

	public function show_product()
	{
		
		
		$query=$this->db->query("select * from product");
		// echo '<pre />';
		// print_r($query);
		// die();  
		
		return $query->result();
	}

	

// public function update_product($id)
// {

//  $data=array(
// 'product_category'=>$this->input->post(''),
// 'product_link'=>$this->input->post(''),
// 'product_price'=>$this->input->post(''),
// 'product_title'=>$this->input->post(''),
// 'product_image'=>$this->input->post('')
// );
// $this->db->where(array('product_id'=> $id));
// $this->db->update('product',$data);
// return true;
// }





	

}