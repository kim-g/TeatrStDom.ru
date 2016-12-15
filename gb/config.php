<?php
  ///////////////////////////////////////////////////
  // Гостевая книга с использованием MySQL
  // 2003-2004 (C) IT-студия SoftTime (http://www.softtime.ru)
  // Симдянов И.В. (simdyanov@softtime.ru)
  // Кузнецов М.В. (kuznetsov@softtime.ru)
  // Голышев С.В. (softtime@softtime.ru)
  ///////////////////////////////////////////////////
ini_set('display_errors',$_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? true : false);  

define("gbadmin","stary-dom");
define("gbpass","theatre");

$SPEKTAKL=array();
$SPEKTAKL['']="--сообщение не относится к спектаклю--";
$SPEKTAKL['mb']="М. Булгаков «Мольер»";
$SPEKTAKL['vv']="И. Тургенев «Вешние воды»";
$SPEKTAKL['rev']="Н. Гоголь «Ревизор»";
$SPEKTAKL['vj']="М. Зощенко «Весёлая жизнь»";
$SPEKTAKL['jen']="Н. Гоголь «Женитьба»";
$SPEKTAKL['je_s']="А. Чехов «Житейские эпизодики», «Супруга»";
$SPEKTAKL['kpz']="Ф.К. Крёц «Концерт по заявкам»";
$SPEKTAKL['ppi']="Н. Гоголь «Повесть о том, как поссорился Иван Иванович с Иваном Никифоровичем»";
$SPEKTAKL['pp']="«Проба пера» (\"Актёрский полигон\" Студии Нового приёма-09 и Молодого состава труппы)";




  
  // Имя сервера базы данных, например $dblocation = "mysql28.noweb.ru"
  // сейчас выставлен сервер локальной машины
  $dblocation = "localhost";
  // Имя базы данных, на вашем хостинге или локальной машине
  // На разных хостингах базы данных создаются по-разному: посредством
  // web-интерфейса, по запросу администратору, командой SQL (create database guest;).
  $dbname = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "u5474_std";
  // Имя пользователя... Скорее всего будет совпадать с вашим доменным именем
  // у нас, например $dbuser = "softtime"; 
  $dbuser = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "u5474";
  // Пароль - в комментариях не нуждается ;-)
  $dbpasswd = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "nocev6rivol";
  include "db_config.php";
  /*$dblocation=$nameSERVER;
  $dbname=$nameDB;
  $dbuser=$nameUSER;
  $dbpasswd=$passUSER;*/
  
  // Число выводимых сообщений на странице
  $pnumber = 10;
  // Отправлять письмо на e-mail при добавлении нового сообщения
  // в гостевую книгу? Для включения данного сервиса исправите на true
  $sendmail = true;
  // e-mail на который следует отправлять сообщение
  $valmail = "amendelev@gmail.com,stary-dom@yandex.ru";
  // Версия системы
  $version = "1.2.1";

  // Соединяемся с сервером базы данных
header("Content-Type: text/html;charset=utf-8");

  $dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
  if (!$dbcnx)
  {
    echo( "<P>Проблемы на сервере хостинга. Пожалуйста, зайдите позже.</P>" );
    exit();
  }
  // Выбираем базу данных
  if (! @mysql_select_db($dbname,$dbcnx) )
  {
    echo( "<P>Проблемы на сервере хостинга. Пожалуйста, зайдите позже.</P>" );
    exit();
  }
mysql_query("SET NAMES utf8");


