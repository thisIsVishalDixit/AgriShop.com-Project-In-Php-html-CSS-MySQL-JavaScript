<?php

$username="root";
$password="";
$server="localhost";
$db="testing";

$con=mysqli_connect($server,$username,$password,$db);

if(isset($_POST['submit'])){

  $username=$_POST['name'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $phone=$_POST['phone'];

  $insertQuery ="INSERT INTO signup(username, password, email, city, phone) VALUES ('$username', '$password','$email', '$city', '$phone')";
  $res = mysqli_query($con, $insertQuery);
  if($res){
    
    echo "<script>alert('Data inserted');</script>";
  }else{
    echo "<script>alert('Data not inserted');</script>";
  }

}
?>     

<!DOCTYPE html>
<html>
<head>
<title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="css/signup.css">

        <!-- code for linking css file -->

        <!-- for responsive size min max -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


  <form from="myForm" action ="" method="POST">
    <img src="image/img1.png">

    <div class="login-box">

      <h1> Sign Up </h1>

      <div class="textbox">
        <input type="text" placeholder="Username" id="fname" name="name" value="" required>  
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" id="password" name="password" value="" maxlength="25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Email" id="email" name="email" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
      </div>

      <div class="textbox">
        <input type="text" placeholder="City" id="city" name="city" value="" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Phone" id="phone" name="phone" value="" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
      </div>

      <input class="btn" type="submit" name="submit" value="Sign Up"> <br> <br>

      <p style="text-align: center; color: rgb(222, 152, 152);"><a href="signin.html">Don't have an account?</a></p>

    </div>
    
  </form>

</body>
</html>
