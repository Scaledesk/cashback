<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Coupon_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('Product_model');
		$this->load->model('Coupon_model');
    $this->load->library(array('ion_auth','form_validation'));
      $this->load->helper(array('form','url','language'));
	}
  public function add_coupon()
  {
    $data['title']='Add Coupon';
    $data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
    $this->load->view('templates/admin_header.php',$data);
		$this->load->view('templates/adminSidebar.php',$data);
    $this->load->view('pages/add_coupon.php');
    $this->load->view('templates/footer.php');
  }

  public function do_add_coupon()
  {
		$config['upload_path'] = APPPATH.'/images/coupon/';
	  $config['allowed_types'] = 'png|jpeg|gif|jpg';
	  $config['max_size'] = '70000';
	  $this->load->library('upload',$config);
		$ncoupon=time().$_FILES['coupon_image']['name'];
	   $_FILES['coupon_image']['name']=$ncoupon;
		 if ($this->upload->do_upload('coupon_image')==true)
        {
					if( $this->Coupon_model->add_coupon($ncoupon)){
    			$data['title']='Add Coupon';
    			$data['msg']='Coupon Details Saved';
    			$this->load->view('templates/admin_header.php',$data);
					$this->load->view('templates/adminSidebar.php',$data);
    			$this->load->view('pages/add_coupon.php',$data);
    			$this->load->view('templates/footer.php');
    		  }
			}
        else
        {
					print_r($this->upload->display_errors());
					echo 'upload error';

			}
  }

  Public function view_coupon()
  {
    $data['title']='Add Coupon';
    $data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
		$data['c']=$this->Coupon_model->getCouponDetails();
    $this->load->view('templates/admin_header.php',$data);
		$this->load->view('templates/adminSidebar.php',$data);
    $this->load->view('pages/view_coupon',$data);
    $this->load->view('templates/footer.php');
  }
	public function editCoupon($id)
  {
    $this->load->database();
    $data['title']='Edit Coupon Details';
    $data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
    $data['h']=$this->Coupon_model->editCoupon($id);
    $this->load->view('templates/admin_header.php',$data);
		$this->load->view('templates/adminSidebar.php',$data);
    $this->load->view('pages/add_coupon.php',$data);
    $this->load->view('templates/footer.php');
  }

  public function do_editCoupon($id)
  {
    $this->load->database();
    if($this->Coupon_model->do_editCoupon($id))
    {
      redirect(base_url().'Coupon_control/view_coupon');
    }
    else{
      echo "record not updated";
    }

  }

  public function deleteCoupon($id)
  {
    if($this->Coupon_model->deleteCoupon($id))
    {
      redirect(base_url().'Coupon_control/view_coupon');
    }
  }
}
