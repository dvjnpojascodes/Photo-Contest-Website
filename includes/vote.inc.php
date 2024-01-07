<?php

require_once 'dbh.inc.php';

if(isset($_POST['submit_vote'])){
  $id = $_POST['submit_vote'];

  $query = "SELECT votes FROM entries WHERE id = '$id'";
  $result = $conn->query($query);
  

  if ($result->num_rows !== 0) {
    // Update the count by incrementing it by 1
    $click_count = $result->fetch_assoc()['click_count'];
    $click_count++;
    $update_query = "UPDATE button_clicks SET click_count = $click_count WHERE id = '$id'";
    $conn->query($update_query);
  }
}


