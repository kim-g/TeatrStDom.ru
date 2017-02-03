<?
//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "spectacle.php";	//Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Вешние воды";				//Название
$Space = true;						//Добавляет расстояние между строками в списке актёров
$Page_SubTitle = NavigatePhoto($Play,"vv");



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
      <span class=chapter_title>Иван Тургенев «Вешние воды»<br><br>
      Фотогалерея<br></span>
      <a href="vv.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	$Photo_List = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29');
	$Photo_Preview_List = array('1a','2a','3a','4a','5a','6a','7a','8a','9a','10a','11a','12a','13a','14a','15a','16a','17a','18a','19a','20a','21a','22a','23a','24a','25a','26a','27a','28a','29a');
	 
	for ($i = 0; $i < Count($Photo_List); $i++)
	{
		Photo_Add("vv",$Photo_List[$i],$Photo_Preview_List[$i]);
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