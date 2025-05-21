<!DOCTYPE html>
<table border="1">
<tr>

<th>Phones</th>
<th>In stock</th>
<th>Solid</th>
</tr>
<style>

    table{
        width: 30%;
        border-collapse: collapse;
    }
    th,td{
        padding: 10px;
        text-align:left;
        border:1px solid;
    }

    th{
        background-color:lightgray;
        font-weight:bold;
    }



<?php
$phone = array(
    array("Iphone 14",20,10),
    array("Iphone 13",20,10),
    array("Iphone 16",20,10),
    array("Iphone 15",20,10),
);
    for($row=0;$row<4;$row++){
        echo"<tr>";
        for($col=0;$col<3;$col++){
            echo"<td>" . $phone[$row][$col] . "</td>";
        }
        echo"</tr>";
    }

    echo"</table>";
?>