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
    
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        .disclaimer{
display:none;
}
      .pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 




    </style>
    
    <script>
        $(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
    </script>
    
    
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
       <a class="nav-link" href="index.php">Logout</a>
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
    
    
    <div class="container">
	<div class="row-10">
	    <form action="change_password.php">
		<div class="col-sm-4">
		    
		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" value="" name="cp" class="form-control" placeholder="Current Password"> 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="" name="np" class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="" name="cnp" class="form-control" placeholder="Confirm Password"> 
            </div> 
            <button class="btn btn-primary" name="upd" type="submit">Updtae Password</button>
		</div> 
		</form>
	</div>
</div>
  </body>
</html>
<?php
if(isset($_REQUEST["upd"]))
{
    $p=$_REQUEST["cp"];
    $p1=$_REQUEST["cnp"];
    $p2=$_SESSION["email"];
    $password="";
    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
    mysqli_select_db($conn,"id19345642_library");
    $res=mysqli_query($conn,"select * from STU where EMAIL='$p2'");

//$res=mysqli_query($conn,"update STU set PASSWORD='$p1' where EMAIL='$p2'");
if($rows=mysqli_fetch_array($res))
{
    
    $password=$rows[6];
    //echo $password;

if($password==$p)
{
    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
    mysqli_select_db($conn,"id19345642_library");
    mysqli_query($conn,"update STU set PASSWORD='$p1' where EMAIL='$p2'");

echo'<script>alert("Password updated Successfully!!");</script>';
}
else{
echo'<script>alert("Your Current Password does not match!!");</script>';
}
}
}
?>