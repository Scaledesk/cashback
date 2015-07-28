<!--start of middle sec-->
  <div class="middle-sec wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">Product Category</h2>
        
      </div>
    </div>
    <section class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="inner-ad">
            <figure><img class="img-responsive" src="images\inner-ad.jpg" width="1170" height="100" alt=""></figure>
          </div>
        </div>
        <div class="col-sm-12 equal-height-container">
          <div class="row">
            <div class="col-sm-4 col-md-3 sub-data-left sub-equal">
              <div id="sticky">
                <section class="col-sm-12">
                  <h5 class="sub-title text-info text-uppercase">order summary</h5>
                  <ul class="list-group summary">
                    <li class="list-group-item text-uppercase"><strong>items:<span class="pull-right"> 4</span></strong></li>
                    <li class="list-group-item text-uppercase"><strong>subtotal:<span class="pull-right"> $8.99</span></strong></li>
                    <li class="list-group-item text-uppercase"><strong>taxes (5%): <span class="pull-right">$0.45</span></strong></li>
                    <li class="list-group-item text-uppercase"><strong>shipping: <span class="pull-right">$5</span></strong></li>
                  </ul>
                </section>
                <section class="col-sm-12">
                  <h5 class="sub-title text-info text-uppercase">total price</h5>
                  <div class=" summary sum js-total text-center"> <strong> $114.44</strong> </div>
                  <button class="btn btn-block btn-default hvr-underline-from-center-default"><i class="rm-icon ion-arrow-return-left"></i> return to cart</button>
                </section>
              </div>
            </div>
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row"> 
                
                
                <!--end of breadcrumb--> 
                
                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Product/add_product/'.$cg[0]->product_id)?>" enctype="multipart/form-data" method="post">
                    <div class="row"> 
                      
                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Select Category And Product Title</legend>
                        
                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="card">Select Category</label>

                          <select class="selectpicker" id="" name="category" required="">
                           <option value="">select</option>
                                       <?php 
                                            foreach($cg->result() as $row)
                                            {
                                          ?>
                                               

                            <option value="<?php echo $row->category_id; ?>"><?php echo $row->category_title; ?></option>
                            
                            <?php }?>
                          </select>
                        </div>
                        
                        <!-- Product Title -->
                        <div class="form-group">
                          <label class="control-label" for="address">Product Title</label>
                          <input type="text" id="" name="product_title" class="form-control" value="<?php echo $cg[0]->product_title;?>" required="">
                        </div>
                        
                        
                      </fieldset> 
                      
                      
                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>Price And Image</legend>
                        
                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Price</label>
                          <input type="text" id="" name="price" class="form-control" value="<?php echo $cg[0]->product_price;?>" required="">
                        </div>
                        
                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Image</label>
                          <input type="file"  name="product_image"  value="<?php echo $cg[0]->product_image;?>" class="form-control" required="">
                        </div>
                                                              
                      <!-- END Payment information--> 
                    </div>
                   
                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
                      <div class="col-sm-12">
                        <fieldset>
                          <legend>Link</legend>
                          <textarea class="form-control" rows="5" cols="40"  name="link" id="comment-body" required=""><?php echo $cg[0]->product_link;?></textarea>
                          <hr>
                        </fieldset>
                      </div>
                      <div class="col-sm-6">
                        
                      </div>
                      <div class="col-sm-6 text-right">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " name="submit" value="Update">
                      </div>
                    </div>
                  </form>
                </div>
                
                <!--end of checkout--> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end of middle sec--> 