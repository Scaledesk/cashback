
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Product/add_product/')?>" enctype="multipart/form-data" method="post">
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
                          <input type="text" id="" name="product_title" class="form-control" placeholder="Product Title" required="">
                        </div>
                            

                          <legend>Link</legend>
                          <textarea class="form-control" rows="5" cols="40" placeholder="Link" name="link" id="comment-body" required=""></textarea>
                        

                      </fieldset>


                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>Price And Image</legend>

                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Price</label>
                          <input type="text" id="" name="price" class="form-control" placeholder="Price" required="">
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Image</label>
                          <input type="file"  name="product_image" class="form-control" required="">
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="address">Company Name</label>
                          <input type="test"  name="company_name" class="form-control" required="">
                        </div>
                        <div class="col-sm-6 text-right">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " name="submit" value="Submit">
                      </div>
                      </fiedset>
                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    <!-- <div class="row">
                      <div class="col-sm-12">
                        <fieldset>
                          <legend>Link</legend>
                          <textarea class="form-control" rows="5" cols="40" placeholder="Link" name="link" id="comment-body" required=""></textarea>
                          <hr>
                        </fieldset>
                      </div>
                      
                      <div class="col-sm-6 text-right">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " name="submit" value="Submit">
                      </div>
                    </div> -->
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
