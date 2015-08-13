
<!--start of middle sec-->
  <div class="middle-sec wow fadeIn" data-wow-offset="10" data-wow-duration="2s">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">Welcome My Account</h2>

      </div>
    </div>
    <section class="container">
      <div class="row">
         <div class="col-sm-12 equal-height-container">
          <div class="row">
            <div class="col-sm-4 col-md-3 sub-data-left sub-equal">
              <div id="sticky">
                <section class="col-sm-12">
                  <h5 class="sub-title text-info text-uppercase">Account Setting</h5>
                  <ul class="list-group summary">
                  
                    <a  onclick="checkValue(this)"><li class="list-group-item text-uppercase"><strong><div id="1"> Wallet Details </div></strong></li></a>
                    <a onclick="checkValue2(this)"><li class="list-group-item text-uppercase"><strong> <div id="2">Change Password </div></strong></li></a>
                    <a onclick="checkValue1(this)"><li class="list-group-item text-uppercase"><strong><div id="3">Persional Info.</div></strong></li></a>
                  </ul>
                </section>

              </div>
            </div>

<script type="text/javascript">
function checkValue(obj)
   {
          
                 var theDiv = document.getElementById('contact_details1');
                   theDiv.style.display='';
               
                
                    document.getElementById('contact_details').style.display='none';
                    document.getElementById('password').style.display='none';
      
       }   

function checkValue1(obj)
   {
          
                 var theDiv = document.getElementById('contact_details');


                 
                   theDiv.style.display='';
               
                
                    document.getElementById('contact_details1').style.display='none';
                    document.getElementById('password').style.display='none';
      
       }   

function checkValue2(obj)
   {
          
                   var theDiv = document.getElementById('password');
                   theDiv.style.display='';
               
                
                    document.getElementById('contact_details').style.display='none';
                    document.getElementById('contact_details1').style.display='none';
      
       }   

</script>

