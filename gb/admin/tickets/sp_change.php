<?
  include "../../config.php";
  $title=$titlepage="������ � ��������.";
   // ������� ����� ��������
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"../admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"tickets.css\">
<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "../topadmin.php";
  echo "<div><a href='..' class=button-ticket>������� � ������ � �������� ������</a></div>";
  
?>
<br> <?//���������� ������ ������������ �������� ������ (�� jquery)?>
<? 
//������� <div> ��� ������������ ������
echo "<div id='OrderList'>\n";
// ����� HTML ��� ���������� ����.

//��������� ����� � �.�. 2 ��������� 
$tickets_a[0]="��";
$tickets_a[1]="";
$tickets_a[2]="�";
$tickets_a[3]="�";
$tickets_a[4]="�";
$tickets_a[5]="��";
$tickets_a[6]="��";
$tickets_a[7]="��";
$tickets_a[8]="��";
$tickets_a[9]="��";

//���������� ��� ��������� ���������
$preq[0]="/@8/";
$preq[1]="/@7/";
$preq[2]="/@9/";
$rep[0]="7";
$rep[1]="7";
$rep[2]="79";

//���������� ���������
$PR1="@\D@"; // ���������� ����
$PR2="~^@\d{6,7}$~"; //����������� ���������� ������
$PR3="@^\d{11}$@"; //����������� �������� ������

//��������� ����
$date=$_GET['date'];
//if (isset($_COOKIE['DateToShow'])) {$date=$_COOKIE['DateToShow'];} else {$date=0;};

//������ � ��
$tickets=mysql_query("SELECT * FROM `zakaz` WHERE `show`='1' ORDER BY `id_zak`");
  $AfterDo='mark';
  
//��������� �����
?>
<table class=bodytable border=1 cellpadding=5 cellspacing=0 bordercolorlight=gray bordercolordark=white>
  <tr  class=tableheader>
    <td><p class=zag2>�</p></td>
	<td><p class=zag2>���������</p></td>
	<td><p class=zag2>���</p></td>
	<td><p class=zag2>���-�� �������</p></td>
	<td><p class=zag2>�������</p></td>
	<td><p class=zag2>e-mail</p></td>
	<td colspan=2><p class=zag2>��������</p></td>
  </tr>

  <?
  $i=0;
  while ($zak = mysql_fetch_array($tickets))
    {
    $i++;
	$show=$zak['show'];
    echo "  <tr id='line_{$i}'>
    <td>{$i} </td>
	<td>{$zak['date']} � �{$zak['sp_name']}�</td>
	<td>{$zak['name']}</td>
	<td>{$zak['number']}</td>\n";
	if (''==$zak['phone']) { echo "    <td><p class=help> - </p></td>\n"; } else { echo "    <td>{$zak['phone']}</td>\n"; };
	if (''==$zak['email']) { echo "    <td><p class=help> - </p></td>"; } else { echo "    <td>{$zak['email']}</td>"; };
    echo "\n
    <td align=center>\n";
	
	//���������� ������ �� ��������� 7����������
	$phone=$zak['phone'];
	$phone=preg_replace($preq,$rep,"@".preg_replace($PR1,"",$phone));
    if (preg_match($PR2,$phone)) {$phone="";};
    if (!preg_match($PR3,$phone)) {$phone="";};
	
	if (''!=$zak['email']) {$email="mail_ReplaceVV2PPI({$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."');";} else {$email="";};
	if (''!=$phone) {$send_sms="send_sms_ReplaceVV2PPI({$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."','{$phone}');";} else {$send_sms="";};

	?>
		<a class=JQlink onclick="<?=$email." ".$send_sms." Mark('{$AfterDo}', {$i}, 'false', {$zak['id_zak']},'".md5($zak['id_zak'].$zak['name'])."');"?>"><img src=mail.png>
		
			</td>
  </tr><?
  };
  $tickets_count=mysql_query("SELECT SUM(`number`) AS sum FROM `zakaz` WHERE `show`=1;");
  $zak_tickets = mysql_fetch_array($tickets_count);
  $zb=$zak_tickets['sum'];
  if($zb==""){$zb="0";};
  ?>
    <tr  class=tableheader>
    <td colspan=2><p class=zag2>�����:</p></td>
	<td colspan=5><p class=zag2><?=$zb;?> �����<?=$tickets_a[$zb%10];?></p></td>
  </tr>
</table>
<br>
<a href='print.php?date=<?=$date;?>' class=button-ticket>����������</a> 
<?

echo "  </div>\n";
?>

</table>
<br>
<br>
<?
/*
<div>
  <p> ��������� </p>
  <a onclick="ShowAUS('show_text', '0', '0')" class=JQlink>�������� ����</a>
</div>*/?>
<div id=pop-up-bkgd class=PUBG></div>
<div id=pop-up-window class=PUW>
  <div id=PUW_data>���������������</div>
</div>
<?
include "../bottomadmin.php";
?>