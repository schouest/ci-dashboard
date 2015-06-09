<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Register</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <!-- <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li> -->
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="login">Sign in<span class="sr-only">(current)</span></a></li>
              <!-- <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


<div class="container">

      <form class="form-signin" method="post" action="signup">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="mail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputfname" class="sr-only">First Name</label>
        <input name="f_name" type="text" id="inputfname" class="form-control" placeholder="First Name" required>
        <label for="inputlname" class="sr-only">Last Name</label>
        <input name="l_name" type="text" id="inputlname" class="form-control" placeholder="Last Name" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="passcode" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="cfrmPassword" class="sr-only">Confirm Password</label>
        <input name='cpasscode' type="password" id="cfrmPassword" class="form-control" placeholder="Confirm Password" required>
        <?php echo $this->session->flashdata('errors'); ?><br>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
      <a href="login">Already signed up? Login here</a>

    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>