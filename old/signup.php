<?php
  include('includes/header.php');
?>

<div class="container account">
  <div class="row">
    <div class="col-sm-12"><h1>Sign Up!</h1></div>
  </div>
  <div class="row">
    <div class="form-group">
        <div class="col-sm-4"><label for="name">Name:</label></div>
        <div class="col-sm-8"><input type="name" class="form-control" id="name"></div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <div class="col-sm-4"><label for="username">Username:</label></div>
      <div class="col-sm-8"><input type="text" class="form-control" id="username"></div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <div class="col-sm-4"><label for="email">Email:</label></div>
      <div class="col-sm-8"><input type="text" class="form-control" id="email"></div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
        <div class="col-sm-4"><label for="password">Password:</label></div>
        <div class="col-sm-8"><input type="password" class="form-control" id="password"></div>
    </div>
  </div>
</div>

<?php
  include('includes/footer.php');
?>
