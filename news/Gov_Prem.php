<?
//Добавление модулей в проект.
include "../main-texts.php"; 	//Добавление глобальных текстовых констант.
include "../functions.php";	//Добавление специальных функций

//Определение локальных текстовых констант
$Page_Menu 	= "Новости";		//Выбранный пункт MainMenu
$SP_Played_TEF = 80;				//Спектаклей сыграно в ТЭФ
$Prem_TEF = 6;						//Поставлено премьер в ТЭФ
$SP_Played = 580;					//Спектаклей сыграно всего
$Prem = 36;							//Поставлено премьер всего

?>
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start;?></title>
<!-- #EndEditable -->
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/common.css">
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
	  <span class=page_subtitle><a href="/news.php" class=stress_big_bold_colour>Новости</a> / Губернаторская премия</div>
        <br>

      <div class=nt  align=justify><br>
	  "В театре невероятное событие!" - эта реплика звучала со сцены нашего театра в спектакле "Мольер", поставленном по произведениям Михаила Булгакова. 
		Именно с этим спектаклем театр номинировался на губернаторскую премию много лет назад, в  том самом далеком 1996  г., когда эта премия еще только была учреждена. 
		И вот сейчас, спустя годы, почетная награда наконец-то нашла своего героя!   Итак,  "В театре невероятное событие!" <span class=tr><b>30 апреля</b></span> нынешнего года режиссер театра
		 "Старый дом", <span class=tr><b>Николай Александрович Стуликов</b></span>, 
        был награжден <span class=tr><b>премией губернатора Свердловской области</b></span> за выдающиеся достижения 
        в области литературы и искусства, а именно: <b>за постановку спектаклей по 
        произведениям</b> уже другого великого писателя - <b>Николая Гоголя</b>. Труппа театра поздравляет любимого режиссера с этой 
        заслуженной наградой! Дальнейших творческих свершений и побед!
<br>
<br><br>
 
		<img src="Img/r1.jpg"><br>
<br><br>
		   <object type="application/x-shockwave-flash" data="http://teatrstdom.ru/pl/uflvplayer_500x375.swf" height="300" width="500">
		<param name="bgcolor" value="#FFFFFF" />
		<param name="allowFullScreen" value="true" />
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://teatrstdom.ru/pl/uflvplayer_500x375.swf" />
		<param name="FlashVars" value="way=http://teatrstdom.ru/pl/prem.flv&amp;swf=http://teatrstdom.ru/pl/uflvplayer_500x375.swf&amp;w=500&amp;h=300&amp;pic=http://teatrstdom.ru/pl/prem2.jpg&amp;autoplay=0&amp;tools=1&amp;skin=white&amp;volume=70&amp;q=&amp;comment=" /></object> 
        <br><br>
        </div> 
		
  <?
  include "../bottom.php";
  ?>
 </body>
 <!-- #EndTemplate -->
</html>