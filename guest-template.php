<?
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
    hs.graphicsDir = '/sp/highslide/graphics/';
  </script>
 </head>


<body bgcolor="#FFFFFF" text="#000000" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style="margin:0 0 0 0;">
 <?
 include "head.php";
 ?>
    <div class=nt  align=justify>
      {form}
      <br /><br /><br />
      {read}Театр «Старый Дом» будет чрезвычайно признателен Вам, если Вы поделитесь с нами Вашими впечатлениями от просмотренных спектаклей.{/read}
      {write}Ваш отзыв записан!
      <br/>Он будет опубликова сразу после проверки.{/write}

      <br /><br />

      <b>{read}<a href="guest2.php">Оставить отзыв &gt;&gt;</a>{/read}
      {not-read}<a href="guest.php">Читать отзывы &gt;&gt;</a>{/not-read}</b>

      <br />
      {read}<br /><br />
      <span class=page_subtitle>Отзывы зрителей: {nav}</span>
      <br /><br />
      <div>{messages}</div>
      <span class=page_subtitle>Отзывы зрителей: {nav}</span>
      <br /><br /><br /><br />
      {/read}
      <br /><br /><br />


    </div>
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
