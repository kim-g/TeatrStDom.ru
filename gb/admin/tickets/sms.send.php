<?php
$text=$_GET['text'];
$Number=$_GET['phone'];

/*
* � ������� ����������� ��� php-������ SmsServiceApi.class.php ��� ������ � API.
* �������� ��� �������� �� �������� http://my.sms-7.ru/help/api/sample
*/
require_once 'sms.methods.php';
// ��������� API
define ('API_UID', '18125');
define ('API_KEY', 'bbdfk5el8b');
define ('API_PID', '19725');

$Api = new SmsServiceApi(API_UID, API_KEY);

switch($text)
  {
  case "Report": 
    { 
	include "../../config.php";
	include "text.sms.php";
  $id=$_GET["id"];
  $key=$_GET["key"];
  
  $TicketsToDelete=mysql_query("SELECT * FROM `zakaz` WHERE `id_zak`='{$id}' LIMIT 1;");
  $ttd = mysql_fetch_array($TicketsToDelete);
  
  $date=substr($ttd['date'], 0, 10);
  $time=substr($ttd['date'], 11, 16);
  $text=str_replace("{date}",$date,str_replace("{time}",$time, $TextSMS));
  
  // ���������
  $api_params = array(
	'pid' => API_PID,
	'sender' => 'Stary Dom',
	'to' => $Number,
	'text' => $text
	);

  // ��������
  if (md5($ttd['id_zak'].$ttd['name'])==$key)
    {
    $result = $Api->send('delivery.sendSms', $api_params);
    // ���������
	echo "OK";
	}
   else
	{
	?>
  <p class=zag2>������!!!</p>
  <p class=text>����������� ����� �� ���������<p>
  <br>
  <p><a onclick="HideAUS()" class=button-ticket>�������</a></p>
    <?
	};
	break;
	};
  };

?>