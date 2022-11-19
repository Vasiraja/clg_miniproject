<?php
 session_start();
 $con=mysqli_connect("localhost","root","","test");
 
$getuser=$_SESSION['emailid'];
   $query="SELECT * FROM MP1 where Email = '$getuser'";
   $connect=mysqli_query($con,$query);
 while($row=mysqli_fetch_assoc($connect))
{
        $name=$row['FirstName'];
        $regis=$row['RegisterNo'];
        $_SESSION['regis']=$regis;
        $dept=$row['Department'];
        $gen=$row['Gender'];
        $dob=$row['DateOfBirth'];
        $email=$row['Email'];
        $ph=$row['PhoneNumber'];

}
$query1="SELECT * FROM EDUCATION where regis='$regis'";
$connect1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_assoc($connect1))
{
    $per10=$row1['per10'];
    $per12=$row1['per12'];
    $perUG=$row1['perUG'];
    $arrear=$row1['arrear'];
}
//   while($query1=mysqli_fetch_assoc($count_sel))
//   {

//        echo $query1['FirstName']."<br>";
//        echo $query1['RegisterNo']."<br>";
//   }


 
?>


    
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
 

<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www. KC Institute.ac.in/">
                <img src="images.png" alt="" ></a>
            <ul>

                <li id="li"><a href="profile.php">Profile</a></li>
                <li id="li"><a href="mpdrives.php">Drives</a></li>
                <li id="li"><a href="mpindex.php">Logout</a></li>

 
            </ul>
    </nav>
 <div class="profilemain">
    <table class="profile">

<tr><th>Name </th> <td> <?php echo $name ?> </td></tr>
<tr><th>RegisterNumber<td><?php echo $regis?> </td> </tr>
<tr><th>EmailId </th><td><?php echo $email ?> </td>  </tr>
<tr><th>Gender  </th><td> <?php echo $gen ?></td> </tr>
<tr><th>DateOfBirth<td> <?php echo $dob ?></td> </tr>  
<tr><th>Phone  </th><td><?php echo $ph ?></td></tr> 
</table>
</div>  
  
 

<div class="education">
    <div class="thead">ACADEMIC</div>
            

    <table>

<tr> <th>10<sup>th</sup> Percentage</th>  <td> <?php echo $per10 ?> </td>  </tr>
<tr>  <th>12<sup>th</sup> Percentage</th>  <td> <?php  echo $per12?> </td> </tr>
<tr>  <th>UG Percentage</th>  <td> <?php echo $perUG ?> </td> </tr>
<tr>  <th>StandingArrear</th>  <td> <?php echo $arrear ?> </td> </tr>
<tr>  <th>PassYear</th>  <td>  2023 </td> </tr>


    </table>
    </div> 

    </body>
</html>
 