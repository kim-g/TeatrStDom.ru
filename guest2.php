<?php


  ///////////////////////////////////////////////////
  // Гостевая книга с использованием MySQL
  // 2003-2004 (C) IT-студия SoftTime (http://www.softtime.ru)
  // Симдянов И.В. (simdyanov@softtime.ru)
  // Кузнецов М.В. (kuznetsov@softtime.ru)
  // Голышев С.В. (softtime@softtime.ru)
  ///////////////////////////////////////////////////
include "gb/config.php";
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "«Жалобная книга»";						//Выбранный пункт MainMenu
$Page_SubTitle = $Page_Menu;			//Название под шапкой.	
  
session_start();

$sid_add_theme = session_id();
// Устанавливаем соединение с базой данных
if (!$_SESSION['gbkey'] || $_SESSION['gbkey']!= gbkey(@gbadmin,@gbpass,$_SERVER['REMOTE_ADDR'])) {
	$gbok=false;
}else{
	$gbok=true;
}

$error = "";
$action = "";
// Возвращаем значение переменной action, переданной в урле
$action = $_POST["action"];
// Если оно не пусто - добавляем сообщение в базу данных
if (!empty($action)) 
{
  // Проверяем совпадает ли идентификатор сессии с
  // переданным в форме - защита а авто-постинга
  if($sid_add_theme != $_POST['sid_add_theme'])
  {
    $action = ""; 
    $error = $error."<LI>Ошибка добавления сообщения в гостевую книгу\n";
  }
  // Проверяем сообщение на слишком длинные слова
  $lenmsg = strlen($msg);
  $templen = 0;
  $temp = strtok($msg, " ");
  if (strlen($msg)>60)
  {
    while ($templen < $lenmsg)
    { 
      if (strlen($temp)>60)
      {
        $action = ""; 
        $error = $error."<LI>Текст сообщения содержит слишком много символов без пробелов\n";
        break;
      }
      else
      {
        $templen = $templen + strlen($temp) + 1;
      }
      $temp = strtok(" ");            
    }       
  }
  
  // Проверяем правильность ввода информации в поля формы
  if (empty($_POST["msg"])) 
  {
    $action = ""; 
    $error = $error."<LI>Вы не ввели сообщение\n";
  }
  if (empty($_POST["name"])) 
  {
    $action = ""; 
    $error = $error."<LI>Вы не ввели имя\n";
  }

  // При помощи регулярных выражений проверяем правильность ввода e-mail
  if(!empty($_POST["email"]))
  {
    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST["email"]))
    {
      $action = "";
      $error = $error."<LI>Неверно введен е-mail.&nbsp Введите e-mail в виде <i>something@server.com</i> \n";
    }
  }
  
  // Обрабатываем HTML-тэги и скрипты в сообщении и информации
  // об авторе, ограничиваем объём сообщения
  $name = substr($_POST["name"],0,128);
  $name = htmlspecialchars(stripslashes($name));
  $city = substr($_POST["city"],0,32);
  $city = htmlspecialchars(stripslashes($city));
  $email = substr($_POST["email"],0,32);
  $email = htmlspecialchars(stripslashes($email));
  $url = substr($_POST["url"],0,60);
  $url = htmlspecialchars(stripslashes($url));
  $msg=trim($_POST["msg"]);
