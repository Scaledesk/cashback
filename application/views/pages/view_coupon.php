<div class="col-sm-8 col-md-9 sub-data-left main-sec">
  <div class="row">


    <table>
        <tr>
          <td>S. No.</td>
          <td>Name</td>
          <td>Company</td>
          <td>Category</td>
          <td>Code</td>
          <td>Description</td>
          <td>Offer</td>
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
                                <td><?php echo $row->coupon_name; ?></td>
                                <td><?php echo $row->coupon_company; ?></td>
                                <td><?php echo $row->coupon_category_id; ?></td>
                                <td><?php echo $row->coupon_code; ?></td>
                                <td><?php echo $row->coupon_description; ?></td>
                                <td><?php echo $row->coupon_offer; ?></td>
                                <td><img src="<?php echo $row->coupon_url; ?>" style="height:100px;width:100px" /> </td>
                                     <td><a href="<?=(base_url().'Coupon_control/editCoupon/'.$row->coupon_id)?>">Update</a>
                                     /<a href="<?=(base_url().'Coupon_control/deleteCoupon/'.$row->coupon_id)?>">Delete</a>
                                   </td>
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
