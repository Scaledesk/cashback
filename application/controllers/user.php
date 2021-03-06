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


public function contact_mail(){





  //Email information
   $admin_email = "nkscoder@gmail.com";
   $name    = $_REQUEST['author'];
   $email = $_REQUEST['email'];
   $subject = "Cashback";
   $comment = $_REQUEST['body'];
   //die();
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "Thank you for contacting us!";
  }



public function show_coupon(){
   $data['title']='Manage Coupon';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/coupon_show.php',$data);
  $this->load->view('templates/footer.php');

}



public function search(){


    $data['cu'] = $this->User_model->search();
    // echo $data['cu']['store'][0]->store_id;
     // print_r($data['cu']);
     // die();


     // if(isset($data['cu'])){

//print_r($data['cu']['store']);
//die;
      if(isset($data['cu']['store'][0]->store_id)){


    if($data['cu']['store']){

        $data['title']='Show Store';
        $data['cg']= $this->Product_model->select_category();
        $data['logo']= $this->Product_model->logo_banner_display();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/show_user_store_search.php');

        $this->load->view('templates/footer.php');
    }
    elseif ($data['cu']['coupon']) {
      $data['title']='Show Coupon';
      $data['cg']= $this->Product_model->select_category();
      $data['logo']= $this->Product_model->logo_banner_display();
      $this->load->view('templates/header.php',$data);
      $this->load->view('pages/coupon_show_search.php',$data);
      $this->load->view('templates/footer.php');

       }

            $this->load->view('templates/footer.php');
        }
        /*elseif ($data['cu']['coupon']) {
          $data['title']='Show Coupon';
          $data['cg']= $this->Product_model->select_category();
          $data['logo']= $this->Product_model->logo_banner_display();
          $this->load->view('templates/header.php',$data);
          $this->load->view('pages/coupon_show_search.php',$data);
          $this->load->view('templates/footer.php');

           }

    else{
        $data['title']='Display Product Details';
        $data['cg']= $this->Product_model->select_category();
        $data['logo']= $this->Product_model->logo_banner_display();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/user_product_display_search.php',$data);
        $this->load->view('templates/footer.php');
    }*/


else{

     $data['title']='Display Error';
        $data['cg']= $this->Product_model->select_category();
        $data['logo']= $this->Product_model->logo_banner_display();
        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/display_error.php',$data);
        $this->load->view('templates/footer.php');
    }

}


public function contact(){
   $data['title']='contact';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/contact.php',$data);
  $this->load->view('templates/footer.php');

}

 public function faq(){
   $data['title']='FAQ';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/work.php',$data);
  $this->load->view('templates/footer.php');

}
public function termcondition(){
   $data['title']='Terms and conditions';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/work.php',$data);
  $this->load->view('templates/footer.php');

}
public function about(){
   $data['title']='About';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/work.php',$data);
  $this->load->view('templates/footer.php');

}
public function how_it_work(){
   $data['title']='How It Work';
   $data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
    $data['cu']= $this->User_model->show_coupon();
   $this->load->view('templates/header.php',$data);
   $this->load->view('pages/work.php',$data);
  $this->load->view('templates/footer.php');

}

public function show_store(){
   $data['title']='Manage Coupon';
   $data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
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
 $data['cg']= $this->Product_model->select_category();
  $data['logo']= $this->Product_model->logo_banner_display();
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
		$data['cg']= $this->Product_model->select_category();
      $data['logo']= $this->Product_model->logo_banner_display();
      $this->load->view('templates/admin_header.php',$data);
      $this->load->view('templates/adminSidebar.php');
      $this->load->view('pages/dashbord.php',$data);
      $this->load->view('templates/footer.php');
  }

}
public function change_password()
{
	$data['title']='Change Password';
	$data['cg']= $this->Product_model->select_category();
   $data['logo']= $this->Product_model->logo_banner_display();
	$this->load->view('templates/header.php',$data);
	$this->load->view('pages/change_password.php.php');
	$this->load->view('templates/footer.php');
}
public function my_account()
{
	$data['title']='User Account';
	$data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
	$data['w']=$this->User_model->getWalletDetails();
	$data['user']=$this->User_model->getUser();
	$data['wallet_data']=$this->User_model->wallet_show();
	$this->load->view('templates/header.php',$data);
	$this->load->view('templates/userSidebar.php');
	$this->load->view('pages/myaccount.php',$data);
	$this->load->view('templates/footer.php');
}
public function add_wallet()
{
	$data['title']='Add Wallet';
	$data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
	$this->load->view('templates/admin_header.php',$data);
	$this->load->view('templates/adminSidebar.php');
	$data['user']=$this->User_model->getUserDetails();
	$this->load->view('pages/add_wallet.php',$data);
	$this->load->view('templates/footer.php');
}
public function getWallet()
{
	$id=$this->input->post('id');
	$data['w']=$this->User_model->getWallet($id);
	$a=$data['w'][0]->total_amount;
	echo json_encode($a);

}
public function add_personal_info()
{
	if($this->User_model->add_personal_info())
  {
  	echo "Successful Update Information";
  	redirect(base_url().'User/my_account', 'refresh');
		// $data['msg']="personal information saved";
		// $data['title']='My Account';
		// $data['cg']= $this->Product_model->select_category();
  //       $data['logo']= $this->Product_model->logo_banner_display();
		// $data['w']=$this->User_model->getWalletDetails();
		// $data['wallet_data']=$this->User_model->wallet_show();
		// $data['user']=$this->User_model->getUser();
		// $this->load->view('templates/userSidebar.php');
		// $this->load->view('templates/header.php',$data);
		// $this->load->view('pages/myaccount.php',$data);
		// $this->load->view('templates/footer.php');
  }
}


public function wallet_show($id){
$data['title']='Show Wallet';
	$data['cg']= $this->Product_model->select_category();
    $data['logo']= $this->Product_model->logo_banner_display();
	$this->load->view('templates/header.php',$data);
	//$this->load->view('templates/adminSidebar.php');
	$data['wallet_data']=$this->User_model->wallet_show($id);
	$this->load->view('pages/show_wallet_details.php',$data);
	$this->load->view('templates/footer.php');

}

public function edit_contact(){
	if($this->User_model->edit_contact()){

		 echo "Successful ";
     redirect(base_url().'User/my_account', 'refresh');
	}
}


public function getCategoryWiseDetails($id)
{

		$data['resultData'] = $this->User_model->getCategoryWiseDetails($id);


    $data['cg']= $this->Product_model->select_category();
		$data['title']='Display Category';
     $data['logo']= $this->Product_model->logo_banner_display();
     $data['st']= $this->User_model->show_store();
    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/categorySearch.php',$data);
    $this->load->view('templates/footer.php');

}
}
