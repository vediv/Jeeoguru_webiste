<!---<div class="w3-top header w3-hide-large" style="margin-bottom: 20px;">
    <a href=" javascript:void(0)" class="w3-left w3-hover-gray" onclick="w3_open()" style="z-index: 4;padding: 5px;left:0;top:0px; ">
    <i class="fa fa-2x fa-bars "></i></a><a href="<?php echo $baseUrl?>/home" class="logo-min logoMark">
    <img src="<?php echo $baseUrl?>/images/logo_header_lg.png"  class="img-responsive heightlogo"></a>
    <span id="notification-sm" class="w3-text-shadow"></span>
</div>-->

<div class=" w3-top header w3-hide-large w3-col s12 m12 l12 " style="top: -15px;"><br />
    <div class="w3-col s2 m2 l3 w3-left">
    <a href=" javascript:void(0)" class="w3-left w3-hover-gray" onclick="w3_open()" style="z-index: 4;padding: 5px;left:0;top:0px; ">
    <i class="fa fa-2x fa-bars "></i></a>
    </div>
      <div class="w3-col s3 m3 l3 w3-center">
        <a href="<?php echo $baseUrl?>/index" class=" logo-min logoMark" style="z-index: 6;padding: 5px;top:0px;" >
           <img src="<?php echo $baseUrl?>/images/logo_header_lg.png"  class="img-responsive heightlogo"></a>
     </div>

        <div class="w3-col s5 m5 l5 w3-right" style="left: 100px; display: inline-block">
        <a  class="w3-right w3-hide-large w3-search" title="Search">
                <form action="<?php echo $baseUrl?>/search" method="get">
                    <input type="search" name="searchtext" class="nav-search" value="<?php $search_request; ?>" style="border-radius: 0px;"  required/>
                    <button type="submit" class="nav-button"><i class="fa fa-search font-size1"></i></button>
                </form>
        </a>
        </div>


        <span id="notification-sm" class="w3-text-shadow"></span>
</div>

<div class="w3-top header  w3-hide-small w3-hide-medium" id="navBar">
    <div class="main-container" >
     <ul class="w3-navbar header-menu " id="navMain" >
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
          </ul>
          <div class="login-user-area w3-active" id="LEFT_MENU" style="text-transform: uppercase"></div>
          <!--<li style="color:white;"><a style="color:white; float:right;margin-top: -20px" href="javascript:" class="w3-right-align " onclick="login()"><i class="fa fa-user"></i> Login</a></li> -->
            </div>

</div>
          <!--<li style="color:white;"><a style="color:white; float:right;margin-top: -20px" href="javascript:" class="w3-right-align " onclick="login()"><i class="fa fa-user"></i> Login</a></li> -->


<!-- Side nave on small screens when clicking the menu icon -->
<nav class="w3-sidenav header w3-card-2 w3-animate-fromleft w3-hide-large header-menu mysidenav font10" style="display:none; z-index: 3;width:100%;position: fixed; margin-top: 13%; height: auto;" id="mySidenav">

</nav>

<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->
<style>
	.w3-white, .w3-hover-white:hover { color: #fff !important;
    background-color: transparent !important;}
</style>
<script>
if(sessionStorage.getItem("navMenu")!=null)
{
var obj=JSON.parse(sessionStorage.getItem("navMenu"));
buildMenu(obj,"navMain",pageName,loginStatus,Username);
}
</script>

  <script>
    var url="<?php echo "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>";

/*
 document.getElementById('fbShare2').onclick = function() {
    alert('hello9');
    FB.ui({
    method: 'share',
    display: 'popup',
    href: url,
  }, function(response){});
}*/



/*
 function abcd() {
    //alert('hello9');
  FB.ui({
    method: 'share',
    display: 'popup',
    href: url,
  }, function(response){});
}*/



</script>

