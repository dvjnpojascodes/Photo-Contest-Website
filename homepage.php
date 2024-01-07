<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- THIS IS FOR FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css" type="text/css">
    <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <title> Home | WordsInPic </title>
</head>
<body>

<?php include_once 'navigation.php';?>

<!-- START OF HEADER SLIDES -->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="assets/Homepage-Header-1.png">
</div>

<div class="mySlides fade">
    <img src="assets/Homepage-Header-1.png">
</div>

<div class="mySlides fade">
  <img src="assets/Homepage-Header-1.png">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<!-- START OF BRIEF INTRO FOR VOTING AND SUBMITTING -->
<div class="wave-container">
  <div class="text-container">
    <p id="title">SUBMIT AN ENTRY OR VOTE YOUR FAVORITE</p>
    <p>Welcome to our monthly competition where creativity meets recognition! 
      We are thrilled to invite everyone to participate in our competition and showcase their talents in various fields. 
      Each month, we will introduce a new theme, and you will have the chance to submit your best work for the competition. 
      Once the submission period ends, the voting phase will begin, where the public can vote for their favorite entry. 
      This competition is an excellent opportunity for you to share your skills, gain recognition, and possibly win exciting prizes. 
    </p>

    <!-- here's the buttons -->
    <div class="btn">
      <a href="submitEntry.php" id="submit">Submit Entry</a>
      <a href="vote.php" id="vote">Vote</a>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#042438" fill-opacity="1" d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,218.7C672,213,768,171,864,160C960,149,1056,171,1152,192C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
</div>


<div class="monthly-winners">
    <p id="title">MONTHLY CONTEST WINNERS</p>

    <div class="container">

    <!-- MONTH 1 -->
      <div class="item">
        <div id="text">
          <p id="month">DECEMBER</p>
          <p>Theme: The Journey Starts</p>
          <a href="december-entries.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-1.jpg" alt="Mountain reflection on lake">
      </div>

      <!-- MONTH 2 -->
      <div class="item">
        <div id="text">
          <p id="month">JANUARY</p>
          <p>Theme: Meet a better self with love in the heart and light in the eyes.</p>
          <a href="january.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-2.jpg" alt="sun coming through trees">
      </div>

      <!-- MONTH 3 -->
      <div class="item">
        <div id="text">
          <p id="month">FEBRUARY</p>
          <p>Theme: The Journey Starts</p>
          <a href="february.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-3.jpg" alt="fog rolling over pine trees"></a>
      </div>

      <!-- MONTH 4 -->
      <div class="item">
        <div id="text">
          <p id="month">MARCH</p>
          <p>Theme: Variations on the Word Love</p>
          <a href="december-entries.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-4.jpg" alt="country house in the woods"></a>
      </div>

      <!-- MONTH 5 -->
      <div class="item">
        <div id="text">
          <p id="month">APRIL</p>
          <p>Theme: The Journey Starts</p>
          <a href="january.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-5.jpg" alt="lake view between two trees with mountain in the background"></a>
      </div>

      <!-- MONTH 6 -->
      <div class="item">
        <div id="text">
          <p id="month">MAY</p>
          <p>Theme: The Journey Starts</p>
          <a href="february.php">See More</a>
        </div>
        <img src="assets/homepage-monthlywinnes-6.jpg" alt="forest with a focus on an old oak tree"></a>
      </div>
    </div>
</div>

<?php include_once 'footer.php';?>

<script src="js/homepage.js"></script>

