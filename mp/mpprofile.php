
<?php
 session_start();
 $con=mysqli_connect("localhost","root","","test");
 if($con)
{
    echo "connected";
}

 $r=$_SESSION['register'];
 $getuser=$_SESSION['IDName'];
  $query="SELECT * from education where regis = '$r'";
$count= mysqli_query($con,$query);
$query_sel="SELECT * from mp1 where Email = '$getuser'";  
$count_sel=mysqli_query($con,$query_sel);
$query_sell="SELECT * from education";
$count_sell=mysqli_query($con,$query_sell);
  while($query1=mysqli_fetch_assoc($count_sel))
  {

       echo $query1['FirstName']."<br>";
  }
//  $Register=$_POST['regis'];
// $query="SELECT * FROM education where regis= $Register";
// mysqli_query($con,$query);
 

// $Register=$_POST['regis'];
//  print($_POST['regis']);
//  print($Register);
?>


    
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<ul class="nav-profile">
<li><a href="#" id="home">HOME</a></li>
<li><a href="#">DRIVES</a></li>
<li><a href="profile.php">PROFILE</a></li>


</ul>
        <div class="photo"> j</div>

 <div class="profilemain">
    <table class="profile">
        <?php while($row=mysqli_fetch_assoc($run)) ?>
 <tr><th>Name </th> <td> <?php echo $row['FirstName'];?> </td></tr>
<tr><th>RegisterNumber<td><?php echo $row['RegisterNo'];?></td> </tr>
<tr><th>EmailId </th><td><?php echo $row['EmailId'];?></td>  </tr>
<tr><th>Gender  </th><td><?php echo $row['Gender'];?></td> </tr>
<tr><th>DateOfBirth<td><?php echo $row['DateOfBirth'];?></td> </tr>  
<tr><th>Phone  </th><td><?php echo $row['PhoneNumber'];?></td></tr> 
</table>
</div>  
          
 




<div class="education">
    <div class="thead">ACADEMIC</div>
            

    <table>

<tr> <th>10<sup>th</sup> Percentage</th>  <td> <?php echo $row['per10'];  ?> </td>  </tr>
<tr>  <th>12<sup>th</sup> Percentage</th>  <td> <?php  echo $row['per12']; ?> </td> </tr>
<tr>  <th>UG Percentage</th>  <td> <?php  echo $row['perUG']; ?> </td> </tr>
<tr>  <th>StandingArrear</th>  <td> <?php echo $row['arrear'];  ?> </td> </tr>
<tr>  <th>PassYear</th>  <td>  2023 </td> </tr>



    </table>
 </div>

</body>
</html> -->
