<?php
session_start();
$showerror= "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $ldap=$_SESSION['ldap'];
    $name=$_POST['name1'];
    $roll=$_POST['rollno'];
    $pre1=$_POST['pre1'];
    $pre2=$_POST['pre2'];
    $pre3=$_POST['pre3'];
    $pre4=$_POST['pre4'];
    $link1=$_POST['linkpre1'];
    $link2=$_POST['linkpre2'];
    $link3=$_POST['linkpre3'];
    $link4=$_POST['linkpre4'];
   

    //check whether this ID exists
    $sql= "select * from `preferences` where `ldap` = '$ldap'";
    $result = mysqli_query($conn, $sql);

    $numRows = mysqli_num_rows($result);
    if($numRows >0){
        $sql="UPDATE `preferences` SET `name` = '$name', `roll` = '$roll', `preference1` = '$pre1', `link1` = '$link1', `preference2` = '$pre2', `link2` = '$link2', `preference3` = '$pre3', `link3` = '$link3', `preference4` = '$pre4' , `link4` = '$link4' WHERE `preferences`.`ldap` = '$ldap'";
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
        $sql= "INSERT INTO `preferences` (`ldap`, `name`, `roll`, `preference1`, `link1`, `preference2`, `link2`, `preference3`, `link3`, `preference4`, `link4`) VALUES ('$ldap', '$name', '$roll', '$pre1', '$link1', '$pre2', '$link2', '$pre3', '$link3', '$pre4', '$link4')";  
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