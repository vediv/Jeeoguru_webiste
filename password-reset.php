<?php if(!isset($_REQUEST["tokenmail"]) || !isset($_REQUEST["tokenID"])) header("Location:home"); ?>
<?php  require_once 'config/auth.php'; ?>
<?php require_once 'includes/header.php';?>


<body onload="getMenu()" id="get_token">
<?php require_once 'includes/navigation.php';?> 
    
    <div class="w3-seprator-top"></div> <!-- 60px top-->
    
     <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $base?>home">HOME</a> / </li><li><a href="" class="last">Password Reset</a></li></ol>
        </div>    
  </div>
    
     <div class="w3-seprator"></div> <!-- 20px margin--> 
     <div class="w3-row fullHeight" style="padding-top: 5%">
        
         <div class="main-container w3-row-padding w3-center w3-text-black" id="watchListResult">
            
             <form action="javascript:" onsubmit="return requestPassReset()"> 
             <table  class="w3-card-2 w3-container border-radius4 tblResetPass"  style="background-image: url(<?php echo $baseUrl?>/loginbg1.jpg); background-position:53% 38%;">
                 <tr><td><p class="font-size16" style=" "><?php echo $applicationName?></p></td></tr>
                 <tr><td class=" font-size14"  style="padding: 15px 0px 0px 0">Change Password</td></tr>
                 
                 <tr><td>Enter a new password for <br><?php echo $_REQUEST["tokenmail"]?></td></tr>
                 <tr><td><input type="password" required="" id="newpass" placeholder="Your new password" class="w3-input"></td></tr>
                 <tr><td><input type="password"  required id="cnfpass" placeholder="Confirm new password" class="w3-input"></td></tr>
                 <tr><td>&nbsp;<input type="hidden" id="userEmail" value="<?php echo $_REQUEST["tokenmail"]?>"><input type="hidden" id="userId" value="<?php echo $_REQUEST["tokenID"]?>"></td></tr>
                 <tr><td><button type="submit" class="w3-green1 w3-button  w3-center padding-four font-form w3-round">Submit</button></td></tr>
                 
                 <tr><td id="submitNewPass">&nbsp;</td></tr>
                 <tr><td>&nbsp;</td></tr>
             </table> 
            </form>
         
        </div>
     </div>    
     
     
     
     
     
     
     
     
     
      <div class="w3-seprator"></div>
   <div class="w3-seprator"></div>
    <div class="w3-seprator"></div>
  

<?php require_once 'includes/footer.php';?>

    