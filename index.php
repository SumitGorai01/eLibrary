<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" text="type/css" href="style.css">
        
        <style>
           html, body{
                height:100%;
                width:100%;
                overflow-x:hidden;
            }
            .card{
                margin-left:20px;
                margin-right:20px;

            }
        </style>
        
        
        <script>
      setTimeout(function a(){
        document.getElementById("loading").style.display="none";
    }, 5000);
    </script>
        
        <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->
  
  <!-- Font Awesome 5 links-->
  <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>

        
        
    <title>E-Library-A Online Book Management System</title>
  </head>
  <body onload="loadfun()">
      
     <!--remove this comment when project is complete-->
    <div id="loading"></div>
    <div class="container">
<center>
    <img src="logo.png"  class="img-fluid" alt="Responsive image" height="100vh" width="100vh">
<!--<img src="logo.png" height="80vh" width="100vh">-->
</center>
</div>
    <!--<h1>e-LIBRARY</h1>-->

<nav class="navbar navbar-expand-lg navbar-dark  sticky-top" id="top_nav" style="background-color:#1b9264;">
    <!--<nav class="navbar navbar-dark bg-primary">-->
  <a class="navbar-brand" href="#">
    <img src="lg.jpg" width="30" height="30" alt="">
  </a>
<!--</nav>-->
  <a class="navbar-brand" href="index.php">e-Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-md-auto" id="menu4" style="padding-right:200px;">
       
        <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1">User Sign Up</a>
      </li>
<li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">User / Admin Login <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#about">About Us</a>
          <a class="dropdown-item" href="#contact">Contact</a>
          <div class="dropdown-divider"></div>
          <!--<a class="dropdown-item" href="#">Something else here</a>-->
        </div>
      </li>
     
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link disabled" href="#" >Disabled</a>-->
      <!--</li>-->

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:pink">Search</button>
    </form>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100 "src="https://c4.wallpaperflare.com/wallpaper/302/456/881/books-keep-calm-and-quote-motivational-wallpaper-preview.jpg" alt="First slide" height="496px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://c4.wallpaperflare.com/wallpaper/935/849/231/background-tree-book-wallpaper-preview.jpg" alt="Second slide" height="496px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://c1.wallpaperflare.com/preview/851/1023/587/library-books-knowledge-information.jpg" alt="Second slide" height="496px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://c0.wallpaperflare.com/preview/469/70/385/background-book-bookcase-books.jpg" alt="Second slide" height="496px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://c4.wallpaperflare.com/wallpaper/927/454/476/book-magic-glamour-spirituality-wallpaper-preview.jpg" alt="Second slide" height="496px">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="z.jpg" alt="Second slide" height="496px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://c0.wallpaperflare.com/preview/294/911/698/jesus-god-holy-spirit-bible.jpg" alt="Third slide" height="496px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div>
<h3><span><marquee> We  provide both online and Offline library for book issue.</marquee></span></h3>




<center>
    <div class="card-deck h-200 w-100" id="feature">
 <div class="card bg-dark text-white  ">
  <img class="card-img" src="https://media.istockphoto.com/photos/abstract-blurred-gradient-bright-mesh-banner-background-textureblue-picture-id1330343437?b=1&k=20&m=1330343437&s=170667a&w=0&h=YjzU_nIGLF_kDGue7V6O0tT6boe3zSHc3tp9CJ_CIRg=" alt="Card image" height="300px">
  <div class="card-img-overlay">
    <h5 class="card-title"><div class="p-8 mb-2 bg-success text-white"><p class="font-weight-bold">For offline library </div></h5>
    <p class="card-text"><ul  style="list-style: none;font-size:20px">
				<li>Opening Timing: 7:00 AM</li>
				<li>Closing Timing: 10:00 PM</li>
				<li>(Sunday off)</li>
				<li>Provide book</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>Peacefull Environment</li>
				
			</ul></p>
    <!--<p class="card-text">Last updated 3 mins ago</p>-->
  </div>
</div>

