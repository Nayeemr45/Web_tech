<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/mail.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <style>
  
    </style>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light main_nav fixed-top">
  <a class="navbar-brand" href="#"><span style= "color : #ff4a4a">Print</span> solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<!--     <span class="navbar-toggler-icon"></span>
 -->  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">How it works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_us" >Contact Us</a>
      </li>
      <li class="nav-item">
        <div class="log_reg">
        <a class="nav-link" href="login_register.php">Login or Register</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  <div class="header"> 
    
    <div class="left">
      <h1>Welcome to Print Solution</h1>
    </div>

    <div class="right">
      <img src="images/1.jpg" alt="">
    </div>
  </div>

  <div class="contactus" id="contact_us">
  <p><span style="font-size: 24px;">Contact US</span></p><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.9075661990883!2d90.39188911476641!3d23.71499469604531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e003f37875%3A0xd3f831da84e1234e!2s31%20Hazi%20Ballu%20Road%20Water%20Works%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1600624548020!5m2!1sen!2sbd" width="1450" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  <div class="row">
<div class="col-lg-8 col-lg-offset-2">

  
  <form id="contact-form" method="post" action="contact.php" role="form">

  <div class="messages"></div>

  <div class="controls">

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="form_name">Firstname *</label>
          <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="subject">Subject *</label>
          <input id="subject" type="text" name="subject" class="form-control" placeholder="Please enter your ubject *" required="required" data-error="Subject is required.">
          <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="form_email">Email *</label>
          <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="form_phone">Phone</label>
          <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
          <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="form_message">Message *</label>
          <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required data-error="Please,leave us a message."></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12">
        <input type="submit" class="btn btn-info btn-send" value="Send message">
      </div>
    </div>
   
  </div>

  </form>
  <p class="form-message"></p>

</div>

</div>

  </div><!-- end contactus -->
    <div class="footer">
      <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">
      
        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:#3b5998;"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:#00acee;"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:#db4a39;"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:#0e76a8;"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg white-text fa-2x" style="color:#E60023;"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">
  <p>© 2020 Copyright: All Rights Reserved</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </div>
    </div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 --><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>











</body>
</html>