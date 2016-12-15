<?
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
  $title=$titlepage="Архив заказа билетов.";
   // Выводим шапку страницы
  $ScryptToAdd="<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "topadmin.php";
  echo "<div><a href='index.php' class=link>Перейти к работе с гостевой книгой</a></div>";
  
  $DBdates=mysql_query("SELECT DISTINCT `date` FROM `zakaz` WHERE `show`=0 ORDER BY `date`;");
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
<br>
<script type='text/javascript' src='ChoseDiv.js'></script>
<select id="date_s" class=input size=1 onchange="ShowDiv(<?=$Nd; ?>,1)">
<?
for ($i=1;$i<=$Nd;$i++)
  {  
  $str = $dates[$i];
  foreach ($months as $x=>$y)
	{
    $str = str_replace($x, $y, $str);
	};
  echo "  <option value='{$i}'>{$str} – {$sp_names[$i]}</option>\n";
  };
?>
</select>
<br><br>
<? 
for ($table=1;$table<=$Nd;$table++)
  {
  if ($table==1){$disp='block';} else {$disp='none';};
  echo "<div id='{$table}' style=\"display: {$disp};\">\n";

  $tickets=mysql_query("SELECT * FROM `zakaz` WHERE `date`='{$dates[$table]}' ORDER BY `id_zak`");
  echo "<table class=bodytable border=1 cellpadding=5 cellspacing=0 bordercolorlight=gray bordercolordark=white>
  <tr  class=tableheader>
    <td><p class=zag2>№</p></td>
	<td><p class=zag2>Имя</p></td>
	<td><p class=zag2>Кол-во билетов</p></td>
	<td><p class=zag2>Телефон</p></td>
	<td><p class=zag2>e-mail</p></td>
	<td colspan=2><p class=zag2>Операции</p></td>
  </tr>\n";

  $i=0;
  while ($zak = mysql_fetch_array($tickets))
    {
    $i++;
    echo "  <tr>
    <td>{$i} </td>
	<td>{$zak['name']}</td>
	<td>{$zak['number']}</td>\n";
	if (''==$zak['phone']) { echo "    <td><p class=help> - </p></td>\n"; } else { echo "    <td>{$zak['phone']}</td>\n"; };
	if (''==$zak['email']) { echo "    <td><p class=help> - </p></td>"; } else { echo "    <td>{$zak['email']}</td>"; };
    echo "\n
    <td align=center>\n";
	if ((!$zak['sent']) && (''!=$zak['email']))  /* href='mail.php?id={$zak['id_zak']}&key=".md5($zak['id_zak'].$zak['name'])."'*/
	  { echo "      <a><img onclick='mail(\"{$zak['id_zak']}\",\"".md5($zak['id_zak'].$zak['name'])."\",\"d0i{$i}\",\"mailed.png\")' src=mail.png name='d0i{$i}'></a>\n"; }
	else
	  { echo "<img src=mailed.png>"; };
    echo "	  <a href='aus.php?do=delete_item&id={$zak['id_zak']}&key=".md5($zak['id_zak'].$zak['name'])."'><img src=delete.png></a>
	</td>
  </tr>\n";
    };
  $tickets_count=mysql_query("SELECT SUM(`number`) AS sum FROM `zakaz` WHERE `date`='{$dates[$table]}';");
  $zak_tickets = mysql_fetch_array($tickets_count);
  ?>
    <tr  class=tableheader>
    <td colspan=2><p class=zag2>ИТОГО:</p></td>
	<td colspan=5><p class=zag2><?=$zak_tickets['sum'];?> билетов</p></td>
  </tr>
</table>
<br>
<a href='print.php?date=<?=$dates[$table];?>' class=link>Напечатать</a>
<br><br>
<a href='aus.php?do=open_date&date=<?=$dates[$table];?>' class=link>Открыть заказы на этот спектакль</a>
</div>
<?
  };
?>

</table>
<br>
<a href='tickets.php' class=link>Текущие заказы</a>
<?
include "bottomadmin.php";
?>