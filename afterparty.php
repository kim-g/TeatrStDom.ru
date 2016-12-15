<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "«Театральный разъезд»";		//Выбранный пункт MainMenu
$Page_SubTitle = $Page_Menu;			//Название под шапкой.

function VideoFromFacebook($ID)
{
?>
     <iframe width="853" height="480" src="https://www.youtube.com/embed/<?=$ID;?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	
	<br><br><br>
<?
}
?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
  <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/common.css" />
  <script type="text/javascript" src="/sp/highslide/highslide.js"></script>
  <link rel="stylesheet" type="text/css" href="/sp/highslide/highslide.css" />
  <script type="text/javascript">
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = 'sp/highslide/graphics/';
  </script>
  
  <style>
    .date_common {font-family: Arial; color: #000000;  font-size:24px; font-weight:bold; text-decoration: none; font-style: italic;}
	.date_numbers {font-family: Arial; color: #FF0000;  font-size:48px; font-weight:bold; text-decoration: none; font-style: italic;}
  </style>
 </head>

 <body bgcolor="#FFFFFF" text="#000000" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style="margin:0 0 0 0;">

  <?
  include "head.php";
  ?>
    <p class=schelkunchik align=center>Не имея возможности играть на родной сцене в УрФУ (в зале Т-216), Театр «Старый Дом» приглашает ВАС на гастрольный спектакль в Муниципальный театр балета «Щелкунчик»</p>
    <p class=date_common align=center><span class=date_numbers>7</span> ноября 2015 г. в <span class=date_numbers>18</span> часов</p>
    <p class=repertoire align=center>Акция Солидарности в защиту театра «Старый Дом»</p>
	
	<img src="Img/schelkunchik.png">
	
	<br><br><br>

     <!-- #BeginEditable "texy" -->
	 <?
	 VideoFromFacebook("vDABKYHJl_M");
	 VideoFromFacebook("8aH4n3C3HG0");
	 VideoFromFacebook("r-j8j_4Lx5c"); 
	 VideoFromFacebook("plzFmE2f9xg");
	 VideoFromFacebook("UqpVlMLw0us");
	 VideoFromFacebook("cdbK-_eos3c");
	
	 
	 
	 ?>
     <!-- #EndEditable -->
  <?
 include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
