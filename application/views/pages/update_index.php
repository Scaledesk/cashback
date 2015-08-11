
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Product/logo_banner/')?>" enctype="multipart/form-data"  method="Post">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Logo and Banner </legend>

                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="address">Logo Inage </label>
                           <input type="file" id="" name="logo" class="form-control" placeholder="Image" required="">
                        </div>

                        <!-- Product Title -->
                        <div class="form-group">
                        <label class="control-label" for="address">Banner Image</label>
                          <input type="file" id="" name="banner_image"class="form-control" placeholder="Image" required="">
                          
                        </div> 

                          <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="Submit">
                      </fieldset>
                          </form>
                           <form role="form" action="<?=(base_url().'Product/slider_image/')?>" enctype="multipart/form-data"  method="Post">
                            <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                         <legend> Slider and Image </legend>

                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Slider Image</label>
                          <input type="file" id="" name="slider_image"  class="form-control" placeholder="Image" required="">
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Images</label>
                          <input type="file" id="" name="image"  class="form-control" placeholder="Image" required="">
                        </div>
                          <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="Submit">
                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    <div class="row">
                       <div class="col-sm-6 text-right">
                       
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
