
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
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   foreach($cg->result() as $row) {?>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><?php echo $row->category_title; ?></td>
                                                <td><?php echo $row->category_description; ?></td>
                                                 <td><a href="<?=(base_url().'product/select_update_category/')?><?php echo $row->category_id; ?>">Update</a>/
                                                 <a href="<?=(base_url().'product/delete_category/')?><?php echo $row->category_id; ?>">Delete</a></td>
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