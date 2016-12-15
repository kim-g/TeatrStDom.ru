<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Мольер";				//Название


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
	  <?=NavigatePhoto($Play,"mb");?> 
      <span class=chapter_title>М. Булгаков «Мольер»<br><br>
      Фотогалерея<br></span>
      <a href="mb.php"><b>О спектакле  &gt;&gt;</b></a><br><br><br>
    </div>
	<div style="width:680px;"> 
	<?
	for ($i = 1; $i <= 54; $i++)
	{
		$N = $i<10 ? "0".$i : $i;
		Photo_Add("mb","mb_".$N,"mb_mini_".$N);
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