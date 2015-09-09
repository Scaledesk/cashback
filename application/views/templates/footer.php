<!--start of btm sec-->
  <div class="btm-sec">
    <footer>
      
      <div class="footer-middle wow fadeIn" data-wow-offset="40" data-wow-duration="2s">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-3">
              <h5 class="text-info text-uppercase">useful pages</h5>
              <ul class="list-unstyled nudge">
                <li><a href="text.html">About us</a> </li>
                <li><a href="text-left.html">Terms and conditions</a> </li>
                <li><a href="faqs.html">FAQ</a> </li>
                <li><a href="contact.html">Contact us</a> </li>
              </ul>
              
              
              <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="col-md-2 col-sm-3">
            <h5 class="text-info text-uppercase">User section</h5>
              <ul class="list-unstyled nudge">
                <li><a class="login" href="javascript:void(0)" data-toggle="modal" data-target="#login-box"> login</a> </li>
                <li><a href="<?php echo base_url().'auth/register';?>">Register</a> </li>
              </ul>
              <!--footer menu1-->
            </div>
            <div class="col-md-2 col-sm-3">
              <!--footer menu3-->
            </div>
            <div class="col-md-2 col-sm-3">
              <!--footer menu3-->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="row">
                <!--<div class="col-sm-12">
                  <h5 class="text-info text-uppercase">Get the news</h5>
                  <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  <form action="#" method="post" id="newsletter">
                    <div> <input type="text" name="email" id="newsletter-mail" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address" autocomplete="off">
                      <button type="submit" title="Subscribe" class="btn btn-primary pull-right"><span>Subscribe</span></button>
                    </div>
                  </form>
                  <hr>
                </div>-->
                <div class="col-sm-12">
                  <h5 class="text-info text-uppercase">Stay in touch</h5>
                  <ul class="list-inline social clearfix">
                    <li class="col-sm-4 facebook"><a href="#"> <span><i class="ion-social-facebook"></i></span>
                      <p>2598</p>
                      </a></li>
                    <li class="col-sm-4 twitter"><a href="#"> <span><i class=" ion-social-twitter"></i></span>
                      <p>4576</p>
                      </a></li>
                    <li class="col-sm-4 googleplus"><a href="#"> <span><i class=" ion-social-googleplus"></i></span>
                      <p>1269</p>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </footer>
  </div>
  <!--end of btm sec--> 
  <!--start of login box-->
  <div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="loginboxLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-primary text-uppercase" id="loginboxLabel">login your account</h4>
        </div>
        <div class="modal-body">
          <ul class="list-inline row">
            <li class="col-sm-4"> <a href="<?php echo base_url().'Facebook\facebook_login"'?>" class="btn btn-block btn-facebook  "><i class="ion-social-facebook"></i></a> </li>
            <li class="col-sm-4"> <a href="<?php echo base_url().'fbci\twitter_login"'?>" class="btn btn-block btn-twitter"><i class="ion-social-twitter"></i></a></li>
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
          <p class="text-center"><small>Forget your password? <a href="#">We can help!</a></small></p>
        </div>
      </div>
    </div>
  </div>
  <!--end of login box--> 
  
</div>
<!--end of content wrap--> 

<!--Start of go to top--> 
<a href="#0" class="cd-top"></a> 
<!--end of go to top--> 

<!--start of js--> 

<!--jQuery--> 
<script src="<?php echo base_url().'assets\js\jquery.min.js'?>"></script> 
<!--custom js--> 
<script src="<?php echo base_url().'assets\js\custom.js'?>"></script> 
<!--style switcher--> 
<script src="<?php echo base_url().'assets\js\style-switcher.js'?>"></script> 
<!--switches--> 
<script src="<?php echo base_url().'assets\js\switches.js'?>"></script> 
<!--slick carousel--> 
<script src="<?php echo base_url().'assets\js\slick.js'?>"></script> 
<!--wow animation--> 
<script src="<?php echo base_url().'assets\js\wow.min.js'?>"></script> 
<!--Bootstrap js--> 
<script src="<?php echo base_url().'assets\js\bootstrap.min.js'?>"></script> 
<!--navigation js--> 
<script src="<?php echo base_url().'assets\js\jquery.highlight.js'?>"></script> 
<script src="<?php echo base_url().'assets\js\jquery.touchSwipe.min.js'?>"></script> 
<script src="<?php echo base_url().'assets\js\line.js'?>"></script> 
<!--scrollbar js--> 
<script src="<?php echo base_url().'assets\js\nicescroll.js'?>"></script> 
<script src="<?php echo base_url().'assets\js\jquery.nicescroll.plus.js'?>"></script> 
<!--countdown counter--> 
<script src="<?php echo base_url().'assets\js\countdown.js'?>"></script> 
<!--color picker--> 
<script src="<?php echo base_url().'assets\js\jquery.simplecolorpicker.js'?>"></script> 
<!--image zoom--> 
<script src="<?php echo base_url().'assets\js\jquery.zoom.js'?>"></script> 
<!--go to top--> 
<script src="<?php echo base_url().'assets\js\to-top.js'?>"></script> 
<!--product items counter--> 
<script src="<?php echo base_url().'assets\js\jquery.charactercounter.js'?>"></script> 
<!--select--> 
<script src="<?php echo base_url().'assets\js\bootstrap-select.min.js'?>"></script> 
<!--price range slider--> 
<script src="<?php echo base_url().'assets\js\bootstrap-slider.js'?>"></script> 
<!--animated particles--> 
<script src="<?php echo base_url().'assets\js\jquery.particleground.js'?>"></script> 
<!--masonry--> 
<script src="<?php echo base_url().'assets\js\salvattore.js'?>"></script> 
<!--tab collapse--> 
<script src="<?php echo base_url().'assets\js\bootstrap-tabcollapse.js'?>"></script> 
<!--end of js-->
</body>
</html>