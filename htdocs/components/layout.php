<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <h1><?= $page_title ?></h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Главная</a>
            </li>
            <li>
                <a href="reg.php">Регистраиция</a>
            </li>
            <li>
                <a href="auth.php">Авторизация</a>
            </li>
            <li>
                <a href="hidden.php">Скрытая страница</a>
            </li>
        </ul>
    </nav>
    <main>
        <div>
          <h1><?= $content ?></h1>
        </div>
    </main>
    <footer class="top-border">
        <h6>Смотрин Николай</h6>
    </footer>
</body>
</html>