<?php
require('conn.php');

error_reporting(0);

if(isset($_GET['REMOVE']));
{

    $rm=$_GET['REMOVE'];
$query="delete from tblreg where id= '$rm'";

if(mysqli_query($con,$query))
{
    header("Location:visitor.php");
}

else
{
    echo "record is not deleted";
}
}
?>