<?
$DelID = $_GET['id'];
$DelKey = $_GET['key'];
$ok = $_GET['ok'];

$months['.01.']=' ������ ';
$months['.02.']=' ������� ';
$months['.03.']=' ����� ';
$months['.04.']=' ������ ';
$months['.05.']=' ��� ';
$months['.06.']=' ���� ';
$months['.07.']=' ���� ';  // � �����!
$months['.08.']=' ������� '; //������ ��� ������� �������
$months['.09.']=' ������� ';
$months['.10.']=' ������� ';
$months['.11.']=' ������ ';
$months['.12.']=' ������� ';

$spc['������� �� �������']='�.�. ���, �������� �� �������';
$spc['��������� ���������']='�. �����, ���������� ���������';
$spc['�������']='�. �����, �������';
$spc['��������']='�. ������, ��������� <i>(���������� ����������� ������� � ���� ���������)</i>';
$spc['������� � ���, ��� ���������� ���� ��������...']='�. ������, �������� � ���, ��� ���������� ���� �������� � ������ �������������';
$spc['�������']='�. ������, ��������';
$spc['������ ����']='�. ��������, ������� ����� <i>(������� ����� ����� � ���� ������)</i>';

include "../config.php";

$TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$DelID}' LIMIT 1;");
$ttd = mysql_fetch_array($TicketsToDelete);


$date=substr($ttd['date'], 0, 10);
foreach ($months as $x=>$y)
	{
    $date = str_replace($x, $y, $date);
	};
$time=substr($ttd['date'], 11, 16);

$email = $ttd['email'];

$header1 = "From: \"����� ������� ���\" <stary-dom@yandex.ru>;\r\nContent-type: text/html; charset=Windows-1251;\r\n";
$subject="������������� ������ �������";
$msg="<html>
<head>
<style>
  h1 { font-family: Arial; color: #000000;  font-size: 30px; font-weight:bold; text-align: center;}
  h2 { font-family: Arial; color: #000000;  font-size: 20px; font-weight:bold; }
  p { font-family: Arial; color: #000000;  font-size:14px; }
  p.bold { font-family: Arial; color: #000000;  font-size:14px; font-weight:bold; }
  p.scr { font-family: Arial; color: #000000;  font-size:14px; text-align: right; }
  a { font-family: Arial; color: #000000;  font-size:14px; text-decoration: underline; }
</style>
</head>
<body>
<h1>����� ������� ���</h1>
<h2>����� ������� �� ���������: {$spc[$ttd['sp_name']]} {$date} ���� � {$time}.</h2>
<p>������������, {$ttd['name']}.</p>
<p>���������� ��� �� ����� �������. ��� ��������� �� ���� ��� � �������, �� ������ �������� �� �� ���������.</p>
<p class=bold>������������ ������� �� ���������� �� ���������.</p>
<br>
<p>��� �����: ���������� ��� ��� ����, ��. ����� ����������� 5, 2-� ����.</p>
<br>
<p class=scr>� ���������,<br>
�����  ������� ���<br>
<a href=http://www.TeatrStDom.ru>www.TeatrStDom.ru</a><br>
<a href='mailto:stary-dom@yandex.ru'>stary-dom@yandex.ru</a></p>

</body>
</html>";

if (md5($ttd['id_zak'].$ttd['name'])==$DelKey) 
  {
  if ('true'!=$ok) { mail($email, $subject, $msg, $header1); };
  mysql_query("UPDATE `zakaz` SET `sent`=1 WHERE `id_zak`='{$DelID}' LIMIT 1;");
  exit;
  }
 else
  {
  echo "������ ��������: ����������� ����� �� ���������.";
  };
?>