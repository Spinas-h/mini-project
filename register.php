<?php
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $phonenumber=$_POST['phno'];
    

    $sql="INSERT INTO register(rname, email, rpassword, raddress, pincode, phonenumber) VALUES('$name', '$email', '$password', '$address', '$pincode', '$phonenumber')";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        echo"new record created successfully";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>
