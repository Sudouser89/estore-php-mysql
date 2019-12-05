<?php 
session_start();

if(!isset($_SESSION['email']))
{
	header('location:log.php');
} 
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['email']);
	header('location:log.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-Store</title>
  <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Custom styles for this template -->
    <link href="css/homepage.css" rel="stylesheet">
</head>
<body>
<!--nav-->
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#home" style="position: relative;top: 8px;"><img src="images/origami.svg" title="Top-logo" alt="Top-logo">ELECTRONICA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="top: 10px;position: relative;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#products">Home
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
              <a class="nav-link" href="#services">Service</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#comm">Feedback</a>
            </li>
            <li class="nav-item">
 			<?php if(isset($_SESSION['email'])):?>
 				<a class="nav-link" href="index.php?logout='1'">Logout</a>
 			<?php endif ?>
            </li>
          </ul>
        </div>
    </nav>
<!--products-->

<div id="products" style="padding-bottom: 20px;">
<div class="container products">
   <div class="shadow p-4 mb-4 bg-white" style="margin-top: 96px; margin-bottom: 20px; text-align: center;">

      <h3><strong>OUR PRODUCTS</strong></h3>
    </div>
<div class="row">
            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="1.php"><img class="card-img-top w3-animate-zoom" src="images/product-1.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="1.php">Google Pixel - Black</a>
                  </h4>
                  <label><b>Model:</b><h6>GOOGLE</h6></label>
                  <label><b>Price:</b><h5>₹40000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="2.php"><img class="card-img-top w3-animate-zoom" src="images/product-2.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="2.php">Samsung S7</a>
                  </h4>
                  <label><b>Model:</b> <h6>SAMSUNG</h6></label>
                  <label><b>Price:</b> <h5>₹16000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="3.php"><img class="card-img-top w3-animate-zoom" src="images/product-3.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="3.php">HTC 10 - Black</a>
                  </h4>
                  <label><b>Model:</b> <h6>HTC</h6></label>
                  <label><b>Price:</b> <h5>₹8000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="4.php"><img class="card-img-top w3-animate-zoom" src="images/product-4.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="4.php">HTC 10 - White</a>
                  </h4>
                  <label><b>Model:</b> <h6>HTC</h6></label>
                  <label><b>Price:</b> <h5>₹8000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="5.php"><img class="card-img-top w3-animate-zoom" src="images/product-5.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="5.php">HTC Desire 626s</a>
                  </h4>
                  <label><b>Model:</b> <h6>HTC</h6></label>
                  <label><b>Price:</b> <h5>₹24000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="6.php"><img class="card-img-top w3-animate-zoom" src="images/product-6.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="6.php">Iphone 6</a>
                  </h4>
                  <label><b>Model:</b> <h6>APPLE</h6></label>
                  <label><b>Price:</b> <h5>₹17000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="7.php"><img class="card-img-top w3-animate-zoom" src="images/mi-redmi-8a.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="7.php">Redmi 8a</a>
                  </h4>
                  <label><b>Model:</b> <h6>REDMI</h6></label>
                  <label><b>Price:</b> <h5>₹6999</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="8.php"><img class="card-img-top w3-animate-zoom" src="images/samsung-galaxy-a20s.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="8.php">Samsung Galaxy A20s</a>
                  </h4>
                  <label><b>Model:</b> <h6>SAMSUNG</h6></label>
                  <label><b>Price:</b> <h5>₹12000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="9.php"><img class="card-img-top w3-animate-zoom" src="images/mi-redmi-note-7-pro.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="9.php">Redmi Note 7 Pro</a>
                  </h4>
                  <label><b>Model:</b> <h6>REDMI</h6></label>
                  <label><b>Price:</b> <h5>₹11999</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="10.php"><img class="card-img-top w3-animate-zoom" src="images/mi-a3.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="10.php">Mi A3</a>
                  </h4>
                  <label><b>Model:</b> <h6>REDMI</h6></label>
                  <label><b>Price:</b> <h5>₹12990</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="11.php"><img class="card-img-top w3-animate-zoom" src="images/asus-zenfone-max-m2.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="11.php">  
                    Asus ZenFone Max M2</a>
                  </h4>
                  <label><b>Model:</b> <h6>ASUS</h6></label>
                  <label><b>Price:</b> <h5>₹9499</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="12.php"><img class="card-img-top w3-animate-zoom" src="images/mi-redmi-note-7s.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="12.php">Redmi Note 7S</a>
                  </h4>
                  <label><b>Model:</b> <h6>REDMI</h6></label>
                  <label><b>Price:</b> <h5>₹10999</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="13.php"><img class="card-img-top w3-animate-zoom" src="images/samsung-galaxy-a70s.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="13.php">Samsung Galaxy A70s</a>
                  </h4>
                  <label><b>Model:</b> <h6>SAMSUNG</h6></label>
                  <label><b>Price:</b> <h5>₹28999</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="14.php"><img class="card-img-top w3-animate-zoom" src="images/samsung-galaxy-m30.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="14.php">Samsung Galaxy M30</a>
                  </h4>
                  <label><b>Model:</b> <h6>SAMSUNG</h6></label>
                  <label><b>Price:</b> <h5>₹11490</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="15.php"><img class="card-img-top w3-animate-zoom" src="images/samsung-galaxy-a50s.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="15.php">Samsung Galaxy A50s</a>
                  </h4>
                  <label><b>Model:</b> <h6>SAMSUNG</h6></label>
                  <label><b>Price:</b> <h5>₹20999</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card h-10">
                <a href="16.php"><img class="card-img-top w3-animate-zoom" src="images/product-7.png" alt=""></a>
                  <h4 class="card-title" align="center">
                    <a href="16.php">Iphone 7</a>
                  </h4>
                  <label><b>Model:</b> <h6>APPLE</h6></label>
                  <label><b>Price:</b> <h5>₹30000</h5></label>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>                             
</div>
</div>
<br><br><br>

<!--service-->
<div id="services" style="margin-top: -16px">
      <div class="container services">
        <div class="shadow p-4 mb-4 bg-white" style="margin-top: 8px; text-align: center;">
      <h3><strong>Services</strong></h3>
    </div>
    
        <br>
        <br>
        <div class="row">
                      <div class="col-md-12">
                      <ul class="cbp-ig-grid">
                <li>
                  <a href="https://www.privacypolicies.com/privacy/view/28caccbbb5b83c22d4513121b33b0cae">
                    <span class="fas fa-stack fa-7x fa-headset"></span>
                    <h3 class="cbp-ig-title">24/7 Tech Support</h3>
                    <span class="cbp-ig-category"><p>Our Dedicated staff is available 24/7 and are ready to help you as customer satisfaction is our main goal.</p></span>
                  </a>
                  </li>
                <li>
                  <a href="https://www.privacypolicies.com/privacy/view/28caccbbb5b83c22d4513121b33b0cae">
                    <i class="fas fa-stack fa-7x fas fa-truck-moving"></i>
                    <h3 class="cbp-ig-title">Fast Delivery</h3>
                    <span class="cbp-ig-category"><p>Our Dedicated Staff ensures timely delivery of the product at your doorstep within 2-3 business days.</p></span>
                  </a>
                </li>
                <li>
                  <a href="https://www.privacypolicies.com/privacy/view/28caccbbb5b83c22d4513121b33b0cae">
                    <i class="fas fa-stack fa-7x fas fa-rupee-sign"></i>
                    <h3 class="cbp-ig-title">Easy Return</h3>
                    <span class="cbp-ig-category"><p>All products sold from our store will be applicable for 30 days return period.</p></span>
                  </a>
                </li>
              </ul> 
            </div>
            </div>
                </div>
              </div>

<!--contact-->
<div id="contact" style="padding-top: 2px;padding-bottom: 2px;  background-image: url('images/email-pattern.png');">
  <div class="container Contact">
      <div class="shadow p-4 mb-4 bg-white" style="margin-top: 48px; text-align: center;">
      <h3><strong>Address & Details</strong></h3>
    </div>
  
  <div class="row" style="margin-bottom: 55px;padding-top: 45px;">
    <div class="col-lg-6">
       <div style="width: 100%; height: 100%" ><iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=11.676282782932278,92.74001988509555&amp;q=Marine%20Hill%2C%20Port%20Blair%2C%20Andaman%20and%20Nicobar%20Islands+(Blue%20Omega)&amp;ie=UTF8&amp;t=k&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
      </div>
                 
                <div class="col-lg-6">
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <img src="images/img.png" alt="Pavan Kumar MP" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                           <span class="name">Pavan Kumar MP</span><br/>
                            <span class="visible-xs"> <span class="fas fa-phone text-muted"><a href="tel:+918746064342">+918746064342</a></span><br/></span>
                            <span class="visible-xs"> <span class="fas fa-comments text-muted"><a href="mailto:pavankumarmp777@gmail.com">pavankumarmp777@gmail.com</a></span><br/></span>
                            </div>
                        </div>
                    </li>

                      <li class="list-group-item">
                      <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <img src="images/img.png" alt="" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Sachin K R</span><br/>
                            <span class="visible-xs"> <span class="fas fa-phone text-muted"><a href="tel:+918105818038">+918105818038</a></span><br/></span>
                            <span class="visible-xs"> <span class="fas fa-comments text-muted"><a href="mailto:sachinrameshkrs@gmail.com">sachinrameshkrs@gmail.com</a></span><br/></span>
                            </div>
                        </div>
                    </li>
                    

                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <img src="images/img.png" alt="Suhas Prabhu" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Suhas Prabhu</span><br/>
                            <span class="visible-xs"> <span class="fas fa-phone text-muted"><a href="tel:+918073444064">+918073444064</a></span><br/></span>
                            <span class="visible-xs"> <span class="fas fa-comments text-muted"><a href="mailto:suhasprabhu2012@gmail.com">suhasprabhu2012@gmail.com</a></span><br/></span>
                            </div>
                        </div>
                    </li>
                    </ul>
                    </div>
                    </div>
                  </div>
                  </div>

<!--comments-->
<div class="container comments">
   <div class="shadow p-4 mb-4 bg-white" style="margin-top: 96px; margin-bottom: 20px; text-align: center;">

      <h3><strong>Feedback</strong></h3>
    </div>
<div id=comm>
<div id="disqus_thread"></div>
<script id="dsq-count-scr" src="//http-localhost-8080-estore-index-php.disqus.com/count.js" async></script>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://localhost:8080/estore/index.php';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = comm; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-localhost-8080-estore-index-php.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</div>

<div id="chat">
  <script id="cid0020000235050744001" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 270px;height: 300px;">{"handle":"electronica99","arch":"js","styles":{"a":"0084ef","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084ef","l":"0084ef","m":"0084ef","n":"FFFFFF","p":"10","q":"0084ef","r":100,"t":0,"pos":"br","cv":1,"cvbg":"330000","cvw":270,"cvh":46,"surl":0,"cnrs":"0.35","ticker":1,"fwtickm":1}}</script>
</div>

<!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-bottom: -30px;">
        <p class="m-0 text-center text-white">Copyright &copy; ELECTRONICA 2019</p>
    </footer>

</body>
</html>
