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
<link rel="stylesheet" type="text/css" href="css/signup.css">
<!-- Font Awesome -->

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<title>Create new account</title>
</head>
<body>
<div class="signup-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign up</h2>
<p>Fill out form and start chating with your friends.</p></div>

<div class="form-group"><i style='font-size:24px' class='fas'>&#xf508;</i>
<label>Username</label>
<input  type="text" class="form-control" placeholder="Example:Priyanka" autocomplete="off" name="user_name" required="required">

</div>

<div class="form-group"><i style='font-size:24px' class='fas'>&#xf0e0;</i>
<label >Email Address</label>
<input name="user_email" type="email" class="form-control" placeholder="someone@site.com" autocomplete="off" required="required">
<small class="form-text">We'll never share your chatbox I'd with anyone else.</small>
</div>

<div class="form-group"><i style='font-size:24px' class='fas'>&#xf084;</i>
         ​
<label>Password</label>
<input type="password" class="form-control" placeholder="Enter your password"  name="user_pass" autocomplete="off" required="required">
<small class="form-text"> Your password must be 5-20 characters long, contain letters and numbers,
             and must not contain spaces, special characters, or emoji.</small>
</div>
      <div class="form-group"><i style='font-size:24px' class='fas'>&#xf594;</i>
         <label >Country</label>
         <select class="form-control" name="user_country" required="required">
             <option disabled="">Select a country</option>
             <option>India</option>
             <option>UK</option>
             <option>Bangladesh</option>
             <option>America</option>
             <option>France</option>
             <option>Pakistan</option>
         </select>
        </div>

        <div class="form-group"><i style='font-size:24px' class='fas'>&#xf226;</i>

         <label>Gender</label>
         <select class="form-control" name="user_gender" required="required">
             <option disabled="disabled">Select your Gender</option>
             <option>Male</option>
             <option>Female</option>
             <option>Others</option>
             
         </select>
        </div>


        <div class="form-group">
            <label class="checkbox-inline">
            <input type="checkbox" required="required">I accept the<a href="#">terms of use</a>&amp;<a href="#">
                Privacy Policy
            </a></label>
        </div>


<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button></div>
<?php include("signup_user.php"); ?>
</form>
<div class="text-center small" style="color:#674288;">Already have an account<a href="signin.php">Signin here</a></div>
</div>


<!--jquery,proper.js,bootstrap.js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>