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
      
      <li class="nav-item ">
       <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<center>
 <h2>Welcome -</h2> <h4><?php echo $_SESSION["email"]; ?></h4>
</center>



  <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					<th>Book Author:</th>
					<th>Book Number:</th>
					<th>Issued Date:</th>
				</tr>
				
<?php
	$conn=mysqli_connect("localhost","id19345642_lib","8pDyHgtmnXIi|~O[");
    mysqli_select_db($conn,"id19345642_library");
	$id=$_SESSION["user_id"];
 	$res=mysqli_query($conn,"select book_name,book_author,book_no,issue_date from issued_books where student_id ='$id' and status = 1");
 	
				while($rows= mysqli_fetch_array($res))
					{
					?>
						<tr>
							<td><?php echo $rows[0];?></td>
							<td><?php echo $rows[1];?></td>
							<td><?php echo $rows[2];?></td>
							<td><?php echo $rows[3];?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




