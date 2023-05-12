<!DOCTYPE html>
<html lang="zxx">
<head> 
        <title>Blog </title>
      <?php include("./include/stylesheet.php")?>
         
    </head>
    <body class="defult-home">
         
        <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
		 <?php include("./include/navbar.php")?>
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <div class="rs-inner-blog orange-color pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    <ul>
                                        <li><a href="#">University while the lovely valley team work</a></li>
                                        <li><a href="#">High school program starting soon 2021</a></li>
                                        <li><a href="#">Modern School the lovely valley team work</a></li>
                                        <li><a href="#">While the lovely valley team work</a></li>
                                        <li><a href="#">This is a great source of content for anyone…</a></li>
                                    </ul>
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Archives</h3>
                                    <ul>
                                        <li><a href="#">September 2020</a></li>
                                        <li><a href="#">September 2020</a></li>
                                    </ul>
                                </div>   
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul>
                                        <li><a href="#">College</a></li>
                                        <li><a href="#">High School</a></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">School</a></li>
                                        <li><a href="#">University</a></li>
                                    </ul>
                                </div>
                                  <div class="recent-posts mb-50">
                                      <h3 class="widget-title">Meta</h3>
                                      <ul>
                                          <li><a href="#">Log in</a></li>
                                          <li><a href="#">Entries feed</a></li>
                                          <li><a href="#">Comments feed</a></li>
                                          <li><a href="#">WordPress.org</a></li>
                                      </ul>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50">
                            <div class="row">
                                <?php include("./include_element/add_blog.php")?>
                                 
                               
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
          <!-- Blog Section End -->  

            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="assets/images/newsletter.png" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 

         <?php include("./include/footer.php")?>
        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>     
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>  
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
 
</html>