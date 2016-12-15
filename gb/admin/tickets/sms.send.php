<?php
$text=$_GET['text'];
$Number=$_GET['phone'];

/*
* В примере использован код php-класса SmsServiceApi.class.php для работы с API.
* Исходный код доступен на странице http://my.sms-7.ru/help/api/sample
*/
require_once 'sms.methods.php';
// настройки API
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
  
  // параметры
  $api_params = array(
	'pid' => API_PID,
	'sender' => 'Stary Dom',
	'to' => $Number,
	'text' => $text
	);

  // отправка
  if (md5($ttd['id_zak'].$ttd['name'])==$key)
    {
    $result = $Api->send('delivery.sendSms', $api_params);
    // результат
	echo "OK";
	}
   else
	{
	?>
  <p class=zag2>ОШИБКА!!!</p>
  <p class=text>Контрольные суммы не совпадают<p>
  <br>
  <p><a onclick="HideAUS()" class=button-ticket>Закрыть</a></p>
    <?
	};
	break;
	};
  };

?>