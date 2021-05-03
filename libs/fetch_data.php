<?php 

function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Tagline!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo ''.$tagline['tagline'].'';
		}
	}

	mysqli_close($con);
}

function geticon($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getjavascripts($table){
require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}

	mysqli_close($con);
}
function getsharingscript($table){
require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $sharingscript => $sharing) {
      	# code...
			echo ''.$sharing['sharing_script'].'';
		}
	}

	mysqli_close($con);
}
function getcommentsscript($table){
require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $commentsscript => $csript) {
      	# code...
			echo ''.$csript['comments_script'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				# code...
				echo ''.$contacts['googlemap'].'';
			}
		
		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}
function countcategories(){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM blog_categories LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM blogs WHERE category='$categoryid'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo '
			<li>
			<a href="./category.php?id='.$categoryid.'" class="categorie">
			'.$categorydata['name'].'
			</a>
			<span class="ml-auto">'.$rowcountcategory.'
			</span>
			</li>';
		}
	}

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
			elseif ($position==5) {

					# code...
				echo ''.$bannertext['bannertext5'].'';
			}		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	
mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
					# code...
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
					# code...
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
					# code...
				echo ''.$site['dribble'].'';
			}

		}
	}

	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			echo '
			<li>
			<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			</li>';
		}
	}

	mysqli_close($con);
}
function getbottomsliderposts($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $sliderposts => $slideritem) {
      	# code...fetch actual category from categories table
			$category_id=$slideritem['category'];
			$sql="SELECT * FROM blog_categories WHERE id='$category_id'";
			if ($result=mysqli_query($con,$sql))
			{
				foreach ($result as $results => $actualcategory) {
					$ctgry=$actualcategory['name'];
				}
			}
				#code...display the results
			echo '<li>
			<div class="blog-item">
			<img src="blogadmin/images/'.$slideritem['photo'].'" alt="fantastic cms" class="img-fluid" style="width:450px;height:350px"/>
			<button type="button" class="btn btn-primary play">
			<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fas fa-eye"></i></a>
			</button>
			<div class="floods-text">
			<h3>'.$slideritem['title'].'
			<span>'.$ctgry.'
			<label>|</label>
			<i>'.$slideritem['author'].'</i>
			</span>
			</h3>

			</div>
			</div>
			</li>';
		}
	}

	mysqli_close($con);
}
function getblogridposts($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
      	# code...
			echo '
			<div class="col-lg-4 col-md-6">
            <!-- Post -->
            <div class="post-card">
              <div class="post-card-image">
                <a href="single.php?id='.$griditem['id'].'">
                  <img width="1200" height="900" src="blogadmin/images/'.$griditem['photo'].'" alt="">
                </a>
              </div>
              <div class="post-card-content">
                <a href="#" class="categorie">'.$griditem['tags'].'</a>
                <h5>
                  <a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
                </h5>
                <p>
                  This website is dedicated in promoting the tragic incident of "The Burning Door" of Sayyidah Zahra (sa) and Unmasking the Early Terrorist of Islam...
                </p>

                <div class="post-card-info">
                  <ul class="list-inline">
                    <li>
                      <a href="#">
                        <img src="assets/img/profile.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">'.$griditem['author'].'</a>
                    </li>
                    <li class="dot"></li>
                    <li>'.$griditem['date'].'</li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/-->
          </div>
			';
		}
	}

	mysqli_close($con);

}
function getolderposts($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<li class="last-post">
              <div class="image">
                <a href="single.php?id='.$op['id'].'">
                  <img src="blogadmin/images/'.$op['photo'].'" alt="...">
                </a>
              </div>
              <div class="nb">
                '.$op['id'].'
              </div>
              <div class="content">
                <p>
                  <a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
                </p>
                <small><span class="icon_clock_alt"></span> '.$op['date'].'</small>
              </div>
            </li>';
		}
	}

	mysqli_close($con);
}
function getfour($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 4";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $thefour => $fourdata) {
      	# code...
			echo '<li class="last-post">
              <div class="image">
                <a href="single.php?id='.$fourdata['id'].'">
                  <img src="blogadmin/images/'.$fourdata['photo'].'" alt="...">
                </a>
              </div>
              <div class="nb">
                '.$fourdata['id'].'
              </div>
              <div class="content">
                <p>
                  <a href="single.php?id='.$fourdata['id'].'">'.$fourdata['title'].'</a>
                </p>
                <small><span class="icon_clock_alt"></span> '.$fourdata['date'].'</small>
              </div>
            </li>
            ';
		}
	}

	mysqli_close($con);
}
function getonelatest($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 1";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      	# code...
			echo '
			<div class="mt-3 col-lg-6 col-md-6">
            <!-- Post -->
            <div class="post-card">
              <div class="post-card-image">
                <a href="single.php?id='.$onedata['id'].'">
                  <img width="1200" height="900" src="blogadmin/images/'.$onedata['photo'].'" alt="">
                </a>
              </div>
              <div class="post-card-content">
                <a href="#" class="categorie">'.$onedata['tags'].'</a>
                <h5>
                  <a href="single.php?id='.$onedata['id'].'">'.$onedata['title'].'</a>
                </h5>
                <p>
                  This website is dedicated in promoting the tragic incident of "The Burning Door" of Sayyidah Zahra (sa) and Unmasking the Early Terrorist of Islam...
                </p>

                <div class="post-card-info">
                  <ul class="list-inline">
                    <li>
                      <a href="#">
                        <img width="200" height="200" src="assets/img/profile.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">'.$onedata['author'].'</a>
                    </li>
                    <li class="dot"></li>
                    <li>'.$onedata['date'].'</li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/-->
          </div>
          </div>
          ';
		}
	}

	mysqli_close($con);
}
function geteditorschoice($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $edschoice => $choice) {
			#get actual blog post data
			$postid=$choice['blog'];
			$sql="SELECT * FROM blogs WHERE id='$postid'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $posts => $postdata) {
					# code...display actual posts
					echo '
					<li class="last-post">
              <div class="image">
                <a href="single.php?id='.$postdata['id'].'">
                  <img src="blogadmin/images/'.$postdata['photo'].'" alt="...">
                </a>
              </div>
              <div class="nb">
                '.$postdata['id'].'
              </div>
              <div class="content">
                <p>
                  <a href="single.php?id='.$postdata['id'].'">'.$postdata['title'].'</a>
                </p>
                <small><span class="icon_clock_alt"></span> '.$postdata['date'].'</small>
              </div>
            </li>
            ';
				}
			}
      	# code...
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '			                        <div class="col-lg-12 col-md-8">
                            <!-- Post -->
                            <div class="post-card">
                                <div class="post-card-content">
                                    <h5>
