<?php require("libs/fetch_data.php");?>
<?php
define("ROW_PER_PAGE",40);
require_once('database/db.php');//db config file
?>
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
	<?php	
    $search_keyword = '';
    if(!empty($_POST['search'])) {
    	$search_keyword = $_POST['search'];
    }
    $sql = 'SELECT * FROM blogs WHERE title LIKE :keyword OR content LIKE :keyword  OR tags LIKE :keyword OR author LIKE :keyword ORDER BY id DESC ';
    
    /* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
    	$page = $_POST["page"];
    	$start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $pdo_conn->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if(!empty($row_count)){
    	$per_page_html .= '<div class="col-lg-12">
                    <div class="pagination mt--10">
                        <ul class="list-inline">';
    	$page_count=ceil($row_count/ROW_PER_PAGE);
    	if($page_count>1) {
    		for($i=1;$i<=$page_count;$i++){
    			if($i==$page){
    				$per_page_html .= '<li class="active"><a type="submit" name="page">'.$i.'</a></li>';
    			} else {
    				$per_page_html .= '<li><a type="submit" name="page"/>'.$i.'</a></li>';
    			}
    		}
    	}
    	$per_page_html .= '<li><a href="#"><i class="arrow_carrot-2right"></i></a></li></ul></div></div>';
    }

    $query = $sql.$limit;
    $pdo_statement = $pdo_conn->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
    
	<!--/main-->
	
	    <!--Search-->
    <section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title"> 
                         <small>
                            <a href="index.html">Home</a>
                            <span class="arrow_carrot-right"></span> Search
                        </small>
<?php  if ($row_count==0) {
		# code...
    						echo "<p><b>Sorry your search for:<u>$search_keyword</u> returned zero results</b></p>";
    						echo "<p><b>Suggestions<b><br>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></p>";
    						echo "<p><a href=\"http://www.google.com/search?q=" 
    						. $search_keyword . "\" target=\"_blank\" title=\"Look up 
    						" . $search_keyword . " on Google\">Click here</a> to try the search on google</p>";
    					}
    					else{
    						echo "<h3>Searching:<span> $search_keyword</span></h3>";
    						echo "<p><b>Results ($row_count)..</b></p>";
    					}
    					?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <!--blog-grid-->
    <section class="blog-grid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="row">
<?php
    					if(!empty($result)) { 
    						foreach($result as $row) {
                                ?>
                        <div class="col-lg-6 col-md-6">
                            <!-- Post -->
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="single.php?id=<?php echo $row['id']; ?>">
                                        <img width="1200" height="900" src="blogadmin/images/<?php echo $row['photo']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <a href="#" class="categorie"><?php echo $row['tags']; ?></a>
                                    <h5>
                                        <a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                         Odit quam atque ipsa laborum sunt distinctio...</p>
                                    <div class="post-card-info">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/profile.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><?php echo $row['author']; ?></a>
                                            </li>
                                            <li class="dot"></li>
                                            <li><?php echo $row['date']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                        						<?php
                                  }
                              }
                              ?>
                              
                              <?php echo $per_page_html; ?>
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
        
<!-- End Main -->


	<!--footer-->
	<?php include("footer.php") ?>
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