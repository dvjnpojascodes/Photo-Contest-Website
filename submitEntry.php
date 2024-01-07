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
    <link rel="stylesheet" href="css/submit1.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <title>Submit Entry | WordsInPic</title>
</head>
<body>


<?php include_once 'navigation.php';?>

<header>
    <img src="assets/Homepage-Header-1.png" alt="">
</header>


<p id="title">SUBMIT AN ENTRY</p>
<p id="description">Everyone can join the competition by uploading their entries that are related to the monthly themes. To submit an entry, you can follow the instructions below.
The votes of each entries will be added to the score of panel of judges that will review all the entries and select the winners based on their creativity, technical skills, and adherence to the contest rules. 
The top 10 who will get the highest scores will be selected as winners.
</p>



<div class="form-container">
    <form action="includes/submit.inc.php" method="post" enctype="multipart/form-data" >

    <div class="upload-container">
        <div class="instruction">
               <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Your entry has been submitted!</h1>
                        <p>Thank you so much for joining in the competition! You can invite your friends and families to see other
                            works and vote for this month's competition. <br><br> view the winners for this month, we will send you an
                            email or you can view the list of winners at Rankings page.  We wish you all the best and hope you win 
                            this month's amazing prizes.
                        </p>
                    </div>
               </div>

                <h1>1. UPLOAD YOUR PHOTO</h1>

                <div class="list">
                <ul>
                    <li>Please make sure that your image is related to the theme of the month. </li>
                    <li>The photo should be in PNG and JPG format only.</li>
                    <li>Maximum file size must be 300MB.</li>
                    <li>Maximum image resolution is 100MP.</li>
                </ul>
                </div>
        </div>
        <div class="upload-image">
            <div class="image-preview" id="image-preview">
                <img class="img-preview__image" alt="Preview of an image uploaded by user">
                <span class="image-preview__default-text">Image Preview</span>
            </div>
            <label for=""></label>
            <input type="file" name="entry_img" id="entry_img" class="entry_img">
        </div>
    </div>

        <h1 id="ins-2">2. FILL OUT THE FORM </h1>
        <div class="form-group">
            <label for="">Entry Name: </label>
            <input type="text" name="entryname" placeholder="Enter the title of your photo" required>
        </div>

        <div class="form-group">
            <label for="">Photographer Name: </label>
            <input type="text" name="ownername" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="">Date Submitted: </label>
            <input type="date" name="date" placeholder="Enter the date of submission" min="2022-06-01" max="2022-06-25"required>
        </div>

        <div class="form-group" style="margin-bottom: 3em;">
            <label for="">Photo Description: </label>
            <textarea style="margin-bottom: 3em;" name="description" id="description" placeholder="Tell us your thought about this photo" required></textarea>
        </div>
        <button type="submit" name="submit_entry" class="submit-btn"> Submit Entry </button>


        <?php
            $recordAdded = false;

            if(isset($_SESSION['status']) && $_SESSION['status'] !== ''){
                $recordAdded = true;

            if($recordAdded){
                echo '
                <script type="text/javascript">

                var modal = document.getElementById("myModal");
                var span = document.getElementsByClassName("close")[0];

                modal.style.display = "block";

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                      modal.style.display = "none";
                    }
                  }
              </script>';
            }}
            ?>

            <?php
                unset($_SESSION['status']);
            ?>
    </form>
</div>

<script src="js/submitentry.js"></script>


<?php
include_once 'footer.php';
?>