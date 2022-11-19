
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
table 
                {
                  position:relative;
                  top:10%;
                  
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
  h3
  {
     color:white;
    text-shadow:1px 1px 3px black;
  
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
   button:hover
   {
    padding:10px;color:white;
    transition:.2s padding;
   }
   button:visited
   {
    background-color:green;
   }
   button a:hover
   {
      color:white;
   }

#li a {

        color: white;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    #li {
        display: inline;
        margin: 14px;
        padding: 10px;
        background-color: gray;
        border-radius: 5px;
    }

    #li:hover {
        background-color: gray;
        padding: 13px;
        border-radius: 5px;
        color: white;
        transition: .2s padding;
    }


</style>
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
    
</body>
</html>
  
 <?php
session_start();
 
 $con=mysqli_connect('localhost','root','','test');
$regis=$_SESSION['regis'];
$query=
// "SELECT * FROM (SELECT * FROM ACCEPTCOMPANIES a UNION ALL SELECT * FROM EDUCATION b) WHERE a.UGqual <= b.perUG";
"select * from  ACCEPTCOMPANIES a,EDUCATION b where a.UGqual<=b.perUG and b.regis='$regis' and a.10thqual<=b.per10 and a.12qual <=b.per12";

 
 
// $query="SELECT * FROM ACCEPTCOMPANIES INNER JOIN EDUCATION WHERE        ACCEPTCOMPANIES.UGqual<=EDUCATION.perUG";

// $query="SELECT * FROM ACCEPTCOMPANIES WHERE()";
$result=mysqli_query($con,$query);
echo "<center><h3>ELIGIBILITY-DRIVES</h3></center>";
echo "<table><tr>";
echo "<th> Comp_Name</th><th>Role</th><th>Location</th><th>Salary</th>";
echo "</tr>";
echo "<tr>";
echo "<td></td>";
echo "</tr>";
 while($row=mysqli_fetch_assoc($result))
{
        $compname=$row['Comp_name'];
        $role=$row['Role'];
        $location=$row['Location'];
        $salary=$row['Salary'];
  echo "<tr><td>"; 
  echo $compname;
  echo "</td><td>";
  echo $role;
  echo "</td><td>";
  echo $location;
  echo "</td><td>";
  echo $salary;
  echo "</td><td>";
  echo "<button class='btn btn-primary'><a href='optedin.php'>Opt-In</a></button>";
  echo "</td></tr>";

        
}
echo "</table>";
  

 

?>