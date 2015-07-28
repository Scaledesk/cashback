<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Coopan_model');
		$this->load->helper(array('url','language'));
    //$this->load->library(array('ion_auth','form_validation'));
		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		//$this->lang->load('auth');
	}
  public function add_coupon()
  {
    $data['title']='Add Coupon';
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_coupon.php');
    $this->load->view('templates/footer.php');
  }

  public function do_add_coupon()
  {
    if( $this->Coupon_model->add_coupon()){
    $data['title']='Add Coupon';
    $data['msg']='Coupon Details Saved';
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_coupon.php',$data);
    $this->load->view('templates/footer.php');
  }
  }
  Public function view_coupon()
  {
    $data['title']='Add Coupon';
		$data['res']=$this->Coupon_model->getCouponDetails();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_coupon',$data);
    $this->load->view('templates/footer.php');
  }
}
