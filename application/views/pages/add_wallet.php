<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">
                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12">
                  <form role="form" action="<?=(base_url().'User/do_add_wallet')?>" name="WalletForm" method="Post">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>User Name And Ammount</legend>
                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="card">User Name</label>
                          <select class="selectpicker" id="card" name="user_id" onchange="loadamount(this)">
                            <?php foreach ($user->result() as $row) { ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->username; ?></option>
                            <?php } ?>
                          </select>
                        </div>

                        <!-- Product Title -->
                        <div class="form-group">
                          <label class="control-label" for="address">Awailable Ammount</label>
                          <input type="text" id="amt" readonly name="available_amount" class="form-control" placeholder="" required="">
                        </div>
                         <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Add Ammount</label>
                          <input type="text" id="add_amount" name="add_amount" class="form-control" placeholder="" onchange="tAmount(this)" required="">
                        </div>

                      </fieldset>


                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend> Total Ammount</legend>
                        <!-- Image -->
                        <div class="form-group">
                          <label class="control-label" for="address">Total Ammount</label>
                          <input type="text" id="total_amount" name="total_amount" class="form-control" placeholder="total amount" required="">
                        </div>
                        <!-- Price -->
                        <div class="form-group">
                          <label class="control-label" for="address">Description</label>
                          <input type="text" id="add_amount" name="description" class="form-control" placeholder=""  required="">
                        </div>
                        </br></br>
                        <div class="row">
                       <div class="col-sm-6 text-right">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="Submit">
                      </div>
                    </div>
                        
                         </fieldset>  
                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    
                  </form>
                </div>

                <!--end of checkout-->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end of middle sec-->
<script>
              function loadamount(obj)
              {
                 //alert(obj.value);
                   $.ajax({
                  'url' : "<?php echo base_url().'User/getWallet'; ?>",
                  'type' : 'POST',  //the way you want to send data to your URL
                  dataType: "json",
                  'data' : {'id' : obj.value},
                  'success' : function(data){
                    //alert(data);
                    var amount=data;
                    document.getElementById('amt').value = amount;
                    //$('#available_amount').value=a; //jquery selector (get element by id)
                     //alert(a);
                  }
                  });
              }

              function tAmount(obj)
              {
                var add_amount=parseInt(obj.value);
                var available_amount=parseInt(document.getElementById('amt').value);
                document.getElementById('total_amount').value=add_amount+available_amount;
              }
</script>
