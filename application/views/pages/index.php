
<!--start of banner-->
  <div id="banner">
    <div class="item"> <img class="img-responsive hidden-xs" src="<?php echo base_url().'assets/images/banner-img-1.jpg';?>" width="1920" height="550" alt="">
    <img class="img-responsive visible-xs" src="<?php echo base_url().'assets/images/banner-img-1-small.jpg';?>" width="1920" height="550" alt="">
      <div class="slider-caption">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 caption-body">
              <h2 class="title fadeInDownBig wow">NEW PRODUCTS</h2>
              <h1 class="title fadeInDownBig wow"> WOMEN COLLECTION 2015</h1>
              <p class="subtitle col-sm-9 fadeInUp wow hidden-xs">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut imperdiet a venenatis vitae dictum felis eu pede mollis pretium integer tincidunt</p>
              <div class="clearfix"></div>
              <a class="btn btn-primary fadeInUp wow hvr-underline-from-center-primary hidden-xs" href="#"> <i class="rm-icon ion-android-checkmark-circle"></i> <span>Discover Now</span> </a> <a class="btn btn-default fadeInUp wow hvr-underline-from-center-default hidden-xs" href="#"> <i class="rm-icon ion-android-star"></i> <span>All Collections</span> </a> </div>
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
              <a data-animation="fadeIn" class="btn btn-primary  fadeInUp hvr-underline-from-center-primary hidden-xs" href="#"> <i class="rm-icon ion-android-checkmark-circle"></i> <span>Discover Now</span> </a> <a data-animation="fadeIn" class="btn btn-default fadeInUp hvr-underline-from-center-default hidden-xs" href="#"> <i class="rm-icon ion-android-star"></i> <span>All Collections</span> </a> </div>
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
          </div>
          <!--end of product item container-->

      </div>
    </section>
    <!--end of best deals-->
    <!--start of wide ad-->
    <section class="container">
      <div class="row">
        <div class="col-sm-12 wide-ad">
          <figure class="effect-layla"> <img class="img-responsive hidden-xs" src="images\wide-ad-img.gif" width="1920" height="275" alt="">
          <img class="img-responsive visible-xs" src="images\wide-ad-img-small.png" width="1920" height="275" alt="">
            <figcaption>
              <h2>Enjoy our <span>free shipping</span> for any order</h2>
              <p>Maecenas nec odio et ante tincidunt tempus</p>
              <a href="#">View more</a> </figcaption>
          </figure>
        </div>
      </div>
    </section>
    <!--end of wide ad-->
    <!--start of new arrivals-->
    <section class="container">
      <div class="row">
        <!--start of big title-->

        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">new arrivals</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
        <div class="col-sm-12">
          <div id="new-arrivals" class="col-sm-12 accordion wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
            <div role="tabpanel">

              <!-- Nav tabs -->
              <div class="centered-pills">
                <ul id="new-items" class="nav nav-tabs nav-pills" role="tablist">
                  <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">men</a></li>
                  <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">women</a></li>
                  <li role="presentation"><a href="#children" aria-controls="children" role="tab" data-toggle="tab">children</a></li>
                  <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">accessories</a></li>
                </ul>
              </div>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->
                  <?php foreach ($h->result() as $row) { ?>

                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row->product_image;  ?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row->product_image; ?>" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left">polo shirts</span> </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><?php echo $row->product_link;  ?></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong><?php echo $row->product_price; ?></strong></span></span> <span class="old-price"><?php echo $row->product_price; ?></span> </div>
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
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong>$80.00</strong></span></span> <span class="old-price">$75.00</span> </div>
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
        <div class="col-sm-12 col-md-4 ad-box-outer">
          <div class="small-ad">
            <figure class="effect-layla"><img class="img-responsive" src="images\ad-box-1.jpg" width="370" height="200" alt="">
              <figcaption>
                <h3><span>men</span> collection</h3>
                <p>Maecenas nec odio et ante tincidunt tempus </p>
                <span class="start-price hvr-underline-from-center-primary">shop now</span> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 ad-box-outer">
          <div class="small-ad">
            <figure class="effect-layla"><img class="img-responsive" src="images\ad-box-2.jpg" width="370" height="200" alt="">
              <figcaption>
                <h3><span>women</span> collection</h3>
                <p>Maecenas nec odio et ante tincidunt tempus </p>
                <span class="start-price hvr-underline-from-center-primary">shop now</span> </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 ad-box-outer">
          <div class="small-ad">
            <figure class="effect-layla"><img class="img-responsive" src="images\ad-box-3.jpg" width="370" height="200" alt="">
              <figcaption>
                <h3><span>juniors</span> collection</h3>
                <p>Maecenas nec odio et ante tincidunt tempus </p>
                <span class="start-price hvr-underline-from-center-primary">shop now</span> </figcaption>
            </figure>
          </div>
        </div>
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
            <div class="subscribe-icn"> <a class="btn btn-primary hvr-underline-from-center-primary" href="#">Discover Now</a> </div>
          </div>
        </div>
      </section>
    </div>

    <!--end of parallax subscribtion-->

    <!--start of best selling-->
    <section class="container" data-speed="2">
      <div class="row">
        <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">best selling</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
        <div class="col-sm-12">
          <ul class="row list-inline best-selling wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-1.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-2.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span> </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-3.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-4.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-5.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span> </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-sm-6 col-md-4">
              <div>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <figure><img class="img-responsive" src="images\s-6.jpg" width="200" height="230" alt=""></figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h3 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <div class="product-price"> <span class="real-price text-info"><strong>$600</strong></span> <span class="old-price"><del>$790</del></span> </div>
                    <div class="product-evaluate text-info"><span><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span> </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--end of best selling-->

    <!--start of latest from the blog-->

    <section class="container">
      <div class="row">
        <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">from the blog</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">
                <figure><a href="post-details.html"><img class="img-responsive" src="images\general-3.jpg" width="1024" height="683" alt=""></a></figure>
                <div class="caption">
                  <h4 class="text-uppercase"><a href="post-details.html">Aenean imperdiet. Etiam ultricies nisi vel</a></h4>
                  <div class="blog-info">
                    <p class="text-muted"><span>By <a href="#">WebyZona</a> / In: <a href="#">Fashion</a> / <a href="#">3 Comments</a></span></p>
                  </div>
                  <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet</p>
                  <hr>
                  <a href="post-details.html" class="btn btn-primary hvr-underline-from-center-primary">read more</a> </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">
                <figure><a href="post-details.html"><img class="img-responsive" src="images\blog-img-2.jpg" width="800" height="532" alt=""></a></figure>
                <div class="caption">
                  <h4 class="text-uppercase"><a href="post-details.html">Donec pede justo, fringilla vel aliquet nec</a></h4>
                  <div class="blog-info">
                    <p class="text-muted"><span>By <a href="#">WebyZona</a> / In: <a href="#">Fashion</a> / <a href="#">3 Comments</a></span></p>
                  </div>
                  <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet</p>
                  <hr>
                  <a href="post-details.html" class="btn btn-primary hvr-underline-from-center-primary">read more</a> </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">
                <figure><a href="post-details.html"><img class="img-responsive" src="images\blog-img-3.jpg" width="1024" height="683" alt=""></a></figure>
                <div class="caption">
                  <h4 class="text-uppercase"><a href="post-details.html">Aenean leo ligula porttitor eu consequat vitae</a></h4>
                  <div class="blog-info">
                    <p class="text-muted"><span>By <a href="#">WebyZona</a> / In: <a href="#">Fashion</a> / <a href="#">3 Comments</a></span></p>
                  </div>
                  <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet</p>
                  <hr>
                  <a href="post-details.html" class="btn btn-primary hvr-underline-from-center-primary">read more</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--end of blatest from the blogs-->

  </div>
  <!--end of middle sec-->
