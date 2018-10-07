<?php
   $title="CAMAGA";
   $pageTitle="CAMAGA";
   $description="Home page for CAMAGA - Carnatic Music Association of Georgia";
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php
      define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" );
      include( CAMAGA_ROOT . "common/html_head.php");
      ?>
   <body id="home">
      <div class="wrapper">
         <?php
            include(CAMAGA_ROOT . "common/site_header.php");
            ?>
         <div id="content">
            <!-- upcoming concerts START  --
            <h1><?php echo $pageTitle; ?></h1>
            -->
            <?php
               include( CAMAGA_ROOT . "concerts/upcoming.php");
               ?>
            <!-- upcoming concerts END -->
            <h2>CAMAGA in Pictures</h2>
            <div id="gallery" >
               <img src="data/concerts/201810061600/thumbs/001.jpg"
                   data-image="data/concerts/201810061600/001.jpg"
                   data-description="Oct 6, 2018 - Srimushnam Raja Rao, Vittal Ramamurthy, VVS Murari and KV Gopalakrishnan" />
               <img src="data/concerts/201810061600/thumbs/002.jpg"
                   data-image="data/concerts/201810061600/002.jpg"
                   data-description="Oct 6, 2018 - Vittal Ramamurthy" />
               <img src="data/concerts/201810061600/thumbs/003.jpg"
                   data-image="data/concerts/201810061600/003.jpg"
                   data-description="Oct 6, 2018 - VVS Murari" />
               <img src="data/concerts/201810061600/thumbs/004.jpg"
                   data-image="data/concerts/201810061600/004.jpg"
                   data-description="Oct 6, 2018 - Srimushnam Raja Rao" />
               <img src="data/concerts/201810061600/thumbs/005.jpg"
                   data-image="data/concerts/201810061600/005.jpg"
                   data-description="Oct 6, 2018 - KV Gopalakrishnan" />
               <img src="data/concerts/201810061600/thumbs/006.jpg"
                   data-image="data/concerts/201810061600/006.jpg"
                   data-description="Oct 6, 2018 - Srimushnam Raja Rao, Vittal Ramamurthy, VVS Murari and KV Gopalakrishnan" />
               <img src="data/concerts/201809081600/thumbs/001.jpg"
                   data-image="data/concerts/201809081600/001.jpg"
                   data-description="Sep 8, 2018 - Thanjavur Murugaboopathi, Bharat Sundar, and Rajeev Mukundan" />
               <img src="data/concerts/201809081600/thumbs/002.jpg"
                   data-image="data/concerts/201809081600/002.jpg"
                   data-description="Sep 8, 2018 - Bharat Sundar" />
               <img src="data/concerts/201809081600/thumbs/003.jpg"
                   data-image="data/concerts/201809081600/003.jpg"
                   data-description="Sep 8, 2018 - Rajeev Mukundan" />
               <img src="data/concerts/201809081600/thumbs/004.jpg"
                   data-image="data/concerts/201809081600/004.jpg"
                   data-description="Sep 8, 2018 - Thanjavur K. Murugaboopathi" />
               <img src="data/concerts/201809081600/thumbs/005.jpg"
                   data-image="data/concerts/201809081600/005.jpg"
                   data-description="Sep 8, 2018 - Bharat Sundar" />
               <img src="data/concerts/201809081600/thumbs/006.jpg"
                   data-image="data/concerts/201809081600/006.jpg"
                   data-description="Sep 8, 2018 - Rajeev Mukundan" />
               <img src="data/concerts/201809081600/thumbs/007.jpg"
                   data-image="data/concerts/201809081600/007.jpg"
                   data-description="Sep 8, 2018 - Thanjavur K. Murugaboopathi" />
               <img src="data/concerts/201804071630/thumbs/001.jpg"
                    data-image="data/concerts/201804071630/001.jpg"
                    data-description="Apr 7, 2018 - Thanjavur Murugaboopathi, K.N.Shashikiran, P.Ganesh and VVS Murari" />
                <img src="data/concerts/201804071630/thumbs/002.jpg"
                      data-image="data/concerts/201804071630/002.jpg"
                      data-description="Apr 7, 2018 - K.N.Shashikiran, P.Ganesh" />
                <img src="data/concerts/201804071630/thumbs/003.jpg"
                      data-image="data/concerts/201804071630/003.jpg"
                      data-description="Apr 7, 2018 - VVS Murari" />
                <img src="data/concerts/201804071630/thumbs/004.jpg"
                      data-image="data/concerts/201804071630/004.jpg"
                      data-description="Apr 7, 2018 - Thanjavur Murugaboopathi" />
                <img src="data/concerts/201804071630/thumbs/006.jpg"
                      data-image="data/concerts/201804071630/006.jpg"
                      data-description="Apr 7, 2018 - Thanjavur Murugaboopathi, K.N.Shashikiran, P.Ganesh and VVS Murari" />
            </div>
            <br/></br/>
         </div>
         <div class="push"></div>
      </div>
      <?php
         include(CAMAGA_ROOT . "common/site_footer.php");
         ?>
      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>
      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script>
      <script type="text/javascript">
         jQuery(document).ready(function(){
         	jQuery("#gallery").unitegallery({
         		gallery_theme: "compact",
         		gallery_min_width: 150,
         		slider_scale_mode: "down",
         		theme_hide_panel_under_width: 4000,
         		slider_enable_text_panel: true
         	});
         });
      </script>
   </body>
</html>
