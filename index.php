<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="author" content="The Burning Door">
	    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://theburningdoor.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php getwebname("titles"); echo" - "; gettagline("titles");?>" />
    <meta property="og:description" content="<?php getshortdescription("titles");?>" />
    <meta property="og:url" content="https://theburningdoor.com" />
    <meta property="og:site_name" content="TheBurningDoor" />
    <meta property="og:image" content="https://theburningdoor.com/images/logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "The Burning Door - Unmasking the Early Terrorists",
  "alternateName": "Unmasking the Early Terrorists",
  "url": "https://theburningdoor.com",
  "logo": "https://theburningdoor.com/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9022122553",
    "contactType": "customer service",
    "areaServed": ["IN","IR","IQ","150","142","YE","TR","SE","SA","RU","PK","OM","NO","LB","DE","GH","EG","BD","BH","AZ","AF","US","GB","CA"],
    "availableLanguage": ["Arabic","Azerbaijani","Persian","Hindi","Urdu"]
  },
  "sameAs": [
    "https://www.facebook.com/theburningdoor_com/",
    "https://twitter.com/theburningdoor_com?lang=en",
    "https://www.instagram.com/theburningdoor_com/",
    "https://www.youtube.com/channel/UCb-4Mr8FtL34-v4mM3E8hiA",
    "https://theburningdoor.com"
  ]
}
</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->


    <!-- Meta Data -->
    <link rel="shortcut icon" href="assets/img/icons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#088998">
    <meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#f67280">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/elegant-font-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
<!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->
    
	<?php include("header.php");?>
	<?php include("banner.php");?>
	
    <!--grid-layout-->
    <section class="mt-80">
		<div class="container">
			<div class="row">
			    <?php getblogridposts("blogs");?>
			    <!--pagination-->
			    <div class="col-lg-12">
                    <div class="pagination mt--10">
                        <ul class="list-inline">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="arrow_carrot-2right"></i></a></li>
                        </ul>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>

    <!--widget-categories-->
    <div class="container">
      <div class="row max-width">

        <!--widget-links-->

        <div class="mt-4 ml-lg-4 mr-lg-4 col-lg-5 widget">
          <div class="widget-author">
            <a href="#" class="image">
              <img src="assets/img/logo.png" alt="">
            </a>
            <h6>
              <span>The Burning Door</span>
            </h6>
            <p>

              Share and Spread the Word!
            </p>


            <div class="social-media">
              <ul class="list-inline">
                <li>
                  <a href="<?php getlinks("links","facebook");?>" class="color-facebook">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php getlinks("links","dribble");?>" class="color-instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php getlinks("links","twitter");?>" class="color-twitter">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php getlinks("links","facebook");?>" class="color-youtube">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php getlinks("links","pinterest");?>" class="color-pinterest">
                    <i class="fab fa-pinterest"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/-->

        <!--widget-posts-->
        <div class="mt-4 ml-lg-4 col-lg-5 widget ">
          <div class="section-title">
            <h5>Older Posts</h5>
          </div>
          <ul class="widget-latest-posts">
              <?php getolderposts("blogs");?>
          </ul>
        </div>

        <!--/-->

        <div class="mt-4 ml-lg-4 mr-lg-4 col-lg-5 widget">
          <div class="section-title">
            <h5>Categories</h5>
          </div>
          <ul class="widget-categories">
              <?php countcategories();?>
          </ul>
        </div>
        <div class="mt-4 ml-lg-4 col-lg-5 widget ">
          <div class="section-title">
            <h5>Editor's Choice</h5>
          </div>
          <ul class="widget-latest-posts">
              <?php geteditorschoice("editors_choice"); ?>
          </ul>
        </div>
        <div class="mt-4 ml-lg-4 col-lg-5 widget ">
          <div class="section-title">
            <h5>More Blogs</h5>
          </div>
          <ul class="widget-latest-posts">
              <?php getfour("blogs");?>
          </ul>
        </div>

              <?php getonelatest("blogs");?>
    </div>
    <!--/-->
    


					<?php include("footer.php");?>
					<!---->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- JS Plugins  -->
    <script src="assets/js/ajax-contact.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/switch.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>


						</body>

						</html>