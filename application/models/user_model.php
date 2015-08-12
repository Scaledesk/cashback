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


  public function wallet_show($id)
{
  $this->db->where("user_id",$id);
  $query=$this->db->get("wallet_description");
  return $query->result();
}
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
  $wallet_date=date('Y-m-d');
  $data=array('user_id'=>$this->input->post('user_id'),
             'add_amount'=>$this->input->post('add_amount'),
             'wallet_date'=>$wallet_date,
             'wallet_description'=>$this->input->post('description')
    );
	 $d=array(
		'user_id'=>$this->input->post('user_id'),
		'total_amount'=>$this->input->post('total_amount')
	);
	$id=$this->input->post('user_id');

	  $q=$this->db->query("select * from wallet_details where user_id='$id'");
    $this->db->insert('wallet_description',$data);
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
public function add_personal_info()
{
	$dob=$this->input->post('date').'/'.$this->input->post('month').'/'.$this->input->post('year');
	$d=array(
	 'user_gender'=>$this->input->post('user_gender'),
	 'user_dob'=>$dob,
	 'user_marital'=>$this->input->post('user_marital'),
	 'user_country'=>$this->input->post('user_country'),
	 'user_state'=>$this->input->post('user_state'),
	 'user_city'=>$this->input->post('user_city'),
	 'user_pincode'=>$this->input->post('user_pincode'),
	 'user_address'=>$this->input->post('user_address')
 );
 $id=$this->session->userdata('user_id');
 $this->db->where("id",$id);
 $this->db->update('users',$d);
	return true;

}

public function facebook_data($name,$email){

   $name;
   $email;
  $oldname=explode(' ', $name);
  $fname=$oldname[0];
  $lname=$oldname[1];
  

  

    $this->db->where(array('email'=>$email));
     $query=$this->db->get('users');
    $result=$query->row_array();

	if($result='1'){

		
     return true;
     }
 
  else{
  $data=array(
  'username'=>$name,
  'email'=>$email,
  'first_name'=>$fname,
  'last_name'=>$lname,
  'provider'=>'Facebook'
 );  
    $this->db->where(array('email'=>$email));
  	$this->db->insert('users',$data);
   
   //echo "insert";
  return true;
}

}
// 


public function select_user($email){
	


	$this->db->where('email',$email);
	$query=$this->db->get('users');
	return $query->result(); 

}



public function google_data($id){
   $this->load->database();

   $this->db->where('google_id',$id);
   $query=$this->db->get('users');
   return $query->result();
}

public function google_login_data($name,$email,$id){
   
   $name;
   $email;
  $oldname=explode(' ', $name);
  $fname=$oldname[0];
  $lname=$oldname[1];
  
  $data=array(
  'google_id'=>$id,
  'username'=>$name,
  'email'=>$email,
  'first_name'=>$fname,
  'last_name'=>$lname,
  'provider'=>'Google'
 );  
    $this->db->where(array('google_id'=>$id));
  	$this->db->insert('users',$data);
   
   //echo "insert";
  return true;


}
//

public function edit_contact(){
  $id=$this->input->post('id');
   $d=array(
   'username'=>$this->input->post('name'),
   'phone'=>$this->input->post('phone'));

 $this->db->where("id",$id);
 $this->db->update('users',$d);
  return true;
}
}
