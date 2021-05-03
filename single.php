<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);?>
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
    
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
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
	<!--update database on page views-->
	<?php  require_once('adminstats/conn.php');
	require_once('counter.php');
	$pn=updateCounter(''.$row['title'].''); // Updates page hits
	echo $pn;
	updateInfo(); // Updates hit info ?>
	

  
    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
                    <!-- Post --->
                    <div class="post-single">
                        <div class="post-single-image">
                            <img width="1200" height="900" src="blogadmin/images/<?php echo $row['photo']; ?>" alt="">
                        </div>
                        <div class="post-single-content">
                            <a href="#" class="categorie"><?php echo $row['tags']; ?></a> 
                            <h4><?php echo $row['title']; ?></h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><a href="#"><img src="assets/img/profile.png" alt=""></a></li>
                                    <li><a href="#"><?php echo $row['author']; ?></a> </li>
                                    <li class="dot"></li>
                                    <li><?php echo $row['date']; ?></li>
                                    <li class="dot"></li>
                                    <li><?php echo $roo['count']; ?> Views</li>
                                </ul>
                            </div>
                        </div>
                  
                        <div class="post-single-body">
                            <?php echo $row['content']; ?>
                        </div>

                        <div class="post-single-footer">
                            <div class="tags">
                                <ul class="list-inline">
                                    <?php countcategories();?>
                                </ul>
                            </div>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <?php getsharingscript("links"); ?>
                                    <!-- <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li> -->
                                    									<?php getcommentsscript("links"); ?>
                                </ul>
                            </div>                           
                        </div>
                    </div> <!--/-->
                                        <!--next & previous-posts-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="single.php?id=5">
                                            <img src="https://www.theburningdoor.com/blogadmin/images/38729200_1619389184.jpg" alt="...">
                                            </a>                                          
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="single.php?id=5"><i class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="single.php?id=5">Why did Ameer al Momineen (as) did not rebel...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="single.php?id=1">
                                               <img src="https://www.theburningdoor.com/blogadmin/images/09028700_1619381223.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="single.php?id=1">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href="single.php?id=1">Prooving the incident of BURNING DOOR...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/-->
                    
                                    <!--widget-comments-->
                    <div class="widget mb-50">
                        <div class="title">
                            <h5>3 Comments</h5>
                        </div>
                        <ul class="widget-comments">
                            <li class="comment-item">
                                <img src="assets/img/profile.png" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Mohammed Ali</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                                    <p>Nice Blog
                                    </p>
                                    <div><a href="#" class="link" disabled> <i class="arrow_back"></i> Reply</a></div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/profile.png" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Raza Rizvi</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                                                      
                                    <p>Good Blog
                                    </p>
                                    <div>
                                        <a href="#" class="link" disabled>
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/profile.png" alt="">
                                <div class="content">
                               
                                    <ul class="info list-inline">
                                        <li>Qasim Ali</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                    
                                    <p>Mashallah, Informative blog.
                                    </p>

                                    <div>
                                        <a href="#" class="link" disabled>
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                       <!--Leave-comments-->
                        <div class="title">
                            <h5>Leave a Reply</h5>
                        </div>
                        <form class="widget-form" action="#" method="POST">
                            <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <div class="form-group">
                                        <input type="number" name="number" id="website" class="form-control" placeholder="Number">
                                    </div>
                                    <label>
                                        <input name="name" type="checkbox" value="1" required="required"> 
                                       <span>save my name , email and website in this browser for the next time I comment.</span>                                   
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn-custom" disabled>
                                        Post Comment
                                    </button>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4 max-width">
                                        <div class="widget">
                        <div class="widget-author">
                            <a href="about.php" class="image">
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
                    
                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Latest Posts</h5>
                        </div>
                        <ul class="widget-latest-posts">
                            <?php getfour("blogs");?>
                        </ul>
                    </div>
                    <!--/-->
                    
                    <!--widget-categories-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="widget-categories">
                            <?php countcategories();?>
                        </ul>
                    </div>
                    
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Gallery</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                    <!--widget-tags-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Tags</h5>
                        </div>
                        <div class="widget-tags">
                            <ul class="list-inline">
                                <li>
                                    <a href="">Fatima</a>
                                </li>
                                <li>
                                    <a href="">Zehra</a>
                                </li>
                                <li>
                                    <a href="">Syeda</a>
                                </li>
                                <li>
                                    <a href="">Tabarrah</a>
                                </li>
                                <li>
                                    <a href="">Lanat</a>
                                </li>
                                <li>
                                    <a href="">Imam Ali</a>
                                </li>
                                <li>
                                    <a href="">Shahadat</a>
                                </li>
                                <li>
                                    <a href="">Fadak</a>
                                </li>
                                <li>
                                    <a href="">Ahlulbayt</a>
                                </li>
                                <li>
                                    <a href="">Hadith</a>
                                </li>
                    
                            </ul>
                        </div>
                    </div>
                    <!--/-->
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
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