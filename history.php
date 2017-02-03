<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.
include "functions.php";	//Добавление специальных функций

//Определение локальных текстовых констант
$Page_Menu 	= "Штрихи истории";		//Выбранный пункт MainMenu
$Page_SubTitle = $Page_Menu;			//Название под шапкой.	

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
  include "head.php";
  ?>
     <!-- #BeginEditable "texy" --> 
     <div class=nt  align=justify>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
       <tr>
        <td width=170 valign=top><img src="Img/ds.gif" width="121" height="137"></td>
        <td  valign=top>
		 <div class=nt  align=justify>
          <b>1961+63гг. Пролог</b><br>
          Режиссёр <b>Валентин Ткач</b> создал			
          <span class=stress_big_bold_colour>«Драматическую студию» («ДС»)</span>.<br>
          Студия жила и работала в зале З-го учёбного корпуса УПИ. Был  поставлен  спектакль  «Голый  король»  по  пьесе  Евг. Шварца.<br><br>
          Среди  актёров  этого  спектакля  были  Александр  Шаров, Леонид Архипов и Николай Стуликов, которые затем,
         </div>
		</td>
       </tr>
       <tr>
        <td width=170 valign=top><img src="Img/tempi.gif" width="200" height="90"></td>
        <td  valign=top>
		 <div class=nt  align=justify>
          в <b>октябре 1966г.</b>, влились в <span class=stress_big_bold_colour>«Театр эстрадных миниатюр политехнического института» («ТЭМПИ»)</span>, организованный выпускником Свердловского театрального училища <b><a href="/news.php?date=2015-06-25">Григорием Кочержинским</a></b>. <br><br>
          С этой даты и ведёт отсчёт своего «возраста» наш театр.<br><br>
          В <b>ноябре 1968 г.</b> художественным руководителем театра стал <b>Николай Стуликов</b> (выпускник Теплоэнергетического факультета УПИ).
         </div>
		</td>
       </tr>
       <tr>
        <td width=170 valign=top><img src="Img/st.gif" width="200" height="125"></td>
        <td  valign=top>
		 <div class=nt  align=justify>
          Возникло новое название – <span class=stress_big_bold_colour>«Сатирический театр» ДК УПИ(«СТ»)</span><br><br>
          «СТ»  ставил  и играл спектакли в Большом (Актовом) зале УПИ в Главном учебном корпусе.<br><br>
          В <b>июне 1977г</b>. театр стал лауреатом I Всесоюзного фестиваля самодеятельного художественного творчества (спектакль «...Забыть Герострата!» по пьесе Г. Горина), и ему было присвоено почётное звание <b>«Народный коллектив»</b>.
         </div>
		</td>
       </tr>
       <tr>
        <td><img src="Img/std.gif" width="200" height="60"></td>
        <td>
		 <div class=nt  align=justify>
		  В <b>сентябре 1979г.</b> руководством института в распоряжение студенческого театра был  предоставлен Малый зал в 3-м учебном корпусе, где театр работал в течение 25 лет. <br><br>
          Возникло новое название – <span class=stress_big_bold_colour> «Студенческий театр драмы» («СТд»)</span>
		 </div>
        </td>
       </tr>
       <tr>
        <td valign=top><img src="Img/std2.jpg"></td>
        <td>
		 <div class=nt  align=justify>
		  В <b>1991 г.</b>, в момент своего 25-летия, театр обрёл своё нынешнее имя – театр  <span class=stress_big_bold_colour>«Старый Дом» («СтД»)</span>. Этот «Дом», т. е. малый зал ДК УГТУ-УПИ в 3-м учебном корпусе был реконструирован, оснащён и оборудован несколькими поколениями участников театра, его Деятелями. <br><br>
          В 2004 г. согласно приказу по УГТУ-УПИ (за № 693/04 от 07.06.2004 г.) театр переехал в уч. корпус ТЭФ, где с течением времени успешно адаптировался к новой сценической площадке и к иным условиям работы. <!--За эти <?=($N_Season-39)." ".WordCase($N_Season-39, 'сезон', 'сезона', 'сезонов')?> уже сыграно более <?=$SP_Played_TEF." ".WordCase($SP_Played_TEF, 'спектакля', 'спектаклей', 'спектаклей');?>, выпущено <?=$Prem_TEF." ".WordCase($Prem_TEF, 'премьера', 'премьеры', 'премьер');?>.-->
		  На новом месте за <b>10</b> сезонов было сыграно более <b>80</b> спектаклей, выпущено <b>6</b> премьер.
		  <br><br>
		  
		  <span style="color: #FF0000;"> Однако в <b>2014 г.</b> после капитального ремонта этого зала театр руководством УрФУ был лишён доступа на эту сценическую площадку, в результате чего уже <b><?=($N_Season-49)?></b> <?=WordCase($N_Season-49, 'сезон', 'сезона', 'сезонов')?> находится в вынужденной эмиграции: играет спектакли на сцене Муниципального театра балета <b><i>«Щелкунчик»</i></b> (см. <a href="/afterparty.php">«Театральный разъезд»</a>)</span>.<br><br>
		  
          <!--Всего же за <b><?=($N_Season-1)?></b> <?=Word_Years($N_Season-1);?> <?=WordCase($Prem, 'поставлена', 'поставлено', 'поставлено')?> <b><?=$Prem."</b> ".WordCase($Prem, 'премьера', 'премьеры', 'премьер');?>, сыграно более <b><?=$SP_Played;?></b> <?=WordCase($SP_Played, 'представления', 'представлений', 'представлений')?>. -->
		  Всего же за <b>48/50</b> сезонов поставлено <b>36</b> названий спектаклей, дано <b>587</b> представлений.
		  <br><br>
          В настоящее время среди ведущих Деятелей театра есть актеры с очень солидным творческим стажем: 
		   <?=Person_Season(92,  $N_Season, 11, ",")."
		    ".Person_Season(101, $N_Season, 12, ",")."
		    ".Person_Season(125, $N_Season, 15, ",")."
			".Person_Season(190, $N_Season, 22, ",")."
			".Person_Season(222, $N_Season, 28, ",")."
			".Person_Season(227, $N_Season, 29, ",")."
			".Person_Season(234, $N_Season, 30, ",")."
			".Person_Season(239, $N_Season, 31, ",")."
			".Person_Season(242, $N_Season, 32, ",")."
			".Person_Season(243, $N_Season, 32, ",")."
			".Person_Season(274, $N_Season, 37, ",")."
			".Person_Season(278, $N_Season, 37, ",")."
			".Person_Season(283, $N_Season, 38, ",")."
			".Person_Season(284, $N_Season, 38, ".");?>
		  <br><br>
		  Ежегодно театр объявляет <b>НОВЫЙ ПРИЁМ</b> в труппу, и в него вливаются молодые силы.
         </div>
        </td>
       </tr>
      </table>
      <br><br>
     </div>
  <?
  include "bottom.php";
  ?>
 </body>
 <!-- #EndTemplate -->
</html>
