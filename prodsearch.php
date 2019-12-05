<?php 
session_start();

if(!isset($_SESSION['email']))
{
	header('location:log.php');
} 
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>SEARCH PRODUCTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <style>
  
  
    body,html{
    margin: 0;
    padding: 0;
    padding-top: 30px;
    background-color: #007e94;
    background-image:url('https://www.transparenttextures.com/patterns/billie-holiday.png');
  background-repeat:no-repeat;
background-size:100% 100%;

    }
    a
    {
      cursor: pointer;
      font-size: 20px;
      color: limegreen;
      border: 0.5px solid;
      margin-left:30px;
    }
    .flex
    {
      margin-top: 120px;
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #f7fcf5;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: black;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar > .search_input{
    padding: 0 10px;
    width: 780px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .btn-succes{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 40%;
    color:rgba(20, 40, 40, 0.8);
    }
  </style>
  </head>
  <!-- Coded with love by Mutiullah Samim-->
  <a href="index.php" ><label><i class="fa fa-home"></i>HOME</label></a>
  <body>
    <div class="container">
  <form action="search.php" method="get">
      <div class="flex">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="SEARCH PRODUCTS HERE..." autocomplete="off" required >
          <button type="submit" class="btn btn-succes">
   <i class="fa fa-search" aria-hidden="true"></i>
</button>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
