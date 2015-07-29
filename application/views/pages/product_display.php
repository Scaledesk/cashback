<!--start of middle sec-->
  <div class="middle-sec wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">Category Display</h2>
        
      </div>
    </div>
    <section class="container">
      <div class="row">
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
                
                 <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Product Category</th>
                                                <th>Link</th>
                                                <th>Price</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                foreach($cg->result() as $row) {?>
                              

                          <tr>
                          <td><?php echo $row->product_category; ?></td>
                          <td><a href='<?php echo $row->product_link; ?>'>click me</a></td>
                           <td><?php echo $row->product_price; ?></td>
                          <td><?php echo $row->product_title; ?></td>
                          <td><img src="<?php echo $row->product_image; ?>"style="height:100px;width=100px" ></td>
                                                
                          
  <td><a href="<?=(base_url().'product/select_update_product/')?><?php echo $row->product_id; ?>">Update</a>/<a href="<?=(base_url().'product/delete_product/')?><?php echo $row->product_id; ?>">Delete</a></td>
      </tr>
        <?php } ?>

                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                        </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end of middle sec-->