<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="signup2";

    $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $Name=$_POST['username'];
    $Email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="INSERT INTO `contact` (`S.no`, `Name`, `Email`, `phone`, `password`) VALUES (NULL, '$Name', '$Email',  '$phone', '$password')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<b> You have been successfully registered</b>";
    mysqli_close($conn);
 
?>
