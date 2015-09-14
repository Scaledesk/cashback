<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('Product_model');
    $this->load->library(array('ion_auth','form_validation'));
      $this->load->helper(array('form','url','language'));
		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		//$this->lang->load('auth');
	}

  public function logo_banner_display(){
   $data['logo']= $this->Product_model->logo_banner_display();

  }
  public function product_page(){

      $data['title']='Manage Product';
      $data['cg']= $this->Product_model->select_category();
       $data['logo']= $this->Product_model->logo_banner_display();
      $this->load->view('templates/admin_header.php',$data);
      $this->load->view('templates/adminSidebar');

      $data['cg']= $this->Product_model->select_category();
      $this->load->view('pages/add_product.php',$data);
      $this->load->view('templates/footer.php');


  }



public function show_category(){


 $data['cg']= $this->Product_model->select_category();
 $data['cg']= $this->Product_model->select_category();
  $data['logo']= $this->Product_model->logo_banner_display();
  $data['title']='Manage Category';
  $this->load->view('templates/admin_header.php',$data);
  $this->load->view('templates/adminSidebar');
 $this->load->view('pages/category_display.php',$data);
 $this->load->view('templates/footer.php');
 }

public function category(){

  $data['title']='Manage Category';
  $data['cg']= $this->Product_model->select_category();
  $data['logo']= $this->Product_model->logo_banner_display();
  $this->load->view('templates/admin_header.php',$data);
  $this->load->view('templates/adminSidebar.php');
  $this->load->view('pages/add_category.php',$data);
  $this->load->view('templates/footer.php');
}



public function add_category(){


 if($this->Product_model->add_category()){
	 $data['title']='Manage Category';
	 $data['msg'] = "Category Add Successfully";
	 $data['cg']= $this->Product_model->select_category();
	 $data['logo']= $this->Product_model->logo_banner_display();
	 $this->load->view('templates/admin_header.php',$data);
	 $this->load->view('templates/adminSidebar.php');
	 $this->load->view('pages/add_category.php',$data);
	 $this->load->view('templates/footer.php');

      }

  }

public function select_update_category($id){
$data['title']='Manage Product';
$data['cg']= $this->Product_model->select_category();
$data['logo']= $this->Product_model->logo_banner_display();
 $data['cg']= $this->Product_model->select_update_category($id);

 $this->load->view('templates/admin_header.php',$data);
 $this->load->view('templates/adminSidebar');
 $this->load->view('pages/update_category.php',$data);
$this->load->view('templates/footer.php');

}







  public function update_category($id){


 if($this->Product_model->update_category($id)){
      echo "successful update Category";
          redirect(base_url().'product/show_category', 'refresh');
      }

  }



   public function delete_category($id)
{
  if($this->Product_model->delete_category($id))
  {
    echo "successful leave delete ";

    $this->show_category();
  }
}

  public function admin(){
        $data['title']='Welcome Admin';
        $data['cg']= $this->Product_model->select_category();
        $data['logo']= $this->Product_model->logo_banner_display();
             $this->load->view('templates/admin_header',$data);
             $this->load->view('templates/adminSidebar');
             $this->load->view('pages/dashbord');
             $this->load->view('templates/footer');
  }






	public function add_product()
  {

   $config['upload_path'] = APPPATH.'/upload/';
  $config['allowed_types'] = 'png|jpeg|gif|jpg';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);
   //echo APPPATH;
  //echo '<pre/>';
  //print_r($_FILES);
  //echo($this->input->post('product_title'));
 // die;
 // echo $_FILES['product_image']['name'];
  $newimage=time().$_FILES['product_image']['name'];

   $_FILES['product_image']['name']=$newimage;

   if($this->upload->do_upload('product_image')==true)
   {
     if( $this->Product_model->add_product($newimage)){
      echo "successful Add product";
      redirect(base_url().'product/display_product','refresh');
      //$this->load->view('templates/header.php',$data);
      //$this->load->view('pages/add_employee.php');
      //$this->load->view('templates/footer.php');
      }
    }
  }

  public function display_product(){

$data['cg']= $this->Product_model->select_category();
$data['logo']= $this->Product_model->logo_banner_display();
  $data['cg']= $this->Product_model->display_product();
  $data['title']='Manage Product';
  $this->load->view('templates/admin_header.php',$data);
  $this->load->view('templates/adminSidebar');
  $this->load->view('pages/product_display.php',$data);
  $this->load->view('templates/footer.php');

}
 public function select_update_product($id){


$data['cg']= $this->Product_model->select_category();
$data['logo']= $this->Product_model->logo_banner_display();
  $data['title']='Manage Product';
  $this->load->view('templates/admin_header.php',$data);
  $this->load->view('templates/adminSidebar');
   $data['cg']= $this->Product_model->select_category();
   $data['show']= $this->Product_model->select_update_product($id);
   $this->load->view('pages/update_product.php',$data);
   $this->load->view('templates/footer.php');
 }



