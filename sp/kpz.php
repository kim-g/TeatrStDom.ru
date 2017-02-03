<?
//Добавление модулей в проект.
include "../main-texts.php";     //Добавление глобальных текстовых констант.
include "spectacle.php";    //Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu     = "Репертуар";            //Выбранный пункт MainMenu
$Play = "Концерт по заявкам";                //Название
$Page_SubTitle = Navigate($Play);			//Название под шапкой.

?>
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start." ".$Page_Menu.". «".$Play."»";?></title>
<!-- #EndEditable -->
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/common.css">
  <link rel="stylesheet" type="text/css" href="/sp/spectacle.css">
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
  include "../head.php";
  ?>
     <!-- #BeginEditable "texy" --> 
     <div class=nt align=justify> 
        <img src="img/kpz.jpg" width="200" height="196" alt="Концерт по заявкам" vspace="2" hspace="20" align="left"> 
        <span class=page_subtitle> 
		  Франц Ксавер Крёц<br>
          «Концерт по заявкам»<br><br>
          <i>Franz Xaver Kroetz<br>
          "Wunschkonzert"  (1972 г.)</i><br>
          2005 г. 
		</span> <br><br>
        Продолжительность спектакля <b>1</b> час.<br><br>
        <!-- <b><a href="../affiche.php">Ближайший показ &gt;&gt;</a></b><br>
        <b><a href="../order.php">Заказать билеты &gt;&gt;</a></b><br>
        <br>-->
        <b><a href="kpz_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
		<? Video("Видео","v74m6YwDEpw"); ?>
        <br><br><br><br>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td  width="85%" valign=top>
			  <div class=nt  align=justify>
			    Это спектакль по очень необычной пьесе. Автор пьесы - немецкий драматург Ф.К.Крёц (род. в  1946 г.)  предпослал ей такую странную характеристику: «Пьеса не преследует цели вызвать бурную  реакцию зрителей». Однако мы предполагаем, что у истинного любителя театра именно странность и необычность спектакля по этой пьесе вызовет интерес: зрителю предлагается незримо присутствовать  и «скрытой камерой» наблюдать подробный «протокол»  одного вечера из жизни Персонажа… Одного из многих, похожих друг на друга вечеров, который, однако, закончится весьма исключительно…<br><br>
			  </div> 
            </td>
            <td  width="15%" valign=top></td>
           </tr>
         </table>
         <br><br><br><br><br><br><br>
         </div>
      <!-- #EndEditable -->
   <?
    include "../bottom.php";
   ?>
 </body>
 <!-- #EndTemplate -->
</html>