<div class="card bg-dark text-white">
  <img class="card-img" src="https://media.istockphoto.com/photos/abstract-blurred-gradient-bright-mesh-banner-background-textureblue-picture-id1330343437?b=1&k=20&m=1330343437&s=170667a&w=0&h=YjzU_nIGLF_kDGue7V6O0tT6boe3zSHc3tp9CJ_CIRg=" alt="Card image" height="300px">
  <div class="card-img-overlay">
    <h5 class="card-title"><div class="p-8 mb-2 bg-success text-white"><p class="font-weight-bold">For online library</div></h5>
    <p class="card-text"> <ul style="list-style: none; font-size:20px">
				<li>Provide e-book</li>
				<li>Limited access who don't by membership </li>
				<li>Buy book online</li>
				<li>Timing 24 x 7</li>
				<li>More features</li>
				<li>More features</li>
				
				
			</ul></p>
    <!--<p class="card-text">Last updated 3 mins ago</p>-->
  </div>
</div>
  </div>
</div>
</center>
<section class="car">
<div class="container " >
<div class="card-deck">
    <span class="border border-info"></span>
  <div class="card ">
      <span class="border border-danger"></span>
    <img class="card-img-top" src="https://media.istockphoto.com/photos/java-programming-concept-virtual-machine-on-server-room-background-picture-id1131109259?k=20&m=1131109259&s=612x612&w=0&h=fusjYOp-WHTyU-pavkkMzljwQ2DKuzt9aj7pcwpMOY4=" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">JAVA</h5>
      <p class="card-text">Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
      <span class="border border-danger"></span>
    <img class="card-img-top" src="https://image.shutterstock.com/image-photo/python-programming-language-developer-will-600w-1670411941.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PYTHON</h5>
      <p class="card-text">Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL).</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
      <span class="border border-danger"></span>
    <img class="card-img-top" src="https://image.shutterstock.com/shutterstock/photos/1449924503/display_1500/stock-vector-web-development-coding-and-programming-responsive-layout-internet-site-or-app-of-devices-creation-1449924503.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">WEB DEVELOPMENT</h5>
      <p class="card-text">Web development refers to building website and deploying on the web. Web development requires use of scripting languages both at the server end as well as at client end.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
</section>
 <!-- Contact Us Section -->
 <!--<span class="border border-danger"></span>-->
        <section class="contact-us" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <form action="/" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Phone No." />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Type Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-light">Contact Now</button>
                        </form>
                    </div>

                    <div class="col-lg-5">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.356032719181!2d85.33357931452532!3d23.375333984775516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e172763b8743%3A0x6dc76d849cd6dec4!2sAchievers%20Smart%20Library!5e0!3m2!1sen!2sin!4v1655800689931!5m2!1sen!2sin" width="500" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Us Section -->
 
 
 
 <!--faq start-->
 
  <section class="faq-section" id="faq-section">
<div class="container">
  <!--<div class="row">-->
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 offset-md-3">

                        <div class="faq-title text-center pb-3">
                            <!--<h2>FAQ</h2>-->
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-1">
                        
                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkHBE6WeBYrfc3ZOebpInxkRdiyC54jhiLaQ&usqp=CAU"><h2>FAQ</h2>
                     
                </div>
                <div class="col-lg-11">
                    <div class=" offset-md-3">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>Q: What is a library management system?
 <span id="expand" style="float:right; font-size:20px;">+</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ans: A library management system is a software application designed to manage and organize all aspects of a library's operations, such as cataloging and circulation of books, managing patrons, and tracking library inventory.
 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span>Q: What are the benefits of using a library management system?
<span id="expand" style="float:right; font-size:20px;">+</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ans: Using a library management system can help libraries automate many of their routine tasks, which can save time and reduce errors. It can also help libraries better manage their resources and provide better service to patrons by providing tools for searching and locating materials and tracking patron borrowing histories.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Q: How do I search for a book in the library management system?
<span id="expand" style="float:right; font-size:20px;">+</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ans:After Login to your account , Our library management systems provide a search feature that allows users to search for books by author, title, subject, or keyword. Simply enter your search terms in the appropriate fields and click the search button to view a list of matching results.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span>Q: Can I renew my library books online using the library management system?
<span id="expand" style="float:right; font-size:20px;">+</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ans: Yes, Our library management systems provide a feature that allows patrons to renew their borrowed books online. Simply log in to your account, find the book you want to renew, and click the renew button.
</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span>Q: How do I reserve a book that is currently checked out in the library management system?
<span id="expand" style="float:right; font-size:20px;">+</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ans: Many library management systems provide a feature that allows patrons to reserve a book that is currently checked out. Simply log in to your account, find the book you want to reserve, and click the reserve button. When the book is returned, you will be notified and the book will be held for you.
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </section>
  
 <!--faq start-->

