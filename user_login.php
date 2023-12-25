<?php
session_start();
?>
<?php

function get_user_issue_book_count()
{
	    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
		$user_issue_book_count = 0;
		$p1=$_SESSION["user_id"];
		$res=mysqli_query($conn,"select count(*) as user_issue_book_count from issued_books where student_id=$p1");
		if(($rows = mysqli_fetch_array($res)))
		{
		    $user_issue_book_count = $rows['user_issue_book_count'];
	    }
	return($user_issue_book_count);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
 <!-- Font Awesome 5 links-->
  <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>

    <style>
        html, body{
                height:100%;
                width:100%;
                overflow-x:hidden;
            }
            nav .navbar{
                position:sticky-top;
                position: fixed;
top: 0;
            }
    </style>

    <title>User_Login</title>
  </head>
  <body>
    <center>
<img src="logo.png" width="100vh" height="60vh">
</center>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <a class="navbar-brand" href="user_login.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <center>
    
 <!--<h4>Welcome -<?php echo $_SESSION["email"]; ?></h4>-->
</center>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Welcome -<?php echo $_SESSION["email"]; ?></a>
      </li>
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="#">Features</a>-->
      <!--</li>-->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="view_account.php">View Account</a>
          <a class="dropdown-item" href="edit_account.php">Edit Account</a>
          <a class="dropdown-item" href="change_password.php">Change Password</a>
        </div>
      </li>
      <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
      <!--<li> <center><font style="color: white"><span><strong>Welcome: <?php echo"Hi User";?></strong></span></font>-->
      <!--</center></li>-->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active ">
       <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 "src="https://c4.wallpaperflare.com/wallpaper/302/456/881/books-keep-calm-and-quote-motivational-wallpaper-preview.jpg" alt="First slide" height="496px">
      <!--<div class="carousel-caption d-none d-md-block text-primary-dark ">-->
          <!-- <h2>Somethings is new for you</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum earum blanditiis possimus quis voluptates omnis nobis voluptatem odit mollitia iusto.</p> -->
        <!--</div>-->
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://c4.wallpaperflare.com/wallpaper/935/849/231/background-tree-book-wallpaper-preview.jpg" alt="Second slide" height="496px">
      <div class="carousel-caption d-none d-md-block text-primary-dark">
        <h2>"A book is a dream that you hold in your hands." </h2>
        <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum earum blanditiis possimus quis voluptates omnis nobis voluptatem odit mollitia iusto.</p>-->
        </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://c1.wallpaperflare.com/preview/851/1023/587/library-books-knowledge-information.jpg" alt="Second slide" height="496px">
      <div class="carousel-caption d-none d-md-block text-primary-dark">
        <h2>"The library is the temple of learning, and learning has liberated more people than all the wars in history." </h2>
        <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum earum blanditiis possimus quis voluptates omnis nobis voluptatem odit mollitia iusto.</p>-->
        </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://c0.wallpaperflare.com/preview/469/70/385/background-book-bookcase-books.jpg" alt="Second slide" height="496px">
      <div class="carousel-caption d-none d-md-block text-primary-dark">
        <h2>"You can never get a cup of tea large enough or a book long enough to suit me."</h2>
        <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum earum blanditiis possimus quis voluptates omnis nobis voluptatem odit mollitia iusto.</p>-->
        </div>
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
<!--<center>-->
    
<!-- <h4>Welcome -<?php echo $_SESSION["email"]; ?></h4>-->
<!--</center>-->

<br>

 <div class="row" id="a">
     <div class="col-md-3"></div>
 <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success py-10 " >
        <div class="card-header bg-info">Total Issued Books in offline library </div>
      <div class="card-body  text-white">
        <p class="card-text">Total No. of books issued:<br><?php echo  get_user_issue_book_count();?></p>
        <a href="view_book.php" class="btn btn-primary">View Books</a>
      </div>
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Find Your E-Book Here: </div>
      <div class="card-body bg-white text-white">
        <form action="user_login.php">
				<div class="form-group">
					<!--<label>Book Name:</label>-->
					<input type="text" placeholder="Enter Boook Name" name="book_name" class="form-control" required="">
				</div>
		
				<div class="col-md-12 text-center">
				    <button class="btn btn-success " name="find_book">Find Book</button>
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
			</form>
      </div>
    </div>
  </div>
  <div class="col-md-3"></div>
</div>


<br>

<div class="container">
    <div class="row">
      <div class="col-0">
        <div class="section">
        </div>
      </div>
       <div class="col-12">
        <div class="section">
          
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <div class="card">
        <img src="https://media.istockphoto.com/photos/young-student-stock-photo-picture-id1354694176?k=20&m=1354694176&s=612x612&w=0&h=LAq36VXgpmZC6HEV9yjBKdNhwOn8cYZPUDriuR3DUk4=" class="card-img-top" alt="...">
        <div class="card-body">
          <!--<h5 class="card-title">eLibrary</h5>-->
          <p class="card-text">Access thousands of books, magazines, and research materials in our extensive digital library. Discover new worlds, expand your knowledge, and embark on literary adventures.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="https://media.istockphoto.com/photos/child-flying-on-the-book-picture-id1018282550?k=20&m=1018282550&s=612x612&w=0&h=kcFMxi3zhbR3X-uSFbqzBYymtWAr8bJt6H8zwG_3jR4=" class="card-img-top" alt="...">
        <div class="card-body">
          <!--<h5 class="card-title">Card title</h5>-->
          <p class="card-text">Discover new worlds, expand your knowledge, and embark on literary adventures.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="https://media.istockphoto.com/photos/women-using-laptop-computer-picture-id1255356316?k=20&m=1255356316&s=612x612&w=0&h=tpz5B9vHI4XKLyqJaItD6DUKK9v-73hEZ9hgz4QzcZw=" class="card-img-top" alt="...">
        <div class="card-body">
          <!--<h5 class="card-title">Card title</h5>-->
          <p class="card-text">Discover new worlds, expand your knowledge, and embark on literary adventures.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
          <img src="https://media.istockphoto.com/photos/mother-helping-daughter-with-homework-picture-id1074937030?k=20&m=1074937030&s=612x612&w=0&h=_EcjETeMkivNh8ehgxV0eovA0bhdhDzW7ztFNmRWe0c=" class="card-img-top" alt="...">
          <div class="card-body">
            <!--<h5 class="card-title">Card title</h5>-->
            <p class="card-text">Any book that helps a child to form a habit of reading, to make reading one of his deep and continuing needs, is good for him.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="https://media.istockphoto.com/photos/woman-puts-donations-in-a-box-picture-id1318198538?k=20&m=1318198538&s=612x612&w=0&h=5__EGWgx4IRsb59T_tkq_GUIPnALCSrUodNLVAHdlx0=" class="card-img-top" alt="...">
          <div class="card-body">
            <!--<h5 class="card-title">Card title</h5>-->
            <p class="card-text">The very existence of libraries affords the best evidence that we may yet have hope for the future of man</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="https://media.istockphoto.com/photos/the-hands-of-people-hold-books-picture-id962459768?k=20&m=962459768&s=612x612&w=0&h=Wp6GuH8srwx2tEFP39ywU4_zk0NiNNvV4EKA2Qkqm3g=" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <?php
     
    
    if(isset($_REQUEST["find_book"]))
	{
	    $p1=$_REQUEST["book_name"];
	    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
    	$res= mysqli_query($conn,"select * from books where book_name='$p1'");
    	if($rows=mysqli_fetch_array($res))
    	{
    	     echo '<script>alert("BOOK AVAILABLE!!");</script>';

    	   $result=$rows[6];
echo $result."<br>";
$filename = $result;
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  ob_clean();
  ob_flush ();
  @readfile($filename);
 mysqli_close($connection);

    	}
    	else
    	{
    	     echo '<script>alert("BOOK Not AVAILABLE!!");</script>';

    	}
	}
    ?>
    
    <div class="container">
        
    </div>
    
<h2 class="text-center">SOME IMPORTANT RESOURCE FOR YOU</h2>
<div class="row mt-3 justify-content-center">
  <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/irqbmMNs2Bo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>Learn C language</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/z9bZufPHFLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn C++ language</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/yRpLlJmRo2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn Java language</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/vLqTf2b6GZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn Python language</p></div>
<!-- <div class="row mt-3 justify-content-center"> -->
  <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/l1EssrLxt7E?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn Web development</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/l1EssrLxt7E?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn Web development</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/uTBKa1PSyf8?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>learn Computer Graphics</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/yRpLlJmRo2w?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Java Placement course</p></div>
<!-- </div> -->
<!-- <div class="row mt-3 justify-content-center"> -->
  <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/InigFUSiPl8?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Android Development</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/7wnove7K-ZQ?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>Learn python</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/7wnove7K-ZQ?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>learn python</p></div>
    <div class="col-auto-2 p-2"><iframe width="152" height="90" src="https://www.youtube.com/embed/ntLJmHOJ0ME?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p>learn java</p></div>
</div>
</div>
<?php
    include('sliderbar.php');
    ?>
     </div>
      </div>
      <div class="col-0">
        <div class="section">
        </div>
      </div>
    </div>
  </div>
    
    <!--footer-->
    
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
          <li class="round-btn btn-facebook"><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>

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
    <div class="row">
      
      <div class="container-fluid">
      <div class="copyright"> Copyright 2022 | All Rights Reserved by e-Library.com</div>
      </div>
      
    </div>
  </div>
  </footer>

<!--footer end-->
    <!--footer-->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



<style>
    .disclaimer{
display:none;

}

.cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 10px;
}
.carousel-inner {
  /*padding: 1em;*/
}
.carousel-control-prev,
.carousel-control-next {
  background-color: black;
  width: 5vh;
  height: 5vh;
  border-radius: 100%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .card img {
    height: 11em;
  }
}


