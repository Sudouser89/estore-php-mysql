<?php 
session_start();

if(!isset($_SESSION['email']))
{
	header('location:log.php');
} 
?>
<?php
$host="localhost:8008";
$dbuser="root";
$pass="suhas";
$dbname="estore";
$conn = mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno()){
	die("connection Failed!" . mysqli_connect_errno());
}
?>
<html>
<head>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
  body
  {
    background-color: #007e94;
    background-image:url('https://www.transparenttextures.com/patterns/billie-holiday.png');
  }
  .ass
  {
    border: 1px solid green;
    box-shadow: 2px 2px grey;
  }

#phones {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 320px;
}
 .a {
      cursor: pointer;
      font-size: 20px;
      color: limegreen;
      border: 0.5px solid;
      margin-left:30px;
    }
#phones td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#phones tr:nth-child(even){background-color: #f2f2f2;}

#phones tr:hover {background-color: #ddd;}

#phones th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgba(20, 40, 40, 0.8);
  color: white;
}
#s{
color: limegreen;
}
</style>
</head>
<a href="index.php" id="s"><h2><i class="fa fa-home "></i>HOME</h2></a>
<body>
<?php
if(isset($_GET['search']))
{
	$flag=0;
	$search = $_GET['search'];
	$result=mysqli_query($conn,"select * from search_cart");
echo "<table id='phones'>";
echo "<tr>";
echo "<th>MODEL</th><th>COMPANY</th><th>PRICE</th></tr>";
if ($result->num_rows > 0)
{
// output data of each row and fetches a result row as an associative array
while($row = $result->fetch_assoc( ))
{
$s1 = strtolower($search);
$bn = strtolower($row['model']);
$au =strtolower($row['company']);
$pn = strtolower($row['price']);
if((strpos($bn,$s1)!== false) || (strpos($au,$s1)!== false)||(strpos($pn,$s1)!== false))
{
$url="http://localhost:8080/estore/cart.php?id=".$row['id']."";
echo "<tr>";
//echo "<td>".$row['id']."</td>";
echo "<td><a href='".$row['id'].".php'>".$row['model']."</a></td>";
echo "<td>".$row['company']."</td>";
echo "<td>".$row['price']."</td>";
//echo "<td><a href=".$url." class='ass'>Go to cart</a></td></tr>";
$flag=1;
}
}
if($flag!=1){
	echo "<script>
alert('NO RESULTS!!!');
window.location.href='prodsearch.php';
</script>";
	
}

echo "</table>";
}
}
?>
</body>
</html>