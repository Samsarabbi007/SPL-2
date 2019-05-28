<?php     session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Election Commissioner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm  bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand navbar-collapse" href="#">Vote Online</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="EC.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="voterManagement.php">Voterlist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="candidateManagement.php">Candidatelist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="voteAndresult.php">Time&Approve</a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" href="notification.php">Send Notification</a>
    </li>   
    <li class="nav-item">
      <a class="nav-link" href="../Vote/result.php">Result</a>
    </li> 
     <li class="nav-item">
      <a class="nav-link" href="signout.php" onclick="return confirm('Are you sure to logout?')">Logout</a>
    </li>
  </ul>
</nav>
<br>
