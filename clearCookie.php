<?
setcookie('visitCount', '', time() - 3600);
setcookie('lastVisitDate', '', time() - 3600);
setcookie('name', '', time() - 3600);

header('Location: index.php');
exit;
