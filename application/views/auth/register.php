



<!--start of middle sec-->
<div class="inner-ad" style="height:0px;"></div>
  <div class="middle-sec wow fadeIn " data-wow-offset="10" data-wow-duration="2s">
    <div class="page-header ">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase ">register new user</h2>
        
      </div>
    </div>
    <section class="container">
      <div class="row">
        <!-- <div class="col-sm-12 ">
           <div class="inner-ad">
            <figure><img class="img-responsive" src="images\inner-ad.jpg" width="1170" height="100" alt=""></figure>
          </div> 
        </div> --> 
        <div class="col-sm-12 equal-height-container">
          <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3 sub-data-left sub-equal">
              <div id="sticky">
                <section>
                  <h5 class="sub-title text-info text-uppercase">why register?</h5>
                  <!-- <p>Donec imperdiet enim quis risus porttitor congue. Vestibulum vel tristique urna. </p>
                  <dl>
                    <dt>Saving Time</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  </dl> -->
                </section>
              </div>
            </div>
            <div class="col-sm-8 col-md-9 col-lg-9 main-sec">
              <div class="row"> 
                
                <!--start of breadcrumb-->
                <!-- <div class="col-sm-12">
                  <ol class="breadcrumb dashed-border row">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Account</a></li>
                    <li class="active">Register</li>
                  </ol>
                </div> -->
                <!--end of breadcrumb--> 
                
                <!--start of checkout-->
                <div class="col-sm-12">
                <form role="form" action="<?=(base_url().'auth/create_user/')?>" method="Post" name="registration">
                    <div class="row"> 
                      
                      <!-- START Presonal information -->
                      <fieldset class="col-md-6">
                        <legend>Personal information</legend>
                        <div class="form-group">
                          <label class="control-label" for="first_name">first name <span class="req">*</span></label>
                          <input type="text" id="first-name" class="form-control" name="first_name"placeholder="This will be your username" required="">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="last_name">last name <span class="req">*</span></label>
                          <input type="text" id="last-name"name="last_name" class="form-control" placeholder="Enter your Last Name" required="">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="email">mail <span class="req">*</span></label>
                          <input type="text" id="mail" name="email" class="form-control" placeholder="We promise not to share your email with anyone." required="">
                        </div>
                        
                          <div class="form-group">
                            <label class="control-label" for="password">choose password<span class="req">*</span></label>
                            <input type="password" id="card-number" name="password"class="form-control" placeholder="Use at least one lowercase letter and seven characters." required="">
                             
                          </div>
                        </fieldset>
                      <!-- END Personal information--> 
                      
                      <!-- START Payment infromation -->
                      <fieldset class="col-md-6">
            
                          <div class="form-group">
                          <label class="control-label" for="phone">phone <span class="req">*</span></label>
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your Phone" required="">
                        </div>
                        <legend>address</legend>
                        <div class="form-group">
                          <label class="control-label" for="address">address one <span class="req">*</span></label>
                          
                          <input type="text" id="address-one" name="address" class="form-control" placeholder="Enter your Address" required="">
                          
                          
                        </div>
          
                        <div class="form-group">
                          <label class="control-label" for="city">City <span class="req">*</span></label>
                          <input type="text" id="postal-code" name="city"class="form-control" placeholder="Enter your City Name" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password_confirm">password confirm</label>
                            <input type="password" id="password-confirm" name="password_confirm" class="form-control" placeholder="Confirm Password" onblur="myFunction()" required="">
                          </div>
                      </fieldset>
                      <!-- END Payment information--> 
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        
                          
                          
                        
                      </div>
                      <div class="col-sm-12">
                       <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary hvr-underline-from-center-primary " value="register">
                        <br>
                        <br>
                      </div>
                    </div>
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
  <script type="text/javascript">
function myFunction()  
{  

 var pass= document.registration.password.value; 
 var pass1= document.registration.password_confirm.value;  
 
 

 var pass_len = pass.length;

//alert(pass_len);
if(pass_len==8)  
{
  //alert(pass);
//alert(123);
return true;  
}  
else{
 // alert(pass);
alert("Password in minmum 8 letters ");
//password.focus();
return false;  
}
 
//uzip.focus();  

  


}  
</script>