<?php  require_once 'config/auth.php'; ?>
<?php if(empty($_SESSION['user_id'])){   header("Location:index.php");}?>
<?php require_once 'includes/header.php';?>


<body onload="initUserWatchListPage()" id="get_token">
<?php require_once 'includes/navigation.php';?> 
    
    <div class="w3-seprator-top"></div> <!-- 60px top-->
    
     <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $baseUrl?>">HOME</a> / </li><li><a href="" class="last"> Watch Later</a></li></ol>
        </div>    
  </div>
    
     <div class="w3-seprator"></div> <!-- 20px margin-->
    
     
     
     <div class="w3-row fullHeight" >
        
         <div class="main-container w3-row-padding" id="watchListResult">
        
        </div>
     </div>    
     
     
   <div class="w3-seprator"></div>
   <div class="w3-seprator"></div>
   <div class="w3-seprator"></div>
  

<?php require_once 'includes/footer.php';?>

    