<!--about as-->

<style>
		/*body {*/
		/*	font-family: Arial, sans-serif;*/
		/*	margin: 0;*/
		/*	padding: 0;*/
		/*}*/
		header {
			/*background-color: #333;*/
			color: #fff;
			padding: 0px;
		}
		/*h1 {*/
		/*	margin: px;*/
		/*	padding:0px;*/
		/*}*/
		#about{
		        background: #6f90e0;
		        font-size:15px;
		}
		main {
			padding: 20px;
		}
		p {
			line-height: 1.5;
		}
		.about-us header h1 {
    color: #ffffff;
    font-size: 30px;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 8px;
    border-bottom: 5px solid #af8070;
    /*padding-bottom: 10px;*/
    display: inline-block;
}
	</style>

 
  <section class="about-us" id="about">
<div class="container">
	<header>
		<h1>About Us</h1>
	</header>
	<main>
		<p>e-Library is a digital library that provides access to a wide range of books, journals, and other resources. Our mission is to make knowledge accessible to everyone, regardless of their location or background.</p>
		<p>We believe that reading is essential to personal growth and development, and that everyone should have the opportunity to explore new ideas, learn new skills, and expand their horizons. That's why we've created e-Library, a platform that makes it easy and convenient to access a wealth of information.</p>
		<p>Our team is made up of passionate book lovers, tech enthusiasts, and information professionals. We're committed to providing the best possible experience for our users, and we're always looking for ways to improve our platform.</p>
	</main>
	</div>
</section>

<!--about as-->


