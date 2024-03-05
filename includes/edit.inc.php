<?php

        require '../includes/connect.inc.php';	
        $id = $_GET['id'];
        $title = $_POST['title'];
        $task = $_POST['task'];
        
        if(!empty($_POST['title'])){
            $sql = "UPDATE tasks SET title = '$title' WHERE 'id' = ?";
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }
        if(!empty($_POST['task'])){
            $sql = "UPDATE tasks SET task = '$task' WHERE 'id' = ?";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }
        $path = "../page/todo.php";
        header("Location: $path");
?>