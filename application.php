<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Apply here!</title>
  </head>
  <body>
  <?php require 'partials/_nav.php'; ?>
  <?php
   if(isset($_GET['updatepreferencesuccess'])  && $_GET['updatepreferencesuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!</strong> Your preferences have been updated successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  elseif(isset($_GET['updatepreferencesuccess'])  && $_GET['updatepreferencesuccess']=="false"){
    $error =$_GET['error'];
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error!</strong> '.$error.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  
  }
  ?>


<!-- existing preferences to be shown here -->
<?php
session_start();











?>

  <!-- form starts here -->
  <div class="container ">
 
  <h1 class="text-danger text-center my-3">Your Application </h1>
  <form action="/eurp/partials/_handle_preferences.php" method="post" >
  <p class="font-weight-bold text-left mb-0">Enter the UID of preferred project. </p>
  <p class="font-weight-normal text-left mt-0">(If there is no preference for any preference level, write "None".) </p>
  <div class="form-group">
    <label for="preference1">Preference 1 </label>
    <textarea class="form-control" id="preference1" name="preference1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="preference2">Preference 2 </label>
    <textarea class="form-control" id="preference2" name="preference2" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="preference3">Preference 3 </label>
    <textarea class="form-control" id="preference3" name="preference3" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="preference4">Preference 4 </label>
    <textarea class="form-control" id="preference4" name="preference4" rows="1"></textarea>
  </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

  
  
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>