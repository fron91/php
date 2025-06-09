<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <style>
        table,td,th{
           padding: 10px,20px;
        }

</head>

       <body>


<?php
include_once('config.php');
$sql = "SELECT * FROM user";
$getUser = $conn->prepare($sql);
$getUser->execute();
$users=$getUsers->fetchALL();
?>


<br><br>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>

</thead>
<tbody>
    <?php
    foreach($users as $user){

    
    ?>
    <tr>
        <tr><?=$user['id']?></td>
       <tr><?=$user['name']?></td>
       <tr><?=$user['surname']?></td>
       <tr><?=$user['email']?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>

    <a href="add.php">Add User</a>
</body>
</html>