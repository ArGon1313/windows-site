<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

    $tel = filter_var(trim($_POST['tel']),
    FILTER_SANITIZE_STRING);

    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

    $msg = filter_var(trim($_POST['msg']),
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'cy65403_clients', 'ar228', 'cy65403_clients');
//if (mysqli_connect_errno()) {
//    echo "Подключение невозможно: ".mysqli_connect_error();}
    $mysql->query("INSERT INTO clients (`name`, `tel`, `email`, `msg`) VALUES ('$name', '$tel', '$email', '$msg')");
    $mysql->close();
?>