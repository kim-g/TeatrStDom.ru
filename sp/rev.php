<?
//Добавление модулей в проект.
include "../main-texts.php";     //Добавление глобальных текстовых констант.
include "spectacle.php";    //Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu     = "Репертуар";            //Выбранный пункт MainMenu
$Play = "Ревизор";                //Название
$Page_SubTitle = Navigate($Play);



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
      <img src="img/rev.gif" align="left" vspace="2" hspace="20" alt="Н. Гоголь Ревизор" width="200" height="176"> 
	  <table>
	    <tr>
		  <td class=nt>
			  <span class=page_subtitle> 
				Николай Гоголь<br>
				«Ревизор»<br>
				2012 г.
			  </span>
			  <br><br>
			  Спектакль идет с одним антрактом <b>3</b> часа <b>25</b> минут. <br>
			  Окончание спектакля в <b>21:40</b>.<br>
			 
			  Спектакль поставлен в апреле 2012 г.  <br><br>
			  <b><a href="/order.php">Ближайший показ 18 февраля 18-00</a></b><br><br>
			  
			  <!--<b><a href="/order.php?sp=rev">Заказать билеты &gt;&gt;</a></b><br>-->
			  <b><a href="rev_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
			  <? Video("Видео","mWRuPrknfUs"); ?><br>
			  <b><a href="/dorr.php">Дело о реабилитации «Ревизора» &gt;&gt;</a></b>
			  <br><br> 
			  
			  <? Video("«Ревизор» в Екатеринбурге: с любительским акцентом","_OqACU_tV-g"); ?> – сюжет о нашем театре в новостях канала ОТВ<br><br><br>
		  </td>
		</tr>
	  </table>
		 
	  …Наверное, каждому со школьной скамьи известна первая фраза Городничего :<i> «Я пригласил вас, господа, с тем, чтобы сообщить вам пренеприятное известие: к нам едет ревизор»</i>, ну и так далее – вроде бы всё очень хорошо знакомо!<br>

	  Однако, внимательно углубляясь в пьесу, театр «Старый Дом» обнаружил немало скрытых в ней особенностей и «детективных» загадок! Поэтому сложилась <b>своя версия</b> происходящего в пьесе, во многом непохожая на хрестоматийные представления об этом произведении! Поэтому и повышенный интерес зрителя, находящегося внутри <b>динамичного каверзного приключения</b> (т.к. актеры действуют не только на сцене, но и  часто оказываются в зрительном зале!). Короче говоря – НЕСКУЧНАЯ КЛАССИКА!
	  <br><br>
	  Поразительна судьба спектакля «РЕВИЗОР» в истории нашего театра: <br>
	  премьерный спектакль подвергся уничтожительной критике со стороны Членов жюри и Участников Фестиваля студенческих театров «Театральные встречи-2012» на обсуждении 21.04.2012 г. (<a href="/dorr.php">см. «Дело о реабилитации «Ревизора»</a>); а ровно через 2 года (!) – 21.04.2014. режиссёр спектакля Н.Стуликов был удостоен премии Губернатора Свердловской области (под рубрикой «выдающиеся достижения в области литературы и искусства») ЗА ПОСТАНОВКУ СПЕКТАКЛЕЙ ПО ПРОИЗВЕДЕНИЯМ Н.В.ГОГОЛЯ (Указ Губернатора Свердловской области от 21 апреля 2014 года № 192-УГ; Диплом № 339.)

      <br><br><br>

	  
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr>
          <td  width="80%" valign=top>
		    <table width="80%" valign=top>
	          <tr><td width=40%></td><td width=40%></td></tr>
			  
	          <?
		        SubStory("Действующие лица и актёры", "", true);
		  
		        Role("Антон Антонович Сквозник Дмухановский", true, "городничий", array(125), true);
				Role("Анна Андреевна", true, "жена его",array(243,326),true);
				Role("Марья Антоновна", true, "дочь его",array(324),true);
				Role("Артемий Филиппович Земляника", true, "попечитель богоугодных заведений",array(284),true);
				Role("Аммос Фёдорович Ляпкин-Тяпкин", true, "судья",array(242),true);
				Role("Лука Лукич Хлопов", true, "смотритель училищ",array(282,305),true);
				Role("Иван Кузьмич Шпекин", true, "почтмейстер",array(101),true);
				Role("Христиан Иванович Гибнер", true, "уездный лекарь",array(278,92,285),true);
				Role("Пётр Иванович Добчинский", true, "городской помещик",array(190),true);
				Role("Пётр Иванович Бобчинский", true, "городской помещик",array(227),true);
				Role("Степан Ильич Уховёртов", true, "частный пристав",array(234),true);
				Role("Иван Карпович Свистунов", true, "квартальный",array("@Андрей Чухарев*"),true);
				Role("Держиморда", true, "квартальный",array("@Алексей Енуленко*"),true);
				Role("Иван Александрович Хлестаков", true, "чиновник из Петербурга",array(299),true);
				Role("Осип", true, "слуга Хлестакова",array(278,92),true);
				Role("Мишка", true, "слуга в доме городничего",array(296,282),true);
				Role("Слуга трактирный", false, "" , array(296),true);
				Role("Купцы", false, "" , array(284,242,282,305,296),true);
				Role("Февронья Петровна Пошлёпкина", true, "слесарша",array(274),true);
				Role("Иванова", true, "унтер-офицерша",array(239,350),true);
				Role("Почётные лица города", false, "" , array(92,278,175,"@Григорий Иванченко*"),true);
				Role("Дамы", false, "" , array(274,239,328,350, "@Анастасия Курицына*"),true);
				Space();
				Space();
				
				PlainTextFull("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Музыка из произведений Н. Каретникова и Неизвестного автора</b>",true);
				Role("", false, "Режиссёр-постановщик, сценическая композиция, сценография, музыкальное оформление", array(0), true);
				Role("", false, "Главный помощник режиссёра, постановочная часть, элементы сценографии", array(125), true);
				Role("", false, "Электро/радио цех", array(190), true);
				Role("", false, "Звукорежиссура", array(125,299), true);
				Role("", false, "Светооператор", array(301), true);
				Role("", false, "Звукооператор", array(349), true);
				Role("", false, "Помощник режиссёра", array(222), true);
				Role("", false, "Постановочная группа", array(239,243,117,328,339, 344), true);
				Role("", false, "Группа зала и фойе", array(239,326,117,"@и студия Нового приёма-2016"), true);
				Space();
				PlainTextFull("				<img scr={$CP} height=1px width=75px style='border-bottom: 1px solid black;'>",false);
				PlainTextFull("* Студия Нового приёма - 2016",true);
		      ?>
            </table>
          </td>
          <td  width="15%" align=right valign=top>
		    <img src="img/rev4.jpg" align="right" vspace="1" hspace="10"  border="0" width="200" height="152">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <img src="img/rev1.jpg" align="right" vspace="1" hspace="10"  border="0" width="200" height="152"><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <img src="img/rev2.jpg" align="right" vspace="1" hspace="2"  border="0" width="200" height="153">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <img src="img/rev3.jpg" align="right" vspace="1" hspace="2"  border="0" width="200" height="154">
		  </td>
        </tr>
      </table><br><br>  
    </div>
	<!-- #EndEditable -->
    <?
    include "../bottom.php";
    ?>
 </body>
 <!-- #EndTemplate -->
</html>