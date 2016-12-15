<?
$do = $_GET['do'];

switch($do)
  {
  case "mark": 
    {
	include "../../config.php";
	
	$id=$_GET["p1"];
	$key=$_GET["p2"];
	
	$TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$id}' LIMIT 1;") or die(mysql_error);
    $ttd = mysql_fetch_array($TicketsToDelete);
	
	if (md5($ttd['id_zak'].$ttd['name'])==$key)
	  {
	  mysql_query("UPDATE `zakaz` SET `sent`=1 WHERE `id_zak`='{$id}' LIMIT 1;") or die(mysql_error);
	  echo "OK";
	  }
	else
	  {
	  ?>
  <p class=zag2>ОШИБКА!!!</p>
  <p class=text>Контрольные суммы не совпадают<p>
  <br>
  <p><a onclick="HideAUS()" class=button-ticket>Закрыть</a></p>
  <?
	  };
	break;
	};
  case "hide": 
    {
	include "../../config.php";
	
	$date=$_GET["date"];
	
	$TicketsToDelete=mysql_query("UPDATE `zakaz` SET `show`=0 WHERE `date`='{$date}';") or die(mysql_error);
    header("Location: index.php");
	};
	
  case "open": 
    {
	include "../../config.php";
	
	$date=$_GET["date"];
	
	$TicketsToDelete=mysql_query("UPDATE `zakaz` SET `show`=1 WHERE `date`='{$date}';") or die(mysql_error);
	header("Location: index.php?old=true");
	};
  };

?>