  <!--start of middle sec-->

            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Store_control/do_add_store')?>" method="post" enctype="multipart/form-data">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Add Store Name And Link</legend>

                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="address">Store Name</label>
                          <input type="text" id="" name="store_name" class="form-control" placeholder="Name" required="">
                        </div>

                        <!-- Product Title -->
                        <div class="form-group">
                          <label class="control-label" for="address">Store Link</label>
                          <textarea class="form-controle" placeholder="Store Link" name="store_link" required="" maxlength='500' style="margin: 0px; width: 407px; height: 127px;"></textarea>
                        </div>


                      </fieldset>


                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>Image And Store Desciption</legend>

                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Image</label>
                          <input type="file" id="store_image" name="" class="form-control" placeholder="Image" required="">
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Store Desciption</label>
                          <textarea class="form-controle" name="store_description" placeholder="Store Desciption" required="" maxlength='500' style="margin: 0px; width: 407px; height: 127px;"></textarea>
                        </div>

                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
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
