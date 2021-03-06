


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php
if($title!=''){ echo $title;}
else
  {echo 'Cashback';}
?>
</title>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Ionicons font -->
<link href="<?php echo base_url().'assets/css/ionicons.min.css" rel="stylesheet"';?>">
<!-- Bootstrap styles-->
<link href="<?php echo base_url().'assets/css/bootstrap.min.css" rel="stylesheet"';?>">
<!--custom styles-->

<link href="<?php echo base_url().'assets/css/custom-red.css" rel="stylesheet"';?>">
<!--tooltiop-->
<link href="<?php echo base_url().'assets/css/hint.css" rel="stylesheet"';?>">

<!-- animation -->
<link href="<?php echo base_url().'assets/css/animate.css" rel="stylesheet"';?>">

<!--select-->
<link href="<?php echo base_url().'assets/css/bootstrap-select.min.css"';?>" rel="stylesheet">

<!--color picker-->
<link href="<?php echo base_url().'assets/css/jquery.simplecolorpicker.css"';?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/css/mycss.css"';?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/css/custom.css"';?>" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url().'assets/favicon/apple-touch-icon-57x57.png';?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url().'assets/favicon/apple-touch-icon-60x60.png';?>">
<link rel="icon" type="image/png" href="<?php echo base_url().'assets/favicon/favicon-32x32.png';?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo base_url().'assets/favicon/favicon-16x16.png';?>" sizes="16x16">
<link rel="manifest" href="<?php echo base_url().'assets/favicon/manifest.json';?>">
</head>
<body>
<!--start of loader-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end of loader--> <!--start of style switcher-->
<div class="switcher-container">
  <div class="colors-panel">
    <ul class="colors-list">
      <li><a id="custom-red" class="red" title="switch styling" href="javascript: void(0)"></a></li>

    </ul>
  </div>
</div>
<!--end of style switcher-->
<!--start of top sec-->
<div class="top-sec">
  <nav class="navbar navbar-static-top line-navbar-one">
    <div class="container">
      <div class="navbar-header">
        <!-- Top navbar button -->
        <button type="button" class="navbar-toggle collapsed ion-android-menu" data-toggle="collapse" data-target="#line-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="fa fa-ellipsis-v"></span> </button>
        <!-- Cart button -->
        <a class="lno-cart" href="#"> <span class="glyphicon glyphicon-shopping-cart"></span> <span class="cart-item-quantity"></span> </a>
        <!-- left navbar button -->
        <button class="lno-btn-toggle"> <span class="fa fa-bars"></span> </button>
      </div>
      <div class="row">
        <div class="col-sm-4 welcome-msg hidden-xs">Welcome to our online store!</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-sm-8 collapse navbar-collapse navbar-right" id="line-navbar-collapse-1">
          <ul class="nav navbar-nav top-menu">


       <?php if($this->ion_auth->logged_in())
       {
          if($this->ion_auth->is_admin())
          { ?>
         <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="ion-android-arrow-dropdown"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo base_url().'Product/admin'; ?>">Setting</a></li>
             
             <li><a href="<?php echo base_url().'Auth/logout'; ?>">Logout</a></li>
           </ul>
         </li>
         <?php }
         else
         { ?>
           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="ion-android-arrow-dropdown"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="<?php echo base_url().'User/my_account'; ?>">My Acount</a></li>
               <li><a href="<?php echo base_url().'Auth/logout'; ?>">Logout</a></li>
             </ul>
           </li>
    <?php  }
        }
       else { 

        if($this->session->userdata('username')!='')
        { ?>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="ion-android-arrow-dropdown"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="<?php echo base_url().'User/user_account'; ?>">My Acount</a></li>
               <li><a href="<?php echo base_url().'Auth/logout'; ?>">Logout</a></li>
             </ul>
           </li>
<?php } else{ ?>
         <li><a class="login" href="javascript:void(0)" data-toggle="modal" data-target="#login-box"> login</a></li>
         <li><a href="<?php echo base_url().'auth/register';?>">Register</a></li>
       <?php }} ?>


            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">INR <span class="ion-android-arrow-dropdown"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">GBP</a></li>
                <li><a href="#">EUR </a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/inr.png'; ?>" <span class="ion-android-arrow-dropdown"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/uk.png'; ?>"></a> </li>
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/italy.png';?>"></a> </li>
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/turkey.png';?>"></a> </li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left lno-search-form visible-xs" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-xs btn-search"><span class="fa fa-search"></span></button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div class="line-navbar-left">
    <p class="lnl-nav-title">Categories</p>
    <ul class="lnl-nav">
      <!-- The list will be automatically cloned from mega menu via jQuery -->
    </ul>
  </div>
</div>


<!--end of top sec-->

<!--start of content wrap (This is necessary for the menu effect)-->
<div class="content-wrap" data-effect="lnl-push">

  <!--start of header-->
  
  <!--end of header-->
