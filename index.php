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
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <title>WORDSINPIC</title>
</head>
<body>


<?php include_once 'navigation.php';?>

    <header>
        <img src="assets/FeaturePhoteHome.jpg" alt="" id="headerfeature">

        <div id="tagline"> <p>Capture The Beauty of Life</p></div>
        
        <div id="subtagline"> <p>From inspiring stories of people, floating moments, and allegorical scenes that holds narrative power, share your photography and win prizes!
            Procap held monthly photography contest and have been won by over 3000 people. You could win cash, cameras and get published. Could you be the next winner? Join Now!
        </p></div>

        <a href="signup.php">JOIN CONTEST</a>
    </header>
    

<div class="features">
    <div id=text>Let everyone see all the beauty that you see through your lens. For WordsinPic, everything beholds meaning and memories that worthy to share the world.</div>
    <div>
        <img src="assets/photocard-1.jpg" alt="Image of Building">
        <img src="assets/photocard-2.jpg" alt="Image of Father and Daughter">
        <img src="assets/photocard-3.jpg" alt="Image of waterfalls with man standing in the rock">
        <img src="assets/photocard-4.jpg" alt="A mother carrying her daughter at the back with her son">
    </div>
</div>


<div id="about">About Us</div>
<div class="about">
    <img src="assets/Teams.jpg" alt="" srcset="">
    <div id="description">
        <p>
        WordsInPic is a team of creative individuals that published  period cultural magazine that
        passionate about exploring the diverse and rich heritage and artistic expressions of various cultures around the world.
        We believe that by promoting a deeper understanding of different cultures, we can build bridges of tolerance and mutual 
        respect in our global society. 

        <br><br>
        Every month, we hold a photo contest that invites individuals from all walks of life to share their unique perspectives and experiences through the lens of a camera. Our organization aims to promote cultural exchange and understanding by showcasing the beauty and complexity of different cultures, traditions, and lifestyles through the powerful medium of photography. We believe that through the sharing of images, we can build bridges and foster connections between people from different backgrounds, enriching our lives and broadening our perspectives.
        </p>
    </div>
</div>



<?php include_once 'footer.php';?>