<?php
$con=mysqli_connect('localhost','root','','test');
if(!$con)
{
       die ("not connected".mysqli_connect_error());

    }
    else{
        echo "conn";
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mpcompanydata.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h2 style="text-shadow:2px 2px 2px white">Company User Data</h2>
    <form class="companyuserdata"  method="POST">
    <input type="text" name="Comp_id" placeholder="Enter the Company Id">
    <input type="text" name="Comp_name" placeholder="Name Of Company">
    <input list="Role" name="Role" placeholder="Role for Vacencies" style="position:relative;
 border:2px solid black;
margin:35px;
width:500px;
height:40px;

border-radius:10px;">
    <datalist id="Role" >
        <option value="Software Engineer">
        <option value="Software Trainee">
        <option value="Testing">
        <option value="Analysts">
        <option value="Full Stack Developer">
        <option value="Others">
             

</datalist>





    <input type="text" name="10thqual" placeholder="Eligibility Criteria for 10th">
        <input type="text" name="12qual" placeholder="Eligibility Criteria for 12th or Diplamo">
    <input type="text" name="UGqual" placeholder="Eligibility Criteria for UG">
    <input type="text" name="PGqual" placeholder="Eligibility Criteria for PG">
    <input type="date" name="Applydate" placeholder="Deadline For apply">
    <input type="number" name="Offers" placeholder="Expecting no.offers">
     
    <input type="number" name="Standingarrears" placeholder="Standingarrears"><br>
    <label for="Historyofarrears" id="label" style="position:relative">Restrictions of History Of arrears</label>
    <div class="history">  
    <input type="radio" value="Yes" name="Historyofarrears">Yes 
    <input type="radio" value="No" name="Historyofarrears">No</div><br>
    <input type="text"  name="Location" placeholder="Location"> 
    <input type="text"  name="Salary"   placeholder="SalaryPackage/year"><br>
    <input type="textarea" name="desc" placeholder="AccessId" style="
    position:relative;
    left:40px;">
    <center><input type="submit" name="submit" value="Request" class="btn btn-primary" 
      style="position:relative; bottom:20px;
      right:100px;"></center>
      </form>
</body>
</html>
<br><br><br>
 
<?php
 session_start();
if(isset($_POST["submit"]))
{ 
$Comp_Id=$_POST["Comp_id"];
$_SESSION["Company"]=$Comp_name=$_POST["Comp_name"];
$Role=$_POST["Role"];
 $sslcqual=$_POST["10thqual"];
 $hscqual=$_POST["12qual"];
 $UGqual=$_POST["UGqual"];
 $PGqual=$_POST["PGqual"];
$Applydate=$_POST["Applydate"];
$Offers=$_POST["Offers"];
 $Standingarrears=$_POST["Standingarrears"];
$Historyarrears=$_POST["Historyofarrears"];
$Location=$_POST["Location"];
$Salary=$_POST["Salary"];
$desc=$_POST["desc"];

     $sql="INSERT INTO COMPANYUSERDATA VALUES
    ('$Comp_Id','$Comp_name',
    '$Role','$sslcqual',
    '$hscqual','$UGqual','$PGqual','$Applydate',
    '$Offers','$Standingarrears','$Historyarrears',
    '$Location','$desc','$Salary')";

   
    if($con->query($sql))

    {

        echo "successully updated";
    }
    else
    {
        echo "--".connect_error();
    }


}

?>



  