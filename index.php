<!DOCTYPE html>
<html lang="zxx">  
<head>
		<title>Home</title>
		<?php include("./include/stylesheet.php")?>
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header home8-style4 main-home">
                <!--Header Start-->
           <?php include("./include/navbar.php")?>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Slider Section Start -->
            <div class="rs-slider main-home">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Online Courses From Leading Experts</h1>
                             
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore Interests and Career With Courses</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
					  <div class="slider-content slide3">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore Interests and Career With Cddddurses</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section start -->
                <div id="rs-features" class="rs-features main-home">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/3.png" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">5,320 online courses</span>
                                        </h4>
                                        <p class="dese">
                                           Enjoy a variety of fresh topics
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/2.png" alt="">
                                    </div>
                                    <div class="content-part">
                                      <h4 class="title">
                                          <span class="watermark">Expert instruction</span>
                                      </h4>
                                        <p class="dese">
                                            Find the right instructor
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/1.png" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">Lifetime access</span>
                                        </h4>
                                        <p class="dese">
                                           Learn on your schedule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Section End -->
            </div>
            <!-- Slider Section End -->                    

            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories main-home pt-90 pb-100 md-pt-60 md-pb-40">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title"> Top Categories</div>
                        <h2 class="title black-color">Popular Online Categories</h2>
                    </div>
                    <div class="row mb-35">
                  <?php include("./include_element/add_top_courses.php")?>
                  
                  
                    </div>
                    <div class="col-lg-12 text-center">
                        <a class="readon orange-btn main-home" href="course.php">View All categories </a>
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- Categories Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title">Select Courses</div>
                        <h2 class="title black-color">Explore Popular Courses</h2>
                    </div>
                    <div class="row">
                         <?php include("./include_element/add_explore_popular_courses.php")?>
                   
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta main-home">
                <div class="partition-bg-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-6"></div>
                            <div class="col-lg-6 pl-70 md-pl-15">
                                <div class="sec-title3 mb-40">
                                    <h2 class="title white-color mb-16">20% Offer Running - Join Today</h2>
                                    <div class="desc white-color pr-100 md-pr-0">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail in their duty through weakness. These cases are perfectly simple and easy every pleasure is to be welcomed and every pain avoided.</div>
                                </div>
                                <div class="btn-part">
                                    <a class="readon orange-btn transparent" href="#">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 

            <!-- Faq Section Start -->
            <div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon orange-color">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq Section Start -->
       

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">Testimonial</div>
                        <h2 class="title white-color">What Students Saying</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>   
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> News Update</div>
                        <h2 class="title"> Latest News & events</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/1.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Education is The Process of Facilitating Learning</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>October 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">High school program starting soon 2021 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Shutdown of schools extended to Aug 31 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/4.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 20, 2010</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">This is a great source of content for anyone… </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/5.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>August 30, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Pandemic drives millions from Latin America’s</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/6.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>May 10, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Modern School the lovely valley team work</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
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
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>