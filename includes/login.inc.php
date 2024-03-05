<?php
    session_start();
    if(isset($_POST["email_login"]) && isset($_POST["password_login"]))
    {
        include("./connect.inc.php");
        $email = $_POST["email_login"];
        $password = $_POST["password_login"];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $pdo->query($sql);

        if ($row = $result->fetch()) 
        {
            $hash = $row['password'];
            if(password_verify($password, $hash))
            {

                $_SESSION['email'] = $email;

                $path = "../page/todo.php";
                header("Location: $path");
            }
            else
            {
                print("Неверный пароль");
            }
        }
        else
        {
            print("Данного пользователя не существует");
        }
    }
?>