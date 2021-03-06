 <!--start of new arrivals-->
    <section class="container">
      <div class="row">
        <!--start of big title-->

        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">coupon</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
        <div class="col-sm-12">
          <div id="new-arrivals" class="col-sm-12 accordion wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
            <div role="tabpanel">

              <!-- Nav tabs -->
              <div class="centered-pills">
               <!--  <ul id="new-items" class="nav nav-tabs nav-pills" role="tablist">
                  <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">men</a></li>
                 </ul> -->
              </div>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->
                  <?php foreach($cu->result() as $row) { ?>
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

                  <?php  } ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--start of model box-->
    <?php foreach($cu->result() as $row) { ?>
    <div class="modal fade" id="<?php echo $row->coupon_id; ?>" tabindex="" role="dialog" aria-labelledby="" aria-hidden="true" style="position:fixed; z-index:99999;">
      <?php if($this->ion_auth->logged_in()) { ?>

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
      <?php }
      else{ ?>

        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-primary text-uppercase" id="loginboxLabel">First login to see code</h4>
            </div>
            <div class="modal-body">
              <ul class="list-inline row">
                <li class="col-sm-4"> <a href="<?php echo base_url().'Facebook\facebook_login"'?>" class="btn btn-block btn-facebook  "><i class="ion-social-facebook"></i></a> </li>
                <!-- <li class="col-sm-4"> <a href="<?php echo base_url().'fbci\twitter_login"'?>" class="btn btn-block btn-twitter"><i class="ion-social-twitter"></i></a></li> -->
                <li class="col-sm-4"> <a href="<?php echo base_url().'fbci\google_login"'?>" class="btn btn-block btn-google"><i class="ion-social-google"></i></a></li>
              </ul>
              <hr>
              <form method="post" id="login-form" action="<?=(base_url().'auth/login/')?>" accept-charset="UTF-8">
                <div class=" form-group">
                  <label class="control-label" for="identity">Your name</label>
                  <input type="text" class="form-control" value="" name="identity" id="login-name" required="">
                </div>
                <div class="form-group">
                  <label class="control-label text-uppercase" for="login-password">Your password</label>
                  <input type="password" class="form-control" value="" name="password" id="login-password" required="">
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="logincheckbox" value="option1" name="remember">
                  <label for="remember"> Remember me </label>
                </div>
                <button class="btn btn-block btn-primary hvr-underline-from-center-primary" id="login-submit" type="submit">login</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="text-center"><small><a href="<?php echo base_url().'Auth/forgot_password'; ?>"> Forget your password? </a> <a href="#">We can help!</a></small></p>
            </div>
          </div>
        </div>

    <?php } ?>

    </div>
    <!-- end model -->
<?php } ?>


    <!--end of new arrivals-->
