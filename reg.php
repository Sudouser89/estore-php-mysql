<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
$servername = "localhost:8008";
$username = "root";
$password = "suhas";
$dbname = "estore";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//  Check connection and return an error description from the last connection error, if any
if($conn) {
      // username and password sent from form 
      
      $fname = mysqli_real_escape_string($conn,$_REQUEST['fname']);
      $lname = mysqli_real_escape_string($conn,$_REQUEST['lname']);
      $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_REQUEST['pwd']);
      $age = mysqli_real_escape_string($conn,$_REQUEST['age']); 
      
      $sql = "INSERT INTO reg VALUES('$fname','$lname','$email','$mypassword','$age')";
     // $result = mysqli_query($conn,$sql);
      $result = $conn->query($sql);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($result) {
         $_SESSION['fname'] = $fname;
      }else { 
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
  <div class="signupSection">
  <div class="info">
     <h2>Create your Account</h2>
    <i class="icon ion-ios-contact" aria-hidden="true"></i>
    <br>
    <a href="log.php">Login Page</a>
  </div>
  <form action="reg.php" method="POST" class="signupForm" name="signupform">
    <h2>Sign Up</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputField" id="firstname" name="fname" placeholder="First Name" pattern="^[A-Za-z]+$" title="Enter only Alphabets" value="" required/>
        <input type="text" class="inputField" id="lastname" name="lname" placeholder="Last Name" pattern="^[A-Za-z]+$" title="Enter only Alphabets" value="" required/>
      </li>
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Enter valid E-mail address" value="" required/>
      </li>
       <li> 
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="t1" name="pwd" placeholder=" New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  value=""  required/>


      </li>
      <li>
        <input type="number" class="inputFields" id="age" name="age" placeholder="Enter your Age" min="14" title="Enter valid E-mail address" value="" required/>
      </li>
       <fieldset><legend>Select Gender</legend>
         <input type="radio" id="gen" name="gender" value="male" required/> Male
         <input type="radio" id="gen" name="gender" value="female" required/> Female
         <input type="radio" id="gen" name="gender" value="other" required/> Other
       </fieldset>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Join" >
      </li>
    </ul>
  </form>
</div>
</body>
</html>
