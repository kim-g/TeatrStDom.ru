<?
$date=$_GET['date'];
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

include "../config.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Список билетов - на печать. Театр Старый Дом</title>
<style>
  .zag { font-family: TimesNewRoman; color: #000000;  font-size: 30px; font-weight:bold; text-align: center;}
  .zagu { font-family: TimesNewRoman; color: #000000;  font-size: 30px; font-weight:bold; text-align: center; text-decoration: underline; }
  .zag2 { font-family: TimesNewRoman; color: #000000;  font-size: 18px; font-weight:bold; text-align: center;}
  .text { font-family: TimesNewRoman; color: #000000;  font-size: 18px;}
</style>
<script Language="Javascript">
function printit(){ 
if (window.print) {
window.print() ; 
} else {
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = ""; 
}
}
</script>
</head>
<body>
<?
  $str = $date;
  foreach ($months as $x=>$y)
	{
    $str = str_replace($x, $y, $str);
	};
	
  echo "<div>\n";

  $tickets=mysql_query("SELECT * FROM `zakaz` WHERE `date`='{$date}' ORDER BY `id_zak`");
  echo "<div class=zag>Заказ билетов на <span class=zagu>{$str}</span>.</div>
<br><br>
<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td><p class=zag2>№</p></td>
	<td><p class=zag2>Имя</p></td>
	<td><p class=zag2>Кол-во билетов</p></td>
  </tr>\n";

  $i=0;
  while ($zak = mysql_fetch_array($tickets))
    {
    $i++;
    echo "  <tr>
    <td class=text>{$i} </td>
	<td class=text>{$zak['name']}</td>
	<td class=text>{$zak['number']}</td>\n";
    echo "\n
  </tr>\n";
    };
?>
</table>

<button onclick="printit()">Напечатать</button> <button onclick="javascript:history.back()">Назад</button>
</div>
</body>
</html>