//  $msg = substr($_POST["msg"],0,1024);
  $msg = htmlspecialchars(stripslashes($msg));
  $sp=@$_POST['sp'];
  if (!$SPEKTAKL[$sp]) $sp='';
  
  // Добавляем протокол в url, если пользователь забыл это сделать сам
  $url = strtr($url, "HTPF", "htpf");
  if (trim($url)!="")
  { 
    if (strtolower((substr($url, 0, 7))!="http://") && (strtolower(substr($url, 0, 7))!="ftp://")) $url="http://".$url;
  }   
      
  // Пытаемся вырезать мат, насколько это возможно ;-)
  $search_bad_words = array("'хуй'si","'пизд'si","'ёб'si",
                          "'сука'si","'суки'si","'дроч'si","'хуя'si","'ссуч'si");
  $replace = array("*","*","*","*","*","*","*","*");
  $msg = preg_replace($search_bad_words,$replace,$msg);
  $name = preg_replace($search_bad_words,$replace,$name);
  $city = preg_replace($search_bad_words,$replace,$city);

  if (empty($error)) 
  {
    $msg = nl2br($msg);
    // Обрабатываем встроенные тэги
    $msg = str_replace("[u]","<u>",$msg);
    $msg = str_replace("[U]","<u>",$msg);
    $msg = str_replace("[i]","<i>",$msg);
    $msg = str_replace("[I]","<i>",$msg);
    $msg = str_replace("[b]","<B>",$msg);
    $msg = str_replace("[B]","<B>",$msg);
    $msg = str_replace("[sub]","<SUB>",$msg);
    $msg = str_replace("[SUB]","<SUB>",$msg);
    $msg = str_replace("[sup]","<SUP>",$msg);
    $msg = str_replace("[SUP]","<SUP>",$msg);
    $msg = str_replace("[/u]","</u>",$msg);
    $msg = str_replace("[/U]","</u>",$msg);
    $msg = str_replace("[/i]","</i>",$msg);
    $msg = str_replace("[/I]","</i>",$msg);
    $msg = str_replace("[/b]","</B>",$msg);
    $msg = str_replace("[/B]","</B>",$msg);
    $msg = str_replace("[/SUB]","</SUB>",$msg);
    $msg = str_replace("[/sub]","</SUB>",$msg);
    $msg = str_replace("[/SUP]","</SUP>",$msg);
    $msg = str_replace("[/sup]","</SUP>",$msg);
    $msg = preg_replace("@\[url\](.*)\[/url\]@s","<a href='\\2'>\\2</a>\\3",$msg);
    $msg = str_replace("\n"," ",$msg);
    $msg = str_replace("\r"," ",$msg);
    // Заменяем все одинарные кавычки обратными
    // защита от инъекционных запросов
    $name = str_replace("'","`",$name);
    $city = str_replace("'","`",$city);
    $email = str_replace("'","`",$email);
    $url = str_replace("'","`",$url);
    $msg = str_replace("'","`",$msg);
    // Запрос к базе данных на добавление сообщения
	$showhide= $gbok ? 'show' : 'hide';

    $query = "INSERT INTO guest (id_msg,name,city,email,url,msg,answer,puttime,hide,sp) VALUES (0,
                                        '$name',
                                        '$city',
                                        '$email',
                                        '$url',
                                        '$msg',
                                        '-',
                                        NOW(),
                                        '$showhide','".$sp."');";
    if(mysql_query($query))
    {
      // Если в конфигурационном файле $sendmail = true отправляем уведомление
      if($sendmail)
      {
        $header1 = "From: \"Жалобная книга\" <gb@teatrstdom.ru>;\r\nContent-type: text; charset=utf-8;\r\n";
		$thm = "guestbook - a new post";
        $msg = "post: $msg\nname: $name";
        mail($valmail, $thm, $msg, $header1);
      }
	  if ($gbok){
		  header("Location: /guest.php?nc=".rand());
	  }else{
		$par=array();
		$par['form']=$par['nav']=$par['messages']='';
		$par['write']=1;$par['not-write']=0;
		$par['read']=0;$par['not-read']=1;
		echo template( 'guest-template.html', $par );
	  }
      exit();
    }
    else
    {
      // Выводим сообщение об ошибке в случае неудачи
      echo "<a href='guest.php'>Вернуться</a>";
	  puterror("Не удалось записать сообщение. Пожалуйста попробуйте позже...");
      exit();
    }
  }
}

