<?
//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "spectacle.php";	//Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Концерт по заявкам";				//Название
$Page_SubTitle = NavigatePhoto($Play,"kpz");



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
	<div class=nt  align=justify> 
      <span class=chapter_title>Франц Ксавер Крёц «Концерт по заявкам» <br><br>
      Фотогалерея<br></span>
      <a href="kpz.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('111','112','112a','113','114','115','115a','116','117','118','119','120');
	$Photo_Preview_List = array('sm_111','sm_112','sm_112a','sm_113','sm_114','sm_115','sm_115a','sm_116','sm_117','sm_118','sm_119','sm_120');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("kpz",$Photo_List[$i],$Photo_Preview_List[$i]);
	};
	 
	 ?>
	 
	</div>
    <!-- #EndEditable -->
    <?
	include "../bottom.php";
	?>
 </body>
 <!-- #EndTemplate -->
</html>