<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('User_model');
    $this->load->model('Product_model');
		$this->load->library(array('ion_auth','form_validation'));
      $this->load->helper(array('form','url','language'));

	}



public function show_coupon(){
   $data['title']='Manage Coupon';
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/coupon.php',$data);
  $this->load->view('templates/footer.php');

}


public function show_store(){
   $data['title']='Manage Coupon';
    $data['st']= $this->User_model->show_store();
   $this->load->view('templates/header.php',$data);
    //$this->load->view('templates/adminSidebar');
   //print_r($data['st']->result());
   //die();
   $this->load->view('pages/show_user_store.php');
   $this->load->view('templates/footer.php');

}

// public function show_store(){
//    $data['title']='Manage Coupon';
//     $data['st']= $this->User_model->show_store();
//    //$this->load->view('templates/header.php',$data);
//    // $this->load->view('templates/adminSidebar');
//    //print_r($data['st']->result());
//    //die();
//    $this->load->view('pages/    .php');
//    $this->load->view('templates/footer.php');

// }
public function display_product(){
 $data['title']='Display Product Details';
  $data['p']= $this->User_model->display_product();
  $this->load->view('templates/header.php',$data);
  $this->load->view('pages/user_product_display.php',$data);
  $this->load->view('templates/footer.php');

}
public function add_wallet()
{
  if($this->User_model->add_wallet())
  {
      $this->load->view('templates/header.php',$data);
      $data['h']=$this->Product_model->getProductDetails();
      $this->load->view('pages/index.php',$data);
      $this->load->view('templates/footer.php');
  }

}


}
