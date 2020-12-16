<nav class="navbar" style = "border: solid white 2px" style = "height: 50px">
  <!-- /includes -->
  <a href="index.php" class="title" style="font-family: 'Delius Swash Caps'">The Ice Box</a>
  <ul class="">
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
      <div class="dropdown-menu" style="display:none;">
        <a href="products.php" class="dropdown-item">Watches</a>
        <a href="products.php" class="dropdown-item">Jewelry</a>
      </div>
    </li>
    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
    <?php
    if (isset($_SESSION['email'])) {
      echo '<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>';
    }
    ?>
  </ul>
</nav>
<?php
      if (isset($_SESSION['email'])) {
      ?>
        <ul class="nav">
          <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
          <li class="nav-item"><a class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
        </ul>
      <?php
      } else {
      ?>
        <ul class="nav">
          <li class="nav-item "><a href="signup.php" class="nav-link" data-toggle="modal"><i class="fa fa-user"></i> Sign In</a></li>
          <li class="nav-item "><a href="login.php" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
        </ul>
      <?php
      }
?>