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
    <link rel="stylesheet" href="css/guide.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <title> Participation Guide | WordsInPic</title>
</head>
<body>

<?php 
include_once 'navigation.php';
?>


<p id="title">HOW TO PARTICIPATE AND SUBMIT YOUR PHOTOGRAPHY ENTRY</p>



<div class="steps">
    <div class="line"></div>

    <div class="step-one">
        <div id="steps">STEP 1: READ THE RULES AND GUIDELINES</div>
        <div id="explain">Before submitting any photos, carefully read the rules and guidelines of the competition to ensure that you meet all the requirements. This may include technical specifications for image size and file type, as well as any restrictions on subject matter or editing.</div>
        <div class="circle cone"></div>
    </div>


    <div class="step-two">
    <div id="steps">STEP 2: CHOOSE YOUR BEST ENTRY</div>
        <div id="explain">Select your best photos that fit the theme of the competition. Take your time to review and edit your photos to showcase your skills and creativity. It may be helpful to get feedback from others, such as friends or colleagues, to help you select your strongest images.</div>
        <div class="circle ctwo"></div>
    </div>
    <div class="step-three">
    <div id="steps">STEP 3: SUBMIT YOUR PHOTOS</div>
        <div id="explain">Follow the instructions for submitting your photos, including any required information such as your name, photo titles and descriptions. Double-check that you have followed all the rules and guidelines, and submit your photos before the deadline.</div>
        <div class="circle cthree"></div>
    </div>
</div>


<p id="faq">FREQUENTLY ASKED QUESTIONS</p>

<div class="faq">

<button class="accordion">How will the winners be selected?</button>
<div class="panel">
  <p>The votes of each entries will be added to the score of panel of judges that will review 
    all the entries and select the winners based on their creativity, technical skills, and 
    adherence to the contest rules. The top who will get the highest scores will be selected
as winners.</p>
</div>

<button class="accordion">When will the winners be announced?</button>
<div class="panel">
  <p>We will announce the winners on our website and social media channels within a week of the contest deadline.</p>
</div>

<button class="accordion">What are the prizes for the winners?</button>
<div class="panel">
  <p>The prizes for the winners vary depending on the contest. Please check the contest rules and regulations for more details.</p>
</div>

<button class="accordion">Do I retain the copyright to my photo?</button>
<div class="panel">
  <p>Yes, you retain the copyright to your photo, but by submitting your photo, you give us the right to use it for promotional purposes related to the contest.</p>
</div>


<button class="accordion">Can I edit my photo after submitting it?</button>
<div class="panel">
  <p>No, once you submit your photo, you cannot edit it. Please make sure that you upload the correct version of your photo.</p>
</div>





</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>




<?php 
include_once 'footer.php';
?>
