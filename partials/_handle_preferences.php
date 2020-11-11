<?php
session_start();
$showerror= "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $ldap=$_SESSION['ldap'];
    $pre1=$_POST['preference1'];
    $pre2=$_POST['preference2'];
    $pre3=$_POST['preference3'];
    $pre4=$_POST['preference4'];

    //check whether this ID exists
    $sql= "select * from `preferences` where `ldap` = '$ldap'";
    $result = mysqli_query($conn, $sql);

    $numRows = mysqli_num_rows($result);
    if($numRows >0){
        $sql="UPDATE `preferences` SET `preference1` = '$pre1', `preference2` = '$pre2', `preference3` = '$pre3', `preference4` = '$pre4' WHERE `preferences`.`ldap` = '$ldap'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
            header("Location: /eurp/application.php?updatepreferencesuccess=true");
            exit();
        }         
        
        else{
            $showerror ="Some error occurred. Try once again.";
            
        }
    }
    else{
        $sql= "INSERT INTO `preferences` (`ldap`, `preference1`, `preference2`, `preference3`, `preference4`) VALUES ('$ldap', '$pre1', '$pre2', '$pre3', '$pre4')";  
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
            header("Location: /eurp/application.php?updatepreferencesuccess=true");
            exit();
        }         
        
        else{
            $showerror ="Some error occurred. Try once again.";
            
        }
    }
    header("Location: /eurp/application.php?updatepreferencesuccess=false&error=$showerror");
}
?>