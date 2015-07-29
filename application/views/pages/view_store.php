<div class="col-sm-8 col-md-9 sub-data-left main-sec">
  <div class="row">


    <table border='1'>
        <tr>
          <td>S. No.</td>
          <td>Name</td>
          <td>Description</td>
          <td>Link</td>
          <td>Image</td>
          <td>Action</td>
        </tr>

         <?php $i=0;
                                               foreach($s->result() as $row)
                                                {
                                                  $i++;
                                                 ?>

                              <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $row->store_name; ?></td>
                              <td><?php echo $row->store_description; ?></td>
                              <td><?php echo $row->store_link; ?></td>
                              <td> <img src="<?php echo $row->store_image; ?>" style="height:100px;width:100px" /> </td>


                                     <td><a href="<?=(base_url().'Store_control/editStore/'.$row->store_id)?>">Update</a>
                                     /<a href="<?=(base_url().'Store_control/deleteStore/'.$row->store_id)?>">Delete</a></td>
                                  </tr>
                                                    <?php } ?>


    </table>



  </div>
</div>
</div>
</div>
</div>
</section>
</div>
<!--end of middle sec-->
