<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Ревизор";				//Название


//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "spectacle.php";	//Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль



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
	  <?=NavigatePhoto($Play,"rev");?> 
      <span class=chapter_title>Н. Гоголь «Ревизор» <br><br>
      Фотогалерея<br></span>
      <a href="rev.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('111','112','113','114','114a','114b','115','116','117','118','118a','118b','119','120','121','122','123','124','125','126','127','128','129','130','131','132','132a','133','134','135','136','137');
	$Photo_Preview_List = array('sm_111','sm_112','sm_113','sm_114','sm_114a','sm_114b','sm_115','sm_116','sm_117','sm_118','sm_118a','sm_118b','sm_119','sm_120','sm_121','sm_122','sm_123','sm_124','sm_125','sm_126','sm_127','sm_128','sm_129','sm_130','sm_131','sm_132','sm_132a','sm_133','sm_134','sm_135','sm_136','sm_137');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("rev",$Photo_List[$i],$Photo_Preview_List[$i]);
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