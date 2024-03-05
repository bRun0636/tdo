<?php 
	session_start();

	//Подключение к базе данных
	require './connect.inc.php';	

	//Переменные
	$email = $_SESSION['email'];
	$title = $_POST['title'];
	$task = $_POST['task'];


        //Подготовка к загрузке в базу данных
        $sql = "INSERT INTO tasks(email, title, task) VALUES('$email', '$title', '$task')";

		$pdo->exec($sql);

	header('Location: ../page/todo.php');

?>
