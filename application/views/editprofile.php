<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Your Profile</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
<style>
textarea{
  resize:none;
}


</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
              <li class="active"><a href="profile">Welcome <?= $this->session->userdata('loggedname'); ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="maindash">Dashboard</a></li>
            <li><a href="wall">Your Wall</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="logout">Logout</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </nav>

<div class="container">

      <form class="form-signin" method='post' action='dashboards/edit_info'>
        <h2 style='margin-top: 80px' class="form-signin-heading">Update User Info</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name='mail' type="email" id="inputEmail" class="form-control" value="<?= $user_info['email']?>" required>
        <label for="inputfname" class="sr-only">First Name</label>
        <input name='f_name' type="txt" id="inputfname" class="form-control" value="<?= $user_info['first_name']?>" required>
        <label for="inputlname" class="sr-only">First Name</label>
        <input name='l_name' type="txt" id="inputlname" class="form-control" value="<?= $user_info['last_name']?>" required>
  
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

      <form class="form-signin" method='post' action='dashboards/edit_pw'>
        <h2 class="form-signin-heading">Change Your Password</h2>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name='passcode' type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputcPassword" class="sr-only">Password</label>
        <input type="password" id="inputcPassword" class="form-control" placeholder="Confirm Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
      </form>

      <form class="form-signin" method="post" action='dashboards/edit_desc/5'>
        <h2 class="form-signin-heading">Set Description</h2>
        <textarea name='txt' rows='7' class='form-control'><?= $user_info['description']?></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
      </form>

    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>