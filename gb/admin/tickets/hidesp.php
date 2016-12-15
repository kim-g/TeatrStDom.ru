<?
$date = $_GET['date'];
include "../config.php";


  mysql_query("UPDATE `zakaz` SET `show`=0 WHERE `date`='{$date}';") or die ("Ошибка SQL: ".mysql_error());
  header("Location: tickets.php");
  exit;
  // Выводим шапку страницы
  include "topadmin.php";
  echo "Неизвестная ошибка.";
  include "bottomadmin.php";



?>