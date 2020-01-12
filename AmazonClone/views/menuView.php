
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="views/login.php" style="color:white">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="views/deals.php" style="color:white">Today's Deal's<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="views/buyAgain.php" style="color:white">Buy Again</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">MENU</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menu">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">SHOP BY CATEGORY</a>
            <a class="dropdown-item" href="views/clothing.php">Clothing Accesories</a>
            <a class="dropdown-item" href="views/electronics.php">Electronic Gadgets</a>
            <a class="dropdown-item" href="views/fashion.php">Fashion</a>
            <a class="dropdown-item" href="views/homeapplicances.php">Home Appliciances</a>
            <a class="dropdown-item" href="views/applicances.php">amazon Pantry</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">HELP & SETTINGS</a>
            <a class="dropdown-item" href="views/account.php">Your Account</a>
            <a class="dropdown-item" href="views/logout.php">Sign Out</a>
          </div>
        </li>
      
    </ul>
      <a class="nav-link" href="views/orders.php" style="color:white">Orders</a>
      <a class="nav-link" href="views/cart.php" style="color:white">CART</a> 
  </div>
</nav>

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="views/clothing.php"><img src="images/img1.jpg" class="d-block w-100" alt="product img"></a>
    </div>
    <div class="carousel-item">
      <a href="views/electronics.php">/<img src="images/img2.jpg" class="d-block w-100" alt="product img"></a>
    </div>
    <div class="carousel-item">
     <a href="views/electronics.php"> <img src="images/img3.jpg" class="d-block w-100" alt="product img"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<marquee width="100%" direction="right" id="text" >
<em><strong>Sale 35% Off on Electronic Applicances T&C Apply</strong></em>
</marquee>
<br>
<br>
<div class="container">
<div class="row"> 
    <div class="card col-md-3 col-sm-3" style="width: 18rem; margin:auto">
    <img src="images/img4.jpg" class="card-img-top" style="height:20vh">
    <div class="card-body">
        <h5 class="card-title">Laptop</h5>
        <p class="card-text">MacBook Pro (16-inch, 16GB RAM, 512GB Storage) - Silver</p>
        <a href="scripts/specifications.php" class="btn btn-primary" id="laptop" style="background-color:#2d2c3b">Specifications</a>
    </div>
    </div>
    <div class="card col-md-3 col-sm-3" style="width: 18rem; margin:auto">
    <img src="images/img5.jpg" class="card-img-top" style="height:20vh">
    <div class="card-body">
        <h5 class="card-title">Cannon 6d Mark</h5>
        <p class="card-text">Captures the beauty Smiles Price: $320</p>
        <a href="scripts/specifications.php" class="btn btn-primary" id="laptop" style="background-color:#2d2c3b">Specifications</a>
    </div>
    </div>
    <div class="card col-md-3 col-sm-3" style="width: 18rem; margin:auto">
    <img src="images/img6.jpg" class="card-img-top" style="height:20vh">
    <div class="card-body">
        <h5 class="card-title">Samsung Curved Tv</h5>
        <p class="card-text">Best Samsung Curved Tv Price: $529</p>
        <a href="scripts/specifications.php" class="btn btn-primary" id="laptop" style="background-color:#2d2c3b">Specifications</a>
    </div>
    </div>
    <div class="card col-md-3 col-sm-3" style="width: 18rem; margin:auto">
    <img src="images/img7.jpg" class="card-img-top" style="height:20vh">
    <div class="card-body">
        <h5 class="card-title">Google nest</h5>
        <p class="card-text">Nest Learning Thermostat Price: $450</p>
        <a href="scripts/specifications.php" class="btn btn-primary" id="laptop" style="background-color:#2d2c3b">Specifications</a>
    </div>
    </div>
</div>
</div>
<br>
<section class="container-fluid mysection">
    
    <a href="views/clothing.php"> <img src="images/img8.jpg" class="card-img-top mycardimg1" alt="product image"></a>
    
</section>
<!-- <div class="container">
  <section class="container-fluid footer">
    <h5>BhanuChandarK PGDAC CDAC ACTS PUNE</h5>
    <h6>&copy Copyright 2019</h6>
</section> 
</div> -->
<footer>
   <div class="container">
    <center>
      <p>Copyright &copy; amazon.in Store All Rights Reserved | Contact Us: +91 90000 00000 </p>
    </center>
   </div>
</footer>   
