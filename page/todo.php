<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<title>TO-DO List</title>
</head>
<header>
	<a href="../includes/exit.php">Выйти</a>
</header>
<body>
	<form action="../includes/add.inc.php" method="POST">
		<li>
			<input type="text" name="title">
			<input type="area" name="task" required>
		</li>
			<input type="submit" value="Добавить">
	</form>
	
	<ul>
		<?php
			session_start();
                //Подключаем базу данных из файла db.php
		require '../includes/connect.inc.php';

		$email = $_SESSION['email'];
                //Берем все элементы из базы данных, из таблицы list 
		$query = $pdo->query("SELECT * FROM `tasks` where email='$email' ORDER BY `id`");
                
                //Цикл который выводит все элементы, значения
		while($row = $query->fetch(PDO::FETCH_OBJ)) {
		        echo 
				'<div>
					<li><h3>'. $row->title .' <a href="../includes/delete.inc.php?id='.$row->id.'" id="card-link-click">X</a></h3>
					<a href="./edit.php?id='.$row->id.'" id="card-link-click"><img src="../img/pencil.png" alt="изменить"></a>
					'.$row->task.
					'</li>
				</div>';

			}
		 ?>
	</ul>
</body>
</html>
