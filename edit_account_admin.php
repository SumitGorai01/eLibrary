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
          <a class="dropdown-item" href="view_account_admin.php">View Account</a>
          <a class="dropdown-item" href="edit_account_admin.php">Edit Account</a>
          <a class="dropdown-item" href="change_pass_admin.php">Change Password</a>
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
    <h1>WELCOME ADMIN :<?php echo $_SESSION["aemail"]; ?></h1>

</center>
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<?php
$p=$_SESSION["aemail"];
$conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
$res=mysqli_query($conn,"select * from admin where EMAIL='$p'");
if(($rows=mysqli_fetch_array($res)))
{
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $rows[1]; ?></span><span class="text-black-50"><?php echo $_SESSION["aemail"]; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Details</h4>
                </div>
                
                <form action="edit_account_admin.php">
                <div class="row mt-6">
                    
                    <div class="col-md-6"><label class="labels">ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[0]; ?>" name="id" value="" readonly></div>
                    
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo$rows[1]; ?>" name="n" value=""></div>
                    
                     <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[2]; ?>" name="em" value=""></div>
                     
                     <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="<?php echo$rows[3]; ?>" name="p" value=""></div>
                     
                     <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo$rows[4]; ?>" name="mob" value=""></div>
                    
                </div>
                    <button type="submit" name="sub" class="btn btn-primary">Edit Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
 
<?php
}
?>
<?php
if(isset($_REQUEST["sub"]))
{
// $p1=$_REQUEST["id"];
$p2=$_REQUEST["n"];
$p3=$_SESSION["aemail"];
$p4=$_REQUEST["p"];
$p5=$_REQUEST["mob"];

$conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
mysqli_query($conn,"update admin set NAME='$p2',PASSWORD='$p4',MOBILE=$p5 where EMAIL='$p3'");
echo'<script>alert("Profile Details updated Successfully!!");</script>';
}
?>