<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('User_model');
		$this->load->helper(array('url','language'));

	}



public function show_coupon(){
   $data['title']='Manage Coupon';
    //$data['cu']= $this->User_model->show_coupon();
    $this->load->view('templates/header.php',$data);
   // $this->load->view('templates/adminSidebar');
   $this->load->view('pages/coupon.php');
   $this->load->view('templates/footer.php');

}


public function show_store(){
   $data['title']='Manage Coupon';
    //$data['st']= $this->User_model->show_store();
   //$this->load->view('templates/header.php',$data);
   // $this->load->view('templates/adminSidebar');
   //print_r($data['st']->result());
   //die();
   $this->load->view('pages/    .php');
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

}
