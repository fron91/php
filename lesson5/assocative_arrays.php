<?php
  $grade=array(
    "Math"=>"4";
    "Fiziks"=>"5"

  );

  foreach($grade as $subject=> $grade){
    echo"Subject:" . $subject . ", Grade:" . $grade;
    echo"<br>";
  }
?>