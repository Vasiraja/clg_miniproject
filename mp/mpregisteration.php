<?php


session_start();

$read=mysqli_connect("localhost","root","","test");

if(!$read)
{
  die ("not connected".mysqli_connect_error());
}

 
 

 if(isset($_POST['submit']))
{

    
 

      $_SESSION['FirstName']=$UserName = $_POST['FirstName'];

      $_SESSION['Lastname']= $LastName =  $_POST['LastName'];
      $_SESSION['DateOfBirth']=$DateOfBirth = $_POST['DateOfBirth'];
      $_SESSION['RegisterNo']=$RegisterNo = $_POST['RegisterNo'];
      $_SESSION['Department']=$Department = $_POST['Department'];
      $_SESSION['Gender']=$Gender= $_POST['Gender'];
      $_SESSION['PhoneNumber']=$PhoneNumber= $_POST['PhoneNumber'];
      $_SESSION['EmailId']=$EmailId= $_POST['EmailId'];
      $Password= $_POST['Password'];
      $ConPassword= $_POST['ConPassword1'];
      //  print $_SESSION['firstname'];
  //  $_SESSION["ffirstName"]="giri";

       if($ConPassword===$Password && $ConPassword && $Password)   
{ 

   
$insert="INSERT INTO MP1 VALUES('$UserName','$LastName','$DateOfBirth','$RegisterNo','$Department','$Gender','$PhoneNumber','$EmailId','$Password','$ConPassword')";


if($read->query($insert))
{
    echo '<script>
         alert("Login Succesffuly");
      
    </script>';
    header("location:mpindex.php");
                                                                   
}
else
  {
  echo 'Error: ' . $insert . '<br>' . $read->error;
}
}
else
{
   echo '<script>alert("Login Error")</script>';
}
}

  

?>
<html lang="en" dir="ltr">

<head>
    <style>
    .body {
        background-color: #2223;
        border-top: 5px solid solid;
    }

    .t1 {


        background-color: gray;
        border-radius: 17px;
        padding: 40px;

    }

    td {
        padding: 5px;
        color: white;
    }

    input[type=submit]:default {
        border-radius: 3px;
        width: 100%;
        cursor: pointer;
        padding: 9px;
        border: 2px solid gray;
        border-radius: 5px;
    }

    input[type=text],
    input[type=password],
    input[type=email],
    input[type=date],
    #input {
        height: 50px;
        border-radius: 8px;

    }

    .submit {
        width: 100%;
    }


    input[type=text]:focus {
        color: white;
        background-color: gray;
    }

    .header {
        background-position: top;
        position: sticky;
        width: 100%;
        height: 5%;
        font-family: cursive;
        color: white;
        text-transform: uppercase;
    }

    .div1 {
        border-radius: 5px;
        padding: 5px;
        position: relative;
        left: 20%;

    }
    </style>
    <meta charset="utf-8">
    <title>studentloginpage</title>
</head>

<body class="body">

    <form class="form1" action=" " method="POST" autocomplete="off">

        <div class="div1">


            <table class="t1">

                <tr>
                    <td colspan="4">
                        <p style="width:300px;
  text-indent:350px;
  ">REGISTERATION</p>
                    </td>
                </tr>
                <tr>

                    <td>FirstName: </td>
                    <td> <input type="text" placeholder="Enter Your FirstName" name="FirstName" value="" size="50px">
                    </td>
                    <td>LastName: </td>
                    <td> <input type="text" placeholder="Enter Your LastName" name="LastName" value=""> </td>

                </tr>
                <tr>
                    <td>DateOfBirth: </td>
                    <td> <input type="date" placeholder="DateOfBirth" name="DateOfBirth" value=""> </td>
                    <td>RegisterNo </td>
                    <td> <input type="text" placeholder="RegisterNo" name="RegisterNo" value=""> </td>
                </tr>

                <tr>
                    <td>

                        <label for="Department">Department:</label>
                    </td>
                    <td>
                        <input list="Department" name="Department" placeholder=" Select Your Department" id="input">
                        <datalist id="Department">
                            <option value="EEE">
                            <option value="ECE">
                            <option value="MCA">
                            <option value="CEE">
                            <option value="MBA">
                            <option value="CSE">
                            <option value="IT">
                            <option value="E&I">
                            <option value="MECH">
                        </datalist>
                    </td>
                    <td> <label for="Gender">Gender</label></td>
                    <td>

                        <input type="radio" name="Gender" id="Male" value="Male" checked>
                        <label for="Male">Male</label><br><br>
                        <input type="radio" name="Gender" id="Female" value="Female">
                        <label for="Female">Female</label><br><br>

                        <input type="radio" name="Gender" id="Others" value="Others">
                        <label for="Others">Others</label>



                    </td>
                </tr>
                <td>PhoneNumber</td>
                <td>
                    <input type="text" name="PhoneNumber" value="" placeholder="+91">
                </td>
                <td> EmailId</td>
                <td><input type="email" name="EmailId" placeholder="Enter Your EmailId below example"><br>
                    <p>ex: abc@gmail.com</p>
                </td>
                </tr>


                <tr>
                    <td> Password</td>
                    <td><input type="password" name="Password" value="" placeholder="Enter your Password"> </td>
                    <td> ConfirmPassword</td>
                    <td><input type="password" name="ConPassword1" value="" placeholder="Enter Your Confirm Password">
                    </td>



                </tr>

                <tr>
                    <td colspan="4">
                        <center> <input type="submit" class="submit " name="submit" value="Register"> </center>
                    </td>
                </tr>




            </table>
            <br>
        </div>

    </form>


</body>

</html>