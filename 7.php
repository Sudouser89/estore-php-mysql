<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
  header('location:log.php');
} ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-STORE</title>

    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="top: -23px;">
        <a class="navbar-brand" href="index.php?#home" style="position: relative;top: 8px;"><img src="images/origami.svg" title="Top-logo" alt="Top-logo">ELECTRONICA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="top: 10px;position: relative;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="prodsearch.php">Search</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php?#services">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php?#contact">Contact</a>
            </li>
          </ul>
        </div>
    </nav>

    <div id="page" style="background-image: url(images/bg.png);">
    <div class="container">
           <div class="row">

        <div class="col-lg-12">
          <br><br><br><br><br>
          <div class="col-lg-4" style="margin-left: 400px;">
          <img class="card-img-top w3-animate-zoom" src="images/mi-redmi-8a.png" alt="">
           </div>
          <div class="card mt-4">
            <div class="card-body">
              <h3 class="card-title">Redmi 8a</h3>
              <h4>₹6999</h4>
              <pre class="card-text"><ul><li>2 GB RAM | 32 GB ROM | Expandable Upto 512 GB</li>
<li>15.8 cm (6.22 inch) HD+ Display</li>
<li>12MP Rear Camera | 8MP Front Camera</li>
<li>5000 mAh Battery</li>
<li>Qualcomm Snapdragon 439 Processor</li></ul></pre>
               <form method="get">
              <h5 class="card-title">Qty:</h5>
              <?php
              echo('<input type="number" name="num" min="1"value= '.$_GET['num'].'>');
              ?>
              <input type="submit" value='add'>
            </form>
            <br>
            <?php
            $a=$_GET['num'];
            echo ('<a href="http://localhost:8080/estore1/cart.php?id=7&&num=
              '.$a.'" class="btn btn-danger">Book Now</a>
              ');
            ?>
            </div>
          </div>
          
          
        
         
          <!--rating-->
      <div class="card card-outline-secondary my-4">
            <div class="card-header ">
            Total Rating:
            </div>
            <div class="card-body">
              <p><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
              5.0 stars</p>
            </div>
          </div>
       
    
        <!--comments-->
        <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Comments:
            </div>
            <div class="card-body">
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
              <p>Best Product, Highly Recommend to everyone.</p>
              <small class="text-muted">Posted by Sachin on 9/11/19</small>
              <hr>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
              <p>Great Camera, worth buying it.</p>
              <small class="text-muted">Posted by Suhas on 9/11/19</small>
              <hr>
            </div>
          </div>
      </div>

    </div>
  </div>
</div>

<!--comm-->
<div class="commie" style="background-image: url(images/light-grey-terrazzo.png); margin-top: -95px;">
<div class="container" >
  <div class="shadow p-4 mb-4 bg-white" style="margin-top: 96px; margin-bottom: 20px; text-align: center;">
      <h3><strong>Comments</strong></h3>
    </div>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
</div>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ELECTRONICA 2019</p>
      </div>
    </footer>

  </body>

</html>
