<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>22.5 MVC</title>
</head>

<body>
    <header>
        <h1>MVC Test</h1>
        <div class="menu">
        <div class="menu_item"><a href="/">Главная</a></div>
        <div class="menu_item"><a href="/gallery">Галерея</a></div>
        <div class="menu_item"><a href="/about">О нас</a></div>
        </div>
    </header>
    <div class="content">
        <?php include $contentView; ?>
    </div>
    <footer>
        <p>&copy; 2021 Copyright</p>
    </footer>

    <?php phpinfo(INFO_MODULES); ?>

</body>

</html>