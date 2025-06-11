<?php
    include_once('config.php');

    if(isset($_POST['sumbit']))
    {

        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pasword = $_POST['password'];
        $username = $_POST['email'];

        $sql = "INSERT INTO users(username,name, surname, password,email) value(:username,:name,:surname,:password, :email)";

    }
?>