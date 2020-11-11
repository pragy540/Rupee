<?php
$showerror= "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $ldap=$_POST['signupid'];
    $pass=$_POST['signup_pass'];
    $cpass=$_POST['signup_cpass'];

    //check whether this ID exists
    $sql= "select * from `users` where `ldap` = '$ldap'";
    $result = mysqli_query($conn, $sql);

    $numRows = mysqli_num_rows($result);
    if($numRows >0){
        $showerror ="User already exists.";
    }
    else{
        if($pass==$cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql= "INSERT INTO `users` (`ldap`, `pass`) VALUES ('$ldap', '$hash')";  
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
                header("Location: /eurp/index.php?signupsuccess=true");
                exit();
            }         
        }
        else{
            $showerror ="Passwords do not match.";
            
        }
    }
    header("Location: /eurp/index.php?signupsuccess=false&error=$showerror");
}
?>