<?
$do = $_GET['do'];
$date = $_GET['date'];
include "../config.php";

switch ($do)
{
case "hide": 
  {
  mysql_query("UPDATE `zakaz` SET `show`=0 WHERE `date`='{$date}';") or die ("������ SQL: ".mysql_error());
  header("Location: tickets.php");
  exit;
  };
case "open":
  {
  mysql_query("UPDATE `zakaz` SET `show`=1 WHERE `date`='{$date}';") or die ("������ SQL: ".mysql_error());
  header("Location: tickets_old.php");
  exit;
  };
};
  // ������� ����� ��������
  include "topadmin.php";
  echo "����������� ������.";
  include "bottomadmin.php";



?>