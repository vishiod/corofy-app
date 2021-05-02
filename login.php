<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>E-commerce Website</title>
	<style type="text/css">
	body{
	background: linear-gradient(to right, #ffd89b 0%, #19547b 100%);
	}
	#loginpage{
	margin:2vh auto;
	width:450px;
	height:95vh;
	background : white;
	padding:20px;
	border-radius:25px;
	}
	#login{
	font-weight:bold;
	text-align:center;
	letter-spacing : 2px;
	}
	#username{
	border-bottom:2px solid grey;
	}
	#button{
	width:400px;
	margin:20px 0;
	}
	.signup{
	text-align:center;
	margin-right:20px;
	}
	.icons{
	text-align:center;
	margin-top:10px;
	letter-spacing:7px;
	}
	.fa-facebook-official{
	color:rgb(57,87,147);
	}
	.fa-twitter-square{
	color:rgb(115,206,241);
	}
	.fa-google{
	color:rgb(224,88,75);
	}
	.Signup{
	text-align:center;
	margin-top:160px;
	font-size:15px;
	}
	.btn{
	border-radius:50px;
	background:linear-gradient(to right,#ffd89b 0%,#19547b  100%);
	color:white;
	}
	.btn:hover{
	background:linear-gradient(to right, #19547b 0%, #ffd89b 100%);
	color:white;
	}
	#loginButton{
	text-align:center;
	}
	</style>
  </head>
  <body>
<!--
<?php
// require('config.php');
 
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	// $username = stripslashes($_REQUEST['username']);
 //        //escapes special characters in a string
	// $username = mysqli_real_escape_string($conn,$username);
	// $password = stripslashes($_REQUEST['password']);
	// $password = mysqli_real_escape_string($conn,$password);
	$username=$_POST['username'];
	$password=$_POST['password'];

$c=0;

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopping");
$result = mysqli_query($con,"select * from user where email='$username' and password='$password'");
while ($r1 =mysqli_fetch_row($result))
{
	$c=1;
// echo $r1[1]."<br>";
// table has 3 fields only

//}
	//Checking is user existing in the database or not
//         $query = "SELECT * FROM 'user' WHERE email='$username'
// and password='".md5($password)."'";
// 	$result = mysqli_query($conn,$query); 

// echo "<div class='form'>
// <h3>u and p ".$result."</h3></div>";	

// 	// or die(mysql_error());

header("Location: home.php");

 	
// 	$rows = mysqli_num_rows($result);
//         if($rows==1){
// 	    $_SESSION['username'] = $username;
//             // Redirect user to index.php
	    }

	    if($c==0){
	    	echo "<div class='form' style='background:black; font-weight:bolder; text-align:center; color:red;'>
 <h3>Username/password incorrect.</h3></div>";
	    }
//          }
//          else{
// 	echo "<div class='form'>
// <h3>Password is incorrect.</h3></div>";}
// // <br/>Click here to <a href='loginTest.php'>Login</a></div>";
// 	}
//     }
	}
?>
-->

  	
	<div id="loginpage">
		<div id="login"><h2>Login</h2></div>
		<br>
		<form method="POST" action="" name="login">
		  <div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" />
			<!--<small style="float : right" id="emailHelp" class="form-text text-muted">Forgot Password?</small></small>-->
		  </div>
		  <div id="loginButton"><input id="button" type="submit" class="btn"  value="Login"></div>
		  <div>
		  	<?php
// require('config.php');
 
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	// $username = stripslashes($_REQUEST['username']);
 //        //escapes special characters in a string
	// $username = mysqli_real_escape_string($conn,$username);
	// $password = stripslashes($_REQUEST['password']);
	// $password = mysqli_real_escape_string($conn,$password);
	$username=$_POST['username'];
	$password=$_POST['password'];

$c=0;

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopping");
$result = mysqli_query($con,"select * from user where email='$username' and password='$password'");
echo "Neal";
while ($r1 =mysqli_fetch_row($result))
{
	$c=1;
	//echo "Neal";
// echo $r1[1]."<br>";
// table has 3 fields only

//}
	//Checking is user existing in the database or not
//         $query = "SELECT * FROM 'user' WHERE email='$username'
// and password='".md5($password)."'";
// 	$result = mysqli_query($conn,$query); 

// echo "<div class='form'>
// <h3>u and p ".$result."</h3></div>";	

// 	// or die(mysql_error());

header("Location: home.php");

 	
// 	$rows = mysqli_num_rows($result);
//         if($rows==1){
// 	    $_SESSION['username'] = $username;
//             // Redirect user to index.php
	    }

	    if($c==0){
	    	echo "<div class='form' style=' font-weight:bolder; text-align:center; color:red;'>
 <h3>Username/password incorrect.</h3></div>";
	    }
//          }
//          else{
// 	echo "<div class='form'>
// <h3>Password is incorrect.</h3></div>";}
// // <br/>Click here to <a href='loginTest.php'>Login</a></div>";
// 	}
//     }
	}
?>
		  <!--<div class="signup"><small class="text-muted">Or Sign Up Using</small></div><br>-->
		  <!--<div class="icons">
			<i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
			<i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
			<i class="fa fa-google fa-3x" aria-hidden="true"></i>
		  </div>-->
		  <div class="Signup">
		  <p style="font-size:16px">New users <a href="signup.html">Sign up</a> here</p>
		  </div>
		</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/15aa3afd58.js"></script>
  </body>
</html>
<!--<?php
// require('config.php');
 
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	// $username = stripslashes($_REQUEST['username']);
 //        //escapes special characters in a string
	// $username = mysqli_real_escape_string($conn,$username);
	// $password = stripslashes($_REQUEST['password']);
	// $password = mysqli_real_escape_string($conn,$password);
	$username=$_POST['username'];
	$password=$_POST['password'];

$c=0;

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopping");
$result = mysqli_query($con,"select * from user where email='$username' and password='$password'");
while ($r1 =mysqli_fetch_row($result))
{
	$c=1;
// echo $r1[1]."<br>";
// table has 3 fields only

//}
	//Checking is user existing in the database or not
//         $query = "SELECT * FROM 'user' WHERE email='$username'
// and password='".md5($password)."'";
// 	$result = mysqli_query($conn,$query); 

// echo "<div class='form'>
// <h3>u and p ".$result."</h3></div>";	

// 	// or die(mysql_error());

header("Location: home.php");

 	
// 	$rows = mysqli_num_rows($result);
//         if($rows==1){
// 	    $_SESSION['username'] = $username;
//             // Redirect user to index.php
	    }

	    if($c==0){
	    	echo "<div class='form' style='background:black; font-weight:bolder; text-align:center; color:red;'>
 <h3>Username/password incorrect.</h3></div>";
	    }
//          }
//          else{
// 	echo "<div class='form'>
// <h3>Password is incorrect.</h3></div>";}
// // <br/>Click here to <a href='loginTest.php'>Login</a></div>";
// 	}
//     }
	}
?>-->