<!--footer start-->
<footer id="all">
    <!--<span class="border border-danger"></span>-->
  <div class="footer-wrap">
  <div class="container first_class">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <h3>BE THE FIRST TO KNOW</h3>
          <p>Get all the latest information of our Library , Jobs informations
            and Education informations . Sign up for our newsletter today.</p>
        </div>
        <div class="col-md-4 col-sm-6">
        <form class="newsletter"  >
           <input type="text" name="email1" placeholder="Email Address"> 
            <button name="sub" class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>  
        </form>
    <?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_REQUEST["sub"]))
        {
            //if subscribe btn clicked
            $userEmail = $_REQUEST["email1"]; //getting user entered email
            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL))
                { //validating user email
                     $subject = "Thanks for Subscribing";
                     $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                    $sender = "From: sumitgr7479@gmail.com";
        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert text-white">
            <?php echo "Thanks for Subscribing us." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert text-white">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert text-white">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
     
        
        </div>
        <div class="col-md-4 col-sm-6">
        <div class="col-md-12">
          <div class="standard_social_links">
        <div>
          <li class="round-btn btn-facebook"><a href="https://www.facebook.com/profile.php?id="><i class="fab fa-facebook-f"></i></a>

          </li>
          <li class="round-btn btn-linkedin"><a href="http://www.linkedin.com/in/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

          </li>
          <li class="round-btn btn-github"><a href="https://github.com/"><i class="fab fa-github" aria-hidden="true"></i></a>

          </li>
          <!--<li class="round-btn btn-twitter"><a href="http://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a>-->

          <!--</li>-->
          <li class="round-btn btn-instagram"><a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram" aria-hidden="true"></i></a>

          </li>
          <li class="round-btn btn-whatsapp"><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

          </li>
          <li class="round-btn btn-youtube"><a href="https://youtube.com/channel/UCI0_qK8W021QsDONA8o-sQw"><i class="fab fa-youtube"></i></a>

          </li>
        </div>
      </div>  
        </div>
          <div class="clearfix"></div>
        <div class="col-md-12"><h3 style="text-align: right;">Stay Connected</h3></div>
        </div>
      </div>
  </div>
    <div class="second_class">
      <div class="container second_class_bdr">
      <div class="row">
        <div class="col-md-4 col-sm-6">

          <div class="footer-logo"><img src="logo.png" alt="logo" height="50vh" width="100vh">
          </div>
          <p>My library, my lifeline.
Open your world.
Opening the door to knowledge.
Preserving the past, opening the future.</p>
        </div>
        <div class="col-md-2 col-sm-6">
          <h3>Quick  Links</h3>
          <ul class="footer-links">
            <li><a href="index.php">Home</a>
            </li>
            <li><a href="#about">About us</a>
            </li>
            <li><a href="#contact">Contact Us</a>
            </li>
            <li ><a href="#T&amp;C" data-toggle="modal" data-target="#exampleModalCenter">Terms &amp; Conditions</a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter1">Privacy Policy</a>
            <!--data-toggle="modal" data-target="#exampleModalLong"-->
            </li>
           
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>OUR SERVICES</h3>
          <ul class="footer-category">
            <li><a href="#" onclick="a()">Online Books Library</a>
            </li>
            <li><a href="#" onclick="a()">Offline Library For Students</a>
            </li>
            <li><a href="#" onclick="a()">Study Meterial for Students </a>
            </li>
            <li><a href="#" onclick="a()"> Paid Membership </a>
            </li>
            <li><a href="#a" onclick="a()">More features</a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>CONTACT US</h3>
          <ul class="footer-category">
            <li><a href="#">Sumit Gorai</a>
            </li>
            <li><a href="#">+91-7479522117</a>
            </li>
            <li><a href="mailto:sumitgr7479@gmail.com?subject=subject text">sumitgr7479@gmail.com</a>
            </li>
            <li><a href="#contact">Ask a Question</a>
            </li>
            <li><a href="#faq-section">FAQ'S</a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-3 col-sm-6">
          
        </div>
      </div>
      
    </div>
    </div>
    
    <div class="row">
      
      <div class="container-fluid">
      <div class="copyright"> Copyright 2022 | All Rights Reserved by e-Library.com</div>
      </div>
      
    </div>
  </div>
  
  </footer>
<script>
    function a(){
        alert("Please Register Yourself To access this feature!!")
    }
</script>

<!--footer end-->

<!--Term & condition-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions of E-Library:
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<b>Access:</b> Access to the e-library is granted to registered members only. Members must be 18 years of age or older to access the library. By accessing the e-library, you agree to these terms and conditions.<br>

<b>Membership: </b>Memberships are available to individuals who meet the eligibility criteria. To become a member, you must complete the registration process and provide accurate and complete information. You are responsible for keeping your account information up-to-date.<br>

<b>Access Restrictions:</b> The e-library reserves the right to restrict or terminate access to any member who violates these terms and conditions or engages in any activity that is harmful to the e-library.<br>

<b>Copyright:</b> All materials in the e-library are protected by copyright law. Members may use the materials for personal, educational, or research purposes only. Members may not copy, reproduce, distribute, or use the materials for commercial purposes without prior written permission from the copyright owner.<br>

<b>Security:</b> Members are responsible for maintaining the confidentiality of their login information and for all activities that occur under their account. The e-library is not responsible for any unauthorized access to member accounts.<br>

<b>Use of Resources:</b> Members are responsible for using the e-library's resources in a manner consistent with the e-library's mission and policies. Members may not use the e-library's resources for illegal, unethical, or inappropriate purposes.<br>

<b>Liability:</b> The e-library is not liable for any damages, including but not limited to direct, indirect, incidental, or consequential damages, arising from the use or inability to use the e-library's resources.<br>

<b>Termination: </b>The e-library reserves the right to terminate a member's access to the e-library for any reason, including but not limited to violation of these terms and conditions.<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">I Agree</button>
        <!--<button type="button" class="btn btn-primary">I Agree</button>-->
      </div>
    </div>
  </div>
</div>
<!--Term & condition-->

<!--Privacy Policy-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Privacy and Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Collection of personal information:</b> The e-library should clearly state what personal information is collected from users and for what purpose. This information may include the user's name, email address, and other contact information.<br>
        
<b>Use of personal information:</b> The e-library should state how personal information will be used. For example, the information may be used to contact the user about library updates, new resources, or other relevant information.
<br>
<b>Sharing of personal information:</b> The e-library should state whether personal information will be shared with third parties and, if so, for what purpose.
<br>
<b>Security of personal information:</b> The e-library should describe the measures taken to protect users' personal information from unauthorized access, use, or disclosure.<br>

<b>Cookies and tracking:</b> The e-library should describe the use of cookies and other tracking technologies, including how they are used and whether users have the option to disable them.<br>

<b>Compliance with laws and regulations:</b> The e-library should state that it complies with all applicable laws and regulations regarding the collection, use, and sharing of personal information.<br>

<b>User rights:</b> The e-library should state what rights users have regarding their personal information, including the right to access, correct, and delete their information.<br>

<b>Privacy policy updates:</b> The e-library should state how changes to the privacy policy will be communicated to users and when the policy will be updated.<br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!--Privacy Policy-->


<!-- Modal -->
<div 
 class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);font-weight: bold;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign in Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="" method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1" >Email address<font size="5px" color="red">*</font></label>
    <input type="email" name="em" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-white" style="font-weight: bold; color:red">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password<font size="5px" color="red">*</font></label>
    <input type="password"  name="p" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
