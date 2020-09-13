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
    <style>
  
    </style>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light main_nav">
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
    <h1>Welcome to Print Solution</h1>
  </div>

  <div class="contactus" id="contact_us">
  <p><span style="font-size: 24px;">Contact US</span>
</p>
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
        <input type="submit" class="btn btn-danger btn-send" value="Send message">
      </div>
    </div>
   
  </div>

  </form>
  <p class="form-message"></p>

</div>

</div>

  </div><!-- end contactus -->
  <footer>
    <div class="footer">
       <p>© Copyright 2020, All Rights Reserved</p>
    </div>
</footer>

    </div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 --><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>











</body>
</html>