<?
$DelID = $_GET['id'];
$DelKey = $_GET['key'];
$ok = $_GET['ok'];

$months['.01.']=' января ';
$months['.02.']=' февраля ';
$months['.03.']=' марта ';
$months['.04.']=' апреля ';
$months['.05.']=' мая ';
$months['.06.']=' июня ';
$months['.07.']=' июля ';  // А вдруг!
$months['.08.']=' августа '; //Просто для полноты картины
$months['.09.']=' сенября ';
$months['.10.']=' октября ';
$months['.11.']=' ноября ';
$months['.12.']=' декабря ';

$spc['Концерт по заявкам']='Ф.К. Крёц, «Концерт по заявкам»';
$spc['Житейские эпизодики']='А. Чехов, «Житейские эпизодики»';
$spc['Супруга']='А. Чехов, «Суруга»';
$spc['Женитьба']='Н. Гоголь, «Женитьба» <i>(Совершенно невероятное событие в двух действиях)</i>';
$spc['Повесть о том, как поссорился Иван Иванович...']='Н. Гоголь, «Повесть о том, как поссорился Иван Иванович с Иваном Никифоровичем»';
$spc['Ревизор']='Н. Гоголь, «Ревизор»';
$spc['Вешние воды']='И. Тургенев, «Вешние воды» <i>(История одной жизни в двух частях)</i>';

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

$header1 = "From: \"Театр «Старый дом»\" <stary-dom@yandex.ru>;\r\nContent-type: text/html; charset=Windows-1251;\r\n";
$subject="Подтверждение заказа билетов";
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
<h1>Театр «Старый дом»</h1>
<h2>Заказ билетов на спектакль: {$spc[$ttd['sp_name']]} {$date} года в {$time}.</h2>
<p>Здравствуйте, {$ttd['name']}.</p>
<p>Благодарим Вас за заказ билетов. Они оставлены на Ваше имя у билетёра, Вы можете получить их до спектакля.</p>
<p class=bold>Убедительная просьба не опаздывать на спектакль.</p>
<br>
<p>Наш адрес: Зрительный зал ДКТ УрФУ, ул. Софьи Ковалевской 5, 2-й этаж.</p>
<br>
<p class=scr>С уважением,<br>
Театр  «Старый дом»<br>
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
  echo "Ошибка отправки: Контрольная сумма не совпадает.";
  };
?>