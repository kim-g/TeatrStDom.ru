<?
//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "spectacle.php";	//Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Мольер";				//Название
$Page_SubTitle = Navigate($Play);
$Space = true;						//Добавляет расстояние между строками в списке актёров




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
	 <DIV class=nt  align=justify> 
	  <? Affiche("mb","mb_big","М. Булгаков «Мольер»");?>
      <span class=page_subtitle>Показ видеоверсии спектакля по<br>
	  М. Булгакову "Мольер" с видеоприложениями.</span>
	  <br><br>
      <b>Уважаемые зрители!</b> 
		<br><br>
		<b>27 марта</b> 2010 г.  - <b>Международный день театра</b> <br><br>
		В этот день мы  покажем Вам видеоверсию
		спектакля театра «СтД» <b>«Мольер»</b>, 
		скомпонованную из двух спектаклей: 
		<ul>
			<li>29-й спектакль от 15.05.99 г. (33-й сезон  98-99 гг.)
			<li>33-й спектакль от 24.02.01 г. (35-й сезон  00-01 гг.)
		</ul>
		Премьера спектакля состоялась <b>29 декабря 1994 г. </b><br><br>
		Всего было сыграно <b>35 спектаклей «Мольер»</b>.<br><br>
		Последний спектакль состоялся <b>29 мая 2004 г</b>. – это  был <b>499-й спектакль театра «СтД»</b>, и на этом завершилась <b>25-летняя</b> эпоха жизни театра в Малом зале на  Химфаке; предстоял переезд театра в корпус Теплофака – судьба театра в тот момент была непредсказуема. <br><br>
		Но вот с тех пор прошло более <b>5 лет</b>, и театр восстал из  пепла и адаптировлся в новой обстановке: за этот период выпущено <b>5 премьер</b>, плюс восстановлен спектакль из прошлого репертуара («Весёлая жизнь») и сыграно более <b>40 спектаклей</b>.<br><br>
 
		Жизнь театра продолжается; как всегда, в него вливаются новые актёрские силы, а также в последнее время возвращаются многие «старички», что тоже очень отрадно.
		<br><br>
        Итак, смотрите <a href="/affiche.php">спектакли театра «СтД»</a>! 
		<br>
		<br><br>
		
		<div style="width:680px;"> 
		<?
		$Photo_List = array('molyer1','molyer2','molyer3','molyer4','molyer5','molyer6','molyer7');
		$Photo_Preview_List = array('molyer1m','molyer2m','molyer3m','molyer4m','molyer5m','molyer6m','molyer7m');
	 
		for ($i = 0; $i < Count($Photo_List); $i++)
		{
			Photo_Add("mb",$Photo_List[$i],$Photo_Preview_List[$i]);
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
