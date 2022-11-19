<?php
$con=mysqli_connect('localhost','root','','test');
if(!$con)
{
    die("Not connected".sqli_connect_error());
}
print "<p class='para' style='color:green'>Connected<p>"

 
?>
<html lang="en">
<head>

<style>  

    .para
    { 

        background-color:aqua;
         border:2px solid black;
        border-radius:4px;
        padding-right:90px;


    }
    .para:hover{
        width:20%;
        padding-right: 1300px;
        transition: padding-right 1.4s;


    }
    .preference::after
    {

              
             content:"\a";
             white-space:pre;
    }
    td
    {
        width:10%;
        border:2px solid blue;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <center> <h2>SKILLS AND PREFERENCE</h2> </center> 
          
      <form action="" method="POST">
      

      <table>
<tr>            <td  colspan="2" >
     <center> <label for="regis">RegisterNo:</label>  
      <input type="text" name="regis"></center>
            </td>
        </tr>
<tr>
<td>       
    <label for="name">Name</label>
    <input type="text" name="name">

</td>
<td>
<label for="department">Department </label>
<input type="text" name="department">


</td>


</tr>
<tr>
    <td>
        <label for="year">Passout</label>
        <input type="date" name="year">
    </td>
</tr>




      </table>
        <div class="Preference">
        <h4>Select your Job Preferences</h4>
<input type="checkbox" id="role1" value="software manager">Software Manager</input>
 <input type="checkbox" id="role2" value="web developer">Web Developer</input>
 <input type="checkbox" id="role3" value="project manager">Project Manager</input>
 <input type="checkbox" id="role4" value="systems analyst">System Analyst</input>
 <input type="checkbox" id="role5" value="information security">Information Security</input>
 <input type="checkbox" id="role6" value="network engineer">Network Engineer</input>
 <input type="checkbox" id="role7" value="data analysis">Data Analysis</input>
 <input type="checkbox" id="role8" value="system administrator">System Administrator</input>
 <input type="checkbox" id="role9" value="network administrator">Network Administrator</input>
 <input type="checkbox" id="role10" value="product manager">Product Manager</input>
 <input type="checkbox" id="role11" value="technician">Technician</input>
 </div>

<input type="submit" value="submit" name="submit">

      </form>

</body>
</html>



<?php
 $con = mysqli_connect("localhost", "root", "", "test");
  
$RegisterName=$_REQUEST["regis"];
if($RegisterName !== "")
{
    $query=mysqli_query($con,"SELECT Name,Department FROM education WHERE regis='$RegisterName'");
    $row= mysqli_fetch_array($query);
    $Name=$row["name"];
    $Department=$row["department"];

}
$result= array("$Name","$Department");
 
$myJSON= json_encode($result);
echo $myJSON;


?>