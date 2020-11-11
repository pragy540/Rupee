<?php
$showerror="false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $ldap=$_POST['userid'];
    $pass=$_POST['pass'];
    $sql= "select * from `users` where `ldap` = '$ldap'";
    $result = mysqli_query($conn, $sql);

    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['pass'])){
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['ldap']= $ldap;
            header("Location: /eurp/index.php");
            exit();
        }
        else{
            $showerror="Invalid Password";
        }
    }
    else{
        $showerror="User does not exist.";
    }
    header("Location: /eurp/index.php?loginsuccess=false&error=$showerror");
}
?>