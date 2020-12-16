<?php
require "includes/common.php";
session_start();

$user_id = $_SESSION['user_id'];
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND status='Added to cart'";
mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Ice Box | Online Shopping Site for Men's Jewelry</title>
    
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="4;url=index.php" />
</head>
<body>
    <div class="container" id="content" style="margin-bottom:200px">
            <div class="col">
                <div class="text">
                      <h3>Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p>Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
       
</body>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo '<script type="text/javascript">$(document).ready(function(){
        $("#signup").modal("show");
    });</script>';
    echo '<script type="text/javascript">alert('. $z . ')</script>';
}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo '<script type="text/javascript">$(document).ready(function(){
        $("#login").modal("show");
    });</script>';
    echo '<script type="text/javascript">alert(' . $z . ')</script>';
}?>
</html>