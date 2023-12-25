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
<link rel="stylesheet" type="text/css" href="admin_style.css">
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
 <center> <img src="logo.png" id="logo"></center>

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

        
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-center">
			<form action="add_category.php" method="post">
				<div class="form-group">
			
				<div class="form-group">
					<label>Name of Category:</label>
					<input type="text" name="cat" class="form-control" required="">
				</div>
				<div class="col-md-12 text-center">
				    <button class="btn btn-success " name="add_cat">Add Category</button>
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
    

       


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>


<?php
	if(isset($_POST['add_cat']))
	{
	    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
    	 mysqli_query($conn,"insert into category values(null,'$_POST[cat]')");
        echo '<script>alert("CATEGORY ADDED SUCCESSFULLY!!");</script>';
	}
	
?>
<link rel="stylesheet" href="adminstyle.css">
