<table>
     <?php 
                                           foreach($cg->result() as $row)
                                            {
                                               
                                             ?>
                                                        
                                                        <tr>
                          <td><?php echo $row->category_title; ?></td>
                          <td><?php echo $row->category_description; ?></td>
                                                    
                          
                                 <td><a href="<?=(base_url().'product/select_update_category/')?><?php echo $row->category_id; ?>">Update</a>/<a href="<?=(base_url().'product/delete_category/')?><?php echo $row->category_id; ?>">Delete</a></td>
                              </tr>
                                                <?php } ?>

 
</table>