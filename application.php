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

  <!-- form starts here -->
  <div class="container ">
 
  <h1 class="text-danger text-center my-3">Your Application </h1>
  <form action="/eurp/partials/_handle_preferences.php" method="post" >
  <p class="font-weight-bold text-left mb-0">Enter the UID of preferred project in the preference fields. </p>
  <p class="font-weight-normal text-left mt-0">(If there is no preference for any preference level, write "None".) </p>
  <div class="mb-3">
  <label for="name1" class="form-label">Your Name</label>
  <input type="text" class="form-control" id="name1" name="name1" >
</div>
  <div class="mb-3">
  <label for="rollno" class="form-label">Roll Number</label>
  <input type="text" class="form-control" id="rollno" name="rollno" >
</div>
  <div class="mb-3">
  <label for="pre1" class="form-label">First Prefrence</label>
  <input type="text" class="form-control" id="pre1" name="pre1" >
</div>
  <div class="mb-3">
  <label for="linkpre1" class="form-label">Link to the drive for Resume/SOP for first preference</label>
  <input type="text" class="form-control" id="linkpre1" name="linkpre1" >
</div>
  <div class="mb-3">
  <label for="pre2" class="form-label">Second Prefrence</label>
  <input type="text" class="form-control" id="pre2" name="pre2" >
</div>
  <div class="mb-3">
  <label for="linkpre2" class="form-label">Link to the drive for Resume/SOP for second preference</label>
  <input type="text" class="form-control" id="linkpre2" name="linkpre2" >
</div>
  <div class="mb-3">
  <label for="pre3" class="form-label">Third Prefrence</label>
  <input type="text" class="form-control" id="pre3" name="pre3" >
</div>
  <div class="mb-3">
  <label for="linkpre3" class="form-label">Link to the drive for Resume/SOP for third preference</label>
  <input type="text" class="form-control" id="linkpre3" name="linkpre3" >
</div>
  <div class="mb-3">
  <label for="pre4" class="form-label">Fourth Prefrence</label>
  <input type="text" class="form-control" id="pre4" name="pre4" >
</div>
  <div class="mb-3">
  <label for="linkpre4" class="form-label">Link to the drive for Resume/SOP for fourth preference</label>
  <input type="text" class="form-control" id="linkpre4" name="linkpre4" >
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