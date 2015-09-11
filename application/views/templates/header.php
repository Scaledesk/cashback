

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
          { 

            redirect(base_url().'Product/admin', 'refresh');
            ?>


         <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="ion-android-arrow-dropdown"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo base_url().'Product/admin'; ?>">Setting</a></li>
             <!-- <li><a href="<?php echo base_url().'User/change_password'; ?>">Setting</a></li> -->
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
               <li><a href="<?php echo base_url().'User/my_account'; ?>">My Acount</a></li>
               <li><a href="<?php echo base_url().'Auth/logout'; ?>">Logout</a></li>
             </ul>
           </li>
<?php } else{ ?>
         <li><a class="login" href="javascript:void(0)" data-toggle="modal" data-target="#login-box"> login</a></li>
         <li><a href="<?php echo base_url().'auth/register';?>">Register</a></li>
       <?php }} ?>


            <!-- <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="ion-android-arrow-dropdown"></span></a>
              <ul class="dropdown-menu theme-features menu-nudge" role="menu">
                <li> <a href="index.html"><i class="ion-home"></i>Home Style One</a> </li>
                <li> <a href="products.html"><i class="ion-android-done-all"></i>Products Catalogue </a> </li>
                <li> <a href="product-details.html"><i class="ion-wand"></i>Product Details</a> </li>
                <li> <a href="cart.html"><i class="ion-flag"></i>Shopping Cart</a> </li>
                <li> <a href="checkout.html"><i class="ion-wrench"></i>Checkout</a> </li>
                <li> <a href="blog-standard.html"><i class="ion-scissors"></i>Blog Standard</a> </li>
                <li> <a href="blog-masonry.html"><i class="ion-document-text"></i>Blog Masonry</a> </li>
                <li> <a href="post-details.html"><i class="ion-star"></i>Post Details</a> </li>
                <li> <a href="contact.html"><i class="ion-bluetooth"></i>Contact</a> </li>
                <li> <a href="404.html"><i class="ion-bug"></i>404 Page</a> </li>
                <li> <a href="search-result-found.html"><i class="ion-android-expand"></i>Search Result Found</a> </li>
                <li> <a href="search-result-not-found.html"><i class="ion-android-notifications"></i>Search Result Not Found</a> </li>
                <li> <a href="coming-soon.html"><i class="ion-ios-lightbulb"></i>Coming Soon Page</a> </li>
                <li> <a href="forget-password.html"><i class="ion-android-sync"></i>forget password</a> </li>
                <li> <a href="faqs-accordion.html"><i class="ion-eye"></i>FAQ's Accordion</a> </li>
                <li> <a href="faqs-flip.html"><i class="ion-android-microphone"></i>FAQ's Flip</a> </li>
                <li> <a href="terms.html"><i class="ion-asterisk"></i>Terms &amp; Conditions</a> </li>
                <li> <a href="track-order.html"><i class="ion-android-pin"></i>Track Your Order</a> </li>
                <li> <a href="shortcodes.html"><i class="ion-ios-briefcase"></i>Shortcodes</a> </li>
                <li> <a class="soon" href="javascript:void(0)"><i class="ion-android-radio-button-on"></i>Extra Pages Soon</a> </li>
              </ul>
            </li> -->
            <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">USD <span class="ion-android-arrow-dropdown"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">GBP</a></li>
                <li><a href="#">EUR </a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/uk.png'; ?>" <span class="ion-android-arrow-dropdown"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/italy.png';?>"></a> </li>
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/turkey.png';?>"></a> </li>
              </ul>
            </li> -->
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">INR </a>
              <!-- <ul class="dropdown-menu" role="menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">GBP</a></li>
                <li><a href="#">EUR </a></li>
              </ul> -->
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/inr.png'; ?>" <span class="ion-android-arrow-dropdown"></span></a>
              <!-- <ul class="dropdown-menu">
              <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/uk.png'; ?>"></a> </li>
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/italy.png';?>"></a> </li>
                <li> <a href="#"><img width="16" height="12" alt="" src="<?php echo base_url().'assets/images/turkey.png';?>"></a> </li>
              </ul -->
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
  <header>
    <div class="container">

    
      <div class="row"> <!--start of logo-->
           <?php foreach ($logo as $logo_image) {
             
          ?>
        <div class="col-xs-12 col-sm-3 col-md-4 "> <a href="index.html" ><img class="navbar-brand" src="<?php echo base_url().$logo_image->logo;?>"> </a></div>
        <?php   } ?>
        <!--end of logo--> <!--start of features-->
        <div class="col-xs-12 col-sm-9 col-md-8 feature hidden-xs">
          <div class="row">
            <div class="col-sm-4 feature-box ion-chatbubble-working">
              <dl class="text-primary text-capitalize">
                <dt>Online Support</dt>
                <dd class="text-muted">24/7 Etiam ultricies nis</dd>
              </dl>
            </div>
            <div class="col-sm-4 feature-box ion-android-sync">
              <dl class="text-primary text-capitalize">
                <dt>30 Days Free Return</dt>
                <dd class="text-muted">Nullam dictum felis eu pede </dd>
              </dl>
            </div>
            <div class="col-sm-4 feature-box ion-lock-combination">
              <dl class="text-primary text-capitalize">
                <dt>Payment Secured</dt>
                <dd class="text-muted">Lorem ipsum dolor consecteure</dd>
              </dl>
            </div>
          </div>
        </div>
        <!--end of features-->
      </div>
    </div>
  </header>
  <!--end of header-->
  <!-- strat of navigation -->
  <nav class="navbar navbar-default navbar-static-top line-navbar-two">
    <div class="container row-4">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="line-navbar-collapse-2">
        <ul class="nav navbar-nav lnt-nav-mega">
          <li><a href="<?php echo base_url();?>" class="ion-ios-home"></a></li>
        </ul>
        <ul class="nav navbar-nav lnt-nav-mega">

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-dot-circle-o"></span> Categories <span class="ion-android-arrow-dropdown"></span> </a>
            <div class="dropdown-menu" role="menu">
              <div class="lnt-dropdown-mega-menu">
                <!-- List of categories -->
                <ul class="lnt-category list-unstyled">
              <li class="active"><a href="#subcategory-home">All pages</a></li>
               <?php  

                foreach($cg->result() as $row)
                                             {?>
                            
                                   
                                  <li><a href="#subcategory-sports"><?php echo $row->category_title; ?></a></li>
                                    
                                <?php  }?>
                  <!-- 
                  
                  <li><a href="#subcategory-music">Digital music</a></li>
                  <li><a href="#subcategory-books">Books <span class="label label-danger">Hot</span></a></li>
                  <li><a href="#subcategory-fashion">Fashion and beauty</a></li>
                  <li><a href="#subcategory-movies">Movies and games</a></li>
 -->

                </ul>
                <!-- Subcategory and carousel wrap -->
