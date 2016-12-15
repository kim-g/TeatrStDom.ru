<?
$DelID = $_GET['id'];
$DelKey = $_GET['key'];
$do = $_GET['do'];
$date = $_GET['date'];
$line = $_GET['line'];

include "../../config.php";
switch ($do)
{
case 'delete_item': {  $TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$DelID}' LIMIT 1;");
  $ttd = mysql_fetch_array($TicketsToDelete);
  echo "<div class=zag2>Вы уверены, что хотие удалить следующий заказ:
<table class=bodytable border=1 cellpadding=5 cellspacing=0 bordercolorlight=gray bordercolordark=white>
  <tr  class=tableheader>
    <td><p class=zag2>№</p></td>
	<td><p class=zag2>Имя</p></td>
	<td><p class=zag2>Кол-во билетов</p></td>
	<td><p class=zag2>Телефон</p></td>
	<td><p class=zag2>e-mail</p></td>
  </tr>
    <tr>
    <td>1</td>
	<td>{$ttd['name']}</td>
	<td>{$ttd['number']}</td>\n";
	if (''==$ttd['phone']) { echo "    <td><p class=help> - </p></td>\n"; } else { echo "    <td>{$ttd['phone']}</td>\n"; };
	if (''==$ttd['email']) { echo "    <td><p class=help> - </p></td>"; } else { echo "    <td>{$ttd['email']}</td>"; };
    echo "  </tr>
</table>
<p align=center>
  <a onclick='delete_order({$DelID},\"{$DelKey}\",{$line})' class=button-ticket>Да</a> 
  <a onclick='HideAUS()' class=button-ticket>Нет</a>
</p>
</div>";
  break;};
case 'hide_date':
  {
  ?>
  <p class=zag2>Вы уверены, что хотите скрыть все заказы на эту дату?</p>
  <p align=center>
    <a href='action.php?do=hide&date=<?=$DelID;?>' class=button-ticket>Да</a> 
	<a onclick="HideAUS()" class=button-ticket><b>Нет</b></a>
  </p>
  <?
  break;
  };
case 'open_date':
  {
  ?>
  <p class=zag2>Вы уверены, что хотите открыть все заказы на эту дату?</p>
  <p class=text>Они, скорее всего, уже устарели и не представляют ценности.<p>
  <p align=center>
    <a href='action.php?do=open&date=<?=$DelID;?>' class=button-ticket>Да</a> 
	<a onclick="HideAUS()" class=button-ticket><b>Нет</b></a>
  </p>
  <?
  break;
  };
case 'show_text':
  {
  ?>
  <div class=zag2>Вы уверены, что хотите открыть все заказы на эту дату?<br>
  Они, скорее всего, уже устарели и не представляют ценности.
  <br>
  <a onclick="HideAUS()" class=button-ticket><b>Закрыть</b></a>
  </div> 
  <?
  break;
  };
};
?>