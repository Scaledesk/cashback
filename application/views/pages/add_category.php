
 <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'Product/add_category')?>" name="" method="Post">
                    <div class="row-center">
                      <div><?php error_reporting(0); if($msg!='') echo $msg; ?></div>
                      <div class="col-sm-8">
                        <fieldset>
                          <legend>Category Title</legend>
                          <div><p style="color=red"<?php error_reporting(0); if($msg!='') echo $msg; ?></div>
                          <input type="text" maxlength="60" placeholder="Category Title" name="category_title" id="ccv" class="form-control" required="">
                          <hr>
                        </fieldset>
                      </div>
                    <div class="row-center">
                      <div class="col-sm-8">
                        <fieldset>
                          <legend>Categories Descritpion</legend>
                          <textarea class="form-control" placeholder="Categories Descritpion" rows="5" cols="100" name="category_description" id="" required=""></textarea>
                          <hr>
                        </fieldset>
                      </div>

                      <div class="col-sm-6 text-center">
                        <input class="btn btn-primary hvr-underline-from-center-primary " type="submit" value="Add Category">
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


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end of middle sec-->