public function update_product($id)
  {

   $config['upload_path'] = APPPATH.'/upload/';
  $config['allowed_types'] = 'png|jpeg|gif|jpg';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);
   //echo APPPATH;
  //echo '<pre/>';
  //print_r($_FILES);
  //echo($this->input->post('product_title'));
 // die;
 // echo $_FILES['product_image']['name'];
  $newimage=time().$_FILES['product_image']['name'];

   $_FILES['product_image']['name']=$newimage;

   if($this->upload->do_upload('product_image')==true)
   {
     if( $this->Product_model->update_product($newimage,$id)){
      echo "successful Add product";
      redirect(base_url().'product/display_product','refresh');
      //$this->load->view('templates/header.php',$data);
      //$this->load->view('pages/add_employee.php');
      //$this->load->view('templates/footer.php');
      }
    }
  }

   public function delete_product($id)
  {
   if($this->Product_model->delete_product($id))
    {
      echo "successful delete Product";
     redirect(base_url().'product/display_product', 'refresh');
    }
  }




public function logo_banner()
  {

   $config['upload_path'] = APPPATH.'/upload/';
  $config['allowed_types'] = 'png|jpeg|gif|jpg';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);
   //echo APPPATH;
  //echo '<pre/>';
  //print_r($_FILES);
  //echo($this->input->post('product_title'));
 // die;
 // echo $_FILES['product_image']['name'];
  $logo=time().$_FILES['logo']['name'];
 $banner_image=time().$_FILES['banner_image']['name'];

   $_FILES['logo']['name']=$logo;
   $_FILES['banner_image']['name']=$banner_image;

   if($this->upload->do_upload('logo') && $this->upload->do_upload('banner_image'))
   {
     if( $this->Product_model->logo_banner($logo,$banner_image)){
      echo "successful Add Logo and Banner";
      redirect(base_url().'product/home_page_setting','refresh');
      //$this->load->view('templates/header.php',$data);
      //$this->load->view('pages/add_employee.php');
      //$this->load->view('templates/footer.php');
      }
    }
  }
public function home_page_setting(){

 $data['title']='Welcome Admin';
        $data['cg']= $this->Product_model->select_category();
            $data['logo']= $this->Product_model->logo_banner_display();
             $this->load->view('templates/admin_header',$data);
             $this->load->view('templates/adminSidebar');
             $this->load->view('pages/update_index.php');
             $this->load->view('templates/footer');

}
  public function slider_image(){

 $config['upload_path'] = APPPATH.'/upload/';
  $config['allowed_types'] = 'png|jpeg|gif|jpg';
  $config['max_size'] = '2048000';
  $this->load->library('upload',$config);

           $image=$_FILES['image']['name'];
          $_FILES['image']['name']=$image;
         $this->upload->do_upload('image');

          $slider_image=$_FILES['slider_image']['name'];
          $_FILES['slider_image']['name']=$slider_image;
         $this->upload->do_upload('slider_image');


          $this->Product_model->slider_image($slider_image,$image);



          //$this->Product_model->image($image);



      echo "successful Add Slider and Image";
      redirect(base_url().'product/home_page_setting','refresh');


  }
}
