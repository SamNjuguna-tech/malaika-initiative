<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malaika initiative for people with disability</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    
    <link rel="icon" type="image/x-icon" href="./images/usedimages/favicon/favicon.ico">
    <!-- <link rel="stylesheet" href="./styles/heroSection.css">
    <link rel="stylesheet" href="./styles/heroSection.css"> -->


</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="/malaika-initiative/index.php" class="logo"></a>
  <a href="/malaika-initiative/index.php" class="active">Home</a>
  <a href="/malaika-initiative/services.php">What We Do</a>
  <a href="/malaika-initiative/about.php">About</a>
  <a href="/malaika-initiative/contact.php">Contact</a>
  <a href="/malaika-initiative/funding.php">Funding</a>
  <a href="/malaika-initiative/gallery.php">Gallery</a>
  <!-- <div class="dropdown">
    <button class="dropbtn">Others 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/appreciation.html">Appreciation</a>
      <a href="/news.html">News</a>
      
    </div>
  </div>  -->
  
  <a href="javascript:void(0);" style="font-size:15px" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


</script>
</html>