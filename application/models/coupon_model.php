<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Coupon_model extends CI_Model {
public function __construct()
{
parent::__construct();
	$this->load->database();
}
public function add_coupon()
{
  $data=array(
 'coupon_name'=>$this->input->post('coupon_name'),
 'coupon_company'=>$this->input->post('coupon_company'),
 'coupon_code'=>$this->input->post('coupon_code'),
 'coupon_description'=>$this->input->post('coupon_description'),
 'coupon_offer'=>$this->input->post('coupon_offer'),
 'coupon_category_id'=>$this->input->post('coupon_category_id'),
 'coupon_url'=>$this->input->post('coupon_url')
 );
 $this->db->insert('coupon_details',$data);
 return true;
}

public function getCouponDetails()
{
  $query=$this->db->query("select * from coupon_details");
  return $query;
}
public function editCoupon($id)
	{

		$this->db->where("coupon_id",$id);
  		$query=$this->db->get("coupon_details");
  		return $query->result();
	}

	public function do_editCoupon($id)
	{

		$data=array(
	 'coupon_name'=>$this->input->post('coupon_name'),
	 'coupon_company'=>$this->input->post('coupon_company'),
	 'coupon_code'=>$this->input->post('coupon_code'),
	 'coupon_description'=>$this->input->post('coupon_description'),
	 'coupon_offer'=>$this->input->post('coupon_offer'),
	 'coupon_category_id'=>$this->input->post('coupon_category_id')
	 );
		$this->db->where('coupon_id', $id);
		$this->db->update('coupon_details',$data);
		return true;

	}
public function delete_coupon($id)
	{
		$this->db->where("coupon_id",$id);
  		if($this->db->delete("coupon_details"))
  		{
  			return true;
  		}
	}



}