<style>
a.w3-btn:hover{color:#ff!important;background-color:#4867AA !important}
a.w3-button:hover{color:#fff!important;background-color:#4867AA !important}
    .abcRioButtonContents {
    font-family: "myFont";
    font-size: 14px!important;
    font-weight: normal;
    letter-spacing: .21px;
}
</style>


<div id="loginModal" class="w3-modal"   >
    <div class="w3-modal-content w3-card-8 w3-animate-top" style="max-width:350px;">
    <div id="loginBody"></div>
   <div class="w3-col s12 l12 m12 w3-center" id="google_fb_container" style="background-image: url(<?php echo $baseUrl?>/loginbg1.jpg); background-position:61% -20%;">
      <p>OR</p>
        <div class="w3-left w3-text-white"> <a class="w3-btn w3-button w3-button1 fb w3-text-white   fbLogin" onclick="checkLoginState()" ><i class="fa fa-facebook w3-padding-medium " style=""></i><span style="padding-left: -69px"> </span></a></div>
        <div class="w3-right w3-text-white" style="margin-top: 8px; margin-right: 8px;"> <a  class="g-signin2"  data-onsuccess="onSignIn"><i class="fa fa-google-plus w3-padding-medium"></i></a></div>
  
   <div style="text-align:center !important;  padding-right:20px; margin-top: 37px;">
    <h3><span class="w3-text-white font-size"><a class="font-size padding-lft-new" href="javascript:" onclick="forgotPassword()">Forgot password?</a></span></h3> 
   </div>
        <!--div class="w3-col s12 m12 l12"><center> <div id="g" ></div></center></div>-->
  </div>
 
    <div id="loginFooter"></div>
   </div>
</div>
<script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log(response);
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          console.log("The person is logged into Facebook, but not your app.");
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
        FB.init({
          appId: '{870112989852498}',
          cookie: true, // enable cookies to allow the server to access
          // the session
          xfbml: true, // parse social plugins on this page
          version: 'v2.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });

      };

      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk')); 
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log("Fb response");
          console.log(response);
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
      </script>

<script>
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {

      FB.login(function(response){
  testAPI();
});
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {

      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
  FB.init({
    appId      : '870112989852498',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  };



  // Load the SDK asynchronously
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=870112989852498";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

    function testAPI() {
FB.api('/me?fields=email,first_name,last_name,gender,locale,picture', function(response) {



        var userEmail=response.email;
        var auth_uid=response.id;
        var authprovider="Facebook";
        var fname=response.first_name; localStorage.setItem("userName",fname);
        var lname=response.last_name;
        var gender=response.gender;
        var locale=response.locale;
        var picture=response.picture.data.url;

//log(userEmail+"--"+fname+"--"+lname+"--"+gender+"--"+locale+"--"+picture+"--"+auth_uid);
userloginFB(userEmail,auth_uid,authprovider,fname,lname,gender,locale,picture);
    });
  }




  function onSignIn(googleUser) {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.disconnect();
  var profile = googleUser.getBasicProfile();


        var userEmail=profile.getEmail();
        var auth_uid=profile.getId();
       
        var authprovider="Google";
        var fname=profile.getName(); localStorage.setItem("userName",fname);
        var picture=profile.getImageUrl();
        userloginGoogle(userEmail,auth_uid,authprovider,fname,picture);
       //var auth2 = gapi.auth2.getAuthInstance();
       //auth2.signOut();

}


</script>

<script>
    var url="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>";

/*--document.getElementById('fbShare2').s = function() {
    alert('hello9');
    FB.ui({
    method: 'share',
    display: 'popup',
    href: url,
  }, function(response){});
}
-----*/

 function abcd() {
    //alert('hello9');
  FB.ui({
    method: 'share',
    display: 'popup',
    href: url,
  }, function(response){});
}


/*function dob_check()
 {
    var Container = "dob_check";
    var apiBody = new FormData();
    apiBody.append("partnerid",PARTNER_ID);
    apiBody.append("authuid","hjhj");
    runAjax(GET_DOB_CHECK, apiBody, Container);
 }*/



</script> 