<?php
require('conn.php');
error_reporting(0);




if($_POST['name'] && $_POST['email'] && $_POST['mno'] && $_POST['date'] && $_POST['addr'])
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $mno=$_POST['mno'];
  $date=$_POST['date'];
  $addr=$_POST['addr'];

  $query="insert into tblapp(name,email,mno,date,addr) values('$name','$email','$mno','$date','$addr')";

  mysqli_query($con,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Dentist</title>

    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- <a class="navbar-brand" href="#">ALL IN ONE</a> -->
            <a href="home.php" class="navbar-brand"> <b> Dental<span class="text-info">Care<span></b> </a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#review">Reviews</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
</nav>
<div id="home">
  <div  class="main-head">
            <div class="banner-text">
            <h1> LET  US <span >  BRIGHTEN  </span ></h1>
            <h1> <span >  YOUR SMILE  </span ></h1>
                      <p >Lorem ipsum dolor sit amet consectetur adipisic adifscd <br> Doloribus svitae omnis  rerum consectetur magna sqhe<br> sequi voluptatum vel corporis. Repudiandae. cons</p>
                      <br>
                      <a href="" class="btn1 btn-info btn-lg ">Make Appointment</a>
            
                      <div>
            <!-- <button type="submit" class="btn1 btn-primary btn-lg ">Make Appointment</button> -->


    </div>
    </div>                                
        
        </div>


</div>
</div>
<div id="about">

<div class="container" style="margin-top: 80px;">
            <div class="row " style="margin: 8px;">
                <div id="box4" class="col box1" style="margin: 3px;border: 1px solid white;">

                </div>

                <div id="box5" class="col box2" style="margin: 60px;border: 1px solid white;">
                    <h3><span class="text-info">About Us</span></h3>
                    <h3>True Health Care For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non
                        quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis
                        dicta, incidunt dolores nemo ex.</p>
                        <br>
                    <a href="#jainam" class="btn-info btn-lg"> Read More </a>

                </div>

</div>
</div>
<div id="jainam">

<section class="doctor">
<h3 style="text-align:center;font-size:2.2rem; "> Our Team<span class="text-info"> Members </span></h3>
   

<div class="box-container">
        
          <?php
          
          $query="select * from tbladd";

          $result=mysqli_query($con,$query);

          if(mysqli_num_rows($result)>0)
          {
            while($fetch=mysqli_fetch_assoc($result))

            {
              ?>
              
            <form action="" method="POST">
              <div class="box">
              <img src="images/<?php echo $fetch['upt']; ?>" alt="" >
              <h5 class="name"><?php echo $fetch['name'];?></h5>
               <div class="edu"><?php echo $fetch['edu']; ?> </div>
            
            </div>
            </form>
        <?php
        
      }
    }
        ?>
           
  
</div>

</div>
 
<section id="service" class="bg-light" style="margin-top: 50px;">
<div class="container" style="margin-top: 20px;">
<h3 style="text-align:center;font-size:2.2rem; "> Our <span class="text-info"> Services </span></h3>
 
            <div class="row " id="row1" style="margin: 20px;">
                <div id="box6" class="col box1" style="margin: 9px;border: 1px solid white; ">
                 <img src="pic1.png" alt="" height="" width="" >
                  <h4 >Alignment Specialist</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box7" class="col box2" style="margin: 9px;border: 1px solid white;">
                <img src="pic2.png" alt="" height="" width="" >
                <h4>Cosmetic Dentistry</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box8" class="col box3" style="margin: 9px;border: 1px solid white;">
                <img src="pic3.webp" alt="" height="" width="" >
                <h4>Oral Hygiene Experts</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
            </div>
            <div class="row " id="row2" style="margin: 20px;">
                <div id="box9" class="col box4" style="margin: 9px;border: 1px solid white;">
                <img src="pic4.webp" alt="" height="" width="" >
                <h4>Root Canal Specialist</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box10" class="col box5" style="margin: 9px;border: 1px solid white;">
                <img src="pic5.jpg" alt="" height="" width="" >
                <h4>Live Dental Advisory</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box11" class="col box6" style="margin: 9px;border: 1px solid white;">
                <img src="pic6.png" alt="" height="" width="" >
                <h4>Cavity Inspection</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
            </div>

        </div>
</section>

<section id="process">
<div class="container" style="margin-top: 20px;">
<h3 style="text-align:center;font-size:2.2rem; "> Our <span class="text-info"> Process </span></h3>
 
            <div class="row " id="row3" style="margin: 20px;">
                <div id="box12" class="col box1 bg-info" style="margin: 9px;border: 2px solid white; ">
                 <img src="image10.jpg" alt="" height="" width="" >
                  <h4 style="margin-top:30px;">Alignment Specialist</h4>
                  <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box13" class="col box2 bg-info" style="margin: 9px;border: 1px solid white;">
                <img src="image8.webp" alt="" height="" width="" >
                <h4  style="margin-top:30px;">Cosmetic Dentistry</h4>
                <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
                <div id="box14" class="col box3 bg-info" style="margin: 9px;border: 1px solid white;">
                <img src="image7.jpg" alt="" height="" width="" >
                <h4  style="margin-top:30px;">Oral Hygiene Experts</h4>
                <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ulla</p>
                </div>
            </div>
</section>

<section id="review" class="bg-light">
<div class="container" style="margin-top: 15px;">
<h3 style="text-align:center;font-size:2.2rem; "> Satisfied <span class="text-info"> Clients </span></h3>
       <div class="row " style="margin: 40px;">
              <div  class="col box" style="margin: 9px;border: 11px solid #fff;background-color: #333;border-radius:.5rem;box-shadow: 0 .5rem 1rem rgba(0,0,0,.3);" >
        <img src="photo5.jpg" alt="" height="110rem" width="110rem" style="margin-top: -4rem;margin-left: 85px;border-radius:50%;border:1rem solid #fff ;">
                <h5 style="margin-left: 70px;color: snow;font-weight: 500;">Jainam Sanghvi</h5>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
        </div>
            <p style="color: snow;font-size: 1.0rem;font-weight: 500;font-family: Georgia, 'Times New Roman', Times, serif;text-align: center;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, eum voluptatum aspernatur magnam quo delectus? Repellat blanditiis rem facilis ea voluptas cum, doloribus repudiandae architecto distinctio, totam maiores, quisquam labore.
            </p>
        </div>
        <div class="col box" style="margin: 9px;border: 11px solid #fff;background-color: #333;border-radius:.5rem;box-shadow: 0 .5rem 1rem rgba(0,0,0,.3);" >
            <img src="photo4.jpg" alt="" height="110rem" width="110rem" style="margin-top: -4rem;margin-left: 85px;border-radius:50%;border:1rem solid #fff ;">
                <h5 style="margin-left: 70px;color: snow;font-weight: 500;">Bhumi Sanghvi</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p style="color: snow;font-size: 1.0rem;font-weight: 500;font-family: Georgia, 'Times New Roman', Times, serif;text-align: center;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, eum voluptatum aspernatur magnam quo delectus? Repellat blanditiis rem facilis ea voluptas cum, doloribus repudiandae architecto distinctio, totam maiores, quisquam labore.
                    </p>
            </div>
            <div class="col box" style="margin: 9px;border: 11px solid #fff;background-color: #333;border-radius:.5rem;box-shadow: 0 .5rem 1rem rgba(0,0,0,.3);" >
                <img src="photo6.jpg" alt="" height="110rem" width="110rem" style="margin-top: -4rem;margin-left: 85px;border-radius:50%;border:1rem solid #fff ;">
                    <h5 style="margin-left: 70px;color: snow;font-weight: 500;">Nemish Koradiya</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            
                        </div>
                        <p style="color: snow;font-size: 1.0rem;font-weight: 500;font-family: Georgia, 'Times New Roman', Times, serif;text-align: center;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, eum voluptatum aspernatur magnam quo delectus? Repellat blanditiis rem facilis ea voluptas cum, doloribus repudiandae architecto distinctio, totam maiores, quisquam labore.
                        </p>
                    </div>
            </div>
</section>


<section id="contact">
<h3 style="text-align:center;font-size:2.2rem; margin-top:40px;"> Make <span class="text-info"> Appointment </span></h3>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
<form action="" class="form bg-light" method="POST" id="myform" onsubmit="return validation()" style="margin: 3% 26%;padding: 5% 5%;border: 2px solid white;">
        
        <div class="form-group">
            <label class="control-label">Your Name</label>
            <input type="text" id="name" name="name" placeholder="enter your name" class="form-control">
            <span id="uname" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label class="control-label">Your Email</label>
            <input type="email" id="email" name="email" placeholder="enter your email" class="form-control">
            <span id="email1" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label class="control-label">Your Number</label>
            <input type="number" id="mno" name="mno" placeholder="enter your phone number" class="form-control">
            <span id="mno1" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label class="control-label">Appointment Date</label>
            <input type="datetime-local" id="date" name="date" placeholder="enter your appointment date" class="form-control">
            <span id="date1" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label class="control-label">Your Address</label>
        <textarea placeholder="enter your address" name="addr" id="addr" cols="60" rows="5"></textarea>
        <span id="addr1" class="text-danger"></span>
        </div> 
        <div class="form-group">
             <button type="submit" class="btn3 btn-info btn-block btn-lg">Make Appointment</button>
        </div> 
      
         </form>                       
</section>            

<section class="footer bg-light">
<div class="box-container container">
<div class="box">
<i class="fas fa-phone bg-info"></i>
<h3>Phone Number</h3>
<p>+123-456-7890</p>
<p>+111-222-3333</p>
</div>

<div class="box">
<i class="fas fa-map-marker-alt bg-info"></i>
<h3>Our Address</h3>
<p>Surat,India</p>
</div>

<div class="box">
<i class="fas fa-clock bg-info"></i>
<h3>Opening Hours</h3>
<p>00:07 AM to 10:00 PM</p>

</div>
<div class="box">
<i class="fas fa-envelope bg-info"></i>
<h3>Email Address</h3>
<p>jainamsanghai@gmail.com</p>
<p>bhumisanghai@gmail.com</p>
</div>
</div>


</section>

<section class="credit bg-info">
<h3>Created By Jainam Sanghvi | all rights reserved!</h3>
<section>
</body>
</html>       
 
   
                                                                          
                                                                          
