


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body
        {
            background-color:#2223;
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
     
         input 
         {
            margin:10px;
            padding:10px;
            border-radius:6px;
         }


    </style>
</head>

<body style="background-color:gray;">
   <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www. KC Institute.ac.in/">
                <img src="images.png" alt="" ></a>
            <ul>

                <li class="li"><a href="mpdashboard.php">Home</a></li>
                <li class="li"><a href="mpindex.php">UserLogin</a></li>
                <li class="li"><a href="about.php">About</a></li>

                <li class="li"><a href="mpadminuser.php">Admin</a></li>

            </ul>
    </nav>
                <center><img src="user.jpg" alt="" width="100px" style="border-radius:50%;"></center>

    <center> <form class="formq"method="POST"
    style="
    position:static;
     top:10%;
     right:40%;
     background-color:#2223;
     ">

     
    <input type="text" placeholder="UserName" name="uname"><br>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="login" name="login"> 
    </form><center> 
</body>
</html>
<?php
if(isset($_POST["login"]))
{
    $name=$_POST['uname'];
    $pwd=$_POST['password'];

    if($name=='vasi'&&$pwd=='vasi'){
        header("location:mpadmin.php");
    }else
    {
        echo "<script>alert('Incorrect name and password')</script>";
    }

}



?>