<!--                 <div class="lnt-subcategroy-carousel-wrap container-fluid">
                  <div id="subcategory-home" class="active"> <!-- Sub categories list--
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">All pages</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li> <a href="index.html"><i class="ion-home icon"></i>Home Style One</a> </li>
                        <li> <a href="products.html"><i class="ion-android-done-all icon"></i>Products Catalogue </a> </li>
                        <li> <a href="product-details.html"><i class="ion-wand icon"></i>Product Details</a> </li>
                        <li> <a href="cart.html"><i class="ion-flag icon"></i>Shopping Cart</a> </li>
                        <li> <a href="checkout.html"><i class="ion-wrench icon"></i>Checkout</a> </li>
                        <li> <a href="blog-standard.html"><i class="ion-scissors icon"></i>Blog Standard</a> </li>
                        <li> <a href="blog-masonry.html"><i class="ion-document-text icon"></i>Blog Masonry</a> </li>
                        <li> <a href="post-details.html"><i class="ion-star icon"></i>Post Details</a> </li>
                        <li> <a href="contact.html"><i class="ion-bluetooth icon"></i>Contact</a> </li>
                        <li> <a href="404.html"><i class="ion-bug icon"></i>404 Page</a> </li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li> <a href="search-result-found.html"><i class="ion-android-expand icon"></i>Search Result Found</a> </li>
                        <li> <a href="search-result-not-found.html"><i class="ion-android-notifications icon"></i>Search Result Not Found</a> </li>
                        <li> <a href="coming-soon.html"><i class="ion-ios-lightbulb icon"></i>Coming Soon Page</a> </li>
                        <li> <a href="forget-password.html"><i class="ion-android-sync icon"></i>forget password</a> </li>
                        <li> <a href="faqs-accordion.html"><i class="ion-eye icon"></i>FAQ's Accordion</a> </li>
                        <li> <a href="faqs-flip.html"><i class="ion-android-microphone icon"></i>FAQ's Flip</a> </li>
                        <li> <a href="terms.html"><i class="ion-asterisk icon"></i>Terms &amp; Conditions</a> </li>
                        <li> <a href="track-order.html"><i class="ion-android-pin icon"></i>Track Your Order</a> </li>
                        <li> <a href="shortcodes.html"><i class="ion-ios-briefcase icon"></i>Shortcodes</a> </li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-home" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-home" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-home" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-home" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="subcategory-sports">
                    <!-- Sub categories list--
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">Sports and outdoors</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Exercise</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Hunting</a></li>
                        <li><a href="#">Fishing</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Boating</a></li>
                        <li><a href="#">Water sports</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Fan shop</a></li>
                        <li><a href="#">Team sports</a></li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Golf</a></li>
                        <li><a href="#">Outdoor clothing</a></li>
                        <li><a href="#">Cycling</a></li>
                        <li><a href="#">Action sports</a></li>
                        <li><a href="#">Game room</a> <span class="label label-danger">Hot</span></li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-sports" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-sports" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-sports" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-sports" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="subcategory-music">
                    <!-- Sub categories list--
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">Digital music</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Online</a></li>
                        <li><a href="#">Best</a></li>
                        <li><a href="#">New releases</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Top selling</a></li>
                        <li><a href="#">Top grossing</a> <span class="label label-info">Popular</span></li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Pop</a></li>
                        <li><a href="#">Jazz</a> <span class="label label-danger">Hot</span></li>
                        <li><a href="#">Country</a></li>
                        <li><a href="#">Classic</a></li>
                        <li><a href="#">Rock</a></li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-music" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-music" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-music" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-music" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="subcategory-books">
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">Books</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Books</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Magazines</a></li>
                        <li><a href="#">Children</a></li>
                        <li><a href="#">Textbooks</a></li>
                        <li><a href="#">Kindle</a></li>
                        <li><a href="#">Audible</a></li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Web development</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Novel</a></li>
                        <li><a href="#">Short story</a></li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Romance</a></li>
                        <li><a href="#">Political</a></li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-books" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-books" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-books" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-books" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="subcategory-fashion">
                    <!-- Sub categories list--
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">Fashion and beauty</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Girls</a></li>
                        <li><a href="#">Boys</a></li>
                        <li><a href="#">Baby</a></li>
                        <li><a href="#">Top selling</a> <span class="label label-info">Popular</span></li>
                        <li><a href="#">Cheap</a></li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">All beauty</a></li>
                        <li><a href="#">Diets</a></li>
                        <li><a href="#">Baby care</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Men's grooming</a></li>
                        <li><a href="#">Health</a></li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-fashion" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-fashion" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-fashion" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-fashion" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="subcategory-movies">
                    <!-- Sub categories list--
                    <div class="lnt-subcategory col-sm-8 col-md-8">
                      <h3 class="lnt-category-name text-info text-uppercase">Movies and games</h3>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Movies and TV</a></li>
                        <li><a href="#">Blu-ray</a></li>
                        <li><a href="#">Div-ix</a> <span class="label label-info">Popular</span></li>
                        <li><a href="#">Instant movies</a></li>
                        <li><a href="#">Free movies</a></li>
                        <li><a href="#">Digital instruments</a></li>
                      </ul>
                      <ul class="list-unstyled col-sm-6">
                        <li><a href="#">Online games</a></li>
                        <li><a href="#">Trending</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Popular</a></li>
                        <li><a href="#">Grossing</a></li>
                        <li><a href="#">Game room</a></li>
                      </ul>
                    </div>
                    <!-- Carousel --
                    <div class="col-sm-4 col-md-4">
                      <div id="carousel-category-movies" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-category-movies" data-slide-to="0" class=""></li>
                          <li data-target="#carousel-category-movies" data-slide-to="1" class="active"></li>
                          <li data-target="#carousel-category-movies" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                          <div class="item"> <img src="<?php echo base_url().'assets/images/nav-img-1.jpg';?>" width="296" height="400" alt="Slide image"> </div>
                        </div>
                      </div>s
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav main-nav">
          
            <li><a href="<?php echo base_url().'User/show_store'; ?>">STORE</a></li>
            <li><a href="<?php echo base_url().'User/show_coupon'; ?>">COUPON</a></li>
           <li><a href="<?php echo base_url().'User/display_product'; ?>">PRODUCTS</a></li>
          <li><a href="<?php echo base_url().'User/contact'; ?>">CONTACT</a></li>
          <li><a href="<?php echo base_url().'User/how_it_work'; ?>" class="active_nav nemu_hover">How It Works?</a></li>
        </ul>
        <ul class="nav navbar-nav visible-xs">
          <li><a href="#">Home</a></li>
        </ul>
        <form class="navbar-form navbar-right lnt-search-form" role="search" method="post" action="<?php echo base_url().'User/search'; ?>">

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-btn lnt-search-category">
              
                 

                <button type="button" class="btn btn-default dropdown-toggle selected-category-btn" data-toggle="dropdown" aria-expanded="false"> 
                  <span>

                       <select class="selectpicker" name="category_name">
                 <option>ALL</option>
                 <option>STORE</option>
                 <option>COUPON</option>
                 <option>PRODUCTS</option> 
                  </select>

                  </span>

                  </button>
                <!-- <ul class="dropdown-menu " role="menu"> -->
                 <!--  <li><a href="<?php echo base_url().'User/show_store'; ?>">STORE</a></li>
                  <li><a href="<?php echo base_url().'user/show_coupon'; ?>">COUPON</a></li>
                  <li><a href="<?php echo base_url().'User/display_product'; ?>">PRODUCTS</a></li>
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li><a href="#">Toys</a></li>
                  <li><a href="#">Motors</a></li> -->

               <!--  <a href="#" id="submit"> Get Value</a>
            <ul>  <span class="selected-category-text">All  </span>
             <li class="init">[SELECT]</li>
             <li data-value="value 1">Option 1</li>
           <li data-value="value 2">Option 2</li>
              <li data-value="value 3">Option 3</li>
           </ul> -->

              </div>
              <input type="text" name="search_key" class="form-control lnt-search-input" aria-label="Search" placeholder="Find Your Product">
            </div>
          </div>
          
          <button type="submit" class="btn btn-xs btn-search"><span class="ion-android-search"></span></button>
        </form>
      </div>
    </div>
  </nav>
  <!-- end of navigation -->
