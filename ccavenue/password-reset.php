<?php if(!isset($_REQUEST["tokenmail"]) || !isset($_REQUEST["tokenID"])); ?>
<?php require_once 'config/auth.php'; ?>
<?php //if(isset($_SESSION['user_id']))header("Location:index.php"); ?>

 <?php require_once 'includes/header.php';?>
 
<body onload="getMenu()" id="get_token">
 
<div class="w3-seprator-top"></div> <!-- 60px top-->
    
   <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="index.php">HOME</a> / </li><li><a href="" class="last">Email Varification</a></li></ol>
        </div>    
  </div>
<div class="w3-seprator"></div> <!-- 20px margin-->
    <div class="w3-row fullHeight" >
 
         <div class="main-container w3-row-padding w3-center w3-text-black">
            <center>
            <h2 class="w3-text-green" id="reset_response"></h2>
             <form action="javascript:" onsubmit="return authenticate()">
             <table  class="w3-card-2 w3-container border-radius4 tblResetPass w3-white" style="width:250px">
                 <tr><td><h5 class=" w3-text-green">Reset your password</h5></td></tr>
               
                <!-- <tr><td><h6 ><small> User : <?php echo $_REQUEST["tokenmail"]?> </small></h6></td></tr>--->
                  <tr><td><h6 ><small> User : <?php echo $_REQUEST["tokenmail"]?> </small></h6></td></tr>
                 <tr><td><input type="password"  required id="loginpassword" placeholder="Your password" class="w3-input"></td></tr>
                 <tr><td><input type="password"  required id="loginpassword" placeholder="Confirm password" class="w3-input"></td></tr>
                 <tr><td>&nbsp;<input type="hidden" id="userEmail" value="<?php echo $_REQUEST["tokenmail"]?>"><input type="hidden" id="userId" value="<?php echo $_REQUEST["tokenID"]?>"></td></tr>
                 <tr><td><button type="submit" class="w3-btn w3-green"><b>Reset</b></button></td></tr>
                 
                 <tr><td id="login_fail">&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
             </table>
            </form>
            </center>
</center>
         
        </div>
     </div>  
     
     
 
 <div class="w3-seprator"></div>
 <div class="w3-seprator"></div>
  <div class="w3-seprator"></div>
  


<?php require_once 'includes/navigation.php';?> 
<?php require_once 'includes/footer.php';?>
