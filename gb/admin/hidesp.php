<?
$date = $_GET['date'];
include "../config.php";


  mysql_query("UPDATE `zakaz` SET `show`=0 WHERE `date`='{$date}';") or die ("������ SQL: ".mysql_error());
  header("Location: tickets.php");
  exit;
  // ������� ����� ��������
  include "topadmin.php";
  echo "����������� ������.";
  include "bottomadmin.php";



?>