
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
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/contact.css" >
  <link rel="stylesheet" href="css/index.css" >



  <title>Welcome to Meme Academy</title>

  <!-- Javascript Functions-->
  <script>

    
  </script>


  <!-- CSS -->

  
</head>

<body>

<?php
if($message_sent):

?>
<h3> Thank you for your response<h3>
<?php
else:


?>
<h3> Your Response Was not Completed Correctly<h3>
  <h1>
    The Ice Box
    
  </h1>

  <nav class="topnav">
    <a class="active" href="index.php"><li>Home</li></a>
    <a href="cart.html"><li>Cart</li></a>
    <a href = "signup.php"><li>Sign Up</li></a>
    <a href = "contact.php"><li>Contact</li></a>
    <a href = "admin.html"><li>Admin Panel</li></a>
  </nav>
 
  
  <h2>
    Contact Form

  </h2>
 <!-- inspiration and starting code from w3schools-->
  <div class="container">
    <form action="action_page.php">
  
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for ="email">Email </label>
      <input type="text" id="email" name="Email" placeholder="Your Email.."
     

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
    <div class="card">
      <img src="img/among3.jpg" class = "img-back" alt="Card Back">
      <img src="img/among4.jpg" class="img-top" alt="Card Front">
  </div>
   
  <?php
  endif;

  ?>
 
 
</body>

</html>