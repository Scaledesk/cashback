<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('User_model');
		//$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		//$this->lang->load('auth');
	}



public function show_coupon(){
   $data['title']='Manage Coupon';
  // $this->load->view('templates/header.php',$data);
   $data['cg']= $this->User_model->show_coupon();

   
// $this->load->view('templates/adminSidebar');
   $this->load->view('pages/coupon.php',$data);
   //$this->load->view('templates/footer.php');

}

}
