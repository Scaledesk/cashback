               
  
            <div class="col-sm-8 col-md-9 sub-data-left main-sec">
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12" >

                <!--  ...................................................... -->
                <div id="contact_details">

                 <form role="form"  action="<?=(base_url().'User/add_personal_info')?>" name="personalInfo" method="post">

                      <!-- START Presonal information -->
                       <fieldset class="col-md-6 myaccount_margin"> 
                        <legend class="myaccount_margin1">Personal information</legend>
                        

                                 

                        <!-- Name -->
                        <div class="form-group col-sm-12">
                         <label class="control-label" for="address">Name</label>
                         <input type="text" id="name" name="name" class="form-control" value="<?php echo $user[0]->username; ?>"  >
                        </div>
                        <div class="form-group col-sm-12">
                        <label class="control-label" for="address">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $user[0]->phone; ?>" >
                        <input type="hidden" name="id" value="<?php echo $user[0]->id; ?>">
                        </div>
                        <div class="form-group col-sm-12 ">
                          <label class="control-label " for="card">Gender</label>
                          <select class="selectpicker " id="card" name="user_gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                          </select>
                        </div>

                        <!-- Address -->
                        <?php
                        error_reporting(0);
                        if($user[0]->user_dob!='')
                           $dob=explode('/',$user[0]->user_dob);
                        ?>

            <div class="col-sm-4 form-group">
                            <label class="control-label" for="year">Date</label>
                            <select class="selectpicker" id="year" name="date" required>
                              <option value=''>Date</option>
                              <?php
                              for ($i=1; $i < 32 ; $i++) { ?>
                              <option value="<?php echo $i; ?>" <?php if($i==$dob[0]) echo 'selected'; ?>><?php echo $i; ?></option>
                            <?php  }
                              ?>
                            </select>
                          </div>
                          <div class="col-sm-4 form-group">
                            <label class="control-label" for="month">Month</label>
                            <select class="selectpicker" id="month" name="month" required>
                              <option value=''>Month</option>
                              <option value="January" <?php if($dob[1]=='January') echo 'selected'; ?>>January</option>
                              <option value="February" <?php if($dob[1]=='February') echo 'selected'; ?>>February</option>
                              <option value="March" <?php if($dob[1]=='March') echo 'selected'; ?>>March</option>
                              <option value="April" <?php if($dob[1]=='April') echo 'selected'; ?>>April</option>
                              <option value="May" <?php if($dob[1]=='May') echo 'selected'; ?>>May</option>
                              <option value="June" <?php if($dob[1]=='June') echo 'selected'; ?>>June</option>
                              <option value="July" <?php if($dob[1]=='July') echo 'selected'; ?>>July</option>
                              <option value="August" <?php if($dob[1]=='August') echo 'selected'; ?>>August</option>
                              <option value="September" <?php if($dob[1]=='September') echo 'selected'; ?>>September</option>
                              <option value="October" <?php if($dob[1]=='October') echo 'selected'; ?>>October</option>
                              <option value="November" <?php if($dob[1]=='November') echo 'selected'; ?>>November</option>
                              <option value="December" <?php if($dob[1]=='December') echo 'selected'; ?>>December</option>
                            </select>
                          </div>

                          <div class="col-sm-4 form-group">
                            <label class="control-label" for="year">Year</label>
                            <select class="selectpicker" id="year" name="year" required>
                              <option>Year</option>
                            <?php
                            for ($i=1985; $i < (date('Y',time()))-10 ; $i++) { ?>
                              <option value="<?php echo $i; ?>" <?php if($i==$dob[2]) echo 'selected'; ?>><?php echo $i; ?></option>
                            <?php
                            }
                            ?>


                            </select></div>


                        <!-- Country and state -->

                          <div class="form-group ">
                          <label class="control-label col-sm-12" for="card">Select Any State</label>
                          <select class="selectpicker col-sm-12" id="card" name="user_state" required>
                          <option>select</option>
                          <option value="U.P." <?php if($user[0]->user_state=='U.P.') echo 'selected'; ?>>U.P.</option>
                          <option value="M.P." <?php if($user[0]->user_state=='M.P.') echo 'selected'; ?>>M.P.</option>
                          <option value="H.P." <?php if($user[0]->user_state=='H.P.') echo 'selected'; ?>>H.P.</option>
                          <option value="A.P." <?php if($user[0]->user_state=='A.P.') echo 'selected'; ?>>A.P.</option>
                          </select>
                          </div>

                                            <!-- City and Zip code -->
                          



                      </fieldset>
                      <!-- END Personal information-->

                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        

                        <!-- Name -->
                        <div class="form-group ">
                        <legend>Marital Status</legend>
                          <label class="control-label" for="card">Marital Status</label>
                          <select class="selectpicker" id="card" name="user_marital" required>
                            <option>Marital Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>

                          </select>
                        </div>

                        <!-- Card type -->
                        <div class="form-group margin ">
                          <label class="control-label col-sm-12" for="card-number">Country</label>
                          <input type="text" id="card-number" name="user_country" readonly Value="India" placeholder="India" class="form-control" required="">
                          <input type="hidden" value="India">
                        </div>

                        <!-- Card number -->
                        <div class="form-group margin">
                          <label class="control-label" for="card">Select Any City</label>
                          <select class="selectpicker" id="card" name="user_city" required>
                            <option>City</option>
                            <option value="Allahabad">Allahabad</option>
              <option value="Kanpur">KanPur</option>
              <option value="Varansi">Varansi</option>


                          </select>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-12" for="card-number">Address</label>
                          <input type="text" id="card-number"  maxlength='500' name="user_address"   placeholder="Address" class="form-control col-sm-12" required="">
                        </div>

                        <!-- Expriation and CCV -->
                        <div class="row">
                          <div class="form-group col-sm-12">
                          <label class="control-label" for="card-number">Pin Code</label>
                          <input type="text" id="card-number" name="user_pincode" value="<?php echo $user[0]->user_pincode; ?>" placeholder="Pin Code" class="form-control" required="">
                        </div>


                        </div>

                        <div class="col-sm-6 text-right">
                        <input class="btn btn-primary col-sm-6 form-control hvr-underline-from-center-primary " type="submit" value="Save Details">
                      </div>
                      </fieldset>
                      <!-- END Payment information-->
                    </div>

                    
                  </form>
                  </div>
                <!-- ................................................................ -->
                         <!-- wallet details start -->

                             <div class="show_wallet_details" id="contact_details1" style="display:none;">
                          <h2> Wallet Details</h2>
                
                                 <h6 id="payment">Your Account Balance</h6>
                                <div class="row" style="color:red;">
                                    <div class=" txtcenter approved-cb">
                                        <span class="font-rupee"></span><span><center><h1><?php echo 'Rs,'.$w[0]->total_amount; ?></h1></center></span>
                                    </div>
                                
                                </div>
                                


                                    <table class="table">
                                     <h4> Transaction Details</h4>
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
             <!-- wallet details end -->


