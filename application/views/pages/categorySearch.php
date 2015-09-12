

  <div class="middle-se">
  <!--start of best deals-->
    <section class="container">
      <div class="row">
       <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">Top Coupons and Deals <?php  ?></h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->


        <div id="best-deals" class="col-sm-12 wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
        <?php foreach ($resultData['coupon'] as $row) { ?>

          <div class="product-item-container effect-wrap effect-animate">
            
            <div class="product-main">
              <div class="product-view">
                <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row->coupon_url;?>" width="215" height="240" alt=""></a></figure>
              </div>


            </div>
            <div class="product-info">
              <h3 class="product-name"><a href="<?php echo base_url().'Product/display_coupon' ?>"><?php echo $row->coupon_name; ?></a></h3>
            </div>
            <div class="product-evaluate text-info"> <a class="btn btn-default fadeInUp wow hvr-underline-from-center-default hidden-xs animated animated" href="<?php echo base_url().'Product/seeCouponCode'; ?>" style="visibility: visible;"> <i class="rm-icon ion-android-star"></i> <span>See Coupon Code</span> </a><span> <?php echo 'Category '.$row->category_title; ?> </span> </div>
          </div>

        <?php  } ?>
          </div>
          <!--end of product item container-->

      </div>
    </section>
    <!--end of best deals-->

    <!--start of new arrivals-->
    <section class="container">
      <div class="row">
        <!--start of big title-->
        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">Products Details  </h3>
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
                </ul>
              </div>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->
                  <?php foreach ($resultData['product']as $row) { ?>

                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 product-item-container effect-wrap effect-animate">
                    <div class="product-main">
                      <div class="product-view">
                        <figure class="double-img"><a href="#"><img class="btm-img" src="<?php echo base_url().$row['product_image'];  ?>" width="215" height="240" alt=""> <img class="top-img" src="<?php echo base_url().$row['product_image']; ?>" width="215" height="240" alt=""></a></figure>
                        <span class="label offer-label-left">polo shirts</span> </div>
                      <div class="product-btns  effect-content-inner">
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                        <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                        <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                      </div>
                    </div>
                    <div class="product-info">
                      <h3 class="product-name"><?php echo $row['product_link'];  ?></h3>
                    </div>
                    <div class="product-price"><span class="real-price text-info"><span class="real-price text-info"><strong><?php echo 'Rs '.$row['product_price']; ?></strong></span></span> <span class="old-price"><?php echo 'Category '.$row['category_title']; ?></span> </div>
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





              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of new arrivals-->



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
