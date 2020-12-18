<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Практика NIX PHP Beginner(Алексеев Дмитрий)</h1>
</header>
<nav>
    <a href="/">Главная</a>
    <a href="lesson1.php" class="disabled">Урок 1</a>
    <a href="#">Урок 2</a>
    <a href="#">Test</a>
</nav>
<main>
    <h3>Урок 1 (Таблица умножения)</h3>
    <table id="table1" border="1">
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