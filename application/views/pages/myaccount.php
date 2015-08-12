
<!--start of new arrivals-->
    <section class="container">
      <div class="row">
        <!--start of big title-->

        <div class="col-sm-12 big-title text-uppercase text-center">
          <h3 class="text-primary">My Account</h3>
          <small>Maecenas nec odio et ante tincidunt tempus</small>
          <p><span class="ion-android-star-outline"></span></p>
        </div>
        <!--end of big title-->
    <div class="col-sm-8">
      

      <div class="col-sm-12">
          <h3>Refer Friend History</h3>
                         <div class="full-width">
                                <div class="table_container">
                                        <div class="table_content full-width">
                                            <div>
                                               <table cellspacing="0" id="ContentPlaceHolder1_gvFriend" style="border-collapse:collapse;">
                                                   <tbody><tr><td>No data has been found</td></tr>
                                                   </tbody>
                                                  </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


      </div> 
      <div class="col-sm-12">
            <h3>Click tracking Summary</h3> 




      </div> 
          <form name="formselct" action="<?=(base_url().'User/edit_contact/')?>" method="post">
      <div class="col-sm-12" id="contact_details">



                                <div class="panel-heading clearfix">
                                    <h3>Contact Details</h3>
                                </div>
                                         
                                        <fieldset class="col-md-6 myaccount_margin">
                                        <div class="form-group col-sm-12">

                                         <label class="control-label" for="address">Name</label>
                                           <input type="text" id="" name="name" class="form-control" readonly value="<?php echo $user[0]->username; ?>"  >
                                               </div>

                                               </fieldset>
                                              <fieldset class="col-md-6 myaccount_margin">
                                               <div class="form-group col-sm-12">
                                             <label class="control-label" for="address">Phone</label>
                                             <input type="text" id="" name="phone" class="form-control" readonly value="<?php echo $user[0]->phone; ?>" >
                                               </div>
                                               <div class="col-sm-6 text-right">
                                           <input onclick="checkValue(this)" class="btn btn-primary col-sm-6 form-control hvr-underline-from-center-primary"  name="button"type="button" value="Edit">
                                           </div>
                                               </fieldset>
                                        

                                 
                        </div>
                        <!-- hidden div start -->
                              <div class="col-sm-12" id="contact_details1"style="display:none" >



                                <div class="panel-heading clearfix">
                                    <h3>Contact Details</h3>
                                </div>

                                    
                                        <fieldset class="col-md-6 myaccount_margin">
                                        <div class="form-group col-sm-12">

                                         <label class="control-label" for="address">Name</label>
                                           <input type="text" id="name" name="name" class="form-control" value="<?php echo $user[0]->username; ?>"  >
                                               </div>

                                               </fieldset>
                                              <fieldset class="col-md-6 myaccount_margin">
                                               <div class="form-group col-sm-12">
                                             <label class="control-label" for="address">Phone</label>
                                             <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $user[0]->phone; ?>" >
                                               <input type="hidden" name="id" value="<?php echo $user[0]->id; ?>">
                                               </div>
                                               <div class="col-sm-6 text-right">
                                       <input class="btn btn-primary col-sm-6 form-control hvr-underline-from-center-primary " type="submit" name="submit" value="Save ">
                                           </div>
                                               </fieldset>
                                           

                                        


                        </div>
                              </form>

                        <!-- hidden div end -->
                      

      <div class="col-sm-12 myaccount_margin">
            <h3 class="myaccount_margin1">Personal Details</h3>
            <!--start of checkout-->
                <!-- <div class="col-sm-12"> -->
                 <!--  <form role="form"> -->
                    <!-- <div class="row"> -->
                  
                  <form role="form"  action="<?=(base_url().'User/add_personal_info')?>" name="personalInfo" method="post">

                      <!-- START Presonal information -->
                       <fieldset class="col-md-6 myaccount_margin"> 
                        <legend class="myaccount_margin1">Personal information</legend>

                        <!-- Name -->
                        <div class="form-group">
                          <label class="control-label col-sm-12" for="card">Gender</label>
                          <select class="selectpicker col-sm-12" id="card" name="user_gender" required>
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

                          <div class="form-group">
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
                          <div class="form-group col-sm-12">
                          <label class="control-label col-sm-12" for="card-number">Address</label>
                          <input type="text" id="card-number"  maxlength='500' name="user_address"   placeholder="Address" class="form-control col-sm-12" required="">
                        </div>



                      </fieldset>
                      <!-- END Personal information-->

                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>Marital Status</legend>

                        <!-- Name -->
                        <div class="form-group">
                          <label class="control-label" for="card">Marital Status</label>
                          <select class="selectpicker" id="card" name="user_marital" required>
                            <option>Marital Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>

                          </select>
                        </div>

                        <!-- Card type -->
                        <div class="form-group">
                          <label class="control-label" for="card-number">Country</label>
                          <input type="text" id="card-number" name="user_country" readonly Value="India" placeholder="India" class="form-control" required="">
                          <input type="hidden" value="India">
                        </div>

                        <!-- Card number -->
                        <div class="form-group">
                          <label class="control-label" for="card">Select Any City</label>
                          <select class="selectpicker" id="card" name="user_city" required>
                            <option>City</option>
                            <option value="Allahabad">Allahabad</option>
              <option value="Kanpur">KanPur</option>
              <option value="Varansi">Varansi</option>


                          </select>
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

                    <!-- Agree checkbox and Continue button -->

                      <!-- <div class="col-sm-12"> -->
                        <!-- <fieldset>
                          <legend>Address</legend>
                          <textarea class="form-control" rows="5" placeholder="Address" cols="40" maxlength='500' name="user_address" id="" required=""><?php echo $user[0]->user_address; ?></textarea>
                          
                        </fieldset>
 -->

                      
                   <!--  </div> -->
                  </form>
               <!--  </div>
 -->
                <!--end of checkout-->




      <!-- </div> -->
      <div class="col-sm-12">
            <h3>Change Password</h3>
              <!-- <div class="col-sm-12 col-md-12  main-sec"> -->
              <div class="row">


                <!--end of breadcrumb-->

                <!--start of checkout-->
                <div class="col-sm-12"> 
                  <form role="form" action="<?=(base_url().'Auth/change_password')?>" name="changePassword" method="post">
                    <div class="row">

                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Current Password</legend>

                        <!-- Select Category -->
                        <div class="form-group">
                          <label class="control-label" for="address">Current Password</label>
                          <input type="text" id="" name="old_password" class="form-control " placeholder="Current Password" required="">
                        </div>

                        <!-- Product Title -->
                        <div class="form-group">
                          <label class="control-label" for="address">Confirm Password</label>
                          <input type="text" id="" name="new_password_confirm" class="form-control"  placeholder="Confirm Password" required="">
                        </div>


                      </fieldset>


                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
                        <legend>New Password</legend>

                        <!-- Price -->
                        <div class="form-group">
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
                        <!-- Image -->


                      <!-- END Payment information-->
                    </div>

                    <!-- Agree checkbox and Continue button -->
                    
                  </form>
                <!-- </div> -->

                <!--end of checkout-->

              </div>
