<?php
require('function.php');
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
 <center> <img src="logo.png" height="60vh" width="100vh"></center>

 <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <div class="sidebar-header">
                <a href="admin.php"><h3>Admin Dashboard</h3></a>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Book</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="add_book.php">Add Book</a>
                        </li>
                        <li>
                            <a href="manage_book.php">Manage Books</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="add_category.php">Add Category</a>
                        </li>
                        <li>
                            <a href="manage_category.php">Manage Category</a>
                        </li>
                    </ul>
                </li>
                
                 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Author
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="add_author.php">Add Author</a>
          <a class="dropdown-item" href="manage_author.php">Manage Authors</a>
        </div>
      </li>
                        <li>
                            <a href="issue_book.php">Issue Book</a>
                        </li>
                
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
               
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Dashboard/Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <li class="nav-item" >    
                            WELCOME :<?php echo $_SESSION["aemail"]; ?>
                            </li>
                        <ul class="nav navbar-nav ml-auto ">
                           
                            <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="view_account_admin.php">View Account</a>
          <a class="dropdown-item" href="edit_account_admin.php">Edit Account</a>
          <a class="dropdown-item" href="change_pass_admin.php">Change Password</a>
        </div>
      </li>
     
     <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row" id="a">
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Total Books</div>
      <div class="card-body  text-primary">
        <!--<h5 class="card-title">Total Books</h5>-->
        <p class="card-text">Total No. of books available: <?php echo get_book_count();?></p>
        <a href="#" class="btn btn-primary">View Books</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Total Authors</div>
      <div class="card-body">
        <!--<h5 class="card-title">Total Authors</h5>-->
        <p class="card-text">Total Authors: <?php echo get_author_count(); ?></p>
        <a href="#" class="btn btn-primary">View Authors</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Books Cetegory</div>
      <div class="card-body">
        <!--<h5 class="card-title">Books Cetegory</h5>-->
        <p class="card-text">NO. of Books Cetegory: <?php echo get_category_count();?></p>
        <a href="#" class="btn btn-primary">View Cetegory</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Register Student</div>
      <div class="card-body">
        <!--<h5 class="card-title">Register Student</h5>-->
        <p class="card-text">Total no. of Users Register:&nbsp;&nbsp;&nbsp;<?php echo get_user_count();?> </p>
        <a href="register_stu.php" class="btn btn-primary">View Register Students</a>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Book Issued</div>
      <div class="card-body">
        <!--<h5 class="card-title">Book Issued</h5>-->
        <p class="card-text">No. of Book issued: <?php echo get_issued_book_count();?></p>
        <a href="#" class="btn btn-primary">View Issued Book</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" id="a">
    <div class="card text-white text-center bg-success">
        <div class="card-header bg-info">Book Not Returned</div>
      <div class="card-body">
        <!--<h5 class="card-title">Book Not Returned</h5>-->
        <p class="card-text">No. of Books not Returned :</p>
        <a href="#" class="btn btn-primary">View Not Returned Book</a>
      </div>
    </div>
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


<link rel="stylesheet" href="adminstyle.css">
<!--<style>-->
 
<!--</style>-->

<script>
    
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
<!--<link rel="stylesheet" type="text/css" href="admin_style.css"/>-->
