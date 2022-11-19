<?php

$read=mysqli_connect("localhost","root","","test");

if(!$read)
{
  die ("not connected".mysqli_connect_error());
}
echo "connected<br>";

$query='SELECT * FROM MP1';
$result=mysqli_query($read,$query);






?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> KC Institute OF TECHNOLOGY</title>


   <link rel="stylesheet" type="text/css" href="bootstrap.css" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
   <link href="style.css" rel="stylesheet" />
   <link href="responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <h3>
               KC Institute OF TECHNOLOGY
            </h3>
           </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html"> Courses </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.html"> Events </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="mpindex.php">Login</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
    </header>
     
  </div>

   

  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              GET ONLINE COURSES FOR FREE
            </h3>
            <p>
              Create your free account now and get immediate access to 100s of
              online courses
            </p>
            <a href="mpregisteration.php">
              REGISTER NOW
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login_form">
            <h5>
              Login Now
            </h5>
            <form action="">
              <div>
                <input type="email" placeholder="Email " name="UserName"/>
              </div>
              <div>
                <input type="password" placeholder="Password" name="Password" />
              </div>
              <button type="submit" name="login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html"> Courses </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.html"> Events </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mpindex1.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
              TOP RATED COURSE
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by
              injected humou
            </p>
          </div>
        </div>

        
  </section>

  
   
 
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
<?php
if(isset($_POST['login']))
{
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
 if($UserName && $Password)
{
   $check="select * from  mp1 where Email='$UserName' and Password ='$Password'";

  $res = $read->query($check);
  if(mysqli_num_rows($res) > 0 ){
  echo '<script>alert("Successfully Login")</script>';
  header("location:mpeducation.php");     

 
} 
else
{
  echo '<script>alert("Incorrect UserName and Password")</script>';
 }
}
}

 ?>
