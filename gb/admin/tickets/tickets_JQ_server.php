<?// Выдаёт HTML для конкретной даты.

//Инициализация БД
include "../../config.php";

//Окончания слова в м.р. 2 склонение 
$tickets_a[0]="ов";
$tickets_a[1]="";
$tickets_a[2]="а";
$tickets_a[3]="а";
$tickets_a[4]="а";
$tickets_a[5]="ов";
$tickets_a[6]="ов";
$tickets_a[7]="ов";
$tickets_a[8]="ов";
$tickets_a[9]="ов";

//Переменные для обработки телефонов
$preq[0]="/@8/";
$preq[1]="/@7/";
$preq[2]="/@9/";
$rep[0]="7";
$rep[1]="7";
$rep[2]="79";

//Регулярные выражения
$PR1="@\D@"; // Вычленение цифр
$PR2="~^@\d{6,7}$~"; //Определение городского номера
$PR3="@^\d{11}$@"; //Определение сотового номера

//Получение даты
$date=$_GET['date'];
//if (isset($_COOKIE['DateToShow'])) {$date=$_COOKIE['DateToShow'];} else {$date=0;};

//Запрос в БД
if($date==0)
  {$tickets=mysql_query("SELECT * FROM `zakaz` WHERE `sent`='0' ORDER BY `id_zak`");
  $AfterDo='hide';}
  else
  {$tickets=mysql_query("SELECT * FROM `zakaz` WHERE `date`='{$date}' ORDER BY `id_zak`");
  $AfterDo='mark';};
  
//Рисование шапки
?>
<table class=bodytable border=1 cellpadding=5 cellspacing=0 bordercolorlight=gray bordercolordark=white>
  <tr  class=tableheader>
    <td><p class=zag2>№</p></td>
	<td><p class=zag2>Спектакль</p></td>
	<td><p class=zag2>Имя</p></td>
	<td><p class=zag2>Кол-во билетов</p></td>
	<td><p class=zag2>Телефон</p></td>
	<td><p class=zag2>e-mail</p></td>
	<td colspan=2><p class=zag2>Операции</p></td>
  </tr>

  <?
  $i=0;
  while ($zak = mysql_fetch_array($tickets))
    {
    $i++;
	$show=$zak['show'];
    echo "  <tr id='line_{$i}'>
    <td>{$i} </td>
	<td>{$zak['date']} – «{$zak['sp_name']}»</td>
	<td>{$zak['name']}</td>
	<td>{$zak['number']}</td>\n";
	if (''==$zak['phone']) { echo "    <td><p class=help> - </p></td>\n"; } else { echo "    <td>{$zak['phone']}</td>\n"; };
	if (''==$zak['email']) { echo "    <td><p class=help> - </p></td>"; } else { echo "    <td>{$zak['email']}</td>"; };
    echo "\n
    <td align=center>\n";
	
	//Вычленение номера по структуре 7ХХХХХХХХХХ
	$phone=$zak['phone'];
	$phone=preg_replace($preq,$rep,"@".preg_replace($PR1,"",$phone));
    if (preg_match($PR2,$phone)) {$phone="";};
    if (!preg_match($PR3,$phone)) {$phone="";};
	
	if (''!=$zak['email']) {$email="mail({$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."');";} else {$email="";};
	if (''!=$phone) {$send_sms="send_sms({$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."','{$phone}');";} else {$send_sms="";};

	if ($email!="" || $send_sms!="") 
	  {
	  if ($zak['sent']) 
	    {
		echo "<img src=mailed.png>";
		}
	   else
	    {?>
		<a class=JQlink onclick="<?=$email." ".$send_sms." Mark('{$AfterDo}', {$i}, 'false', {$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."');"?>"><img src=mail.png>
		<?
		};
	  }
	 else
	  {
	  if ($zak['sent']) 
	    {
		echo "<img src=ok_1.png>";
		}
	   else
	    {?>
		<a class=JQlink onclick="<?="Mark('{$AfterDo}', {$i}, 'true', {$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."');"?>"><img src=OK.png>
		<?
		};
	  };
	/*if ((!$zak['sent']) && (''!=$zak['email']))  
	  { echo "      <a href=# onclick='mail({$i},{$zak['id_zak']},\"".md5($zak['id_zak'].$zak['name'])."\",0,\"{$AfterDo}\")'><img id='img_{$i}' src=mail.png></a>\n"; }
	else
	  { if (($zak['sent']) && (''!=$zak['email'])) { echo "<img src=mailed.png>"; }
        else
        {
		if ((!$zak['sent']) && (''==$zak['email']))  
	      {
		  echo "      <a href=# onclick='mail({$i},{$zak['id_zak']},\"".md5($zak['id_zak'].$zak['name'])."\",\"true\",\"{$AfterDo}\")'><img src=OK.png></a>\n";
		  }
		else
		  {
		  echo "<img src=ok_1.png>";
		  };
		};
	  };
	*/
    ?>	  
	<a class=JQlink onclick="ShowAUS('delete_item',<?=$zak['id_zak'];?>,'<?=md5($zak['id_zak'].$zak['name']);?>',<?=$i;?>)"><img src=delete.png></a>
	
	</td>
  </tr><?
  };
  $tickets_count=mysql_query("SELECT SUM(`number`) AS sum FROM `zakaz` WHERE `date`='{$date}';");
  $zak_tickets = mysql_fetch_array($tickets_count);
  $zb=$zak_tickets['sum'];
  if($zb==""){$zb="0";};
  ?>
    <tr  class=tableheader>
    <td colspan=2><p class=zag2>ИТОГО:</p></td>
	<td colspan=5><p class=zag2><?=$zb;?> билет<?=$tickets_a[$zb%10];?></p></td>
  </tr>
</table>
<br>
<a href='print.php?date=<?=$date;?>' class=button-ticket>Напечатать</a> 
<?
if($date!="0")
  { 
  if('1'==$show)
    { 
    echo "<a class=button-ticket onclick=\"ShowAUS('hide_date','{$date}','','')\">Скрыть заказы на этот спектакль</a>";
    }	
  else 
    {
	echo "<a class=button-ticket onclick=\"ShowAUS('open_date','{$date}','','')\">Открыть заказы на этот спектакль</a>";
	};
  };

?>
</div>