/*FOOTER*/

 .round-btn
            
            {
                display: inline;
            height: 40px; 
            width:40px;
            background:#fff;
            border-radius: 50%;
            float: left;
            margin: 15px 8px;
            box-shadow: 2px 2px 5px 0px rgb(82, 0, 67);
            border: 1px solid;
            /*border: 1px solid #622657;*/
                
            }
.round-btn a 
    {
        display: block !important;
        padding: 7px 12px;
        font-size: 18px;
        border-radius: 50%;
    }
.round-btn .icon
    {
        padding: 3px;
    }
    
.round-btn .icon img{
    height: 24px; 
    width: 32px;
    margin-top: 6px;
    
}
.btn-facebook a {
        color: #3b5998;
        padding: 8px 13px;
}
.btn-linkedin a {
    color: #007bb6;
    
}
.btn-github a{
    color: #1c9deb;
    
}
.btn-instagram a{
    color: #dd3f5c;
    
}
.btn-whatsapp a{
    color: #155E54;
    
}
.btn-envelop a{
    color: #D6403A;
    font-size: 15px; 
    padding: 9px 12px;
    
}
.standard_header .standard_social_links {
    margin-left: 1rem;
    
}
.footer-wrap {
    padding-top: 43px;
    background-size: cover;
}

.footer-wrap h3 {
    color: #ff7f00;
    font-size: 17px;
    text-transform: uppercase;
    margin-bottom: 25px;
}

