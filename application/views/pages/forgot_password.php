
    <section class="container">
      <div class="row">

        <div class="col-sm-12 equal-height-container">
          <div class="row">

            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?php echo base_url().'Auth/forgot_password'; ?>" name="" method="Post">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Forgot Password</legend>

                          <label class="control-label">Please enter your Email so we can send you an email to reset your password.</label>

<br/><br/><br/>
						<div class="form-group">
                          <label class="control-label" for="">Your Email</label>
                          <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>


                      </fieldset>


                      <!-- START Payment infromation -->


                      <!-- END Payment information-->
                    </div>
<br/>
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
