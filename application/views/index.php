<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Landing Page</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

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
            <a class="navbar-brand" href=".">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href=".">Home</a></li>
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
              <li class="active"><a href="/login">Sign in <span class="sr-only">(current)</span></a></li>

                            <li><a href="/register">Register</a></li>
              <!-- <li><a href="../navbar-fixed-top/">Fixed top</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


<div class="jumbotron">
        <h1>Best Dashboard Ever</h1>
        <p>This example is text meant to illustrate how the formatting will look. This site is built on codeigniter framework with twitter bootstrap.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="login" role="button">Enter Here &raquo;</a>
          <br><a href="register">Register</a>
        </p>
      </div>
<h3>Cheat Links</h3>
<ul>
	<li><a href="/register">register</a></li>
	<li><a href="/login">signin</a></li>
	<li><a href="/dashboards/admin">admin</a></li>
	<li><a href="/maindash">maindash</a></li>
	<li><a href="/wall">showuser</a></li>
	<li><a href="dashboards/newuser">newuser</a></li>
	<li><a href="/profile">editprofile</a></li>
	<li><a href="dashboards/edituser">edituser</a></li>
</ul>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>