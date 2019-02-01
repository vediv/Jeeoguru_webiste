<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', TRUE);
  require_once 'config/auth.php'; ?>
<?php require_once 'includes/header.php';
$patID= $_REQUEST['catid'];

?>
<body onload="initMovieSubCategory(<?php echo $patID; ?>)" id="get_token">

    <style>
        @media (min-width:100px) and (max-width:600px)
         {
            .arrowR, .arrowR:hover {  width: 32px;   height: 32px;  background-size: 32px 32px; }
             .arrowL, .arrowL:hover {  width: 32px;  height: 32px;  background-size: 32px 32px;    }
            .playBtn, .playBtn:hover { width: 40px;height: 40px;background-size: 40px 40px;left: 15%;bottom: 5%;z-index: 2;  }
            .header{z-index: 3;} }
    </style>
   <?php require_once 'includes/navigation.php';?>

  <div class="w3-seprator-top"></div>
  <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $baseUrl?>/index">HOME</a> / </li><li><a href="movies" class="last">Movies</a> </li><!--<li><a href="Moviesall" class="last">Moviesall</a></li>--></ol>
        </div>
  </div>
  <div class="container fullHeight">

  <div class="w3-col m12 s12 l12 w3-center font-size " id="category-title">
   <!-- <img class="w3-image" width="100%" src="images/banners/placeholderL.jpg">-->
   </div>


       <div class="w3-row">
            <div class= "" id="subcategoryMovies">
            	   <?php for($i=0;$i<3;$i++) :?>
                  <div class="w3-col s12 m3 l3 lazy-container">
                    <div class="w3-card-2">
                    <img  src="<?php echo $baseUrl;?>/images/banners/placeholder@.png" />
                     <div class="card-text ">
                      <h4 class="w3-center" ></h4>
                     </div>
                    </div>
                </div>
                      <?php endfor; ?>

           <div class="card-text ">
                 <h4 class="w3-center" ></h4>
            </div>
        </div>
    </div>
    <div class="w3-seprator"></div>
    <div class="w3-col s5 m5 l5 w3-center">&nbsp;</div>
    <div class="w3-col s1 m1 l1 w3-center padd_cont" id="button_load">
     <button class="load_more w3-button w3-left  w3-green1 font-form  padding-both w3-round" id="load_more_button" >load more</button>
    </div>
     <div class="w3-col s5 m5 l5 w3-center">&nbsp;</div>
    </div>
    <div class="w3-seprator"></div>  <div class="w3-seprator"></div>

<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<?php require_once 'includes/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){sliderIntrvl=setInterval(slider,5000); })
$(document).ready(function() {
var page=0;var limit=12;
var catIdNew=<?php echo $patID; ?>;
//alert(catIdNew);
var track_click = 0; //track user click on "load more" button, righ now it is 0 click
var total_pages =0;
  $("#button_load").hide();
$.post(GET_CATEGORY_DATA, {page: track_click,partnerid:PARTNER_ID,categoryid:catIdNew,limit:limit,countrycode:countrycode}, function(JSONresponse){
  var JSONobject = JSON.parse(JSONresponse);
  var total_video= JSONobject.total_video;
  var paging=JSONobject.paging;
  if(paging==null)
  {  _('load_more_button').style.visibility = 'hidden'; }
  total_pages=Math.ceil(total_video/limit);
  var resultShow=buildMoviesCategoryHtml(JSONobject);
  $("#subcategoryMovies").html(resultShow);
  $("#button_load").show();
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
                var resultShow=buildMoviesCategoryHtml(JSONobject);
                $(".load_more").show(); //bring back load more button
                $("#subcategoryMovies").append(resultShow); //append data received from server
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
