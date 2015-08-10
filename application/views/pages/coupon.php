<!--start of middle sec-->
  <div class="middle-sec wow fadeIn animated animated" data-wow-offset="10" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">Coupons</h2>
        
      </div>
    </div>
    <section class="container">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="inner-ad">
            <figure><img class="img-responsive" src="images\inner-ad.jpg" width="1170" height="100" alt=""></figure>
          </div>
        </div>
        
        <!--main sec start-->
        
        <div class="col-sm-12 main-sec">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb  dashed-border">
                <li><a href="#">Home</a></li>
                <li class="active">Coupons</li>
              </ol>
            </div>
            <div class="col-sm-12">
              <h4 class="sub-title text-primary text-uppercase">Coupons</h4>
              <ul class="item-list list-group">

                    <?php 
          //          echo "<pre>";
            //         print_r($cu->result());
        //             die();
                    foreach($cu->result() as $row) { 

                      ?>
                <li class="item list-group-item  clearfix">
                  <div class="item-information">

                     
                    
                    <div class="row">
                      <div class="item-image col-sm-2"> <img class="img-responsive" src='<?php echo base_url().$row->coupon_url;?>' width="126" height="144" alt=""> </div>
                      <div class="item-body col-sm-8">
                      <h5 class="item-title text-primary text-uppercase text-primary text-uppercase"><a href="#"><?php echo $row->coupon_name; ?></a></h5>
                      <p class="item-description"> <?php echo $row->coupon_description; ?></p>
                     </div>
                      <div class="item-price js-item-price col-sm-2 text-info text-center" data-price="11.99"> <strong>$1199</strong> </div>
                    </div>

                    
                      
                    
                  
                  <div class="item-interactions">
                    <div class="row">
                      <div class="col-sm-2 text-info text-center right-bordered"> </div>
                      <div class="col-sm-8">
                        
                      </div>
                      <div class="col-sm-2 text-center left-bordered"> <a class="btn btn-primary hvr-underline-from-center-primary login" href="javascript:void(0)" data-toggle="modal"data-target="#model_box">See Coupon</a> </div>
                    </div>
                  </div>

                </li>




  <!--start of model box-->
  <div class="modal fade" id="model_box" tabindex="-1" role="dialog" aria-labelledby="loginboxLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-primary text-uppercase" id="loginboxLabel">Coupon</h4>
        </div>
        <div class="modal-body">
          
          <hr>
          <?php echo $row->coupon_name; ?>
          <p class="item-description"> <?php echo $row->coupon_description; ?></p>
          
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>
  <!-- end model -->

                <?php } ?>
                
              </ul>

            </div>
            </div>
            </div>
            
            <!--start of pagination-->
            
            <div class="col-sm-12">
              <nav role="navigation">
                <ul class="cd-pagination">
                  <li class="button"><a href="#0">Prev</a> </li>
                  <li><a href="#0">1</a> </li>
                  <li><a href="#0">2</a> </li>
                  <li><a class="current" href="#0">3</a> </li>
                  <li><a href="#0">4</a> </li>
                  <li><span>...</span> </li>
                  <li><a href="#0">20</a> </li>
                  <li class="button"><a href="#0">Next</a></li>
                </ul>
              </nav>
            </div>
            <!--end of pagination--> 
          </div>
        </div>
        
        <!--main sec end--> 
        
      </div>
    </section>
  </div>
  <!--end of middle sec-->


  <!-- end model box -->
