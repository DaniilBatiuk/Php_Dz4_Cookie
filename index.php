<?
$visitCount = 1;
$lastVisitDate = '';
$name = '';

if (isset($_COOKIE['visitCount']) && isset($_COOKIE['lastVisitDate']) && isset($_COOKIE['name'])) {
    $visitCount = $_COOKIE['visitCount'];
    $lastVisitDate = $_COOKIE['lastVisitDate'];
    $name = $_COOKIE['name'];
    $visitCount++;
}


setcookie('visitCount', $visitCount, time() + 86400);
setcookie('lastVisitDate', date('Y-m-d H:i:s'), time() + 86400);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    setcookie('name', $name, time() + 86400);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cookie</h1>

    <? if ($visitCount == 1) {
        echo "<p>Добро пожаловать! Вы первый раз на сайте.</p>";
    } else {
        echo  "<p>Вы посетили этот сайт $visitCount раз(а).</p>";
        echo "<p>Дата последнего посещения: $lastVisitDate </p>";
    }
    ?>

    <form method="POST">
        <label for="name">Ваше имя:</label>
        <input type="text" name="name" value="<? echo $name; ?>">
        <input type="submit" value="Сохранить">
    </form>

    <p><a href="clearCookie.php">Сбросить данные</a></p>
</body>

</html>