<?php
$sport= ('Football','Basketball' , 'Volleyball');

$output1 = array_slice($sports, 2);
$output1 = array_slice($sports, -2,1);
$output1 = array_slice($sports, 0,3);

var_dump($output1, $output2, $output3);

?>