<!-- .........................change password start.......................... -->
         <div id="password" style="display:none;">
         <fieldset class="col-md-6">
                        

                        <!-- Select Category -->
                        <div class="form-group col-sm-12">
                        <legend>Current Password</legend>
                          <label class="control-label" for="address">Current Password</label>
                          <input type="text" id="" name="old_password" class="form-control " placeholder="Current Password" required="">
                        </div>

                        <!-- Product Title -->
                        <div class="form-group col-sm-12">
                          <label class="control-label" for="address">Confirm Password</label>
                          <input type="text" id="" name="new_password_confirm" class="form-control"  placeholder="Confirm Password" required="">
                        </div>


                      </fieldset>

  <fieldset class="col-md-6">
                        

                        <!-- Price -->
                        <div class="form-group col-sm-12">
                        <legend>New Password</legend>
                          <label class="control-label" for="address">New Password</label>
                          <input type="text" id="" name="new_password" class="form-control" placeholder="New Password" required="">
                        </div>
                         <div  style="margin-top:44px"></div>
                        <div class="row">
                       <div class="col-sm-6 text-right">
                        <input type="submit" class="btn col-sm-6 form-control btn-primary hvr-underline-from-center-primary " value="Submit">
                      </div>
                    </div> 

                        </fieldset>
            </div>
<!-- .........................change password end.......................... -->
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









  <!--end of middle sec-->
