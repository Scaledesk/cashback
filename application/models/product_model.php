<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
public function __construct()
{
parent::__construct();
//$this->load->library('session');
	$this->load->database();
}


 public function select_category(){

    $query=$this->db->query("select * from category");
		// echo '<pre />';
		// print_r($query);
		// die();

		return $query;
 }



public function add_category(){
$data=array(
'category_title'=>$this->input->post('category_title'),
'category_description'=>$this->input->post('category_description')
);

$this->db->insert('category',$data);
return true;

}


public function select_update_category($id){
$this->db->where("category_id",$id);
$query=$this->db->query(" select * from category");
return $query->result();
}


public function update_category($id){

$data=array(
'category_title'=>$this->input->post('category_title'),
'category_description'=>$this->input->post('category_description')
);
$this->db->where("category_id",$id);
$this->db->update('category',$data);
return true;

}





public function delete_category($id)
	{
		$this->db->where("category_id",$id);
  		if($this->db->delete("category"))
  		{
  			return true;
  		}
	}





public function add_product($newimage)
{
 $newimage_file = 'application/upload/'.$newimage; 
 $data=array(
'product_category_id'=>$this->input->post('category'),
'product_link'=>$this->input->post('link'),
'product_price'=>$this->input->post('price'),
'product_title'=>$this->input->post('product_title'),
'company_name'=>$this->input->post('company_name'),
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

	public function display_product()
	{
		$query=$this->db->query("select * from product");
		return $query;
	}

	public function select_update_product($id){


	$this->db->where("product_id",$id);
    $query=$this->db->get("product");
    return $query->result();
	}

public function update_product($newimage,$id)
{
   $newimage_file = 'application/upload/'.$newimage;
 $data=array(
'product_category'=>$this->input->post('category'),
'product_link'=>$this->input->post('link'),
'product_price'=>$this->input->post('price'),
'product_title'=>$this->input->post('product_title'),
'product_image'=>$newimage_file

);


$this->db->where("product_id",$id);
$this->db->update('product',$data);
return true;
}
public function getProductDetails()
{
	$q=$this->db->query("select count(*) as count from product");
	//print_r($q->result_array());
	//die;
	$query=$this->db->get("product");
	return $query;
	//print_r($query->result_ar;


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


public function logo_banner($logo,$banner_image)
{
 $logo = 'application/upload/'.$logo;
 $banner_image = 'application/upload/'.$banner_image;
 $data=array(
'logo'=>$logo,
'banner'=>$banner_image

);

$this->db->insert('logo_banner',$data);
return true;
}


public function slider_image($slider_image,$image)
{
 $slider_image = 'application/upload/'.$slider_image;
 $image = 'application/upload/'.$image;
 $data=array(
'slider'=>$slider_image,
'image'=>$image
);

$this->db->insert('slider_image',$data);
return true;
}


public function logo_banner_display(){

$query=$this->db->get("logo_banner");
		// echo '<pre />';
		// print_r($query);
		// die();

		return $query->result();
}

public function home_page_image(){


	$this->db->order_by("UPPER(image)","desc");

	$this->db->limit(3);
	$query=$this->db->get("slider_image");
		// echo '<pre />';
		// print_r($query);
		// die();

		return $query->result();
}
}
