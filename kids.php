<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', TRUE);
  require_once 'config/auth.php'; ?>
<?php require_once 'includes/header.php';?>
<body onload="initKids()" id="get_token">

   
   <?php require_once 'includes/navigation.php';?>  
      <div class="container fullHeight">
    <div class="w3-hide-large w3-hide-medium" style="height: 50px;"> </div>
      <!-- sliderimage--> 
    <div class="w3-row ">
        <div class="w3-col s12 m12 l12" id="carousel_only">
      
            <img class="w3-image" width="100%" src="images/placeholderjeeoguru.png">
              
       </div>
  
   </div>
   <!-- !slider-----> 
   
   
   <div class="w3-row channel-container darkBg fullHeight">
    <div class="main-container w3-row-padding"  id="kids_result"> 
    	<div class="w3-row-padding bxslider1" >   
                 <?php for($i=0;$i<4;$i++) :?>
                  <div class="w3-col s12 m3 l3 lazy-container"> 
                    <div class="w3-card-2"> 
                     <img  src="<?php echo $baseUrl?>/images/images/placeholder@.png" /> </a> 
                    </div>
                </div>
                      <?php endfor; ?>  
                </div>
    </div>

 <div class="w3-col s5 m5 l5 w3-center">&nbsp;</div>
  <div class="w3-col s6 m1 l1 w3-center padd_cont">
   <button class="load_more w3-button w3-left  w3-green1 font-form  padding-both w3-round" id="load_more_button" >load more</button>
  </div> 
   <div class="w3-col s5 m5 l5 w3-center">&nbsp;</div>
  </div>   
      </div>
    <!-- Kids Container---->
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<?php require_once 'includes/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){sliderIntrvl=setInterval(slider,5000); })
$(document).ready(function() {
var page=0;var limit=8;
var catIdNew=sessionStorage.getItem("kids_id");
var track_click = 0; //track user click on "load more" button, righ now it is 0 click
var total_pages =0;
$.post(GET_CATEGORY_DATA, {page: track_click,partnerid:PARTNER_ID,categoryid:catIdNew,limit:limit,countrycode:countrycode}, function(JSONresponse){
  var JSONobject = JSON.parse(JSONresponse);
  var kids_total_video= JSONobject.total_video;
  total_pages=Math.ceil(kids_total_video/limit);
  var resultShow=buildKidsCategory(JSONobject);
  $("#kids_result").html(resultShow);
  track_click++;
 });


$(".load_more").click(function (e) { //user clicks on button
        $(this).hide();
         //hide load more button on click
        //$('.animation_image').show(); //show loading image
        if(track_click <= total_pages) //make sure user clicks are still less than total pages
        {
                $.post(GET_CATEGORY_DATA, {page: track_click,partnerid:PARTNER_ID,categoryid:catIdNew,limit:limit,countrycode:countrycode}, function(JSONresponse){
                var JSONobject = JSON.parse(JSONresponse);
                var resultShow=buildKidsCategory(JSONobject);
                $(".load_more").show(); //bring back load more button
                $("#kids_result").append(resultShow); //append data received from server
                //scroll page to button element
                $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
                //hide loading image
                //$('.animation_image').hide(); //hide loading image once data is received
                track_click++; //user click increment on load button

                 }).fail(function(xhr, ajaxOptions, thrownError) {
               // alert(thrownError); //alert any HTTP error
                 $(".load_more").show(); //bring back load more button
                //$('.animation_image').hide(); //hide loading image once data is received
             });


             if(track_click >= total_pages-1)
            {
                  //reached end of the page yet? disable load button
                 _('load_more_button').style.visibility = 'hidden';


            }
         }

        });
   
//});

}); 

</script>