<div>
<tr>
<td><input type="radio" value="admin" name="a" required>Admin</td>
<td><input type="radio" value="stu" name="a" required>Student</td><font size="5px" color="red">*</font>
</tr>
</div>
<br>
  
  <!--<button type="submit" class="btn btn-primary" name="login" onclick="a()">SIGN IN</button>-->
  <!--<button type="reset" class="btn btn-primary" name="reset" onclick="a()">RESET</button>-->
  
  
<!--<div class="container">-->
    <button type="submit" class="btn rounded" class="login" name="login" onclick="a()"><span class="text-green">Login</span></button>
  <button type="reset" class="btn rounded"  name="reset" onclick="a()"><span class="text-green">Reset</span></button>
<!--</div>-->
<!--button style-->
<style>
.btn  {
  /*color:white;*/
  margin: 10px auto;
  border: none;
  padding: 5px 44px;
  font-size: 20px;
  position: relative;
}
.btn::before {
  transition: all 0.85s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  content: "";
  width: 70%;
  height: 100%;
  background: none;
  position: absolute;
  top: 0;
  left:0 ;
}
.btn.rounded {
  border-radius: 70px;
}
.btn.rounded .text-green {
  color: #00F0B5;
  mix-blend-mode: difference;
}
.btn.rounded::before {
  border-radius: 50px;
  width: 25%;
  background: #00F0B5;
}
.btn.rounded:hover::before {
  background: #00F0B5;
  width: 100%;
}
</style>
<!--button style-->
</form>
      </div>
      
    </div>
  </div>
</div>



<!-- Modal -->
<div style="
  background: linear-gradient(45deg, red, blue);
" class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-auto" id="exampleModalLabel">User Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php">
  <div class="form-row">
<div class="form-group col-md-12">Enter Name<font size="5px" color="red">*</font>
      <input type="text" name="n" class="form-control" placeholder="Your Name" required>
    </div>
    <!--<div class="form-group col-md-6">Last Name-->
    <!--  <input type="text" class="form-control" placeholder="Last name">-->
    <!--</div>-->
<div class="form-group col-md-6">Date of Birth<font size="5px" color="red">*</font>
      <input type="date" name="d" class="form-control" placeholder="Dob" required>
    </div>

<div class="form-group col-md-6">Gender<font size="5px" color="red">*</font>
      <input type="text" name="g" class="form-control" placeholder="Gender" required>
    </div>
<div class="form-group col-md-6">Phone Number<font size="5px" color="red">*</font>
      <input type="tel" name="mob" class="form-control" placeholder="Phone Number" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email<font size="5px" color="red">*</font></label>
      <input type="email" name="e" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Create Password<font size="5px" color="red">*</font></label>
      <input type="password" name="p" class="form-control" id="inputPassword4" placeholder="Create Password" required>
    </div>
<div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password<font size="5px" color="red">*</font></label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" required>
    </div>

  <div class="form-group col-md-12">
    <label for="inputAddress">Address</label>
    <input type="text" name="a" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" name="c" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-5">
      <label for="inputState">State</label>
      <select id="inputState" name="s" class="form-control">
        <option selected>--Select State--</option>
        <option>Jharkhand</option>
