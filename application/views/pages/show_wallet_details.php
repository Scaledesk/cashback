
            <div class="col-sm-12 col-md-12 sub-data-left main-sec">
              <div class="row">

               <h2> Wallet Details</h2>
                <!--end of breadcrumb-->

                 <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">

                                </div>
                                <div class="panel-body">
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
