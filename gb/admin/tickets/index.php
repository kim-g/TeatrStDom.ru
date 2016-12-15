<?
// Чтение $_GET
if("true"==$_GET["old"]){$old=0;} else {$old=1;};

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

  include "../../config.php";
  $title=$titlepage="Работа с билетами.";
   // Выводим шапку страницы
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"../admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"tickets.css\">
<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "../topadmin.php";
  echo "<div><a href='..' class=button-ticket>Перейти к работе с гостевой книгой</a></div>";
  
  //Составляем список дат
  $DBdates=mysql_query("SELECT DISTINCT `date` FROM `zakaz` WHERE `show`={$old} ORDER BY `date`;");
  $Nd=0;
  while ($date = mysql_fetch_array($DBdates))
    {
	$Nd++;
	$DBsp=mysql_query("SELECT `sp_name` FROM `zakaz` WHERE `date`='{$date['date']}' LIMIT 1;");
	$sp_name = mysql_fetch_array($DBsp);
	$dates[$Nd]=$date['date'];
	$sp_names[$Nd]=$sp_name['sp_name'];
	};
?>
<br> <?//Подключаем скрипт переключения элемента списка (На jquery)?>
<script type='text/javascript' src='ChoseDiv.js'></script>
<?//Выводим список дат?>
<select id="date_s" class=input size=1 onchange="ShowDiv()">
<? if(1==$old) { echo " <option value='0'>== Новые записи ==</option>";};?>
<?
for ($i=1;$i<=$Nd;$i++)
  {  
  $str = $dates[$i];
  foreach ($months as $x=>$y)
	{
    $str = str_replace($x, $y, $str);
	};
  echo "  <option value='{$dates[$i]}'>{$str} – {$sp_names[$i]}</option>\n";
  };
?>
</select>
<br><br>
<? 
//Выводим <div> для всплывающего списка
echo "<div id='OrderList' style=\"display: block;\">\n";
  include "tickets_JQ_server.php?date=0";
echo "  </div>\n";
?>

</table>
<br>
<?
if(0==$old) {echo "<a href='index.php' class=button-ticket>Текущие заказы</a>";} else {echo "<a href='index.php?old=true' class=button-ticket>Архив заказов</a>";};
?>
<br><br>
<?
/*
<div>
  <p> Служебные </p>
  <a onclick="ShowAUS('show_text', '0', '0')" class=JQlink>Показать окно</a>
</div>*/?>
<div id=pop-up-bkgd class=PUBG></div>
<div id=pop-up-window class=PUW>
  <div id=PUW_data>ТекстТекстТекст</div>
</div>
<?
include "../bottomadmin.php";
?>