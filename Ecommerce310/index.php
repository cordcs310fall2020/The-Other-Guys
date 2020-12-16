

<?php session_start();
?>

<?php require 'includes/header.php' ?>
<style>
    body {
        margin-bottom: 200px;
    }
</style>
    
    <?php
include 'includes/check-if-added.php';
?>
<?php include 'includes/nav_bar.php'; ?>
       <div id="content">
        <div id="bg" class=" ">
            <div class="container" >
            <div class="text" id="banner_content" >
            <h1>The Ice Box </h1>
           
            <a href="products.php" class="btn">Shop Now</a>

            </div>
            </div>

        </div>
    </div>

    
 <div class="productHome">
        <div class="row">
            <div class="col">
                <a href="products.php#watch"> <img src="images/watch.jpg" class="img-fluid " alt="">
                    <div class="h5">
                        Watches
                    </div>
                 </a>
             </div>
            <div class="col" >
                <a href="products.php#shirt"  >
                  <img src="images/cross1.jpg" class="img" alt="">
                     <div>
                        Jewelry
                     </div>
                  </a>
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
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo '<script type="text/javascript">$(document).ready(function(){$("#login").modal("show");});</script>';
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>