<!--             </div> -->
      <!-- <div class="col-sm-12">
            <h3>Frequently Asked Questions</h3> 


      --></div> 


      </div>




      </div>
      <div class="col-sm-4">
        
        <div class="rgt-acc-bg">
                                <h6 id="payment">Your Account Balance</h6>
                                <div class="row">
                                    <div class=" txtcenter approved-cb">
                                        <span class="font-rupee"></span><span><center><h1><?php echo 'Rs,'.$w[0]->available_amount; ?></h1></center></span>
                                    </div>
                                    <div class="txtcenter">
                                        <center>Approved Cashback</center></div>
                                </div>
                                <div class="row">
                                    <div class="txtcenter">
                                       <center> <a class="btn btn-primary hvr-underline-from-center-primary" href="#">Withdraw Your Cashback</a></center></br>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="alignleft">
                                        Pending Cashback<span id="ContentPlaceHolder1_tdPendingCash">&nbsp&nbsp0.00</span></div>

                                </div>
                            </div>

      </div>
      <div class="col-sm-4">
            
        <div class="rgt-acc-bg">
                                <h6 id="payment">Your Total Gift Card Value</h6>
                                <div class="row">
                                    <div class=" txtcenter approved-cb">
                                        <span class="font-rupee"></span><span><center><h1>Rs,0</h1></center></span>
                                    </div>
                                    <div class="txtcenter">
                                        <center>Available Gift Card Value</center></div>
                                </div>
                                <div class="row">
                                    <div class="txtcenter">
                                       <center> <a class="btn btn-primary hvr-underline-from-center-primary" href="#">Withdraw Your Gift Card</a></center></br>
                                    </div>
                                </div>


                               <!--  <div class="row">
                                    <div class="alignleft">
                                        Pending Gift Card Value<span id="ContentPlaceHolder1_tdPendingCash">&nbsp&nbspRs,0.00</span></div>

                                </div> -->
                            </div>

      </div>
      <div class="col-sm-4">
            
        <!-- <div class="row full-width">
                                    <p class=" font-lightgrey">
                                        <i>Your Flipkart Gift Cards cashback value will be rounded off to the nearest whole
                                            number.</i></p>
                                    <p class="full-width m0 font-lightgrey">
                                        <i>Examples</i><br>
                                        <i>1. Rs.101.30 = Rs. 101</i><br>
                                        <i>2. Rs.101.60 = Rs. 102</i></p>
                                </div>
 -->
      </div>
      <div class="col-sm-4">
            <h3>Quick Links</h3>
        <div class="quicklink-cont">

                                <ul>
                                    <li>
                                        <label>
                                            <a href="#cash">Cashback summary </a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <a href="#track">Click tracking summary</a></label></li>
                                    <li>
                                        <label>
                                            <a href="#Missing Cashback" target="_blank">Missing Cashback</a></label></li>
                                    <li>
                                        <label>
                                            <a href="#contact">Contact Details</a></label></li>
                                    <li>
                                        <label>
                                            <a href="#personal">Personal Details</a></label></li>
                                    <li>
                                        <label>
                                            <a href="#changepwd">Change Password</a></label></li>
                                    <li>
                                        <label>
                                            <a href="<?php echo base_url().'User/wallet_show/'.$user[0]->id;?>">Wallet Details</a></label></li>
                                </ul>
                            </div>

      </div>




    </div>



    </section>
    <!--end of new arrivals-->



<script type="text/javascript">
function checkValue(obj)
   {
          
                 var theDiv = document.getElementById('contact_details1');
                   theDiv.style.display='';
               
                
                    document.getElementById('contact_details').style.display='none';
              
      
       }   

</script>

