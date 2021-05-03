    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="index.html">
                    <img width="150px" src="assets/img/logo.png" alt="" class="logo-dark">
                    <img width="150px" src="assets/img/logo.png" alt="" class="logo-white">
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="index.php"> Home </a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Category </a>
<ul class="dropdown-menu fade-up">
<?php getcategoriesmenu("blog_categories"); ?>
                        </ul>
                    </li>
                        <li class="nav-item"><a class="nav-link" href="about.php"> About </a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"> Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contribute.php"> Contribute </a>
                    </li>
                    
<li class="nav-item dropdown"><a class="mb-4 nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Membership </a>
<ul class="dropdown-menu fade-up">
<li><a class="dropdown-item" href="blogadmin/membership_signup.php"> Sign Up</a></li>

<li><a class="dropdown-item" href="blogadmin/index.php"> Login </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="<?php getlinks("links","facebook");?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php getlinks("links","dribble");?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php getlinks("links","twitter");?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php getlinks("links","pinterest");?>">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->