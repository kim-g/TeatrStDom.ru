<?
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

  include "../config.php";
  $title=$titlepage="����� ������ �������.";
   // ������� ����� ��������
  $ScryptToAdd="<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "topadmin.php";
  echo "<div><a href='index.php' class=link>������� � ������ � �������� ������</a></div>";
  
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
  echo "  <option value='{$i}'>{$str} � {$sp_names[$i]}</option>\n";
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
    <td><p class=zag2>�</p></td>
	<td><p class=zag2>���</p></td>
	<td><p class=zag2>���-�� �������</p></td>
	<td><p class=zag2>�������</p></td>
	<td><p class=zag2>e-mail</p></td>
	<td colspan=2><p class=zag2>��������</p></td>
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
    <td colspan=2><p class=zag2>�����:</p></td>
	<td colspan=5><p class=zag2><?=$zak_tickets['sum'];?> �������</p></td>
  </tr>
</table>
<br>
<a href='print.php?date=<?=$dates[$table];?>' class=link>����������</a>
<br><br>
<a href='aus.php?do=open_date&date=<?=$dates[$table];?>' class=link>������� ������ �� ���� ���������</a>
</div>
<?
  };
?>

</table>
<br>
<a href='tickets.php' class=link>������� ������</a>
<?
include "bottomadmin.php";
?>