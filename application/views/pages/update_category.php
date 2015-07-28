
<!--start of middle sec-->
  <div class="middle-sec wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
    <div id="particles">
      <div id="not-found" class="wow fadeInDown text-center container">
        <div class="reset">
          <h2 class="text-primary text-uppercase">Add Category</h2>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <form method="post" id="track-order" action="<?=(base_url().'Product/update_category/'.$cg[0]->category_id)?>" method="post" accept-charset="UTF-8">
            <div class=" form-group">
              <label class="sr-only" for="order-id">Category Title</label>
              <input type="text" class="form-control" value="<?php echo $cg[0]->category_title;?>" name="category_title" id="order-id" required="">
            </div>
            <div class=" form-group">
              <label class="sr-only" for="billing-mail">Category Description</label>
              <textarea class="form-control" rows="5" cols="40"  name="category_description" id="" required=""><?php echo $cg[0]->category_description;?></textarea>
            </div>
            <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end of middle sec-->