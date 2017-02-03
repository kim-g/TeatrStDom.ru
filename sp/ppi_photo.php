<?
//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "spectacle.php";	//Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Повесть о том, как поссорился Иван Иванович с Иваном Никифоровичем";				//Название
$Page_SubTitle = NavigatePhoto($Play,"ppi");



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
      <span class=chapter_title>Н.В. Гоголь «Повесть о том, как поссорился<br>Иван Иванович с Иваном Никифоровичем»<br><br>
      Фотогалерея<br></span>
      <a href="ppi.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('dsc708','dsc710','dsc713','dsc720','dsc722','dsc731','dsc740','dsc743','dsc753','dsc756','dsc760','dsc765','dsc772','dsc776','dsc780','dsc786','dsc795','dsc799','dsc815','dsc820','dsc824','dsc833','dsc842','dsc843','dsc847','dsc850','dsc854','dsc863','dsc874','dsc878','dsc886','dsc893','dsc898','dsc902','dsc906','dsc915','dsc917');
	$Photo_Preview_List = array('sm_dsc708','sm_dsc710','sm_dsc713','sm_dsc720','sm_dsc722','sm_dsc731','sm_dsc740','sm_dsc743','sm_dsc753','sm_dsc756','sm_dsc760','sm_dsc765','sm_dsc772','sm_dsc776','sm_dsc780','sm_dsc786','sm_dsc795','sm_dsc799','sm_dsc815','sm_dsc820','sm_dsc824','sm_dsc833','sm_dsc842','sm_dsc843','sm_dsc847','sm_dsc850','sm_dsc854','sm_dsc863','sm_dsc874','sm_dsc878','sm_dsc886','sm_dsc893','sm_dsc898','sm_dsc902','sm_dsc906','sm_dsc915','sm_dsc917');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("ppi",$Photo_List[$i],$Photo_Preview_List[$i]);
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