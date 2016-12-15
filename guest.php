<?php
  ///////////////////////////////////////////////////
  // Гостевая книга с использованием MySQL
  // 2003-2004 (C) IT-студия SoftTime (http://www.softtime.ru)
  // Симдянов И.В. (simdyanov@softtime.ru)
  // Кузнецов М.В. (kuznetsov@softtime.ru)
  // Голышев С.В. (softtime@softtime.ru)
  ///////////////////////////////////////////////////
define("am",true);  
include "gb/config.php";
include "main-texts.php"; 	//Добавление глобальных текстовых констант.


$query = "SELECT count(*) FROM guest WHERE hide = 'show'";
$tot = @mysql_query($query);
$count= @mysql_result($tot,0);

$page_num=intval($_GET['page']);
$start=$page_num * $pnumber;
$query = "SELECT * FROM guest WHERE hide = 'show' 
ORDER BY puttime DESC LIMIT $start, $pnumber";
$thm = mysql_query($query);
if(!$tot || !$thm) puterror("Проблемы на сервере хостинга<br />Пожалуйста, зайдите позже","mysql_query fails");
if ($count && 0==mysql_num_rows($thm)) header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');

$par=array();
$pages= include1('pages', $tmp=array(
'link'=>$_SERVER['PHP_SELF']
,'page_num'=>$page_num
,'count_page'=>$pnumber
,'count'=>$count) );
$par['nav']=$pages;

ob_start();

while($themes = mysql_fetch_array($thm)) {
    // Вытаскиваем переменные из базы данных
    $name = trim($themes['name']);
    $city = trim($themes['city']);
    $email = trim($themes['email']);
    $url = trim($themes['url']);
    $msg = msgdo($themes['msg']);
    $answer = trim($themes['answer']);
	$puttime=date("d.m.y", strtotime($themes['puttime']));
?>
       <b><?=$puttime?></b><?if ($a=$themes['sp']) {
	$spt=$SPEKTAKL[ $a ];
	$spa='/sp/'.$a.'.php';
	echo ", спектакль <a href=\"$spa\">$spt</a>";
}?>
      <br><br>

      <?=$msg?>

      <br><br>
      <div style="text-align:right">
	   <i><?if ($email){?>
	   <a href="mailto:<?=$email?>"><?=$name?></a> <?}else{?><?=$name?><?}?>
<?if ($city){?>, город: <?=$city?><?}?>
<?if ($url){?>, сайт: <a href="<?=$url?>"><?=$url?></a><?}?></i></div>
<?if (!empty($answer) && $answer != "-" ) {
	print "<div style=\"background:#CCCCCC;padding:10px;margin-top:10px;\">Ответ:&nbsp$answer</div>";
}
?>
      <br/><br/><br/>
<?
}
//$par['nav']
$Messages=ob_get_clean();

include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "«Жалобная книга»";						//Выбранный пункт MainMenu
$Page_SubTitle = "«Жалобная книга» театра «Старый дом»";			//Название под шапкой.

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
     <div class=nt  align=justify>
      <br><br><br>
      Театр «Старый Дом» будет чрезвычайно признателен Вам, если Вы поделитесь с нами Вашими впечатлениями от просмотренных спектаклей.
      <br><br>

      <b><a href="guest2.php">Оставить отзыв &gt;&gt;</a></b>
      <br><br><br>
      <span class=stress_big_bold_colour>Отзывы зрителей: <?=$pages;?></span>
      <br /><br />
      <div>
<?=$Messages;?>
	  </div>
      <span class=stress_big_bold_colour>Отзывы зрителей: <?=$pages;?></span>
      <br><br><br><br><br><br><br>
     </div> 
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
