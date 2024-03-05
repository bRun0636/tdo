<?php 

    //Подключаем базу данных из файла db.php
    require 'connect.inc.php';

    //Переменная
    $id = $_GET['id'];

    //Удаляем элемент из таблицы list с определенным id
    $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header('Location: ../page/todo.php');

 ?>
