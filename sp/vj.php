<?
//Добавление модулей в проект.
include "../main-texts.php";     //Добавление глобальных текстовых констант.
include "spectacle.php";    //Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu     = "Репертуар";            //Выбранный пункт MainMenu
$Play = "Весёлая жизнь";                //Название
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
     <DIV class=nt  align=justify> 
        <img src="/Img/vj_af.jpg" align="left" vspace="2" hspace="20" alt="М. Зощенко Веселая жизнь" width="192" height="151">
        <span class=page_subtitle>
         Михаил Зощенко «Весёлая жизнь»<br>
         (Театральная сюита из 6-ти сюжетов)<br>
         2001 г. 
        </span> <br>
        Продолжительность спектакля <b>1</b> час <b>45</b> мин.<br>
        Спектакль поставлен в декабре 2001 г.<br>
        Сценическая версия 2008\09 г.<br><br>
        <?/*<b>Ближайший показ 21 мая 19-00</b><br>*/?>
        <?/*<b><a href="../order.php?sp=vj">Заказать билеты &gt;&gt;</a></b><br>*/?>
        <b><a href="vj_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
		<? Video("Видео (2010 г.)","yorYKU-82AI"); ?><br>
		<? Video("Видео (2014 г.)","5ikT3Ct4ACU"); ?>
        <br><br><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr class=nt >
          <td  width="85%" valign=top>
           <b>Михаил Зощенко</b> (годы жизни 1894-1958) – открытие театра «Старый дом».<br><br>
           Парадокс, быть может, заключается в том, что вряд ли в сегодняшнем зрительном зале найдётся много людей, которые бы вообще не слышали этого имени. Но это - с одной стороны, а с другой стороны - с той же степенью вероятности можно предположить, что вряд ли найдётся много людей, которые бы на самом деле были знакомы с творчеством этого писателя в большом, а тем более – в полном объёме.<br><br>
           <b>Михаил Зощенко</b> – автор, необычайно популярный в первой половине XX века. Автор, написавший бесчисленное множество рассказов, фельетонов, каких-то смешных анекдотов… Автор, задолго до своей физической смерти вдруг замолчавший навсегда, объявленный «чуждым», «врагом», «подонком от литературы»… Впрочем, все это известно. А в чем же «открытие»? Что такое эти странные истории о фотографах, милиционерах, зубных врачах…? Карикатуры? Зачем они нам? Сегодня, когда рухнула советская империя, когда выросло целое поколение новых людей?<br><br>
           Новых?<br><br>
           Но в истории страны нашей уже бывали новые. Да еще какие! Вот о ком писал Зощенко. «Смотрите, – говорил он, – смотрите, кто пришел!» Люди, без прошлого. Люди – обломки вселенского кораблекрушения. Но ведь люди…<br><br>
           Театр не ищет в Зощенко сатиры. Точнее, сатира, возможно, никуда не делась, но, интерес не в этом. Интерес в нас. В сегодняшних. Мы – тоже обломки очередного кораблекрушения. <br><br>
           И мы тоже люди. <br><br>
           Ищите сходство. <br><br><br>
           МЫ не так давно открыли для себя этого уникального Художника XX века. И в наших творческих планах - поставить еще несколько спектаклей по произведениям М.Зощенко.<br><br>
           А сегодня – «Театральная сюита из 6-ти сюжетов»  (сценическая версия 2011 г.).<br><br>
           Итак, <b>«Весёлая жизнь»</b>!...<br>
           Может быть даже скорее «веселоватая»?<br>
           Наше сегодняшнее представление состоит из нескольких таких «веселоватых» Историй.<br>
           Вы увидите Сюжеты: про странноватые исповеди, про крепковатые браки, про дурноватые фотографирования, про бесноватые мечтания, про нелеповатые протоколирования, про цирковатые любовные прогулки – <b>одним словом – ВЕСЁЛАЯ ЖИЗНЬ</b>!
           <br><br><br>
           
           
           <span class=page_subtitle> Действующие лица и актёры</span><br><br> 
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr><td width="40%"></td><td width="40%"></td><td width="20%"></td></tr>
			<?
			  Role("Лицо от театра",false,"",array(0,278),true);
			  
			  SubStory("Весёлая жизнь","(1922 г.)<br>Сценическая версия - А.Ким, Н.Стуликов<br>Действие происходит в 1913 г.",false);
			  Role("Генерал Танана",false,"",array(125),false);
			  Role("Васька",false,"",array(234),false);
			  Role("Мамзель Зюзиль",false,"",array(239,339),false);
			  Role("Лезгин",false,"",array(101),true);
			  
			  SubStory("Метафизика","(1922 г.)",false);
			  Role("Конторщик Винивитькин",false,"",array(190),false);
			  Role("Надюша-переписчица",false,"",array(301),false);
			  Role("Комиссар",false,"",array(242),false);
			  Role("«Марсельеза»",false,"",array(218),true);
			  
			  SubStory("Исповедь","(1923 г.)<br>Сценическая версия - Н. Францева, Н.Стуликов",false);
			  Role("Фёкла",false,"",array(243),false);
			  Role("Поп",false,"",array(242),true);
			  
			  SubStory("Протокол","(1924 г.)",false);
			  Role("Милиционер",false,"",array(274,222,301),false);
			  Role("Потерпевшая",false,"",array(326,222,"350@ *"),false);
			  Role("Человек с мешком",false,"",array(305,296,92),false);
			  Role("Тётка с корзинкой",false,"",array(274),false);
			  Role("Свидетель - 1",false,"",array(328),false);
			  Role("Свидетель - 2",false,"",array(324),true);
			  
			  SubStory("Рассказ про одну корыстную молочницу","(1934 г.)<br>Сценическая версия - А. Кочнева, Н.Стуликов",false);
			  Role("Молочница",false,"",array(212,331,222),false);
			  Role("Врач",false,"",array(245,344),false);
			  Role("Монтёр",false,"",array(234),true);
			  
			  SubStory("Фотокарточка","(1945 г.)",false);
			  Role("Он",false,"",array(299),false);
			  Role("Та, которая...",false,"",array(222,328,345),false);
			  Role("Фотограф",false,"",array(227,305),false);
			  Role("Сержант милиции",false,"",array(278,296),false);
			  Role("Дамочка",false,"",array(274),false);
			  Role("Ловкач",false,"",array(284),true);
			  
			  Space();
			  Space();
			  
			  echo "<!-- Внесценические деятели -->";
			  
			  Role("",false,'Cценическая композиция, постановка,<br>сценография, музыкальное оформление',array(0), true);
			  Role("",false,'Помощники режиссёра',array(274,301), true);
			  Role("",false,'Зав. постановочной частью, звукорежиссёр',array(125), true);
			  Role("",false,'Зав. электро-радио-цехом',array(190), true);
			  Role("",false,'Светооператоры',array(299,243), true);
			  Role("",false,'Звукооператоры',array(345,324), true);
			  Role("",false,'Группа зала и фойе',array(239,117,"349@ *","355@ *"), true);
			?>
            
            <tr class=nt >
             <td colspan=3 valign=top class=person><span class=job>Музыка</span> – Г Свиридов, М. Блантер, Р. Глиэр, Р. де Лиль</td>
            </tr>
			
			<?
			Space();
			  Space();
			PlainTextFull("				<img scr={$CP} height=1px width=75px style='border-bottom: 1px solid black;'>",false);
			PlainTextFull("* Студия Нового приёма - 2014",true);
			?>
           </table>
          </td>
          
          <td  width="15%" valign=top>
		    <?
		    Photo("vj2m.jpg", "vj2.jpg", 150, 177, 21); 
			Photo("vj3m.jpg", "vj3.jpg", 200, 129, 21);
			Photo("vj4m.jpg", "vj4.jpg", 200, 129, 20);
			Photo("vj5m.jpg", "vj5.jpg", 200, 129, 1);
		    ?>
           </a>
          </td>
         </tr>
        </table>
        <br><br>  
        <span class=chapter_title>Награды спектакля</span>
        <ul>
         <li >На Областном фестивале студенческих театров <b>"Театральные встречи-2011" </b> спектакль завоевал: 
        <ul>
         <li><b>ДИПЛОМ</b> (награждается <b><?=PersonName_Surname(190);?></b> за роль Конторщика Винивитькина в спектакле «Весёлая жизнь» в номинации <b>«ЛУЧШАЯ МУЖСКАЯ РОЛЬ»</b>)
         <li><b>ДИПЛОМ</b> (награждается Студенческий театр <b>«Старый Дом»</b>: «За осуществление связи времён на сцене и в жизни» - спектакль <b>«Весёлая жизнь»</b>)
        </ul><br>
         <li> На фестивале <b>«II Фестиваль студенческих театров» 2003</b> спектакль завоевал: 
          <ul>
          <b>ДИПЛОМ</b> (награждается <b><?=PersonName_Surname(190);?></b> за исполнение роли Винивитькина в спектакле «Весёлая жизнь») 
          </ul>
          <br>
         <li> На фестивале <b>«XVIII Межвузовский студенческий фестиваль ВЕСНА УПИ-2000»</b> сюжет «Рассказ про одну корыстную молочницу» в составе спектакля «Проба пера» завоевал: 
          <ul>
           <b>ДИПЛОМ</b> в номинации «За яркое исполнение эпизодической роли»  – <b><?=PersonName_Surname(162);?></b> за роль Монтёра 
          </ul>
         </ul>          
        </div>
      <!-- #EndEditable -->
    <?
    include "../bottom.php";
    ?>
 </body>
 <!-- #EndTemplate -->
</html>
