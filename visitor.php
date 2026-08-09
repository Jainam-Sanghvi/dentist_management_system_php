<?php

require('conn.php');

error_reporting(0);
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
   
    <title>table</title>
    <style>
         body{
        background-image: url("login12.jpg");
        width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
        /* background-size: 100%; */
      
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
        <a href="visitor.php">Visitor Our Website</a>
        <a href="logout.php">Logout</a>
        </div>
        <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>
    
<!--header section ends-->
<div>

<div class="card-body">

<div class="table-responsive">
<h2 style="color:snow;text-align:center;margin:25px;">VISITORS OUR WEBSITE</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            <table class="table table-bordered"  style="color:snow;color:#666;border:2px solid black;font-size:20px;font-weight:500;">
            
            <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">USERNAME</th>
            
            
            <th scope="col">PASSWORD</th>
            <th scope="col">ACTION</th>
    </tr>
    </thead>

    <tbody id="myTable">
        <?php
        $query="select * from tblreg";
        $result=mysqli_query($con,$query);
        
        while($r=mysqli_fetch_array($result))

        {
            ?>
        <tr>
            <td><?php echo $r['id'];?></td>
            <td><?php echo $r['uname'];?></td>
        
            <td><?php echo $r['pass'];?></td>
           
            <td>
                <a href="visitremove.php?REMOVE=<?php echo $r['id']; ?>" class="btn-danger btn-lg"onclick="return confirm('are you sure to remove ?');">
                    REMOVE</a></td>
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