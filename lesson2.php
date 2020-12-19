<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок 2</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<header>
    <h1>Практика NIX PHP Beginner(Алексеев Дмитрий)</h1>
</header>
<nav>
    <a href="/">Главная</a>
    <a href="lesson1.php">Урок 1</a>
    <a href="lesson2.php" class="disabled">Урок 2</a>
    <a href="#">Test</a>
</nav>
<main>
    <h3>Урок 2 (Таблица умножения с закрашиванием)</h3>
    <table id="table2" border="1">
        <tr>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <?php if ($i == 6) :?>
                    <tr/>
                    <tr>
                <?php endif;?>
                <td>
                    <?php for ($j = 1; $j<=10; $j++) : ?>
                        <?=$i.' &times; '.$j.' = '.$i * $j;?><br/>
                    <?php endfor;?>
                </td>
            <?php endfor;?>
        </tr>
    </table>

</main>
<footer>
    <p>Блок footer</p>
</footer>
</body>
</html>
