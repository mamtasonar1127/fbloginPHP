<?php include("header.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                            
                  <hr />
                
                  <!-- /. ROW  --> 



<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2326490944312508',
      cookie     : true,
      xfbml      : true,
      version    : 'v6.o'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  function fbLogin(){

    FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      FB.api('/me', function(response) {
        console.log(reponse);
      });
  }
});
  }


</script>



<form method="post"> 
   <div class="row text-center pad-top" style="margin-left: 387px;">
                 
          
            <b style="margin-left: -450px;">Login To Register Book</b>
            <br>

            <div class="input-group">
              <input type="Email" class="form-control" placeholder="Enter your Email Id" name="emaillog" />
            </div>
            <br />

            <div class="input-group">
               <input type="password" class="form-control" placeholder="Enter your password" name="passlog" />
            </div>
            <br />

            <input type="submit" value="Login" name="acclog" style="margin-left: -450px;">
            

           <h1><a href="javascript:void(0)" onclick="fbLogin()">Login with facebook</a></h1>

           New User: <a href="signup.php">SignUp</a>
  </div>


    <br>

</form>
   