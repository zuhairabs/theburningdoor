<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blog_categories where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php getwebname("titles"); echo" - "; gettagline("titles");?></title>
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ENV1E3WYKQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ENV1E3WYKQ');
</script>


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
    
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
	<!--/banner-->
    <!--Page404-->
    <section class="section pt-55 mb-50">
        <div class="container-fluid">
            <div class="page404  widget">
                <div class="image">
                    <img src="assets/img/404.html" alt="">
                </div>
                <div class="content">
                    <h1>404</h1>
                    <h3>Page Not Found.</h3>
                    <p>It looks like nothing was found at this location. </p>
                    <a href="index.php" class="btn-custom">Go back to Home</a>
                </div>
            </div>
        </div>
    </section>   
	
	
	<!--/main-->
	    <section class="blog-grid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="row">
                        						<?php  
							$categoryid=$row['id'];
							getcategoryblogs("blogs",$categoryid);
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--//main-->

	<!--footer-->
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