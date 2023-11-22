<link rel="stylesheet" href="./styles/contact.css">
<?php 
include 'header.php';
session_start();

$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
// print_r($_SESSION);
?>
 
<body>
<section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2 class="contact-h2">CONTACT</h2>
      <div class="links">
        <div class="contact-link">
        <a href="https://m.facebook.com/people/Malaika-Initiative/100075170761813/"  target="_blank"> <i class="fa-brands fa-facebook-f icon-brand"></i></a>
        </div>
        <div class="contact-link">
        <a href="https://www.instagram.com/malaikapwd/" target="_blank"><i class="fa-brands fa-instagram icon-brand"></i></a>
        </div>
        <div class="contact-link">
        <a href="https://www.linkedin.com/in/malaika-initiative-a32148243/"  target="_blank"><i class="fa-brands fa-linkedin-in icon-brand"></i></a>
        </div>
        <div class="contact-link">
        <a href="https://www.youtube.com/@malaikainitiative"  target="_blank"><i class="fa-brands fa-youtube icon-brand"></i></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
      <form action="backend.php" method="post">
        <div class="form-item">
          <input type="hidden" name="csrf_token" value="<?php echo $token?>">
          <input type="text" name="name" id="name" required>
          <label for="name">Name:</label>
        </div>
        <div class="form-item">
          <input type="tel" name="phone" id="phone" required>
          <label for="phone">phone:</label>
        </div>
        <div class="form-item">
          <input type="text" name="email" id="email" required>
          <label for="email">Email:</label>
        </div>
        <div class="form-item">
          <textarea class="" name="message" id="message" required></textarea>
          <label for="message">Message:</label>
        </div>
        <button class="submit-btn">Send</button>  
      </form>
    </div>
  </div>
</section>
  
</body>


  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  






<?php include "footer.php" ?>