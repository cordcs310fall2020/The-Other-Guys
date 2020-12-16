<?php require 'includes/nav_bar.php'; ?>
<?php require 'includes/styles.php';?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">


<div class="modal fade" id="signup">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:rgba(56,57,58)">

      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="signup_script.php" method="post">
          <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form"  name="eMail" placeholder="Enter email" required>
                <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
          </div>
          <div class="form">
              <label for="pwd">Password:</label>
              <input type="password" class="form" id="pwd" name="password" placeholder="Password" required>
          </div>

          <div class="form">
              <div class="form">
                  <label for="validation1">First Name</label>
                  <input type="text" class="form" id="validation1" name="firstName" placeholder="First Name" required>
              </div>
              <div class="form">
                  <label for="validation2">Last Name</label>
                  <input type="text" class="form" id="validation2" name="lastName" placeholder="Last Name">
              </div>
          </div>
          
         
          <button type="submit" class="btn" name="Submit">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer">
        <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
        <button type="button" class="btn" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
</html>