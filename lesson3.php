<?
// Если кнопка нажата, то выполняет тело условия
if (isset($_GET['submit_btn'])) {
    $array_msg = preg_split('//u',$_GET['form_text'],-1,PREG_SPLIT_NO_EMPTY);;
    for ($i=count($array_msg); $i>=0; $i--){
        $res_array[] = $array_msg[$i];
    }

    $res = implode("", $res_array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NIX PHP Beginner</title>
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
    <a href="lesson2.php">Урок 2</a>
    <a href="lesson3.php" class="disabled">Урок 3</a>
</nav>
<main>
    <h3>Урок 3 (Форма отправки)</h3>
    <form action="" method="get">
        <label for="form_text">Введите текст</label>
        <input id="form_text" type="text" name="form_text">
        <input type="submit" value="Отправить" name="submit_btn">
        <p><?=$res;?></p>
    </form>
</main>
<footer>
    <p>Блок footer</p>
</footer>
</body>
</html>
