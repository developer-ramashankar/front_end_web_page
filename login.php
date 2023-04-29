<!DOCTYPE html>
<html lang="zxx">
<head> 
        <title>Educavo - Education HTML Template</title>
		<?php include("./include/stylesheet.php")?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
  
        <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
            <!--Header Start-->
		<?php include("./include/navbar.php")?>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">My Account</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                <form>
                                    <input type="email" name="E-mail" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required="">
                                    <button type="submit" class="readon submit-btn">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="#">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End -->  

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