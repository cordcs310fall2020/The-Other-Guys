



<?php require 'nav_bar.php'; ?>
<div class="header" id="login" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="login_script.php" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input">
              <label for="checkbox" class="form-check-label">Check</label>
          </div>
          <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
        </form>
        <a href="http://">forgot password ?</a>
      </div>
      <div class="modal-footer">
        <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >signup</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="signup">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

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
                <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
          </div>

          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="validation1">First Name</label>
                  <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
              </div>
              <div class="form-group col-md -6">
                  <label for="validation2">Last Name</label>
                  <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
              </div>
          </div>
          
          <div class="form-check">
              <input type="checkbox" class="form-check-input" required>
              <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer">
        <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
