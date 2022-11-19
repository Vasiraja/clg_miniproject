<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <style>
    body {
        background-color: #2223;
    }

    h2 {
        font-family: cursive;
    }

    input {
        padding: 10px;
        border: 2px solid #2223;
        border-radius: 5px;
    }

    .form1 {
        color: white;
        background-color: gray;
        margin-left: 540px;
        margin-right: 540px;
        border-radius: 5px;
        height: 100%;
        padding-bottom: 40px;
        border: 2px solid gray;
        box-shadow: 2px 2px 5px black;

    }

    .a {
        text-decoration: none;
        color: white;
        background-color: gray;
        border-radius: 10px;
        padding: 5px;
        position: relative;
        top: 10px;
    }

    input[type=submit] {
        position: relative;
        display: block;
        color: white;
        width: 180px;
        background-color: #2223;
        cursor: pointer;
    }

    
    li a {

        color: white;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    li {
        display: inline;
        margin: 14px;
        padding: 10px;
        background-color: gray;
        border-radius: 5px;
    }

    li:hover {
        background-color: gray;
        padding: 13px;
        border-radius: 5px;
        color: white;
        transition: .2s padding;
    }
    li a:hover{
        color:white;
    }
    
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www. KC Institute.ac.in/">
                <img src="images.png" alt=""></a>
            <ul>

                <li class="li"><a href="mpdashboard.php">Home</a></li>
                <li class="li"><a href="mpindex.php">UserLogin</a></li>
                <li class="li"><a href="about.php">About</a></li>

                <li class="li"><a href="mpadminuser.php">Admin</a></li>

            </ul>
    </nav>
    <center>
        <h2 style="color:white;text-shadow:2px 2px 2px black">
            PLACEMENT INFO -  KC Institute </h2>
    </center>
    
    <form class="form1" method="post">
        <center>
            <h2>Login Form </h2>
        </center>
        <center>
            <div class="login">

                <label for="UserName"></label>
                <input type="text" name="emailid" value="" placeholder="UserName" required><br><br>
                <label for="Password"></label>
                <input type="password" name="Password" value="" required placeholder="Password"><br><br>
                <input type="submit" class="login1" name="login" value="login">
        </center>

        <center><a class="a" href="mpregisteration.php">Don't Have A Account</a>

        </center>



        </div>
    </form>
</body>

</html>
<?php
session_start();
$read = mysqli_connect("localhost", "root", "", "test");

if (!$read) {
  die("not connected" . mysqli_connect_error());
}

$queryfirst = 'SELECT * FROM MP1';
$resultfirst = mysqli_query($read, $queryfirst);





if (isset($_POST['login'])) {
  $UserName = $_POST['emailid'];
  $Password = $_POST['Password'];
  if ($UserName && $Password) {
    $queryinsert = "INSERT INTO login VALUES('$UserName','$Password')";
    $resultinsert = mysqli_query($read, $queryinsert);
    $querysecond = "select * from  mp1 where Email='$UserName' and Password ='$Password'";
    $resultsecond = mysqli_query($read, $querysecond);


    $querythird = "select * from login where emailid = '$UserName'";
    $resultthird = mysqli_query($read, $querythird);
     $_SESSION['emailid']=$_POST['emailid'];
    if (mysqli_num_rows($resultsecond) >= 1 && mysqli_num_rows($resultthird) == 1) {
      echo '<script>';
      echo 'alert("Successfully Login")';
      echo '</script>';
      echo '<script type="text/javascript">window.location.href="mpeducation.php";</script>';
    } else if (mysqli_num_rows($resultsecond) >= 1 && mysqli_num_rows($resultthird) >= 1) {
      echo '<script>';
      echo 'alert("Successfully Login")';
      echo '</script>';
      echo '<script type="text/javascript">window.location.href="profile.php";</script>';
    } else {
      echo '<script>alert("Incorrect UserName and Password")</script>';
    }
  }
}






?>