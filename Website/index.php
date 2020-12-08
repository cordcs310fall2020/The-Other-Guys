

<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>



<!DOCTYPE html>
<html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>


<head>
  <meta charset = "UTF-8">
  <link rel="stylesheet" href="css/index.css" >
  <!-- <script src = "js/store.js" async></script> -->
  <style type ="text/css">
  @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  </style>

  <title>Welcome to WilsonUp</title>
  
  
  <h1>
    The Ice Box 
    
  </h1>

  
  

       

  <nav class="topnav">
    <ul>
      <a class="active" href="index.html"><li>Home</li></a>
      <a href="cart.html"><li>Cart</li></a>
      <a href = "signup.php"><li>Sign Up</li></a>
      <a href = "contact.php"><li>Contact</li></a>
      <a href = "admin.html"><li>Admin Panel</li></a>
    </ul>


  </nav>
 
  
  <h2>

  </h2>
  
  <h1>Jewelry</h1>
  
 
  <nav class="product-filter"> -->

    
  
    <div class="sort">
  
      <div class="collection-sort">
        <label>Filter by:</label>
        <select>
          <option value="/">All Jewelry</option>
          <option value = "/">Chains</option>
          <option value = "/">Bracelets</option>
          <option value = "/">Rings</option>
        </select>
      </div>
  
      <div class="collection-sort">
        <label>Sort by:</label>
        <select>
          <option value="/">Featured</option>
          <option value="/">Least Expensive</option>
          <option value="/">Most Expensive</option>


        </select>
      </div>
  
    </div>
  
  </nav>

</head>

<body>
<h3>
  <section class="products">
  <ul>
    <script src = "js/account.js"></script>
  </ul>
    <div class="product-card">
    <span></span>
      <div class="product-image">
        <img src="img/cross1.jpg">
      </div>
      <div class="product-info">
        <h5>Gold Engraved Cross Chain</h5>
        <h6>$99.99</h6>
        <button class="button">Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
    <span></span>
      <div class="product-image">
        <img src="img/cubanlinkchain.jpg">
      </div>
      <div class="product-info">
        <h5>Gold Cuban Link Chain</h5>
        <h6>$99.99</h6>
        
        <button class="button">Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
    <span></span>
      <div class="product-image">
        <img src="img/goldchain1.jpg">
      </div>
      <div class="product-info">
        <h5>Cross Chain</h5>
        <h6>$99.99</h6>
        <button class="button">Add to Cart</button>
      </div>
    </div>
    
  
  
  </section>
  </h3>
  <div class = "select">

  </div>


 
   
 
 
</body>


 
   
 
 


</html>
<script type = "text/javascript">
  var noti = document.querySelector('h3');
  var select = documet.querySelector('.select');
  var button = (document.getElementsByTagName('button'));
  for(but of button)
  {
    but.addEventListener('click', (e)=>{
      var add = Number(noti.getAttribute('data-count')||0);
      noti.setAttribute('data-count', add + 1);
      noti.classList.add('zero');
    }
    )
  }


</script>
