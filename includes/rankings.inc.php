<?php
include_once 'includes/dbcon.php';

if ($result->num_rows > 0) {
    // Display rankings
    while ($row = $result->fetch_assoc()) {
      echo "<p>{$row['name']} - {$row['entry']} ({$row['votes']} votes)</p>";
    }
  } else {
    echo "No entries found.";
  }
  
?>