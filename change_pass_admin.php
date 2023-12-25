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

<div class="container">
	<div class="row-10">
	    <form action="change_pass_admin.php">
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
            <button class="btn btn-primary" name="update" type="submit">Updtae Password</button>
		</div> 
		</form>
	</div>
</div>
</body>
</html>

<?php
if(isset($_REQUEST["update"]))
{
    $p=$_REQUEST["cp"];
    $p1=$_REQUEST["cnp"];
    $p2=$_SESSION["aemail"];
    $password="";
    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
    mysqli_select_db($conn,"id19345642_library");
    $res=mysqli_query($conn,"select * from admin where EMAIL='$p2'");

//$res=mysqli_query($conn,"update STU set PASSWORD='$p1' where EMAIL='$p2'");
if($rows=mysqli_fetch_array($res))
{
    
    $password=$rows[3];
    echo $password;

if($password==$p)
{
    $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
    mysqli_select_db($conn,"id19345642_library");
    mysqli_query($conn,"update admin set PASSWORD='$p1' where EMAIL='$p2'");

echo'<script>alert("Password updated Successfully!!");</script>';
}
else{
echo'<script>alert("Your Current Password does not match!!");</script>';
}
}
}
?>

// <?php
// if(isset($_REQUEST["update"]))
// {
//     $p1=$_REQUEST["cnp"];
//     $p2=$_SESSION["aemail"];
// $conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
// mysqli_select_db($conn,"id19345642_library");
// mysqli_query($conn,"update admin set PASSWORD='$p1' where EMAIL='$p2'");
// echo'<script>alert("Password updated Successfully!!");</script>';
// }
// ?>
