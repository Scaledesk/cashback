
<!--start of banner-->
  <div id="banner">
    <div class="item">
     <img class="img-responsive hidden-xs" src="<?php echo base_url().'assets/images/banner-img-1.jpg';?>" width="1920" height="550" alt="">
    <img class="img-responsive visible-xs" src="<?php echo base_url().'assets/images/banner-img-1-small.jpg';?>" width="1920" height="550" alt="">
      <div class="slider-caption">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 caption-body">
              <h2 class="title fadeInDownBig wow">NEW PRODUCTS</h2>
              <h1 class="title fadeInDownBig wow"> WOMEN COLLECTION 2015</h1>
              <p class="subtitle col-sm-9 fadeInUp wow hidden-xs">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae dictum felis eu pede mollis pretium integer tincidunt</p>
              <div class="clearfix"></div>
              <a class="btn btn-primary fadeInUp wow hvr-underline-from-center-primary hidden-xs" href="#"> <i class="rm-icon ion-android-checkmark-circle"></i>  </a> <a class="btn btn-default fadeInUp wow hvr-underline-from-center-default hidden-xs" href="#"> <i class="rm-icon ion-android-star"></i> <span>All Collections</span> </a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item"> <img class="img-responsive hidden-xs" src="<?php echo base_url().'assets/images/banner-img-2.jpg';?>" width="1920" height="540" alt="">
    <img class="img-responsive visible-xs" src="<?php echo base_url().'assets/images/banner-img-2-small.jpg';?>" width="1920" height="540" alt="">
      <div class="slider-caption">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 caption-body">
              <h2 data-animation="fadeInLeft" class="title fadeInDownBig text-primary">ENJOY SHOPPING</h2>
              <h1 data-animation="fadeInDownBig" class="title fadeInDownBig text-primary"> THE NEW COLLECTION</h1>
              <p data-animation="fadeInUp" class="subtitle col-sm-9  fadeInUp text-primary hidden-xs">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae dictum felis eu pede mollis pretium integer tincidunt</p>
              <div class="clearfix"></div>
              <a data-animation="fadeIn" class="btn btn-primary  fadeInUp hvr-underline-from-center-primary hidden-xs" href="#"> <i class="rm-icon ion-android-checkmark-circle"></i>  </a> <a data-animation="fadeIn" class="btn btn-default fadeInUp hvr-underline-from-center-default hidden-xs" href="#"> <i class="rm-icon ion-android-star"></i> <span>All Collections</span> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of banner-->



 <!--start of middle sec-->

  <div class="middle-se">
  <!--start of best deals-->
    <section class="container">
      <div class="row">
       <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">Top Coupons and Deals</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->

