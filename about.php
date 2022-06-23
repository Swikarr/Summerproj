<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutstyle.css"> 
</head>
<body>
<!-- OUR TEAM -->


<h2 style="text-align:center;">Meet The Team</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/sanjay.jpg" alt="Sanjay" style="width:60%">
      <div class="container">
        <h2>Sanjay Niraula</h2>
        <p class="title">Co-founder</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/cd.jpg" alt="Chandradeep" style="width:60%">
      <div class="container">
        <h2>Chandradeep Dhakal</h2>
        <p class="title">Co-founder</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/cd.jpg" alt="John" style="width:60%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/sanjay.jpg" alt="Sanjay" style="width:60%">
      <div class="container">
        <h2>Sanjay Niraula</h2>
        <p class="title">Co-founder</p>
      </div>
    </div>
  </div>
  <!-- insert aaru team mates here -->
</div>

    
<h2 style="text-align:center;"> Testimonials </h2>
<br>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
    <img src="images/sanjay.jpg" alt="Avatar" class="avatar">
    <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
    <p class="author">- John Keats</p>
  </div>

  <div class="mySlides">
    <img src="images/sanjay.jpg" alt="Avatar" class="avatar">
    <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
    <p class="author">- Ernest Hemingway</p>
  </div>

  <div class="mySlides">
    <img src="images/sanjay.jpg" alt="Avatar" class="avatar">
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<!-- JS for Testimonials -->
<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>




</body>
</html>