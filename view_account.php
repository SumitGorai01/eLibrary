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

    #view{
        margin:20px 20px;
        padding:20px 20px;
        font-size:20px;
       
    }
    #view table{
         margin:20px 20px;
        padding:20px 20px;
       border:5px solid green; 
       color:blue;
    }
    
   

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 15px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
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
      <!--<li class="nav-item active">-->
      <!--  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
      <!--</li>-->
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
      <li class="nav-item active">
       <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<center>
 <h1>Welcome :<?php echo $_SESSION["email"]; ?></h1> 
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
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">ID:<?php echo $rows[0]; ?></span><span class="text-black-50"><?php echo $_SESSION["email"]; ?></span><span> </span></div>
            <?php
                $_SESSION["user_id"]=$rows[0];
                //echo "hi".$_SESSION["user_id"];
            ?>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Details</h4>
                </div>
                
                <div class="row mt-6">
                    <div class="col-md-6"><label class="labels">Student ID:</label><input type="text" class="form-control" placeholder="<?php echo$rows[0]; ?>" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo$rows[1]; ?>" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">Date of Birth</label><input type="date" class="form-control" placeholder="enter phone number" readonly value="<?php echo$rows[2]; ?>"></div>
                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="<?php echo$rows[3]; ?>" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo$rows[4]; ?>" readonly value=""></div>
                     <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[5]; ?>" readonly value=""></div>
                     <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="<?php echo$rows[6]; ?>" readonly value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="<?php echo$rows[7]; ?>" readonly value=""></div>
                     <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" placeholder="<?php echo$rows[8]; ?>" readonly value=""></div>
                    
                    <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control" placeholder="<?php echo$rows[9]; ?>" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">Pin</label><input type="text" class="form-control" placeholder="<?php echo$rows[10]; ?>" readonly value=""></div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
 
<?php
}
?>