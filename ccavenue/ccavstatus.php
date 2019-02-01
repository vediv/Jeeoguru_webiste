
<!DOCTYPE html>
<html>
<head>
<title>Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"  ></script-->
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/flowplayer.css"/>
<script type="text/javascript" src="<?php echo $baseUrl?>/layouts/js/flowplayer.js"></script>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript" src="<?php echo $cdn ?>/layouts/js/flowplayer.hlsjs.light.min.js"></script>
<!--script type="text/javascript" src="http://releases.flowplayer.org/hlsjs/flowplayer.hlsjs.js"></script-->
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/flowplayer.css"/>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/flowplayer.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl?>/layouts/css/w3.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/loaders.min.css"/><!---- for loading time gif --->
<link rel="stylesheet" href="<?php echo $baseUrl?>/layouts/css/custom.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/overwrite.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/font-awesome/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php echo $baseUrl?>/config/webStyleConfig.css"/>
</head> 
<body  id="get_token">
<div class="w3-top header w3-hide-large w3-hide-medium" style="margin-bottom: 20px;">

<a href="#" class="logo-min logoMark">
<img src="'.$baseUrl.'/images/logo_header_lg.png" height="45"></a>
<span id="notification-sm" class="w3-text-shadow"></span></div>
<hr class=" w3-hide-large w3-hide-medium">
<div class="w3-top header <?php echo $opacClass?> w3-hide-small" id="navBar">
    <div class="main-container" >
     <ul class="w3-navbar header-menu " id="navMain" >
     
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    
     </ul>
        <div class="login-user-area w3-active" id="login-user-area"> </div> 
        
    </div>
    
</div>







<div id="loginModal" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top" style="max-width:350px;">
    <div id="loginBody"></div>
    <div class="w3-col s12 l12 m12 w3-center">
        
        <div class="w3-col s12 m12 l12"><center> <div id="g" ></div></center></div>
        
       
       
        
        <p class="w3-seprator"></p>
    </div>
    
    
    
    <div id="loginFooter"></div>
    </div>
</div>  



    
    <div class="w3-seprator-top"></div> <!-- 60px top-->
     <div class="w3-seprator"></div> <!-- 20px margin-->
     <div class="w3-row">
         <div class="main-container w3-row-padding" style="min-height:100px;">
             <div class="w3-col darkBg " >
                 
                 <h3 align="center"><?php echo $ordMsg.$amtMsg; ?></h3> 


                 <div class="w3-col s12" align="center">
                     <?php echo $refMsg; ?>
                 </div>
                 
                 
               
             </div>    
            
        </div>
         
     </div>
     
     
     
     
     
  

<?php //require_once 'includes/footer.php';?>

    <style>
        .last{font-size: 15px;  }
        #Search-data .w3-col{padding-top: 10px;padding-right: 5px;}
        </style>
