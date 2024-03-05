<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<title>TO-DO List</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    ?>
	<form action="../includes/edit.inc.php?id=<?php print($id) ?>" method="POST">
		<li>
			<input type="text" name="title" >
			<input type="area" name="task" >
		</li>
        <input type="submit" value="Изменить">
	</form>
    
</body>
</html>
