
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