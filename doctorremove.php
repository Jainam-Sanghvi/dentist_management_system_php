<?php


require('conn.php');

error_reporting(0);

if(isset($_GET['REMOVE']));
{

    $rm=$_GET['REMOVE'];
$query="delete from tbladd where id= '$rm'";

if(mysqli_query($con,$query))
{
    header("Location:adddetail.php");
}

else
{
    echo "record is not deleted";
}
}
?>