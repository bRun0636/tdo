<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style-sign.css">
    <title>Страница входа</title>
</head>
<body>
    <div class="null" id="container">
        <div class="form-container sign-up">
            <form action="./includes/reg.inc.php" method="post">
                <h1>Создать аккаунт</h1>
                <div class="social-icons">
                    <a href="#" class="icon">
                        <i class="fa-brands fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fa-brands fa-vk"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
                <span>или используйте свою почту для регистрации</span>
                <input type="email" id="email_register" name="email_register" placeholder="Почта">
                <input type="password" id="password_register" name="password_register" placeholder="Пароль">
                <input type="password" id="password_repeat" name="password_repeat" placeholder="Повторите пароль">
                <button name="reg">Зарегистрироваться</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="./includes/login.inc.php" method="post">
                <h1>Войти в аккаунт</h1>
                <div class="social-icons">
                    <a href="#" class="icon">
                        <i class="fa-brands fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fa-brands fa-vk"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
                <span>или используйте свою почту для входа</span>
                <input type="email" name="email_login" placeholder="Почта">
                <input type="password" name="password_login" placeholder="Пароль">
                <a href="#">Забыл свой пароль</a>
                <button name="log">Войти</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>С возращением!</h1>
                    <p>Введите свои данные для входа</p>
                    <button class="hidden" id="login">Войти</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Привет, друг!</h1>
                    <p>Введите свои данные для регистрации</p>
                    <button class="hidden" id="register">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>