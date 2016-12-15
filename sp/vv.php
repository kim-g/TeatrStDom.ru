<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Вешние воды";				//Название
$Space = true;						//Добавляет расстояние между строками в списке актёров


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
      <img src="img/vv.jpg" align="left" vspace="2" hspace="20" alt="<?=$Play?>" width="190" height="345"> 
      <span class=page_subtitle> Иван Тургенев<br>
      «Вешние воды»<br>
	  (История одной жизни в 2-х частях)<br>
      1992 г.</span>
	  <br><br>
      Продолжительность спектакля <b>2</b> час <b>50</b> мин.<br>
      <i>(спектакль идет с одним антрактом)</i><br>
      <br>
      Спектакль поставлен в апреле <b>1992</b> года, <br>
      был в репертуаре по май <b>2001</b> года,<br>
      возобновлён в мае <b>2013</b> года 
      <br><br>
      <b>Ближайший показ 3 декабря 18-00</b><br><br>
      <!--<b><a href="order.php?sp=vv">Заказать билеты &gt;&gt;</a></b><br>
      <br>-->
      <b><a href="vv_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br><br>
	  <? Video("Видео","CUC2gjSpAvs"); ?>
	  <br><br><br><br><br><br><br><br><br><br><br><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td  width="85%" valign=top>
		 <div class=nt  align=justify>
          Это спектакль по уникальному произведению великого русского писателя, стоящему особняком даже среди его знаменитых творений. 
          <br><br>
          Любовь и страсть, пережитые героем в юности, завели его жизнь в тупик. Однако на закате жизни он нашёл в себе душевные силы, чтобы попытаться начать жизнь с чистого листа. Удастся это ему или нет – кто знает,  но жизнь его снова обрела смысл! 
		  <br><br>
		  Эта повесть И.Тургенева (написанная более ста сорока лет назад – в 1871 году) и сегодня являет собой чистейший родник духовности, удивительным образом совершенно незамутнённый прошедшими временами. Судьба главного героя вызывает сострадание и сопереживание, т.к. писатель подробнейшим образом рассматривает сугубо внутренний мир человека, мир его Чувств… 
          <br><br><br>
          <span class=page_subtitle> Действующие лица и актёры</span>
          <br><br> 
         </div>
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr class=nt><td width="40%"></td><td width="40%"></td><td width="20%"></td></tr>
		  <?
		    Role("Санин",false,"",array(278), true);
			Role("Джемма",false,"",array(324), true);
			Role("Фрау Леноре",false,"",array(301), true);
			Role("Эмиль",false,"",array(296,299), true);
			Role("Панталеоне",false,"",array(125), true);
			Role("Клюбер",false,"",array(234), true);
			Role("Дёнхофф",false,"",array(305), true);
			Role("Рихтер",false,"",array(227,299), true);
			Role("Офицер",false,"",array(242), true);
			Role("Полозов",false,"",array(284), true);
			Role("М.Н.Полозова",false,"",array(331), true);
			
			Space();
			Space();
			Space();
		  ?>
		  
		  <tr class=nt >
           <td colspan=3 align=center><b>Музыка из произведений В. А. Моцарта, Э.Л. Уэббера и Неизвестных авторов  </b></td>
	      </tr>
		  
		  <?
		    Space();
		    Role("",false,"Сценическая композиция, постановка, сценография, музыкальное оформление",array(0), true);
			Role("",false,"Главный помощник режиссёра,<br> постановочная часть",array(125), true);
			Role("",false,"Помощники режиссёра",array(222,328,339), true);
			Role("",false,"Электро/радио цех",array(190), true);
			Role("",false,"Звукорежиссура",array(125,299), true);
			Role("",false,"Светооператор",array(274), true);
			Role("",false,"Звукооператор",array(243), true);
			Role("",false,"Художники по костюмам",array(196,191), true);
			Role("",false,"Художник по аксессуарам",array(161), true);
			Role("",false,"Детали оформления",array(209), true);
			Role("",false,"Постановочная группа",array(101,239,326,344,345,"349@ *","350@ *","355@ *"), true);
			PlainTextFull("				<img scr={$CP} height=1px width=75px style='border-bottom: 1px solid black;'>",false);
			PlainTextFull("* Студия Нового приёма - 2014",true);
		  ?>
		  
         </table>
        </td>
        <td  width="15%" align=right valign=top>&nbsp;</td>
       </tr>
       <tr class=nt >
        <td colspan=2>&nbsp;</td>
       </tr>  
       <tr class=nt >
        <td colspan=2>&nbsp;</td>
       </tr>
      </table>
	  <br><br>  
     </DIV>
	 <br><br>
     <!-- #EndEditable -->
    <?
	include "../bottom.php";
	?>
 </body>
 <!-- #EndTemplate -->
</html>
