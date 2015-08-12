
                 <!-- Nav tabs -->
                <div class="centered-pills">

                <ul id="new-items" class="nav nav-tabs nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Wallet Details</a></li>
                <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">Pending</a></li>
                <li role="presentation"><a href="#children" aria-controls="children" role="tab" data-toggle="tab">Available</a></li>
                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">In Progress</a></li>
                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Paid</a></li>
                </ul>
                </div>

                          <!-- Tab panes -->
              <div class="tab-content">

                <div role="tabpanel" class=" row tab-pane fade in active clearfix" id="men">
                  <!--start of product item container-->

            


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item-container effect-wrap effect-animate">
                   
                <!-- wallet details start -->
             
               <div class="show_wallet_details">
               <h2> Wallet Details</h2>
                <!--end of breadcrumb-->

                                    <table class="table">
                                    
                                        <thead>
                                            <tr>

                                                
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                foreach($wallet_data as $row) {
                                  $olddate=$row->wallet_date;
                         // $newdate=date_format($olddate, 'Y-m-d');
                                   
                                  ?>
                                
                            <tr>
                           <td><?php echo $row->add_amount; ?></td>
                          <td><?php echo date ("d/m/Y ",strtotime($row->wallet_date)); ?></td>
                           <td><?php echo $row->wallet_description; ?></td>
                                                    
                            </tr>
        <?php } ?>



                                        </tbody>
                                    </table>
                                
                <!-- wallet details end -->


            </div>
          </div>

                  <!--end of product item container-->
                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="women"> <!--start of product item container-->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item-container effect-wrap effect-animate">


          <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>


          </div>
                  <!--end of product item container-->


                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="children"> <!--start of product item container-->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item-container effect-wrap effect-animate">

          <h3>It is a long established fact that a reader will be distracted by the readable content of a page </h3>
          </div>
                  <!--end of product item container-->



                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade in clearfix" id="accessories"> <!--start of product item container-->
                   <!--start of product item container-->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-item-container effect-wrap effect-animate">

            <h3>It is a long established fact that a reader will be distracted by the readable content of a page </h3>


          </div>
                  <!--end of product item container-->



                  <div class="col-xs-12">
                    <div class="load-more"><a href="#" class="ion-ios-plus"></a></div>
                  </div>
                  <div class="col-xs-12">
                    <div class="load-less"><a href="#" class="ion-minus-circled"></a></div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      </div>







  <!--end of middle sec-->
