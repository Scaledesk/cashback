<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function __construct()
{
parent::__construct();
$this->load->library('session');
	$this->load->database();
}
 public function show_coupon(){

  $query=$this->db->query("select * from coupon_details");
	return $query;
 }

public function show_store()
{

        $query=$this->db->query("select * from store_details");

	     	return $query;
}

	public function display_product()
	{
		//$q=$this->db->query("select count(*) as count from product");s
		$query=$this->db->get("product");
		return $query;

	}


// public function add_category(){

// $data=array(
// 'category_title'=>$this->input->post('category_title'),
// 'category_description'=>$this->input->post('category_description')
// );

// $this->db->insert('category',$data);
// return true;

// }


// public function select_update_category($id){
// $this->db->where("category_id",$id);
// $query=$this->db->query(" select * from category");
// return $query->result();
// }


// public function update_category($id){

// $data=array(
// 'category_title'=>$this->input->post('category_title'),
// 'category_description'=>$this->input->post('category_description')
// );
// $this->db->where("category_id",$id);
// $this->db->update('category',$data);
// return true;

// }





// public function delete_category($id)
// 	{
// 		$this->db->where("category_id",$id);
//   		if($this->db->delete("category"))
//   		{
//   			return true;
//   		}
// 	}





// public function add_product($newimage)
// {
//    $newimage_file = base_url().'application/upload/'.$newimage;
//  $data=array(
// 'product_category'=>$this->input->post('category'),
// 'product_link'=>$this->input->post('link'),
// 'product_price'=>$this->input->post('price'),
// 'product_title'=>$this->input->post('product_title'),
// 'product_image'=>$newimage_file

// );

// $this->db->insert('product',$data);
// return true;
// }


// public function delete_product($id)
// 	{
// 		$this->db->where("product_id",$id);
//   		if($this->db->delete("product"))
//   		{
//   			return true;
//   		}
// 	}

// 	public function display_product()
// 	{


// 		$query=$this->db->query("select * from product");


// 		return $query;
// 	}

// 	public function select_update_product($id){


// 	$this->db->where("product_id",$id);
//     $query=$this->db->get("product");
//     return $query->result();
// 	}

// public function update_product($newimage,$id)
// {
//    $newimage_file = base_url().'application/upload/'.$newimage;
//  $data=array(
// 'product_category'=>$this->input->post('category'),
// 'product_link'=>$this->input->post('link'),
// 'product_price'=>$this->input->post('price'),
// 'product_title'=>$this->input->post('product_title'),
// 'product_image'=>$newimage_file

// );


// $this->db->where("product_id",$id);
// $this->db->update('product',$data);
// return true;
// }

// // public function update_product($id)
// // {

// //  $data=array(
// // 'product_category'=>$this->input->post(''),
// // 'product_link'=>$this->input->post(''),
// // 'product_price'=>$this->input->post(''),
// // 'product_title'=>$this->input->post(''),
// // 'product_image'=>$this->input->post('')
// // );
// // $this->db->where(array('product_id'=> $id));
// // $this->db->update('product',$data);
// // return true;
// // }
public function getUserDetails()
{
	$query=$this->db->query("select * from users");
	return $query;
}
public function getUser()
{
	$id=$this->session->userdata('user_id');
	$query=$this->db->query("select * from users where id='$id'");
	return $query->result();
}

public function getWallet($id)
{
	$query=$this->db->query("select * from wallet_details where user_id='$id'");
	return $query->result();
}

public function add_wallet()
{
	 $d=array(
		'user_id'=>$this->input->post('user_id'),
		'available_amount'=>$this->input->post('available_amount'),
		'add_amount'=>$this->input->post('add_amount'),
		'total_amount'=>$this->input->post('total_amount')
	);
	$id=$this->input->post('user_id');
	$q=$this->db->query("select * from wallet_details where user_id='$id'");
  if($q->num_rows() > 0)
  {
    $this->db->where("user_id",$id);
		$this->db->update('wallet_details',$d);
		return true;
  }
  else {
		$this->db->insert('wallet_details',$d);
		  return true;
  }
}
public function getWalletDetails()
{
	$id=$this->session->userdata('user_id');
	$query=$this->db->query("select * from wallet_details where user_id='$id'");
	return $query->result();
}

}
