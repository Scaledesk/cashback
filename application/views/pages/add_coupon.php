<!--start of middle sec-->

            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Coupon_control/do_add_coupon')?>" method="post" enctype="multipart/form-data">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Name And Coupon Category Name</legend>

                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="address">Name</label>
                          <input type="text" id="" name="coupon_name" class="form-control" placeholder="Name" required="">
                        </div>

                        <!-- Product Title -->
                        <div class="form-group">
                          <label class="control-label" for="address">Company Name</label>
                          <input type="text" id="" name="coupon_company" class="form-control" placeholder="coupon company Name" required="">
                        </div>


                      </fieldset>


                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>Coupon Category And Coupon Code</legend>

                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="card">Coupon Category</label>
                          <select class="selectpicker" id="" name="coupon_category_id" required="">
                            <option value="1">MasterCard</option>
                            <option value="2">Visa</option>

                          </select>
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Coupon Code</label>
                          <input type="text" id="" name="coupon_code" class="form-control" placeholder="Coupon Code" required="">
                        </div>

                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
                      <div class="col-sm-12">
                        <fieldset>
                          <textarea class="form-control" rows="5" cols="40" placeholder="Coupon Desciption" name="coupon_description" id="comment-body" required=""></textarea>
                          <legend>Coupon Desciption</legend>
                          <hr>
                        </fieldset>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label" for="address">Coupon Offer</label>
                          <input type="text" id="" name="coupon_offer" class="form-control" placeholder="Coupon Offer" required="">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="address">Image</label>
                          <input type="file"  name="coupon_image" class="form-control" required="">
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="Submit">
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
