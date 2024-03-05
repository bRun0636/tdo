<?php
    session_start();
    if(isset($_POST["email_register"]) && isset($_POST["password_register"]) && isset($_POST["password_repeat"]))
    {
        include("./connect.inc.php");
        $email = $_POST["email_register"];
        $password = $_POST["password_register"];
        $password_repeat = $_POST["password_repeat"];

        $sql = "SELECT email FROM 'users' WHERE email='$email'";
        $stmt = $pdo->prepare($sql);

        $lenght = strlen($password);

        if($stmt->rowCount() == 0)
        {
            if($lenght < 8)
            {
                print("Длина пароля менее 8 символов");
            }
            else if($password != $password_repeat)
            {
                print("Пароли не совпадают");
            }
            else
            {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(email, password) VALUES('$email', '$hashed_password')";
                $stmt = $pdo->exec($sql);

                $_SESSION['email'] = $email;


                $subject = "Test email to send from XAMPP";
                $body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
                $from_email = 'kurk636@gmail.com';
                $headers = 'From: ' .$from_email . "\r\n".
                    'Reply-To: ' . $from_email. "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                mail($email, $subject, $body, $headers);
                $path = "../page/todo.php";
                header("Location: $path");
            }
        }
        else
        {
            print("Пользователь с таким адресом электронной почты уже существует!");
        }
    }
?>