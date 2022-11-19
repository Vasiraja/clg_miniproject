<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button a:hover{
            color:white;
           
                }
                table 
                {
                    box-shadow:2px 2px 8px black;
                    background-color:lightgray;
                    margin-right:100px;
                    margin-left:100px;
                }
  td,th
  {
    width:2%;
    text-align:center;
    margin-left:20px;
 border-right:1px solid white;
border-left:1px solid white;
  }
  button a

  {
    text-decoration:none;
        color:white;

  }
  #delete
  {
    background-color:#c4302b ;
    border-radius:5px;
  }
  th
  {
    color:white;
    text-shadow:1px 1px 3px black;
  }
  *{
    color:black;

  }



    </style>
</head>
<body>
    
</body>
</html>


<?php
$con=mysqli_connect('localhost','root','','test');
if(!$con)
{
    die("".mysqli_connect_error());
}

$query="SELECT * from COMPANYUSERDATA";
$run=mysqli_query($con,$query);
 
 "<form method='POST'>";
     echo "<table>";
     echo "<tr>";
     echo "<th>Company Name</th>";
     echo "<th>Company Id</th>";
     echo "<th>Location</th>";
     echo "<th>Confirmation code and others</th>";
     echo "<th colspan='2'>Permissions</th>";
     echo "</tr>";
 while($fetch=mysqli_fetch_assoc($run))
 {
     echo  "<tr>";
     echo  "<td>".$fetch['Comp_name']."</td>";
     
     echo  "<td>".$fetch['Comp_id']."</td>";
     echo  "<td>".$fetch['Location']."</td>";
     echo  "<td>".$fetch['desc']."</td>";

     $id=$fetch['Comp_id'];
     echo "<td><button class='btn btn-primary'>
     <a href='accept.php?acceptid=".$id."'>ACCEPT</a></button></td>";
echo "<td><button class='btn btn-danger' >
<a href='delete.php?deleteid=".$id."'>DECLINE
</a></button></td>";

     echo "</tr>";
    

     
     
     
     "</table>";
     "</form>";
 }
 
?>
