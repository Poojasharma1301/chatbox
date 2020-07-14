<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--bootstrap css file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--font-awesome-->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!--google-font-->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<!--custom css-->
<link rel="stylesheet" href="css/signin.css">
<!-- Font Awesome -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<title>Login to your account</title>
</head>
<body>
<div class="signin-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign in</h2><p>Login to Mychat</p></div>
<div class="form-group"><i style='font-size:24px' class='fas'>&#xf0e0;</i>
<label>Email</label>
<input name="email" type="text" class="form-control" placeholder="someone@site.com" autocomplete="off" required="required">

</div>

<div class="form-group"><i style='font-size:24px' class='fas'>&#xf084;</i>
         ​
<label>Password</label>
<input name="pass" type="password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">
<small class="form-text text-center"> Welcome to your Chatbox</small>
</div>
<div class="small">Forgot password ?<a href="forgot_pass.php">Click Here</a></div><br>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button></div>
<?php include("signin_user.php"); ?>
</form>
<div class="text-center small" style="color:#674288;">Don't have an account<a href="signup.php">Create one</a></div>
</div>


<!--jquery,proper.js,bootstrap.js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>