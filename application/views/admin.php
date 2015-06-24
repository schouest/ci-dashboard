<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
    <!-- <link href="navbar.css" rel="stylesheet"> -->
    <link href="dashboard.css" rel="stylesheet">
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
            <li><a href="/maindash">Dashboard</a></li>
            <li><a href="/wall">Your Wall</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 style='margin-top: 80px' class="page-header">All Users</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              
              <thead>
                <tr>
                  <th>ID#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>created_at</th>
                  <th>updated_at</th>
                  <th>User Level</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $entry) { //TODO: table form navigation
  ?><tr><td style="background-color:darkgrey"><?php
      echo $entry['user_id'];
      $id = $entry['user_id'];
      ?></td><td><?=
      $entry['first_name'] . "&nbsp" . $entry['last_name'];
      ?></td><td><?=
      $entry['email'];
      ?></td><td><?=
      $entry['date_created'];
      ?></td><td><?=
      $entry['date_updated'];
      ?></td><td><?=
      $entry['user_level'];
      ?></td>

      <!-- <td>
      <form action="<?= "products/destroy/$id" ?>"method="post">
      <a href="<?= "products/show_product/$id" ?>">Show</a>
      <a href="<?= "products/edit_product/$id" ?>">Edit</a>
      <button>Remove</button>
      </form>     
</td> --></tr><?php }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>