<?php

require('conn.php');
error_reporting(0);




if($_POST['name'] && $_POST['edu'] && $_POST['upt'])
{

  $name=$_POST['name'];
  $edu=$_POST['edu'];
  $upt=$_POST['upt'];
  

  $query="insert into tbladd(name,edu,upt) values('$name','$edu','$upt')";

  mysqli_query($con,$query);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    
    <link rel="stylesheet" href="admin.css"> 
     <link rel="stylesheet" href="style3.css">  
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <title>doctor details</title>
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
      th,td{
        color:snow;
      }
    </style>
    
</head>
<body>
    
<div id="mySidebar" class="sidebar">
    
    
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <a href="admin.php">Dashboard</a>
        <a href="appoi.php">Appointment data</a>
        <a href="adddetail.php">Doctor details</a>
        
        <a href="loginadmin.php">Logout</a>
        </div>
        <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>
    
<!--header section ends-->
    <div id="product">
    <form action=""  method="POST" id="myform" style="margin: 2% 26%;padding: 2% 2%;border: 2px solid black;">
        <h2 style="text-align: center;">UPLOAD DETAILS</h2>
     
        <div class="form-group">
            <label id="name1" class="control-label">DOCTOR NAME</label>
            <input type="text" id="name" name="name"  placeholder="enter name" class="form-control" required >
            
        </div>
        <div class="form-group">
            <label  class="control-label">EDUCATION DETAILS</label>
            <input type="text" id="pass" name="edu" placeholder="enter education" class="form-control">
        
        </div>

        <div class="form-group">
            <label  class="control-label">UPLOAD YOUR PHOTO</label>
            <input type="file" id="upt" name="upt" class="form-control">
           
        </div>
        <div class="form-group">
            <input type="submit" id="btn1" class="btn btn-primary btn-block btn-lg" value="SUBMIT" name="submit">
        </div>
       
    </form>
    </div>


    <div>

<div class="card-body">

<div class="table-responsive">
<h2 style="color:snow;text-align:center;margin:25px;">OUR STAFF DETAILS</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table class="table table-bordered" style="color:snow;color:#666;border:2px solid black;font-size:20px;font-weight:500;">
            
            <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EDUCATION</th>
            <th scope="col">PHOTO</th>
           
            <th scope="col" colspan=2>ACTION</th>
    </tr>
    </thead>

    <tbody id="myTable">
        <?php
        $query="select * from tbladd";
        $result=mysqli_query($con,$query);
        
        while($r=mysqli_fetch_array($result)) 

        {
            ?>
        <tr>
            <td><?php echo $r['id'];?></td>
            <td><?php echo $r['name'];?></td>
            <td><?php echo $r['edu'];?></td>
            <td><image src="images/<?php echo $r['upt'];?>" alt="" height="88px"></td>
            
              <td><a href="doctorremove.php?REMOVE=<?php echo $r['id']; ?>" class="btn-danger btn-lg" onclick="return confirm('are you sure you want to remove ?');">REMOVE</a>
              <a href="doctorupdate.php?id=<?php echo $r['id']; ?>" class="btn-success btn-lg">UPDATE</a></td> 
              
       
       
            </tr> 
    <?php
        }
    ?>
</tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>