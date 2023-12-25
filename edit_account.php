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
    <style>
        .disclaimer{
display:none;
}
    </style>
    <title>User_Login</title>
  </head>
  <body>
    <!--<h1>Hello, world!</h1>-->
    <center>
<img src="logo.png" >
</center>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="user_login.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <li class="nav-item dropdown">
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
      <li class="nav-item">
       <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<center>
 <h1>Welcome : <?php echo $_SESSION["email"];?></h1>   
</center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<?php
$p=$_SESSION["email"];
$conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
$res=mysqli_query($conn,"select * from STU where EMAIL='$p'");
if(($rows=mysqli_fetch_array($res)))
{
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $rows[0]; ?></span><span class="text-black-50"><?php echo $_SESSION["email"]; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Your Profile Details</h4>
                </div>
                <form action="edit_account.php">
                <div class="row mt-6">
                    <div class="col-md-6"><label class="labels">Student ID:</label><input type="text" class="form-control" placeholder="<?php echo$rows[0]; ?>" name="id" value="" readonly></div>
                    
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo$rows[1]; ?>" name="n" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">Date of Birth</label><input type="date" class="form-control" placeholder="<?php echo$rows[2]; ?>" name="d" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="<?php echo$rows[3]; ?>" name="g" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo$rows[4]; ?>" name="mob" value=""></div>
                    
                     <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[5]; ?>" name="e" value=""></div>
                     
                     <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="<?php echo$rows[6]; ?>" name="p" value=""></div>
                     
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="<?php echo$rows[7]; ?>" name="a" value=""></div>
                    
                     <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" placeholder="<?php echo$rows[8]; ?>" name="c" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control" placeholder="<?php echo$rows[9]; ?>" name="s" value=""></div>
                    
                    <div class="col-md-6"><label class="labels">Pin</label><input type="text" class="form-control" placeholder="<?php echo$rows[10]; ?>" name="pin" value=""></div>
                   
                </div>
                <!--<div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="pro"  type="submit">Save Profile</button></div>-->
                <button type="submit" name="sub" class="btn btn-primary" >Update Profile</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--</div>-->
<?php
}
?>
 <!--echo '<script>alert("ok");</script>';  -->
<?php
if(isset($_REQUEST["sub"]))
{
$p1=$_REQUEST["n"];
$p2=$_REQUEST["d"];
$p3=$_REQUEST["g"];
$p4=$_REQUEST["mob"];
$p5=$_SESSION["email"];
$p6=$_REQUEST["p"];
$p7=$_REQUEST["a"];
$p8=$_REQUEST["c"];
$p9=$_REQUEST["s"];
$p10=$_REQUEST["pin"];
$conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
        mysqli_select_db($conn,"id19345642_library");
mysqli_query($conn,"update STU set NAME='$p1',DOB='$p2',GENDER='$p3',PHONE=$p4,PASSWORD='$p6',ADDRESS='$p7',CITY='$p8',STATE='$p9',PIN=$p10 where EMAIL='$p5'");
echo'<script>alert("Profile Details updated Successfully!!");</script>';
}
?>