<?php

require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['search'])) {
         $ketword = stripslashes($_REQUEST['search']);
         $ketword = mysqli_real_escape_string($con, $ketword);
          $sql = "SELECT * FROM `img` WHERE ocr LIKE '%$ketword%'" ;
           $result   = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
  // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "filename:      " . $row["filename"]. " ocr:           " . $row["ocr"]. "openCV           " . $row["opencv"]. "<br>";
     }
} 
else 
{
  echo "0 results";
}
    }

?>