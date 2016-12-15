<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Женитьба";				//Название


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
	  <?=NavigatePhoto($Play,"jen");?> 
      <span class=chapter_title>Н.В. Гоголь «Женитьба»<br><br>
      Фотогалерея<br></span>
      <a href="jen.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','133','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150','151','152','153','154','155','156','157','158','160','161','162','163','164','165','165a','166','167','168','169','170','171','172','173','174','175','176','177','178','179','180','181','182','182a','183','184','185','186','187','188','189','190','191','192','193','194','196','197','198','199','200','201','202','203','204','205','206','207','208','209','210','211','212','213','214','215');
	$Photo_Preview_List = array('sm_111','sm_112','sm_113','sm_114','sm_115','sm_116','sm_117','sm_118','sm_119','sm_120','sm_121','sm_122','sm_123','sm_124','sm_125','sm_126','sm_127','sm_128','sm_129','sm_130','sm_131','sm_132','sm_133','sm_135','sm_136','sm_137','sm_138','sm_139','sm_140','sm_141','sm_142','sm_143','sm_144','sm_145','sm_146','sm_147','sm_148','sm_149','sm_150','sm_151','sm_152','sm_153','sm_154','sm_155','sm_156','sm_157','sm_158','sm_160','sm_161','sm_162','sm_163','sm_164','sm_165','sm_165a','sm_166','sm_167','sm_168','sm_169','sm_170','sm_171','sm_172','sm_173','sm_174','sm_175','sm_176','sm_177','sm_178','sm_179','sm_180','sm_181','sm_182','sm_182a','sm_183','sm_184','sm_185','sm_186','sm_187','sm_188','sm_189','sm_190','sm_191','sm_192','sm_193','sm_194','sm_196','sm_197','sm_198','sm_199','sm_200','sm_201','sm_202','sm_203','sm_204','sm_205','sm_206','sm_207','sm_208','sm_209','sm_210','sm_211','sm_212','sm_213','sm_214','sm_215');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("jen",$Photo_List[$i],$Photo_Preview_List[$i]);
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