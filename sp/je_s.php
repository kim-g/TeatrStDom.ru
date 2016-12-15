<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Житейские эпизодики», «Супруга";				//Название


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


      <DIV class=nt  align=justify> 
	  <?=Navigate($Play);?>
        <br><br><br><br>
        <img src="img/je_s_b.png" align="left" vspace="2" hspace="20" alt="М. Зощенко Веселая жизнь" width="192" height="201"><span class=page_subtitle>Антон Чехов 
        «Житейские эпизодики», «Супруга»<br>
        2005 г. </span> <br><br>
        Сценическая композиция 2010 г.<br>
        Продолжительность спектакля <b>1</b> час <b>10</b> мин.<br>
        Спектакль идет с одним антрактом.<br><br>
        
        <!--  <b><a href="/order.php?sp=chehov">Заказать билеты &gt;&gt;</a></b><br>
        <b><a href="/affiche.php">Ближайший показ &gt;&gt;</a></b><br>
        <br>-->
		<b><a href="je_photo.php">Фотогалерея спектакля «Житейские эпизодики» &gt;&gt;</a></b> 
        <br>
        <br>
        <b><a href="s_photo.php">Фотогалерея спектакля «Супруга» &gt;&gt;</a></b> 
        <br>
        <br>
		<? Video("Видео","JOw2dtD-s_o"); ?>
		<br><br><br><br><br><br><br><br><br><br>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr class=nt >
              <td width="85%" valign=top>Наверное, Вам приходилось слышать определение: «Гоголь - великий насмешник». Но по нашей версии Гоголь – «великий плакальщик»; 	помните – знаменитый «смех сквозь слёзы»! (В качестве подтверждения нашей версии смотрите спектакли театра «СтД» «Женитьба» и «Повесть о том, как поссорился Иван Иванович с Иваном Никифоровичем»).<br><br>

			  А вот <b>великий насмешник</b> - это Чехов!<br><br>

			  Перед зрителями чередой разворачиваются «малозначительные» житейские истории, житейские <b>эпизодики</b>!<br><br>
			 
			  Конечно же, этот уморительно-уничижительный «термин» изобретён Автором!(Подзаголовок одного из многочисленных рассказов – «Эпизодик из жизни «милостивых государей»).<br><br>

			  Персонажи, по воле Автора, попадают в весьма неприятные для себя ситуации, порой граничащие с абсурдом. Причина этого – в специфике их характеров, точнейшим образом вскрытых доктором Чеховым! Он как бы ставит точный и неумолимый диагноз персонажу: «Милостивый государь, у вас такая-то болезнь! И надо лечиться!»<br><br>

			  Не зря наш спектакль сопровождает «Болезнь куклы» – музыка Чайковского из его «Детского альбома"».
			  <br><br>
			  <span class=chapter_title> 
			    Действующие лица и актёры <br><br>
                ЖИТЕЙСКИЕ ЭПИЗОДИКИ<br>
			  </span>
             
			  <table width="80%" border="0" cellspacing="0" cellpadding="0">
			   <tr><td width=40%></td><td width=40%></td></tr>
			  
			  <?
			    SubStory("Радость","",false);
				Role("Митя Кулдаров",false,'',array(305),false);
				Role("Отец",false,'',array(278),false);
				Role("Мать",false,'',array(344),true);
				Space();
				
				SubStory("Ушла","",false);
				Role("Муж",false,'',array(347),false);
				Role("Жена",false,'',array(346),true);
				Space();
				
				SubStory("Длинный язык","",false);
				Role("Дамочка (Наталья Михайловна)",false,'',array(343),false);
				Role("Муж (Васичка)",false,'',array(347),true);
				Space();
				
				SubStory("Из дневника одной девицы","",false);
				Role("Она",false,'',array(339),true);
				Space();
				
				SubStory("Размазня","",false);
				Role("Барин",false,'',array(341),false);
				Role("Гувернантка",false,'',array(344),true);
				Space();
				
				SubStory("СУПРУГА<br>(страшная ночь в кабинете Николая Евграфовича)<br>2005 г.","",true);
				PlainTextFull("Сценическая версия театра «СтД»", true);
				Role("Николай Евграфович",false,'',array(125),false);
				Role("Ольга Дмитриевна",false,'',array(345),false);
				Role("Горничная",false,'',array(345),true);
				Space();
				
				echo "             <!-- Постановочная группа -->";
				Role('',false,"Постановка",array(0),true);
				Role('',false,"Помощники режиссёра",array(243,222,242),true);
				Role('',false,"Светооператор",array(299),true);
				Role('',false,"Звукооператор",array(324),true);
				Role('',false,"Зав. постановочной частью",array(125),true);
				Role('',false,"Зав. электро-радио-цехом",array(190),true);
				Role('',false,"Постановочная группа",array(101,234,284,274,326,328,331),true);				
			  ?>

              </table>
			  <br>
              Музыка -<b> П.Чайковский</b>, «Болезнь куклы»
            </td>
            <td  width="15%" valign=top> <img src="../cp.gif" align="right" vspace="1" hspace="20"  width="150" height="177"></td>
          </tr>
        </table><br><br><br>
      </div>
       <!-- #EndEditable -->
    <?
    include "../bottom.php";
    ?>
 </body>
 <!-- #EndTemplate -->
</html>