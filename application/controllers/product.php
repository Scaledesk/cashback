<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('Product_model');
		//$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		//$this->lang->load('auth');
	}
  

  public function product_page(){

      $data['title']='Manage Product';
      $this->load->view('templates/header.php',$data);
      $data['cg']= $this->Product_model->select_category();
      $this->load->view('pages/add_product.php',$data);
      $this->load->view('templates/footer.php');
   
        
  }
	



public function add_category(){


 if($this->Product_model->add_category()){
      echo "successful Add Category";
      //$this->load->view('templates/header.php',$data);
      //$this->load->view('pages/add_employee.php');
      //$this->load->view('templates/footer.php');  
      }

  }
  

  public function admin(){

             $this->load->view('templates/header');
             $this->load->view('pages/dashbord');
             $this->load->view('templates/footer');
  }

	public function add_product()
  {
      
   $config['upload_path'] = APPPATH.'/upload/'; 
  $config['allowed_types'] = 'png|jpeg|gif';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);
 // echo APPPATH;
  //echo '<pre/>';
  //print_r($_FILES);
  //echo($this->input->post('product_title'));
 // die;
 // echo $_FILES['product_image']['name'];
  $newimage=time().$_FILES['product_image']['name'];
   
   $_FILES['product_image']['name']=$newimage;

     if( $this->Product_model->add_product($newimage)){
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