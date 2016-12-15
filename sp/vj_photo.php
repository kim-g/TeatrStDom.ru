<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Весёлая жизнь";				//Название
$Space = true;						//Добавляет расстояние между строками в списке актёров


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
	  <?=NavigatePhoto($Play,"vj");?> 
      <span class=chapter_title>Михаил Зощенко «Весёлая жизнь»<br><br>
      Фотогалерея<br></span>
      <a href="vj.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('111','112','112a','113','113a','114','115','116','117','118','118a','119','120','121','122','123','124','124a','125','126','127','128','129','130','131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','145a','146','147','147a','148','149','149a','149b','150','150a','151','151a','152','152a','152b','152c','153','154','154a','155','156','157','157a','158','159','160','161','162','163','164','165','166','167','168','169','170');
	$Photo_Preview_List = array('sm_111','sm_112','sm_112a','sm_113','sm_113a','sm_114','sm_115','sm_116','sm_117','sm_118','sm_118a','sm_119','sm_120','sm_121','sm_122','sm_123','sm_124','sm_124a','sm_125','sm_126','sm_127','sm_128','sm_129','sm_130','sm_131','sm_132','sm_133','sm_134','sm_135','sm_136','sm_137','sm_138','sm_139','sm_140','sm_141','sm_142','sm_143','sm_144','sm_145','sm_145a','sm_146','sm_147','sm_147a','sm_148','sm_149','sm_149a','sm_149b','sm_150','sm_150a','sm_151','sm_151a','sm_152','sm_152a','sm_152b','sm_152c','sm_153','sm_154','sm_154a','sm_155','sm_156','sm_157','sm_157a','sm_158','sm_159','sm_160','sm_161','sm_162','sm_163','sm_164','sm_165','sm_166','sm_167','sm_168','sm_169','sm_170');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("vj",$Photo_List[$i],$Photo_Preview_List[$i]);
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