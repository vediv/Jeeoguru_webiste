<?php  require_once 'config/auth.php'; ?>

<?php require_once 'includes/header.php';?>


<body onload="getMenu()" id="get_token">
<?php require_once 'includes/navigation.php';?> 
    
    <div class="w3-seprator-top"></div> <!-- 60px top-->
    
    <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $baseUrl?>">HOME</a> / </li><li><li><a class="last">Success</a></li></ol>
        </div>    
  </div>
    
     <div class="w3-seprator"></div> <!-- 20px margin-->
     
     <div class="w3-row fullHeight">
         <div class="main-container w3-row-padding" style="min-height: 200px;">
             <div class="w3-col darkBg " >
                 
                 <h3 align="center">Transaction Successfull</h3> 

                 <div class="w3-col s12 m8 l8  justify">
                     <?php //include_once 'pages/about.php';?>
                 </div>
                 
                 
                 <!--<div class="w3-col s12 m4 l4"><h2>
                         <img src="images/banners/aboutus.jpg" class="w3-image"></h2>
                 </div>-->
                 
                 
             </div>    
            
        </div>
         
     </div>
     
     
     
     
     <div class="w3-seprator"></div>
   <div class="w3-seprator"></div>
    <div class="w3-seprator"></div>
  

<?php require_once 'includes/footer.php';?>

    <style>
        .last{font-size: 15px;  }
        #Search-data .w3-col{padding-top: 10px;padding-right: 5px;}
        </style>
