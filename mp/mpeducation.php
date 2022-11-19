<?php
 session_start();
$con=mysqli_connect('localhost','root','','test');

if(!$con)
{
  die ("not connected".mysqli_connect_error());
}
echo 'Successfull';

if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Register=$_POST['regis'];
    $_SESSION['register']=$Register;
    $Department=$_POST['Department'];
    $CurrentCollege=$_POST['curcolg'];

    $SchoolName =$_POST['school'];
    $Percentage=$_POST['per10'];
    $SslcMark=$_POST['mark10'];
    $SslcYear=$_POST['year'];

    $SchoolName12=$_POST['school12'];
    $HscMark=$_POST['mark12'];
     $Percentage12=$_POST['per12'];
    $Groups=$_POST['Groups'];
    $Yearhss=$_POST['Yearhss'];
    
    $CollegeName=$_POST['colg'];
    $University=$_POST['Univ'];
    $ColCourse=$_POST['course'];
    $PercentageUG=$_POST['perUG'];
    $Consolidate=$_POST['colper'];

    $CollegeNamePG=$_POST['curcol'];
    $CoursePG=$_POST['coursePG'];
    $University=$_POST['curUniv'];
    $Resume=$_POST['resume'];
    $Arrear=$_POST['arrear'];



    


$query1="INSERT INTO education VALUES('$Name','$Register','$Department',
'$CurrentCollege','$SchoolName','$Percentage',
'$SslcMark','$SslcYear',
'$SchoolName12','$HscMark','$Percentage12',
'$Groups','$Yearhss',
'$CollegeName','$University','$ColCourse',
'$PercentageUG','$Consolidate',
'$CollegeNamePG','$CoursePG',
'$University','$Resume','$Arrear')";
  
if($con->query($query1))
{
           echo "<script>"; 
           echo"alert('Marks are Succesffuly Updated')";
           echo "</script>";
            
            echo "<script type='text/javascript'>window.location.href='profile.php';</script>";
              
    
            
}}

 
 
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
    <title>Details</title>
    <style>


.form1
{
  height:400px;
}

table
{
line-height: 50px;
}
input#tran{
  width: 130px;
  transition: width 0.4s;
}
input#tran:focus
{
   width: 200px;
}
.color
{

  width:4000px;
  height: 3000px;
  background-position: right;
  bottom: 120px;
  background-color: red;
}
div
{
  position: static;
  top: 130px;
  line-height: 1em;
}
.alter
{
color: hsl(25 81% 95%);
font: 600 1.4rem system-ui;
padding: 4px 7px;
border-radius: 4px;
letter-spacing: 0.5px;
background-color:rgba(253, 165, 2, 0.993);
width:300px; 
position: sticky;
top: 40px;
}
input[type="file"]
{

  background-color: aliceblue;
}



    </style>
  </head>
  <body>

<h2 class="alter"><center>Educational Qualifications</center></h2>
<div>
     <br><br>     <form action="" method="post"> 
  <label for="Name">Name</label>
 <input type="text" name="Name" value="" required>
 <label for="regis">RegisterNo</label>
 <input type="text" name="regis" value="" required> <br><br>
 <hr><br><br>
 <label for="Department">Department</label>
 <input type="text" name="Department" value="" required>
<label for="curcolg">College: </label>
<input type="text" name="curcolg" value="" required> <br><br>

  <hr>

</div>

 



      <table>
 




  <td><b><h3 class="alter"><center>SSLC Details</center></h3></b>
    <table class="sslc">

  <tr>
    <td>
    <label for="school">SchoolName</label>
    <input type="text" name="school" value="" id="tran"></td>
    <td> <label for="per10">Percentage</label>
      <input type="text" name="per10" value=""></td></tr><tr>
  <td><label for="mark10">SSLC Marksheet: </label>
  <input type="file" name="mark10" value=""> </td>
<td>

<label for="passyear" >PassedOut </label>
<input type="date" name="year"></td>
</tr>





</td>

</tr>
</table>



<hr>




     <h3 class="alter"><center><b>HSS Details</center></b></h3><table>
       <label for="school">SchoolName</label>
      <input type="text" name="school12" value=""  id="tran"></td><td>
      <label for="mark12">HSS Marksheet: </label>
      <input type="file" name="mark12" value=""></td></tr><tr><td>
      <label for="per12">Percentage</label>
      <input type="text" name="per12" value=""></td>



    <td> <label for="group">Enter your Group Name based on HSC </label>
    <input list="groups" name="Groups" id="deptgroups">
    <datalist id="groups">
    <option value="Biology Chemistry Physics Maths">
    <option value="Computer Chemistry Physics Maths">
    <option value="Computer Biology Physics Chemistry">
    <option value="Physics Chemistry Maths">
    
</datalist>
</td></tr>
    
    


    <tr>

    <td>

<label for="passyear" >PassedOut</label>
<input type="date" name="Yearhss">
</td>
    
    </tr>
    
    </table>
<hr>



<h3 class="alter"><center><b>UG Qualification</center></b></h3>
<table>
<tr><td>
  <label for="colg">CollegeName</label>
<input type="text" name="colg" id="tran" value="">

</td>
<td>
  <label for="Univ">University</label>
  <input type="text" name="Univ" value="" id="tran">


</tr>

<tr>
  <td>
        <label for="course">MajorName</label>
        <input list="course" name="course" value="" id="courses">
        <datalist class="select" id="course">
          <option value="Bsc Computer Science"></option>
          <option value="Bsc Physics"></option>
          <option value="Bsc Maths"></option>
          <option value="Bsc Chemistry"></option>
          <option value="Bsc IT"></option>
          <option value="BCA"></option>
          <option value="BBA"></option>
          <option value="Bsc Botany"></option>
          <option value="Bsc Zoology"></option>

        </datalist>


  </td>
</td>
<td> <label for="markcol">Percentage</label>
<input type="text" name="perUG" value=""> </td>

</tr><tr>


  <td>
    <label for="colper">UG Consolidate Marksheet</label>
  <input type="file" name="colper" value="">
  </td>

</tr>



</table>

<hr>

  <h3 class="alter"> <center>PG Course</center></h3> <table>
  <tr>
    <td>
<label for="curcol">CollegeName</label>
<input type="text" name="curcol" value="" id="tran">

    </td>
<td>

<label for="coursePG">Major</label>
 <input list="course1" name="coursePG" id="course">
 <datalist id="course1">
<option value="Msc Computer Science">
<option value="Msc Physics">
<option value="Msc Maths">
<option value="Msc Chemistry">
<option value="Msc IT">
<option value="MCA">
<option value="MBA">
<option value="Msc Botany">
<option value="Msc Zoology">



</datalist>
</td>


    <td>
    <label for="curUniv">University</label>
    <input type="text" name="curUniv" value="" id="tran">

    </td>
  </tr>

  <tr>
  <td>
<label for="resume">Resume</label>
<input type="file" name="resume" value="Resume"></td>
</tr>
<tr><td>
<label for="arrear">Standing Arrears</label>
<input type="number" name="arrear" value="">
</td></tr>










</table>





      <table><tr><td>
        <input type="submit" name="submit" value="submit"></td><td><input type="reset" name="reset" value="reset"></td>
      </tr></table>
<hr>
      </table>
        </form>


  </body>
 
</html>