<!--
        <div id="best-deals" class="col-sm-12 wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
          <?php foreach ($c->result() as $row) { ?>

          <div class="product-item-container effect-wrap effect-animate">
            <div class="product-main">
              <div class="product-view">
                <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""></a></figure>
              </div>
              <div id="countdown-one" class="deal-counter">
                <p><span class="days">00</span> <span class="timeRefDays">days</span></p>
                <p><span class="hours">00</span> <span class="timeRefHours">hours</span></p>
                <p><span class="minutes">00</span> <span class="timeRefMinutes">min</span></p>
                <p><span class="seconds">00</span> <span class="timeRefSeconds">sec</span></p>
              </div>

            </div>
            <div class="product-info">
              <h3 class="product-name"><a href="<?php echo base_url().'Product/display_coupon' ?>"><?php echo $row->coupon_name; ?></a></h3>
            </div>
            <div class="product-evaluate text-info"> <a class="btn btn-default fadeInUp wow hvr-underline-from-center-default hidden-xs animated animated" href="<?php echo base_url().'Product/seeCouponCode'; ?>" style="visibility: visible;"> <i class="rm-icon ion-android-star"></i> <span>See Coupon Code</span> </a> </div>
          </div>

        <?php  } ?>
          </div> -->


                          <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->
                  <?php foreach($c->result() as $row) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrasp effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left"></span> </div>

                      <div class="product-btns  effect-content-inner">
                      <div class="col-sm-2 text-center left-bordered button_coupon"> <a class="btn btn-primary hvr-underline-from-center-primary login" href="javascript:void(0)" data-toggle="modal"data-target="#<?php echo $row->coupon_id; ?>">See Coupon</a> </div>


                      </div>
                    </div>


                  </div>


  <!--start of model box-->
  <div class="modal fade" id="<?php echo $row->coupon_id; ?>" tabindex="-1" role="dialog" aria-labelledby="loginboxLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-primary text-uppercase" id="loginboxLabel">Coupon</h4>
        </div>
        <div class="modal-body">
          <h5>Coupon Name:-<?php echo $row->coupon_name; ?></h5>
          <hr>
          <h3>Coupon Code:-<?php echo $row->coupon_code; ?></h3>

          <p class="item-description"> <?php echo $row->coupon_description; ?></p>

        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <!-- end model -->
                  <?php  } ?>

                </div>
          <!--end of product item container-->

      </div>
    </section>
     <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">Top Coupons and Deals</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
    <!--end of best deals-->
    <!--start of wide ad-->
   <!--  <section class="container">
      <div class="row">
         <div class="col-sm-12 wide-ad">
           <figure>
         <?php

         foreach ($logo as $logo_image) {

          ?>
          <img class="img-responsive" src="<?php echo base_url().$logo_image->banner;?>" width="1920" height="275" alt="">
            <?php echo base_url().$logo_image->banner;?>
            <?php } ?>
            <!-- <figcaption>
              <h2>Enjoy our <span>free shipping</span> for any order</h2>
              <p>Maecenas nec odio et ante tincidunt tempus</p>
              <a href="#">View more</a> </figcaption> --
          </figure>
         </div>
      </div>
    </section> -->

    <!--end of wide ad-->
    <!--start of new arrivals-->
    <section class="container">
      <div class="row">
        <!--start of big title-->

        <!-- <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">new arrivals</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div> -->
        <!--end of big title-->
        <div class="col-sm-12">
          <div id="new-arrivals" class="col-sm-12 accordion wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
            <div role="tabpanel">

              <!-- Nav tabs -->
              <!-- <div class="centered-pills">
                <ul id="new-items" class="nav nav-tabs nav-pills" role="tablist">
                  <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">men</a></li>
                  <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">women</a></li>
                  <li role="presentation"><a href="#children" aria-controls="children" role="tab" data-toggle="tab">children</a></li>
                  <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">accessories</a></li>
                </ul>
              </div> -->

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->
                  <?php foreach ($h->result() as $row) { ?>

                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row->product_image;  ?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row->product_image; ?>" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left"><?php echo $row->company_name;?></span> </div>
                     <!--  <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div> -->
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="<?php echo $row->product_link;  ?>"><?php echo $row->product_title;  ?></a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong><?php echo $row->product_price; ?></strong></span></span></div>
                  </div>
                      <?php  } ?>
                  <!--end of product item container-->

                  <!--end of product item container-->

                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="women"> <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-1.jpg" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left">polo shirts</span> </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong>$80.00</strong></span></span> </div>
                  </div>
                  <!--end of product item container-->

                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="children"> <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-8.jpg" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left">polo shirts</span> </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong>$80.00</strong></span></span></div>
                  </div>
                  <!--end of product item container-->

                  <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-7.jpg" width="215" height="240" alt=""></a></figure>
                      </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong>$80.00</strong></span></span> <span class="old-price">$75.00</span> </div>
                  </div>
                  <!--end of product item container-->

                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="accessories"> <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-1.jpg" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left">polo shirts</span> </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-primary"><span class="real-price text-info"><strong>$80.00</strong></span></span> <span class="old-price">$75.00</span> </div>
                  </div>
                  <!--end of product item container-->

                  <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-2.jpg" width="215" height="240" alt=""></a></figure>
                      </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-primary"><span class="real-price text-info"><strong>$80.00</strong></span></span> <span class="old-price">$75.00</span> </div>
                  </div>
                  <!--end of product item container-->

                  <!--start of product item container-->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="images\product-1-h.jpg" width="215" height="240" alt=""> <img class="top-img" src="images\product-2.jpg" width="215" height="240" alt=""></a></figure>
                      </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-primary"><span class="real-price text-info"><strong>$80.00</strong></span></span> <span class="old-price">$75.00</span> </div>
                  </div>
                  <!--end of product item container-->



                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of new arrivals-->
    <!--start of ad-boxes-->
    <section class="container">
      <div class="row">
      <?php foreach ($slider_image as  $image) {

           ?>
        <div class="col-sm-12 col-md-4 ">
          <div class="small-ad">

            <figure><img class="img-responsive" src="<?php echo base_url().$image->image;?>" width="370" height="200" alt="">

              <figcaption>

                <span class="start-price hvr-underline-from-center-primary">shop now</span> </figcaption>
            </figure>
          </div>
        </div>
        <?php } ?>

      </div>
    </section>
    <!--end of ad-boxes-->
    <!--start of brands-->
    <section class="container" data-speed="6">
      <div class="row">
        <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">our Stores</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
        <div id="brands" class="col-sm-12 opacity-eff wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
       <?php
       foreach ($s->result() as $row) { ?>

          <div><a href="#">
            <figure><img src="<?php echo base_url().$row->store_image; ?>" width="200" height="100" alt=""></figure><br/>
            <?php echo $row->store_name; ?></a></div>
     <?php } ?>
        </div>
      </div>
    </section>
    <!--end of brands-->

    <!--start of parallax subscribtion-->
    <div id="parallax" class="" data-speed="4">
      <section class="container">
        <div class="row">
          <div class="subscribe col-sm-12">
            <h3><span>lookbook sunglasses</span> <small>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus</small> </h3>

          </div>
        </div>
      </section>
    </div>

    <!--end of parallax subscribtion-->



  </div>
  <!--end of middle sec-->
