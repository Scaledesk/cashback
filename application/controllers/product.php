<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		//$this->lang->load('auth');
	}

	

	public function add_product()
  {
      $data['title']='Admin';
     if( $this->Product_model->add_product()){
      echo "successful Add product";
      //$this->load->view('templates/header.php',$data);
      //$this->load->view('pages/add_employee.php');
      //$this->load->view('templates/footer.php');  
      }

  }

   public function delete_product($id)
  {
   if($this->Product_model->delete_product($id))
    {
    $this->employee_show();
    }
  }

  

}