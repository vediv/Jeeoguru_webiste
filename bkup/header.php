<!DOCTYPE html>
<html>
<head>
<title><?php getTitle();?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"  ></script-->

<script type="text/javascript">
    
        var countrycode="IN";
        //var countrycode=geoplugin_countryCode();
        var movieCatId=sessionStorage.getItem("movies_id");
        var musicCatId=sessionStorage.getItem("music_id");
        var opacNav="<?php echo $opacNav; ?>";
        var search_request="<?php echo isset($search_request)?$search_request:""; ?>";
        var pageName="<?php echo $ppname; ?>";
        var ondemond_id=localStorage.getItem("ondemond_id");
        var ytcase_id=localStorage.getItem("ytcase_id");
        var pollyw_id=localStorage.getItem("pollyw_id");
        var view_type_4_id=sessionStorage.getItem(pageName+"_id");
       
        var shows_id=localStorage.getItem("shows_id");
        var loginStatus="<?php echo $loginflag; ?>";
    	var Username="<?php echo $UserName; ?>";
        var token="<?php echo $tokenKey;?>";
        var CurrentPagename="<?php echo $pageName; ?>";
    	var Userid="<?php echo $UserID; ?>"; 
        var UserIDName="<?php echo $UserIDName; ?>";
    	var sessionID="<?php echo $uuID; ?>";  
        var logoType="<?php echo $logoType; ?>";
        var applicationName="<?php echo $applicationName; ?>";
        var apiUrl="<?php echo $apiUrl; ?>";
        var partnerId="<?php echo $partnerId; ?>";
        var baseUrl="<?php echo $baseUrl; ?>";
        var cdn="<?php echo $cdn; ?>";
        
        

</script>







<?php if($pageName=="watch.php") :?>
<?php $entryId=$_REQUEST['entryID'];?>
<?php require_once 'setMeta.php';?>
<meta property="og:type" content="website">
<meta property="fb:app_id" content="143988366195319">
<meta property="og:image" content="<?php getMetaInfo("image"); ?>">
<meta property="og:title" content="<?php getMetaInfo("title");  ?>">
<meta property="og:description" content="<?php getMetaInfo("description"); ?>">
<meta property="og:url" content="<?php echo "$protocol://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/flowplayer.css"/>
<script type="text/javascript" src="<?php echo $baseUrl?>/layouts/js/flowplayer.js"></script>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript" src="<?php echo $cdn ?>/layouts/js/flowplayer.hlsjs.light.min.js"></script>
<!--script type="text/javascript" src="http://releases.flowplayer.org/hlsjs/flowplayer.hlsjs.js"></script-->

<script>
var playListId=sessionStorage.getItem("pid");
var playListName=sessionStorage.getItem("pname");
var entryID="<?php echo $entryId; ?>"; 
</script>
<?php endif; ?>




<?php if($pageName=="liveTv.php") :?>
<?php $entryID_from_url=$_REQUEST['entryID'];$entryId = $entryID_from_url;?>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/flowplayer.css"/>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/flowplayer.js"></script>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/flowplayer.hlsjs.light.min.js"></script>

<script>
var entryID="<?php echo $entryId; ?>"; 
</script>
 <?php endif; ?>


<?php if($pageName=="originals.php") :?> 
<script>
    var categoryIDD="<?php echo $categoryIDD; ?>"; if(categoryIDD==0)categoryIDD=sessionStorage.getItem("original_id");
    var subCatID="<?php echo $subCatID ?>";
    var catName="<?php echo $catName; ?>";
    var catVideoID="<?php echo $vcatID; ?>";
</script>        
<?php endif; ?>



<?php if($pageName=="search.php") :?> 
<script>
     var searchTag="<?php echo $search_request;?>";
</script>        
<?php endif; ?>
<?php if( $pageName=="ytwatch.php") :?> 
<script>
var entryID="<?php echo $entryId; ?>"; 
 </script>   
 <?php endif; ?>
<?php if($pageName=="index.php" || $pageName=="view_type_4.php" )  :?> 
 <link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/jquery.bxslider.min.css" />
 <script type="text/javascript" src="<?php echo $cdn?>/layouts/js/jquery.bxslider.js"></script>
<?php endif; ?>
 
 
 <?php if($pageName=="listing.php") :?>
<script>
    var viewAllId="<?php echo $viewAllId;?>";
  
</script>
 
<?php endif;?>
 

<link rel="stylesheet" href="<?php echo $baseUrl?>/layouts/css/w3.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/loaders.min.css"/><!---- for loading time gif --->
<link rel="stylesheet" href="<?php echo $baseUrl?>/layouts/css/custom.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/css/overwrite.css"/>
<link rel="stylesheet" href="<?php echo $cdn?>/layouts/font-awesome/css/font-awesome.css"/>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/jQuery.loadScroll.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/custom.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/initFunctions.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/getterFunctions.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/setterFunctions.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/ajax.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/url.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl?>/core/login.js"></script>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/xml.js"></script>
<script type="text/javascript" src="<?php echo $cdn?>/layouts/js/aes.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl?>/config/webStyleConfig.css"/>
</head> 


  

