    <!--newslettre-->
    <section class="newslettre">
      <div class="container-fluid">
        <div class="newslettre-width text-center">
          <img width="200" height="100" src="assets/img/logo.png" alt="">
        </div>
        <div class="mb-4 newslettre-width">
          <div class="newslettre-info">
            <h5>About Us</h5>
            <p>
              <?php getshortdescription("titles"); ?>...<br><br><a class="categorie" href="about.php">Read More</a>
            </p>
          </div>
        </div>
        <ul class="ml-lg-4 mb-4 mt-4 widget-latest-posts">
            <?php getpopularposts("page_hits"); ?>
        </ul>
        <div class="mt-4 newslettre-width text-center">
          <div class="newslettre-info">
            <h5>Subscribe to our Newsletter</h5>
            <p>
              Sign up for free and be the first to get notified about new posts.
            </p>
          </div>
          <form action="#" method="post" class="newslettre-form">
            <div class="form-flex">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email adress" required="required">
              </div>
              <button class="submit-btn" type="submit">Subscribe</button>
            </div>
          </form>
          <div class="social-icones">
            <ul class="list-inline">
              <li>
                <a href="<?php getlinks("links","facebook");?>">
                  <i class="fab fa-facebook-f"></i>Facebook</a>
              </li>
              <li>
                <a href="<?php getlinks("links","twitter");?>">
                  <i class="fab fa-twitter"></i>Twitter </a>
              </li>
              <li>
                <a href="<?php getlinks("links","dribble");?>">
                  <i class="fab fa-instagram"></i>Instagram </a>
              </li>
              <li>
                <a href="<?php getlinks("links","pinterest");?>">
                  <i class="fab fa-youtube"></i>Youtube</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--footer-->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 text-center">
            <div class="copyright">
              <p>
                © The Burning Door <?php $current=date("Y"); print_r($current);?>
                | Managed By <a href="https://shiachannel.in">Shia Chanel</a>, All rights reserved.
              </p>
            </div>
            <div class="back">
              <a href="#" class="back-top">
                <i class="arrow_up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--Search-form-->
    <div class="search">
      <div class="container-fluid">
        <div class="search-width  text-center">
          <button type="button" class="close">
            <i class="icon_close"></i>
          </button>
          <form name="form" class="search-form" action="search.php" method="post">
            <input type="search" value="" placeholder="What are you looking for?" name="search">
            <button name="submit" type="submit" class="search-btn">search</button>
          </form>
        </div>
      </div>
    </div>
    <!--/-->