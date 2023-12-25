<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <style>
    #a{
        padding:10px 10px;
        margin:10px 10px;
    }
    
        .disclaimer{
                display:none;
            }
      
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>E-Library-A Online Book Management System</title>
  </head>
  <body>
 <center> <img src="logo.png"></center>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
           <a class="navbar-brand" href="admin.php">Dashboard</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <!--<a class="nav-link" href="admin.php">Dashboard <span class="sr-only">(current)</span></a>-->
      </li>
      <!-- <li class="nav-item dropdown">-->
      <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--    Books-->
      <!--  </a>-->
      <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
      <!--    <a class="dropdown-item" href="#">Add New Books</a>-->
      <!--    <a class="dropdown-item" href="#">Manage Books</a>-->
      <!--    <a class="dropdown-item" href="#">Something else here</a>-->
      <!--  </div>-->
      <!--</li>-->
      <!-- <li class="nav-item dropdown">-->
      <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--    Authors-->
      <!--  </a>-->
      <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
      <!--    <a class="dropdown-item" href="#">Add New Author</a>-->
      <!--    <a class="dropdown-item" href="#">Manage Author</a>-->
      <!--    <a class="dropdown-item" href="#">Something else here</a>-->
      <!--  </div>-->
      <!--</li>-->
      <!-- <li class="nav-item dropdown">-->
      <!--  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--  Category-->
      <!--  </a>-->
      <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
      <!--    <a class="dropdown-item" href="#">Add Category</a>-->
      <!--    <a class="dropdown-item" href="#">Manage Cetegory</a>-->
      <!--    <a class="dropdown-item" href="#">Something else here</a>-->
      <!--  </div>-->
      <!--</li>-->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cview_account_admin.php">View Account</a>
          <a class="dropdown-item" href="cedit_account_admin.php">Edit Account</a>
          <a class="dropdown-item" href="cchange_pass_admin.php">Change Password</a>
        </div>
      </li>
      
     <!-- <li class="nav-item">-->
     <!--   <a class="nav-link" href="#">Change Password</a>-->
     <!--<li class="nav-item">-->
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<center>
    <h1>WELCOME:<?php echo $_SESSION["aemail"]; ?></h1>

</center>
    
 <!--<div class="row" id="a">-->
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Total Books</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Total Books</h5>-->
 <!--       <p class="card-text">Total No. of books available:</p>-->
 <!--       <a href="#" class="btn btn-primary">View Books</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Total Authors</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Total Authors</h5>-->
 <!--       <p class="card-text">Total Authors:</p>-->
 <!--       <a href="#" class="btn btn-primary">View Authors</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Books Cetegory</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Books Cetegory</h5>-->
 <!--       <p class="card-text">NO. of Books Cetegory: </p>-->
 <!--       <a href="#" class="btn btn-primary">View Cetegory</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Register Student</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Register Student</h5>-->
 <!--       <p class="card-text">Total no. of Users Register: </p>-->
 <!--       <a href="#" class="btn btn-primary">View Register Students</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
  
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Book Issued</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Book Issued</h5>-->
 <!--       <p class="card-text">No. of Book issued:</p>-->
 <!--       <a href="#" class="btn btn-primary">View Issued Book</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
 <!-- <div class="col-sm-3" id="a">-->
 <!--   <div class="card text-white text-center bg-success">-->
 <!--       <div class="card-header">Book Not Returned</div>-->
 <!--     <div class="card-body">-->
        <!--<h5 class="card-title">Book Not Returned</h5>-->
 <!--       <p class="card-text">No. of Books not Returned :</p>-->
 <!--       <a href="#" class="btn btn-primary">View Not Returned Book</a>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
  
 <!--</div>  -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

