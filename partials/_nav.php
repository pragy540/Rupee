<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="">RUPEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/eurp/">Home <span class="sr-only">(current)</span></a>
      </li>';


      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '<li class="nav-item active">
        <a class="nav-link" href="/eurp/application.php/">My Application <span class="sr-only">(current)</span></a>
        </li>';
     }


 echo '<li class="nav-item active">
   <a class="nav-link" href="/eurp/projects.php/">Projects <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active">
      <a class="nav-link" href="/eurp/rulebook.php/">Rulebook <span class="sr-only">(current)</span></a>
  </li>
   <li class="nav-item active">
        <a class="nav-link" href="/eurp/contact.php/">Contact Us <span class="sr-only">(current)</span></a>
   </li>
    </ul>';

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo "<p class='text-light my-0 mx-2'> Welcome ".$_SESSION['ldap']."</p>
       <a href='/eurp/partials/_logout.php' class='btn btn-outline-success'  >Logout</a>";
    }
    else{
    echo 
    '<button class="btn btn-outline-success" data-toggle="modal" data-target="#login" >Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signup" >Signup</button>';

    }
    
  echo '</div>
</nav>';

 include 'partials/_login.php';
 include 'partials/_signup.php';


if(isset($_GET['signupsuccess'])  && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You have signed in successfully. You can now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
elseif(isset($_GET['signupsuccess'])  && $_GET['signupsuccess']=="false"){
  $error =$_GET['error'];
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> There was a problem while signing up. '.$error.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}

if(isset($_GET['loginsuccess'])  && $_GET['loginsuccess']=="false"){
  $error =$_GET['error'];
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> There was a problem while logging in. '.$error.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}


?>









