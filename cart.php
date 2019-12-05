<?php 
session_start();

if(!isset($_SESSION['email']))
{
	header('location:log.php');
} 
?>
<?php
header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
error_reporting(0);
$host="localhost:8008";
$dbuser="root";
$pass="suhas";
$dbname="estore";
$conn = mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno()){
  die("connection Failed!" . mysqli_connect_errno());
}
if($conn) {
      
      $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $address = mysqli_real_escape_string($conn,$_POST['address']);
      $city = mysqli_real_escape_string($conn,$_POST['city']);
      $state = mysqli_real_escape_string($conn,$_POST['state']);
      $zip = mysqli_real_escape_string($conn,$_POST['zip']);
      $cardname = mysqli_real_escape_string($conn,$_POST['cardname']);
      $cardnumber = mysqli_real_escape_string($conn,$_POST['cardnumber']);
      $expmonth = mysqli_real_escape_string($conn,$_POST['expmonth']);
      $expyear = mysqli_real_escape_string($conn,$_POST['expyear']);
      $cvv = (int)mysqli_real_escape_string($conn,$_POST['cvv']);
      if(isset($_POST['cvv'])) {
      $result = mysqli_query($conn,"INSERT INTO cust_data VALUES('$firstname','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')");
      //unset($_POST['cvv']);
      //$url=strtok($_SERVER["REQUEST_URI"],'?');
      //echo "<script type=\"text/javascript\">window.location=".$url.";</script>";
      $z=$_GET['id'];
   $result2=mysqli_query($conn,"SELECT * FROM search_cart WHERE id='$z'");
   $row=mysqli_fetch_assoc($result2);
      if(isset($_POST['submit'])&&$_GET['num']>0) {
         $_SESSION['firstname'] = $firstname;
         echo "<script type=\"text/javascript\">alert(\"PRODUCT BOOKED SUCCESSFULLY!\\n Thank You!\");</script>";
          $msg = "Check more Products on:\n http://localhost:8080/index.php";
          $msg = wordwrap($msg,70);
          mail($email,"Thank for Booking from ELECTRONICA",$msg);
         unset($_POST['cvv']);
         echo "<script>";
      }else { 
         $error = "Try Again!";
         echo($error);
       }
      }
   }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<style type="text/css">
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

.select-css {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em;
    width: 100%;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
    display: none;
}
.select-css:hover {
    border-color: #888;
}
.select-css:focus {
    border-color: #aaa;
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222; 
    outline: none;
}
.select-css option {
    font-weight:normal;
}

.select-css year {
  width:20px;
}


body {
  padding: 3rem;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;  
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
body
{
  padding-top: 30px;
}

a {
      cursor: pointer;
      font-size: 20px;
      color: limegreen;
      border: 1 px solid;
      margin-left:30px;
    }

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

  
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<a href="index.php" ><label><i class="fa fa-home"></i>HOME</label></a>
<h2 align="center">Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="cart.php" id="myForm" method="post">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" pattern="^[A-Za-z]+$" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" pattern="^[A-Za-z]+$" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" pattern="^[A-Za-z]+$" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" pattern="[0-9]{6}" title="Enter 6 digits for zip" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" pattern="^[A-Za-z]+$" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9]{16}" required>
            <label for="expmonth">Exp Month</label>
            <!--<input type="text" id="expmonth" name="expmonth" placeholder="November" pattern="^[A-Za-z]+$" required>-->
      
            <select class="select-css" required>
               <option value="January">January</option>
               <option value="February">February</option>
               <option value="March">March</option>
               <option value="April">April</option>
               <option value="May">May</option>
               <option value="June">June</option>
               <option value="July">July</option>
               <option value="August">August</option>
               <option value="September">September</option>
               <option value="October">October</option>
               <option value="November">November</option>
               <option value="December">December</option>
            </select>
        
            <div class="row">
              <div class="col-50">
                <br/>
                <label for="expyear">Exp Year</label>
                <input type="number" id="expyear" name="expyear" class="select-css year" placeholder="2019" pattern="[0-9]{4}" min="2019" max="2050"  title="Year must be between 2019 to 2050"required>
              </div>
              <div class="col-50">
                <br/>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" pattern="[0-9]{3}" required>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" name="submit" class='btn' onsubmit="submit()" value="PLACE ORDER">
      </form>
    </div>
  </div>
   <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i><?php
          $z=$_GET['id'];
          $result2=mysqli_query($conn,"SELECT * FROM search_cart WHERE id='$z'");
          $row=mysqli_fetch_assoc($result2);
         /* if($_GET['id']=='')
          {
              echo("<b>0</b>");        
          }
          else
          {
          echo("<b>1</b>");
          }*/
          ?>
        </span>
      </h4>
      <p><span><?php 
      if($_GET['id']=='')
      {
        echo("No products in cart");
      }
      else{ 
        echo($row['model']);
      }

          ?></span>
          <?php 
          $qty=$_GET['num'];
          $q = $row['price'] * $qty;
          ?>
          <span class="price">₹<?php echo((int)$row['price']);?></span></p>
          <p>Qty<span class="price"><?php echo($qty);?></span></p>  
      <hr>
      <p>Total <span class="price" style="color:black"><b>₹<?php echo($q);?></b></span></p>
    </div>
  </div>
</div>

</div>
</body>
</html>


