<?
$DelID = $_GET['id'];
$DelKey = $_GET['key'];

include "../config.php";


$TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$DelID}' LIMIT 1;");
$ttd = mysql_fetch_array($TicketsToDelete);
if (md5($ttd['id_zak'].$ttd['name'])==$DelKey) 
  {
  mysql_query("DELETE FROM `zakaz` WHERE `id_zak`={$DelID} LIMIT 1;") or die ("������ SQL: ".mysql_error());
  header("Location: tickets.php");
  exit;
  } else 
  {
  $title=$titlepage="������ � ��������.";
  // ������� ����� ��������
  include "topadmin.php";
  echo "���������� �������. ����������� ����� �� ���������.";
  include "bottomadmin.php";
  }



?>