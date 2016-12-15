<?
$tele=$_POST["tele"];
  include "../../config.php";
  $title=$titlepage="Работа с билетами.";
   // Выводим шапку страницы
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"../admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"tickets.css\">
<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "../topadmin.php";
?>
<form accept-charset="ANSI" action="Telephones.php" method="post" name="sms.text">
 <p class=text>Введите текст:</p> 
 <input type="text" name="tele" >
 <input type="submit" name="send" value="Отправить">
</form>
<?
$tickets=mysql_query("SELECT * FROM `zakaz` ORDER BY `id_zak`");
?>
<table class=bodytable border=1 cellpadding=5 cellspacing=0 bordercolorlight=gray bordercolordark=white>
  <tr  class=tableheader>
    <td><p class=zag2>t0</p></td>
	<td><p class=zag2>t1</p></td>
  </tr>
<?
$preq[0]="/@8/";
$preq[1]="/@7/";
$preq[2]="/@9/";
$rep[0]="+7";
$rep[1]="+7";
$rep[2]="+79";
if ($tele!="")
 {
 $t1=preg_replace($preq,$rep,"@".preg_replace("@\D@","",$tele));
 if (preg_match("~^@\d{6,7}$~",$t1)) {$t1="";};
 if (!preg_match("~^\+\d{11}$~",$t1)) {$t1="Ошибка ввода!";};
 ?>
  <tr>
    <td><?=$tele?></td>
    <td><?=$t1?></td>
  </tr> 
 <?
 };
while ($zak = mysql_fetch_array($tickets))
{
$tele=$zak["phone"];
$t1="";
if ($tele!="")
  {
  $t1=preg_replace($preq,$rep,"@".preg_replace("@\D@","",$tele));
  if (preg_match("~^@\d{7}$~",$t1)) {$t1="";};
  if (!preg_match("~^\+\d{11}$~",$t1)) {$t1="";};
  }; 
?>
  <tr>
    <td><?=$tele?></td>
    <td><?=$t1?></td>
  </tr>
<?
}
?>
</table>
<?  

include "../bottomadmin.php";
?>