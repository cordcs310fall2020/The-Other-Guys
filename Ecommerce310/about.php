<?php
require ("includes/common.php");
session_start();
?>
<?php
require "includes/nav_bar.php"

?>
<?php
//PHP code inspired by FollowAndrew On Youtube//
    

      print_r($_POST);
      $message_sent = false;
      if(isset($_POST['Email']) && $_POST['Email'] != '')
      {

        if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL ))
        {

        

      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $email = $_POST['email'];
      $fname = $_POST['name'];
      $Radio1 = $_POST['gender'];
      $satfac = $_POST['satisfaction'];
      $subject = $_POST['subject'];

      $to = "bpwilson2000@gmail.com";
      $body = "";
      
      $body.= "From: ".$fname. "\r\n";
      $body.= "Email: " .$email. "\r\n";
      $body.= "Message: " .$subject. "\r\n";

        
      mail($to, $subject, $body);

      $message_sent =  true;
        }
   

        
  
      }


?>
<?php require 'includes/header.php' ?>
  
  <div>
    <div class="container2">
      <div class="row">
        <div class="col">
          <h3 class="text">Who We Are ?</h3>
          <hr />
          <img
            src="images/group.png"
            class="img">
          
          <p > At The Ice Box we strive to provide luxury watches and chains for men across the world. Quality is our number one concern <br><br> Above are the 3 founders</p>
        </div>
        <div class="col-md-5 mt-3">
         
          <hr>
         
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container2">
  </div>
  <h2>
    Contact Form

  </h2>
 <!-- inspiration and starting code from w3schools-->
  <div class="container3">
    <form action="action_page.php">
  
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for ="email">Email </label>
      <input type="text" id="email" name="Email" placeholder="Your Email..">
     

      <label for = "Radio1" ><br /> <br/>Your Gender: </label><br />
      <input type="radio" id="male" name="gender" value="male"> 
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br /> <br /> <br/>

  
      <label for = "satfac"> How Satisfied Are You With Our Website?</label>
      <select id="satisfacton" name="satisfacton">
        <option value="5">5-Very Satisfied</option>
        <option value="4">4-Satisfied</option>
        <option value="3">3-Indifferent</option>
        <option value="2">2-Moderately Unsatisifed</option>
        <option value="1">1-Very Unsatisifed</option>
        
        
      </select>
  
      <label for="subject">Feel Free to Send a Message</label>
      <textarea id="subject" name="subject" placeholder="Write Here.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
  
    </form>
   
 

</body>

<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
