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
    <link rel="stylesheet" href="css/vote.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <title>Vote | WordsInPic</title>
</head>
<body>

<?php 
include_once 'navigation.php';
include_once 'includes/dbcon.php';
$query = "SELECT * FROM entries";
$query_run = mysqli_query($conn, $query);
$check_entries = mysqli_num_rows($query_run) > 0;
?>


<h1>VOTE FOR YOUR FAVORITE PHOTO ENTRY</h1>


<!-- Student VIEW Modal -->
<div class="modal fade" id="studentVIEWModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="student_viewing_data">

                    </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
    <!-- Student VIEW Modal -->


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php 
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                        ?>
                        
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="voting-section">
                                <?php 
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    // while($row = mysqli_fetch_array($query_run))
                                    foreach($query_run as $row)
                                    {
                                        ?>

                                        <div class="card-container">
                                        <tr>
                                            <span class="stud_id"><?php echo $row['id']; ?></span>
                                            <!-- <td class="stud_id"><?php echo $row['id']; ?></td> -->
                                            <div class="img-container">
                                            <img src="upload/<?php echo $row['entry_img'];?>" alt="">
                                            </div>

                                            <div class="details-container">
                                                <div class="details">
                                                    <p>Submitted By: <?php echo $row['name']; ?></p>
                                                    <p>Votes: <span id="click-count">0</span> votes</p>
                                                </div>

                                                <div class="btns">
                                                    <button type="button" onClick="onClick()" id="vote-btn"> VOTE</button>
                                                    <span class="stud_id"><?php echo $row['id']; ?></span>
                                                    <a href="#" class="view_btn">VIEW</a>
                                                </div>
                                            </div>

                                    
                                        </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<h5>No Record Found</h5>";
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- script -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     
    <script>
        $(document).ready(function () {
            $('.view_btn').click(function (e) { 
                e.preventDefault();
                
                var stud_id = $(this).closest('div').find('.stud_id').text();
                // console.log(stud_id);

                $.ajax({
                    type: "POST",
                    url: "ajaxfile.php",
                    data: {
                        'checking_viewbtn': true,
                        'student_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $('.student_viewing_data').html(response);
                        $('#studentVIEWModal').modal('show');
                    }
                });
            });
        });




        var buttonClickCount = 0;

    function onClick() {
    buttonClickCount++;
    document.getElementById("click-count").innerHTML = buttonClickCount;

    };

    </script>


<?php
include_once 'footer.php';
?>