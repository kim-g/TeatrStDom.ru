<?
$DelID = $_GET['id'];
$DelKey = $_GET['key'];

include "../../config.php";


$TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$DelID}' LIMIT 1;");
$ttd = mysql_fetch_array($TicketsToDelete);
if (md5($ttd['id_zak'].$ttd['name'])==$DelKey) 
  {
  mysql_query("DELETE FROM `zakaz` WHERE `id_zak`={$DelID} LIMIT 1;") or die ("Ошибка SQL: ".mysql_error());
  echo "OK";
  exit;
  } else 
  {
  echo "<p class=zag2>Невозможно удалить.</p><p class=text>Контрольная сумма не совпадает.</p><p><a href=# onclick='HideAUS()' class=link>Закрыть</a><p>";
  }



?>