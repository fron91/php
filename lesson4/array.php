<?php
  //   $sport1="Football";
 //  $sport1="Basketball";
//  $sport1="Handball";
//  $sport1="Volleyball";

//$sport=array ('Football','Basketball')

$sport= ('Football','Basketball');
// echo $sport[0];
echo end ($sport);
echo count($sports)


for($i = 0; $i <4; $i++){
    echo $sports[$i], "\n";
}

$len = count($sports);

for($i = 0; $i < $len; $i++){
    echo $sports[$i], "\n"
}

?>