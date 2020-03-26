<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sunny Feng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<style>
  body {
    background-color: #252525;
    padding-top: 6vh;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; 
  }
</style>

<!-- https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_navbar_collapse&stacked=h -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">Sunny Feng</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php include('navbar.php'); ?>
    </div>
  </div>
</nav>

<div class="container">