if (empty($action)) {
	$par=array();
	//ob_start();
?>
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.". ".$Page_Menu;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
  <link rel="stylesheet" type="text/css" href="guest.css">
  <script type="text/javascript" src="/sp/highslide/highslide.js"></script>
  <link rel="stylesheet" type="text/css" href="/sp/highslide/highslide.css" />
  <script type="text/javascript">
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = 'highslide/graphics/';
  </script>
 </head>


<body bgcolor="#FFFFFF" text="#000000" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style="margin:0 0 0 0;">
 <?
 include "head.php";
 ?>

<style type="text/css"><!--
<?include "gb/guestbook.css"?>
--></style>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<input type=hidden name=sid_add_theme value='<?php echo $sid_add_theme; ?>'>
<input type=hidden name=action value=post>
<table cellspacing="0" cellpadding="0"><tr valign="top"><td>
<table border="0" align="center" cellpadding="6" cellspacing="0">
    <tr valign="top">
        <td colspan="3" height="30" class="nt"><br/>Сообщение будет опубликовано после проверки!
        </td>
    </tr>
    <tr>
        <td width="50"><p class=ptd><b><em class=em>Имя *</em></b></td>
        <td><input type=text name=name maxlength=128 size=25 value='<? echo $name; ?>'></td>
        <td rowspan="3" width="120">
            <p class=help>* Красным цветом выделены поля, обязательные для заполнения
        </td>
    </tr>
    <tr>
        <td><p class=ptd><b>&nbsp;&nbsp;&nbsp;Город</b></td>
        <td><input type=text name=city maxlength=32 size=25 value='<? echo $city; ?>'></td>
    </tr>
    <tr>
        <td><p class=ptd><b>&nbsp;&nbsp;&nbsp;<nobr>E-mail</nobr></b></td>
        <td><input type=text name=email size=25 maxlength=32 value='<? echo $email; ?>'></td>
    </tr>
    <tr>
        <td><p class=ptd><b>&nbsp;&nbsp;&nbsp;URL</b></td>
        <td colspan="2"><input type=text size=40 name=url maxlength=36 value='<? echo $url; ?>'></td>
    </tr>

    <tr>
        <td colspan="3" height="10"><nop></td>
    </tr>   

    <tr>
        <td colspan="3">
            <p class=ptd><b>Спектакль</b><br>
            <select name="sp" style="width:350px;">
<?foreach ($SPEKTAKL as $k=>$v) {
		$sel=''; if ($sp==$k) $sel='selected="1"';
		echo "<option value=\"$k\" $sel>$v</option>";
}
?>

			</select></p>
        </td>
    </tr>   


    <tr>
        <td colspan="3">


            <p class=ptd><b><em class=em>Сообщение *<em></b><br>
            <textarea cols=42 rows=5 name=msg><? echo $msg; ?></textarea></p>
        </td>
    </tr>   
    <tr>
        <td colspan="3" class="nt">
            <input type="submit" value="Добавить">&nbsp;&nbsp;&nbsp;
			<?if ($gbok){?>!!!вы админ и сообщение добавится без премодерации!!!<?}?>
        </td>
    </tr>           
</table>
</td><td>
<table border="0" cellspacing="1" cellpadding="4">
    <tr align="left"><td><p class=ptext><u><i><b><nobr>Поддерживаемые  тэги:</nobr></b></i></u></td></tr>
    <tr><td><p class=ptext><nobr>[b]<b>Жирный</b>[/b]</nobr></td></tr>
    <tr><td><p class=ptext><nobr>[i]<i>Наклонный</i>[/i]</nobr></td></tr>
    <tr><td><p class=ptext><nobr>[u]<u>Подчеркнутый</u>[/u]</nobr></td></tr>
    <tr><td><p class=ptext><nobr>[sup]<sup>Верхний индекс</sup>[/sup]</nobr></td></tr>
    <tr><td><p class=ptext><nobr>[sub]<sub>Нижний индекс</sub>[/sub]</nobr></td></tr>   
</table>
</td></tr></table>
</form>

 <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>

<?php
// Выводим сообщение об ошибке
if (!empty($error)) {
print "<P><font color=green>Во время добавления записи произошли следующие ошибки: </font></P>\n";
print "<UL>\n";
print $error;
print "</UL>\n";
}
	$par['form']=ob_get_clean();
	$par['nav']=$par['messages']='';
	$par['write']=0;$par['not-write']=1;
	$par['read']=0;$par['not-read']=1;
	
//	echo template('guest-template.html',$par);
}
?>