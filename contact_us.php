<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="tiffin-service2";

    $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Subject=$_POST['subject'];
    $Message=$_POST['message'];

    $sql="INSERT INTO `contact` (`S.no`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES (NULL, '$Name', '$Email', '$Phone', '$Subject', '$Message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<b> Thank You.. We will reach you soon...</b>";
    mysqli_close($conn);
 
?>
