<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('User_model');
    $this->load->model('Product_model');
		$this->load->library('session');
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
public function do_add_wallet()
{
  if($this->User_model->add_wallet())
  {
		$data['msg']="wallet Added";
		$data['title']='welcome admin';
      $this->load->view('templates/header.php',$data);
      $this->load->view('templates/adminSidebar.php');
      $this->load->view('pages/dashbord.php',$data);
      $this->load->view('templates/footer.php');
  }

}
public function change_password()
{
	$data['title']='Change Password';
	$this->load->view('templates/header.php',$data);
	$this->load->view('pages/change_password.php.php');
	$this->load->view('templates/footer.php');
}
public function my_account()
{
	$data['title']='User Account';
	$data['w']=$this->User_model->getWalletDetails();
	$data['user']=$this->User_model->getUser();
	$this->load->view('templates/header.php',$data);
	$this->load->view('pages/myaccount.php',$data);
	$this->load->view('templates/footer.php');
}
public function add_wallet()
{
	$data['title']='Add Wallet';
	$this->load->view('templates/header.php',$data);
	$this->load->view('templates/adminSidebar.php');
	$data['user']=$this->User_model->getUserDetails();
	$this->load->view('pages/add_wallet.php',$data);
	$this->load->view('templates/footer.php');
}
public function getWallet()
{
	$id=$this->input->post('id');
	$data['w']=$this->User_model->getWallet($id);
	$a=$data['w'][0]->available_amount;
	echo json_encode($a);

}

}