if (preg_match("@^/gb/admin/@i",$_SERVER['PHP_SELF'])) {
	session_start();
	if (@$_POST['gbexit']) {
		session_destroy();
		setcookie(session_name(),"",time()-3600);
		header("Location: /main.php");
		exit;
	}

	if (array_key_exists("gbadmin", $_POST)) {
		if ($_POST['gbadmin']==@gbadmin && $_POST['gbpass']==@gbpass) {
			$_SESSION['gbkey']=gbkey(@gbadmin,@gbpass,$_SERVER['REMOTE_ADDR']);
			$uri1=uri_nocache();
			header("Location: ".$uri1);
			exit;
		}else{
			echo_form(true);
			
			exit;
		}
	}
	
	if (!$_SESSION['gbkey'] || $_SESSION['gbkey']!= gbkey(@gbadmin,@gbpass,$_SERVER['REMOTE_ADDR'])) {
		echo_form();
		
		exit();
	}
	session_write_close();
}
function gbkey($name,$pass,$ip) {
	return md5($name.$pass.$ip);
}
function echo_form($err=null) {
//$ReLoad=true;
		if($ReLoad==true){$Config_Answer="Error: log in!"; exit;} else { // Для правильного отображения Ajax запросов перед "include '../config.php'" введите $ReLoad=true;
		echo "<html><head><title>Жалобная книга: админка. Театр Старый Дом</title></head><body>";
		echo "<form method=\"post\" action=\"".$_SERVER['REQUEST_URI']."\">";
		echo "<b>Жалобная книга: админка. Театр Старый Дом. {$ReLoad} {$Config_Answer}</b>";
		echo '<br/>Логин: <input type="text" name="gbadmin"/>';
		echo '<br/>Пароль: <input type="password" name="gbpass"/>';
		echo '<br/><input type="submit" value="Вход"/>';
		if ($err) echo "&nbsp;&nbsp; Неверно!";
		echo "</form>";
		echo "</body></html>";};
}
function uri_nocache() {
	$a=$_SERVER['REQUEST_URI'];
	$a=preg_replace("/#.*$/","",$a);
	$a=preg_replace("/([&?])nc=.*?(&|$)/","\\1", $a);
	if (false===strpos($a,"?")) $a=$a."?";
	if ("?"!=substr($a,-1) && "&"!=substr($a,-1)) $a=$a."&";
	$a=$a."nc=".rand();
	return $a;
}




// Небольшая вспомогательная функция, которая выводит сообщение об ошибке
// в случае ошибки запроса к базе данных
function puterror($message,$log=null){
	header($_SERVER['SERVER_PROTOCOL'].' 503 Service Unavailable');
	header('Content-type: text/html; charset=utf-8');
/*	$sapi_name = php_sapi_name();
	if ($sapi_name == 'cgi' || $sapi_name == 'cgi-fcgi') {
		header('Status: 503 Service Unavailable');
	} else {
		header($_SERVER['SERVER_PROTOCOL'].' 503 Service Unavailable');
	}*/

	echo <<<ERR
<html><head><META http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ПРОБЛЕМЫ НА СЕРВЕРЕ ХОСТИНГА! Театр Старый Дом. Екатеринбург</title>
</head>
<body>
<p>$message</p>
<br /><br />
<a href="/main.html">Перейти на главную страницу teatrstdom.ru</a>
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<hr />
<a href="http://teatrstdom.ru/main.html">teatrstdom.ru</a>
<br />Народный студенческий «Старый Дом»
</html>
ERR;
	ini_set('display_errors',false);
	if ($log) trigger_error($log);
	exit();
}

function msgdo($s) {
	$s=trim($s);
//	$s=nl2br($s);
	return $s;
}


function template($file,$par) {
	$text=file_get_contents($file);
//все messages должны быть пусты
	$sr=array();
	foreach (array("nav","messages","form") as $key) {
		$sr[ '{'.$key.'}' ]=@$par[$key] ? $par[$key] : "";
	}
	$text=str_replace( array_keys($sr), array_values($sr), $text);
	$se=array();$re=array();
	foreach (explode(',','read,not-read,write,not-write') as $tag) {
		if ($par[$tag]) {
			$se[]='@\{/?'.$tag.'\}@';$re[]='';
		}else{
			$se[]='@\{'.$tag.'\}.*?\{/'.$tag.'\}@s';$re[]='';
		};
	}
	
	$main=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/main.html');
	
	$itse='@<span class=nt><i>[^<+]+?СЕЗОН[^<+]+?<@';
	preg_match($itse,$main,$mainout);
	$itre=$mainout[0];
	$se[]=$itse; $re[]=$itre;
	
	
	
//	echo "<pre>".print_r($se,true)."</pre>";	
	$text=preg_replace($se,$re,$text);
// {/not-write} {/write} {/read} {/not-read}	
	
	return $text;
}

function include1($pt, $d) {
	ob_start();
	include $_SERVER['DOCUMENT_ROOT'].'/gb/'.$pt.'.inc.php';
	$text=ob_get_clean();
//	ob_end_clean();
	return $text;
}
function link_plus($link,$add) {
	if (!$add || $add=='page=0') return $link;
	if (false!==strpos($link,'?')) {
		$a=substr($link, -1);
		if ($a=='?'||$a=='&') $link.=$add;
		else $link.='&'.$add;
	}else{
		$link.='?'.$add;
	}
	return $link;
}



?>