No Blogs Found
                                    </h5>
                                    <p>Go Back <a href="index.php">Home</a></p>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                        ';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      	# code...
			echo '
			                        <div class="col-lg-6 col-md-6">
                            <!-- Post -->
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="single.php?id='.$cdata['id'].'">
                                        <img width="1200" height="900" src="blogadmin/images/'.$cdata['photo'].'" alt="">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <a href="#" class="categorie">'.$cdata['tags'].'</a>
                                    <h5>
                                        <a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a>
                                    </h5>
                                    <p>This website is dedicated in promoting the tragic incident of "The Burning Door" of Sayyidah Zahra (sa) and Unmasking the Early Terrorist of Islam...</p>
                                    <div class="post-card-info">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/profile.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">'.$cdata['author'].'</a>
                                            </li>
                                            <li class="dot"></li>
                                            <li>'.$cdata['date'].'</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                        ';
		}
	}

	mysqli_close($con);
}
function getpopularposts($table){
	require("database/db_connect.php");

mysqli_set_charset($con,"utf8");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM blogs WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '
<li style="margin-top:40px" class="ml-lg-4 last-post">
              <div class="image">
                <a href="single.php?id='.$specificblog['id'].'">
                  <img src="blogadmin/images/'.$specificblog['photo'].'" alt="...">
                </a>
              </div>
              <div class="nb">
                '.$specificblog['id'].'
              </div>
              <div class="content">
                <p>
                  <a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].'</a>
                </p>
                <small><span class="icon_clock_alt"></span> '.$specificblog['date'].'</small>
              </div>
            </li>
            ';
				}
			}
		}
	}

	mysqli_close($con);

}


?>
