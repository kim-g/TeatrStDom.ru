<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "Наши координаты";		//Выбранный пункт MainMenu
$Title_End 	= " ".$Page_Menu;		//Окончание заголовка страницы
$Page_SubTitle = $Page_Menu;			//Название под шапкой.	


?>
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.$Title_End;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
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
    
     <!-- #BeginEditable "texy" --> 
     <div class=nt  align=justify>
      <img src="Img/urfu.gif"> 
      <br><br>
	   <div style="float: right"> 
	    <a onclick="return hs.expand(this);" class="highslide" href="Img/map.jpg">
		  <img src="Img/map_m.jpg" title="Увеличить >>" width="300" height="229" border="0" align="right" vspace="1" hspace="10">
		</a> 
        <div class='highslide-caption'>
		  <a href="#" onclick="return hs.previous(this)" title="Previous (left arrow key)">&lt;&lt; Предыдущая</a> 
		  <a href="#" onclick="return hs.next(this)" title="Next (right arrow key)">Следующая &gt;&gt;</a> 
		</div>
      </div>
       
      <b>Aдрес:</b> г. Екатеринбург,<br>
      ул. Софьи Ковалевской, 5,<br>
      УрФУ им. первого Президента России Б.Н. Ельцина,<br>
      8-й учебный корпус (УралЭНИН), 2-й этаж, <br>
      оф. Т-225
      <br><br>
      <b> Тел.:</b> (343) 375-44-94, оф. Т-225
      <br><br>
      <b>e-mail:</b> <A href="mailto:<?=$Bottom_E_Mail;?>"><?=$Bottom_E_Mail;?></a>
      <br><br>
      <b> Наша группа «В Контакте»:</b> 
      <a href="http://vk.com/club573926" target="_blank">Театр «Старый дом»</a> 
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

     </div> 
     <!-- #EndEditable -->
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
