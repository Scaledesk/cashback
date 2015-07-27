<?php
include_once("header.php")

?>



<!--start of middle sec-->
  <div class="middle-sec wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
    <div id="particles">
      <div id="not-found" class="wow fadeInDown text-center container">
        <div class="reset">
          <h2 class="text-primary text-uppercase">Track your order</h2>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <form method="post" id="track-order" action="#" accept-charset="UTF-8">
            <div class=" form-group">
              <label class="sr-only" for="order-id">Order ID</label>
              <input type="text" class="form-control" value="" name="" id="order-id" placeholder="Order ID" required="">
            </div>
            <div class=" form-group">
              <label class="sr-only" for="billing-mail">Billing Email</label>
              <input type="email" class="form-control" value="" name="" id="billing-mail" placeholder="Billing Email" required="">
            </div>
            <button class="btn btn-primary hvr-underline-from-center-primary" id="reset-submit" type="submit">track</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end of middle sec--> 
  
  <?php
include_once("footer.php")

?>