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
     <div class=nt  align=justify>  <a href="../news.php" ><b>НОВОСТИ</b></a> / 14.04.15   <br>
<br>
<br>
<br>
<br>
        Как говорится, «не было бы счастья, да несчастье помогло»!<br>
        Вот и состоялась <b>11 апреля</b> вынужденная гастроль театра<b> «Старый 
        Дом»</b> на сцене муниципального театра <b>«Щелкунчик»</b> со спектаклем 
        <b><a href="../sp/je_s.php">«Житейские эпизодики»</a></b>.<br>
        <br>
Вынужденная по известной причине: фактическое пресечение руководством родного УрФУ творческой деятельности старейшего студенческого театра 
Свердловска-Екатеринбурга, т.к. театр лишён доступа на свою родную сцену в 8-м уч. корпусе УрФУ на ул. С.Ковалевской-5.<br><br>
В чём счастье? Во-первых, театр «СтД» подтвердил свой «профессиональный сертификат», успешно выступив в специфическом гастрольном режиме.<br><br>

Но главное, что мы встретились с полным взаимопониманием в работе с высокопрофессиональными деятелями как в администрации театра «Щелкунчик»,
 так и с техническими Специалистами, которые с огромной заботой обслуживали наше выступление! Кроме того, что они высокопрофессионалные спецы,
  они ещё и просто КЛАССНЫЕ ПАРНИ!<br><br>
        Спасибо огромное этим замечательным людям – общение с ними было для нас 
        как «луч света в тёмном царстве»!<br><br><br><br>
        <a href="http://www.obltv.ru/news/culture/teatr_staryj_dom_otpravilsa_na_vynuzhdennyje_gastroli/?section_code=culture&news_code=teatr_staryj_dom_otpravilsa_na_vynuzhdennyje_gastroli" target="_blank"><b>Посмотреть 
        видеосюжет о нашей гастроли на канале ОТВ &gt;&gt;</b></a> <br>
        <br><br>
		<br>
        <img src="Img/af.jpg" width="800" height="532"> <br><br><br><br><br>
<br>

</div> 
		
  <?
  include "../bottom.php";
  ?>
 </body>
 <!-- #EndTemplate -->
</html>