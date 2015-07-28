<table>
     <?php   foreach($cg->result() as $row) {?>
                                                        
                                                        <tr>
                          <td><?php echo $row->product_category; ?></td>
                          <td><?php echo $row->product_link; ?></td>
                           <td><?php echo $row->product_price; ?></td>
                          <td><?php echo $row->product_title; ?></td>
                          <td><img src="<?php echo $row->product_image; ?>"></td>
                                                
                          
  <td><a href="<?=(base_url().'product/select_update_category/')?><?php echo $row->product_id; ?>">Update</a>/<a href="<?=(base_url().'product/delete_category/')?><?php echo $row->product_id; ?>">Delete</a></td>
      </tr>
        <?php } ?>

 
</table>