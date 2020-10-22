<?php
    // Указываем кодировку
    //header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost";
    $username = "root"; // Имя пользователя БД
    $password = ""; // Пароль пользователя.
    $database = "persons"; // Имя базы данных, которую создали
     
    // Подключение к базе данных через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);
 
    // Проверяем, успешность соединения. 
    if ($mysqli->connect_errno) { 
        die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> ".$mysqli->connect_error."</p>"); 
    }
 
    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');
 
    //адрес (URL) нашего сайта
    $address_site = "http://localhost/";
?>