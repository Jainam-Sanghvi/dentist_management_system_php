<?php
require("conn.php");

error_reporting(0);
$id=$_GET['id'];
$query="select * from tbladd where id='$id'";
$result=mysqli_query($con,$query);
$r=mysqli_fetch_array($result);
$name=$r['name'];
$edu=$r['edu'];


if(isset($_POST["UPDATE"]));
{
    // $id=$_GET['id'];
    $name=$_POST['name'];
    $edu=$_POST['edu'];
    $upt=$_POST['upt'];

    $query="update tblproduct set edu='$edu',upt='$upt',name='$name' where id='$id'";
    mysqli_query($con,$query);
    if(isset($_POST['UPDATE']))
    {
         header("Location:adddetail.php");
    }

   else
   {
    echo "record is not updated";
   }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    
    <link rel="stylesheet" href="style1.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <title>update</title>
    <style>
         body{
        background-image: url("login12.jpg");
        background-size: 100%;
      
      }
     #myform{
        background-image: url("login1.webp");
        background-size: 100%;
        background-blend-mode: darken;
        color: snow;
      }
        </style>
</head>
<body>
<div id="product">
    <form action=""  method="POST" id="myform"  style="margin: 2% 26%;padding: 2% 2%;border: 2px solid black;">
        <h2 style="text-align: center;">UPDATE DETAIL</h2>
     
        <div class="form-group">
            <label id="name1" class="control-label">ENTER NAME</label>
            <input type="text" id="name" name="name" placeholder="enter name" class="form-control" value="<?php echo $name;?>">
           
        </div>
        <div class="form-group">
            <label  class="control-label">ENTER EDUCATION</label>
            <input type="text" id="pass" name="edu" placeholder="enter education"  value="<?php echo $price;?>" class="form-control">
          
        </div>

        <div class="form-group">
            <label  class="control-label"> IMAGE</label>
            <input type="file"  name="upt" class="form-control">
           
        </div>
        <div class="form-group">
            <input type="submit" id="btn1" class="btn btn-primary btn-block btn-lg" value="UPDATE" name="UPDATE">
        </div>
       
    </form>
    </div>


    
</body>
</html>