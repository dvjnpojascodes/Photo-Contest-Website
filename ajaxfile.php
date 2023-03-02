<?php 
session_start();
include_once 'includes/dbcon.php';

if(isset($_POST['checking_viewbtn']))
{
    $s_id = $_POST['student_id'];
    // echo $return = $s_id;

    $query = "SELECT * FROM entries WHERE id='$s_id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            echo $return = '
                <h1>'.$row['title'].'</h1>
                <hr>
                <img src="upload/'.$row['entry_img'].'"'.'>
                <p>'.$row['description'].'</p>
                <p> Photographer Name : '.$row['name'].'</p>
                <p> Date Submitted : '.$row['date'].'</p>
            ';
        }
    }
    else
    {
        echo $return = "<h5>No Record Found</h5>";
    }

}
?>