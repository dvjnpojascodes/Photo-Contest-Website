<?php

if(isset($_POST['submit_entry'])){
    $entryname = $_POST['entryname'];
    $owner = $_POST['ownername'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $imgentry = $_FILES['entry_img']['name'];

    require_once 'dbh.inc.php';

    $query = "INSERT INTO entries (title,name,date, description,entry_img) VALUES('$entryname', '$owner', '$date', '$description', '$imgentry')";
    $query_run = mysqli_query($conn, $query);


    if($query_run){
        move_uploaded_file($_FILES["entry_img"]["tmp_name"], "upload/".$_FILES["entry_img"]["name"]);
        $_SESSION['status'] = "Image Stored Successfully";
        header('Location: ../submitEntry.php');
    } else {
        $_SESSION['status'] = "Image not inserted successfully";
        header('Location: ../submitEntry.php');
    }
}


if(isset($_POST['checking_view-btn'])){
    $id = $_POST['entry_id'];
    echo $return = $id;

    $query = "SELECT * FROM entries WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($check_entries){
        foreach($query_run as $row){ 
            echo $return = '
                <h5> ID : '.$row['id'].' </h5>;
            ';
        }
    } else {
        echo "<h5> No record found</h5>";
    }
}


if(isset($_POST['submit_vote'])){
    require_once 'dbcon.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);
      
    $query = "SELECT votes FROM entries WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($query_run);
    $current_value = $row['votes'];
    
    // Step 3: Add one to the retrieved value
    $new_value = $current_value + 1;
    
    // Step 4: Update the value in the database
    $query = "UPDATE entries SET votes = $new_value WHERE id='$id'";
    mysqli_query($conn, $query);
    
    // Step 5: Display the updated value to the user
    echo "The new value is: " . $new_value;


    if($query_run){
        $_SESSION['status'] = "Image Stored Successfully";
        header('Location: ../vote.php');
    } else {
        $_SESSION['status'] = "Image not inserted successfully";
        header('Location: ../vote.php');
    }
        
}     


