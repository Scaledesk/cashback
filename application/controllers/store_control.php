<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Store_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Store_model');
		$this->load->helper(array('url','language'));
	}
  public function add_store()
  {
    $data['title']='Add Coupon';
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_store.php');
    $this->load->view('templates/footer.php');
  }
  public function do_add_store()
  {

		$config['upload_path'] = APPPATH.'/images/store/';
	  $config['allowed_types'] = 'png|jpeg|gif';
	  $config['max_size'] = '2048000';
	  $this->load->library('upload',$config);
	  $nstore=time().$_FILES['store_image']['name'];
	   $_FILES['store_image']['name']=$nstore;
		 if ($this->upload->do_upload('store_image')==False)
        {
           echo 'upload error';
					 //die;
        }
        else
        {
					if( $this->Store_model->add_store($nstore)){
    			$data['title']='Add Store';
    			$data['msg']='Store Details Saved';
    			$this->load->view('templates/header.php',$data);
    			$this->load->view('pages/add_store.php',$data);
    			$this->load->view('templates/footer.php');
    		}
			}
  }

  Public function view_store()
  {
    $data['title']='View Store Details';
		$data['res']=$this->Store_model->getStoreDetails();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/view_store',$data);
    $this->load->view('templates/footer.php');
  }
	public function editStore($id)
  {
    $this->load->database();
    $data['title']='Update Store Details';
    $data['h']=$this->Store_model->editStore($id);
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/add_Store.php',$data);
    $this->load->view('templates/footer.php');
  }

  public function do_editStore($id)
  {
    $this->load->database();
    if($this->Coupon_model->do_editStore($id))
    {
      redirect(base_url().'Store_control/view_store');
    }
    else{
      echo "record not updated";
    }

  }

  public function deleteStore($id)
  {
    if($this->Store_model->deleteStore($id))
    {
      redirect(base_url().'Store_control/view_store');
    }
  }