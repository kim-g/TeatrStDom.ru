<?
//Добавление модулей в проект.
include "../main-texts.php";     //Добавление глобальных текстовых констант.
include "spectacle.php";    //Общие функции спектаклей
include "chars.php";            //Функции Актёр-роль

//Определение локальных текстовых констант
$Page_Menu     = "Репертуар";            //Выбранный пункт MainMenu
$Play = "Проба пера";                //Название
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
        <img src="img/pp.jpg" align="left" vspace="2" hspace="20" alt="Проба пера">
		<span class=page_subtitle>
		  «Проба пера»<br>
          2010 г. 
		</span> <br><br>
        «Актёрский полигон» Студии Нового приёма-09<br>
        и Молодого состава труппы<br>
        <br>
        Продолжительность спектакля <b>1</b> час. <b>20</b> мин.<br>
        <br>
        
        <!--<b><a href="/order.php?sp=proba">Заказать билеты &gt;&gt;</a></b><br><br><br><br><br><br><br>
		<b><a href="/affiche.php">Ближайший показ &gt;&gt;</a></b><br>
        <br>
		<b><a href="">Фотогалерея спектакля &gt;&gt;</a></b>-->
        <br><br><br><br><br><br><br>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr class=nt >
            <td  width="85%" valign=top>
			  Мы предлагаем Вам весьма своеобразное представление: ведь обычно в один вечер играется одна пьеса, один Сюжет, а в этом спектакле Вы увидите сразу несколько фрагментов из разных классических произведений. <br><br>

			  Дело в том, что это – выпускной спектакль Студии Нового приёма-09, это проба творческих сил наших Новичков; отсюда и название – «Проба пера»! (При этом в спектакле заняты и актёры Основного состава нашей труппы).<br><br>

			  Однако, это «Проба пера» и в другом смысле: ставя даже фрагмент той или иной пьесы, мы стремимся выразить свой пристрастный взгляд, своё концентрированное художественное впечатление от пьесы в целом, от Автора в целом!<br><br>

			  Это ведь очень увлекательно – за один вечер прикоснуться сразу к нескольким замечательным произведениям в самых разных стилях и жанрах!<br><br>

			  Итак, Приглашаем Вас вместе с нами совершить экскурсию по некоторым шедеврам мировой драматургии!
			  <br><br><br>
	          <span class=podzag> Действующие лица и актёры</span>
			  
			  <br> <br>
			  
			  <table width="80%" border="0" cellspacing="0" cellpadding="0">
			    <tr><td width=40%></td><td width=40%></td></tr>
			  
			    <?
			      SubStory("М.Булгаков<br>ПОСЛЕДНИЕ ДНИ<br>(Александр Пушкин)", "", false);
				  Char("Пушкина",array(321),false);
				  Char("Гончарова",array(314),false);
				  Char("Дантес",array(317),true);
				  
				  SubStory("Евг.Шварц<br>ТЕНЬ<br>(сказка, действие которой происходит в одной очень жаркой стране)", "", false);
				  Char("Учёный",array(299),false);
				  Char("Аннунциата",array(318),false);
				  Char("Пьетро",array(317),false);
				  Char("Юлия Джули",array(314),false);
				  Char("Цезарь Борджиа",array(313),false);
				  Char("Принцесса",array(318),false);
				  Char("Тайный советник",array(300,278),false);
				  Char("Тень",array(299),true);
				  
				  SubStory("Ж.-Б.Мольер<br>МИЗАНТРОП<br>(скандалы в будуаре)", "", false);
				  CharJob("Селимена","возлюбленная Альцеста",array(321),false);
				  CharJob("Арсиноя","влюблённая в Альцеста",array(310),false);
				  CharJob("Акаст","приятель Селимены",array(284),false);
				  CharJob("Клитандр","приятель Селимены",array(296),false);
				  CharJob("Баск","слуга Селимены",array(242),true);
				  
				  SubStory("У.Шейкспиэр<br>МАКБЕТ", "", false);
				  Char("Макбeт",array(313),false);
				  Char("Леди Макбeт",array(208),true);
				  
				  Space();
				  Space();
				  
				  Job("Режиссёр-педагог",array(0),true);
				  Job("Помощники режиссёра",array(239,310,324),true);
				  Job("Светооператор",array(274),true);
				  Job("Звукооператор",array(305),true);
				  Job("Зав. постановочной частью",array(125),true);
				  Job("Зав. электро-радио-цехом",array(190),true);
				  Job("Постановочная группа",array(259,234,278,243,301),true);
			    ?>
              </table>
			  <br></td>
            <td  width="15%" valign=top> 
			  <img src="../cp.gif" align="right" vspace="1" hspace="20"  width="150" height="177">
			</td>
          </tr>
        </table>
		<br><br>
      </div>
     <!-- #EndEditable -->
    <?
    include "../bottom.php";
    ?>
 </body>
 <!-- #EndTemplate -->
</html>