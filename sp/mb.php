<?
//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";			//Выбранный пункт MainMenu
$Play = "Мольер";				//Название
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
	  <?=Navigate($Play);
      Affiche("mb","mb_big","М. Булгаков «Мольер»");?>
      <span class=page_subtitle> Михаил Булгаков<br>
      «Мольер»<br>
	  (Легенда о знаменитом комедианте)<br>
      1994 г.</span>
	  <br><br>
      Продолжительность спектакля <b>2</b> час <b>50</b> мин.<br>
      <i>(спектакль идет с одним антрактом)</i><br>
      <br>
      Спектакль поставлен в декабре <b>1994</b> года, <br>
      был в репертуаре по май <b>2004</b> года,<br>
      возобновляется в ноябре <b>2016</b> года 
      <br><br>
      <b><a href="/order.php">Ближайший показ 26 ноября 18-00</a></b><br><br>
      <!--<b><a href="../zakaz.html?sp=vv">Заказать билеты &gt;&gt;</a></b><br>
      <br>-->
      <b><a href="mb_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br><br>
	  <? Video("Видео","6-WDvKmrYtQ"); ?>
	  <br><br><br><br><br><br><br><br><br><br><br><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td  width="85%" valign=top>
		 <div class=nt  align=justify>
          <b>…Булгаков и Мольер…</b> Один жил в середине XVII века во Франции, другой – в начале XX века в России. Два замечательных, уникальных Художника. Один из них – Мольер – ничего не мог знать о другом, но Булгаков, видимо, постоянно и мучительно думал о своем французском коллеге по перу, мысленно с ним общался и написал про него два произведения: пьесу <b>«Кабала святош»</b> и повесть <b>«Жизнь господина де Мольера»</b>. <br><br>
		  Мы с вами – читатели и зрители – наслаждаясь произведениями великих художников, быть может, не задумываемся над закономерностями их трагической жизненной судьбы, да и вряд ли погружение в подробности жизни Великих прибавит или убавит им славы – ведь она и так уже непреходяща…<br><br>
          Да, это, пожалуй, нужно не для них, а для нашей с вами пользы…

          <br><br><br>
          <span class=page_subtitle> Действующие лица и актёры</span>
          <br><br> 
         </div>
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr class=nt><td width="40%"></td><td width="40%"></td><td width="20%"></td></tr>
		  <?
		    Role("Жан-Батист Поклен де Мольер",true,"знаменитый драматург и актер",array(125), true);
			Role("Мадлена Бежар",true,"актриса",array(243,222), true);
			Role("Арманда Бежар де Мольер",true,"актриса",array(324,349), true);
			Role("Мариэтта Риваль",true,"актриса",array(344), true);
			Role("Шарль Варле де Ля Гранж",true,"актер и секретарь театра по прозвищу «Регистр»",array(299), true);
			Role("Захария Муаррон",true,"знаменитый актер-любовник",array(227,296), true);
			Role("Жан-Жак Бутон",true,"тушильщик свечей и слуга Мольера",array(278,92), true);
			Role("Ренэ",true,"нянька Мольера",array(328), true);
			Role("Шарлатан с клавесином",false,"",array(284), true);
			Role("Людовик Великий",true,"король Франции",array(234), true);
			Role("Маркиз д’Орсиньи",true,"по кличке «Помолись!»",array(101), true);
			Role("Маркиз де Лесcак",true,"игрок в карты",array(278, 92), true);
			Role("«Справедливый сапожник»",true,"королевский шут (он же </span>Брат Сила<span class=job>, член Кабалы Священного писания)",array(242), true);
			Role("Маркиз де Шаррон",true,"архиепископ города Парижа",array(190), true);
			Role("Брат Верность",true,"член Кабалы Священного писания",array(284), true);
			Role("Отец Варфоломей",true,"бродячий проповедник ",array(296), true);
			Role("Незнакомка",false,"",array(350), true);
			Role("Монашка",false,"",array(339), true);
			Role("",false,"Актеры труппы Мольера, Придворные, Члены Кабалы Священного писания",array(350,190,"@Григорий Иванченко*","@Андрей Чухарев*"), true);

			
			Space();
			Space();
			Space();

		    Role("",false,"Режиссер-постановщик, сценография, музыкальное оформление",array(0), true);
			Space();
			Space();			
			?>
		  
		  <tr class=nt >
           <td colspan=3 align=center><i>Музыка –	<b>Дж.Фарнеби, Т.Томкинс, Аноним, Джироламо Фрескобальди, Генри Пёрселл, Франсуа Куперен, Вольфганг Амадей Моцарт, София Губайдулина, Виктор Суслин, Арво Пярт</b></i></td>
	      </tr>
		  <?
			Space();
		  ?>
		  <tr class=nt >
		    <td colspan=3 align=center><i>Текст фрагмента пьесы Ж.-Б.Мольера «Мнимый Больной» в переводе <b>А.Смирнова</b></i></td>
	      </tr>
			
		  <?
		    Space();
			Role("",false,"Помощники режиссера",array(222,243), true);
			Role("",false,"Зав. постановочной частью",array(125), true);
			Role("",false,"Электро/радио цех",array(190,299), true);
			Role("",false,"Звукорежиссура",array(125,299), true);
			Role("",false,"Светооператор",array(274), true);
			Role("",false,"Звукооператор",array(301), true);
			Role("",false,"Костюмы,  реквизит, детали оформления",array(161,191), true);
			Role("",false,"Постановочная группа",array(239,219), true);
			Role("",false,"Группа зала и фойе",array(117, "@и Студия Нового приёма-2016*"), true);
			PlainTextFull("				<img scr={$CP} height=1px width=75px style='border-bottom: 1px solid black;'>",false);
			PlainTextFull("* Студия Нового приёма - 2016",true);
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