.footer-wrap p {
    font-size: 15px;
    line-height: 24px;
    color: #ffffff;
    margin-top: 15px;
}

.footer-wrap p a {
    color: #fff;
    text-decoration: underline;
    font-style: italic;
}

.footer-wrap p a:hover {
    text-decoration: none;
    color: #ff7800;
}

.footer-links li a {
    font-size: 15px;
    line-height: 30px;
    color: #fff;
    text-decoration: none;
}


.footer-links li:before {
    content: "\f105";
    font-family: 'FontAwesome';
    padding-right: 10px;
    color: #ccc;
}

.footer-category li a {
    font-size: 15px;
    line-height: 30px;
    color: #fff;
    text-decoration: none;
}

.footer-category li:before {
    content: "\f105";
    font-family: 'FontAwesome';
    padding-right: 10px;
    color: #b3b3b3;
}

.fa-phone:before {
    content: "\f095";
}

.info a {

    color: #b3b3b3;
    font-size: 14px;
    line-height: 30px;
    font-weight: normal;
}

.fa-fax:before {
    content: "\f1ac";
}

.copyright {
    border-top: 1px solid #111;
    font-size: 15px;
    color: #ccc;
    padding-top: 15px;
    text-align: center;
    padding-bottom: 15px;
    background: purple;
}

footer .first_class {
    padding-bottom: 20px;
    border-bottom: 1px solid #444;
}
footer .first_class p, footer .first_class h3{
    margin: 0 0;
    
}
footer{
    background: #333;
}

footer .newsletter input[type="text"] {
    width: 100%;
    background: #fff;
    color: #333;
    border: 1px solid #222;
    padding: 14px 20px;
    border-radius: 50px;
    margin-top: 12px;
}

.newsletter .newsletter_submit_btn {
    background: #fff;
    position: absolute;
    right: 30px;
    border: 0;
    top: 26px;
    font-size: 17px;
    color: #333;
}


footer .second_class_bdr{
    padding-top: 25px;
    border-top:1px solid #222;
}

footer .btn-facebook a {
    padding: 6px 14px !important;
}

footer .btn-youtube a {
    color: #D6403A;
    font-size: 15px;
    padding: 12px 12px;
}

footer .round-btn a {
    padding: 6px 12px;
}

footer .round-btn {
    box-shadow: 2px 2px 5px 0px #222 !important;}

footer .round-btn {
    margin: 15px 4px;}
  
footer dl, ol, ul {
    padding-left: 5px;
}
  footer li{
    list-style: none;
  }

@media(max-width:768px){
    .footer-wrap h3 {
    margin-top: 27px;}
    
    footer .round-btn {
    margin: 15px 4px;}
}
@media(max-width:320px){
.copyright {
    font-size: 15px;}
} 
/*FOOTER

.navbar{
    position:sticky-top;
}

</style>