<option>West Bengal</option>
<option>Bihar</option>
<option>Delhi</option>
<option>Goa</option>
<option>Gujarat</option>
<option>Mumbai</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Pin</label>
      <input type="text" name="pin" class="form-control" id="inputZip">
    </div>
  </div>
 
  <button type="submit" class="cta"  name="register">
<!--<a href="#" class="cta" >-->
  <span>Register</span>
  <svg width="10px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
<!--</a>-->
</button>&nbsp;&nbsp;&nbsp;
    <button type="reset" class="cta" name="reset" onclick="a()"><span>Reset</span>
  <svg width="10px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg></button>
<!--button style-->
<style>
.cta {
    border:none;
    background:white;
  position: relative;
  margin: auto;
  padding: 19px 22px;
  transition: all 0.2s ease;
}
.cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 28px;
  background: rgba(255, 171, 157, 0.5);
  width: 56px;
  height: 56px;
  transition: all 0.3s ease;
}
.cta span {
  position: relative;
  font-size: 16px;
  line-height: 18px;
  font-weight: 900;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  vertical-align: middle;
}
.cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #111;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}
.cta:hover:before {
  width: 100%;
  background: #ffab9d;
}
.cta:hover svg {
  transform: translateX(0);
}
.cta:active {
  transform: scale(0.96);
}
</style>

</form>
      </div>
      
  </div>
</div>
 </div>
 
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>





<?php
if(isset($_REQUEST["register"]))
{
$p1=$_REQUEST["n"];
$p2=$_REQUEST["d"];
$p3=$_REQUEST["g"];
$p4=$_REQUEST["mob"];
$p5=$_REQUEST["e"];
$p6=$_REQUEST["p"];
$p7=$_REQUEST["a"];
$p8=$_REQUEST["c"];
$p9=$_REQUEST["s"];
$p10=$_REQUEST["pin"];

 $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
mysqli_query($conn,"insert into STU values(null,'$p1','$p2','$p3',$p4,'$p5','$p6','$p7','$p8','$p9',$p10)");

?>
<script>alert("Registration Successful ");</script>
<?php

}
?>


<?php
if(isset($_REQUEST["login"]))
{
    $str=$_REQUEST["a"];
    if(!(strcmp($str,"stu")))
    {
        $p1=$_REQUEST["em"];
        $p2=$_REQUEST["p"];
        $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
        $res=mysqli_query($conn,"select * from STU where Email='$p1' and password='$p2' ");
        if(($rows=mysqli_fetch_array($res)))
        {
                        // echo'<script>alert("Login Successful!!");</script>';
                       

            $_SESSION["user_id"]= $rows[0];
        ?>
        <!--<script>alert("Login Successful!!");</script>-->
       
        <?php 
         $_SESSION["email"]=$p1;
         header("location:user_login.php");
         echo $id;
        }
        else
        {
        ?>
        <script>alert("Invalid Login!--Username and Password does not match.")</script>
        <?php
            
        }
        
    }
    else
    {
       $u=$_REQUEST["em"];
        $p=$_REQUEST["p"];
        $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
        $res1=mysqli_query($conn,"select * from admin where EMAIL='$u' and PASSWORD='$p' ");
        if(($rows=mysqli_fetch_array($res1)))
        {
        ?>
        <script>alert("Admin Login Successful!!");</script>
        <?php
         $_SESSION["aemail"]=$u;  
        header("location:admin.php");
        }
        else
        {
        ?>
        <script>alert("Invalid Admin's Login Details");</script>
        <?php
            
        }
        
    }
}
?>


<style>
   .faq-section {
    background: #fdfdfd;
    min-height: 50vh;
    padding: -5vh 0 0;
}
.faq-title h2 {
  position: relative;
  margin-bottom: 20px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #E91E63;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 150px;
  margin-bottom: 5px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border: none;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: rgba(233, 30, 99, 0.1);
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 20px;
  padding-right: 20px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  padding: 20px;
  padding-left: 25px;
  padding-bottom: 0px;
  font-weight: 400;
  font-size: 16px;
  color: #6F8BA4;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 4px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 10px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 5px;
  }
} 
    

</style>
