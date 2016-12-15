<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "Заказ билетов";						//Выбранный пункт MainMenu
$Page_SubTitle = $Page_Menu;			//Название под шапкой.
?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.". ".$Page_Menu;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
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
 include "head.php";
 ?>
    
        <!-- #BeginEditable "texy" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
	  
	    <? include "affiche_content.php"; ?>

      </div>
      <!-- #EndEditable -->
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
