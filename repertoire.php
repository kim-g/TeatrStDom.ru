<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";						//Выбранный пункт MainMenu
$Page_SubTitle = "Текущий репертуар";			//Название под шапкой.
?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.". ".$Page_Menu;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
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

    <table class=nt>
	    <!-- «Вешние воды» -->
	    <tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/vv.php">
	         <img src="/sp/img/vvm.jpg" vspace="2" hspace="20" alt="И. Тургенев. Вешние воды" border="0" width="130" height="236">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Иван Тургенев <br>
			<a href="/sp/vv.php" class=stress_big_bold_colour>«Вешние воды»</a><br>
			(История одной жизни в 2-х частях)<br>
			<br>
			<b>1992 г.</b>
			<br><br>
			<b><a href="/sp/vv.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="/sp/vv_photo.php">Фотогалерея спектакля &gt;&gt;</a></b><br>
			<b><a href="http://www.youtube.com/watch?v=CUC2gjSpAvs" target="_blank">Видео &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Мольер» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/mb.php">
	         <img src="/sp/img/mb_mini.png" align="left" vspace="2" hspace="20" alt="М. Булгаков. Мольер" border="0" width="130" height="236">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Михаил Булгаков <br>
			<a href="/sp/mb.php" class=stress_big_bold_colour>«Мольер»</a><br>
			(Легенда о знаменитом комедианте)<br>
			<br>
			<b>1994 г.</b>
			<br><br>
			<?/*<b><a href="/order.php">Ближайший показ 26 ноября 18-00</a></b>
			<br><br>*/?>
			<b><a href="/sp/mb.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="sp/mb_photo.php">Фотогалерея спектакля &gt;&gt;</a></b><br>
			<b><a href="http://www.youtube.com/watch?v=6-WDvKmrYtQ" target="_blank">Видео &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Весёлая жизнь» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/vj.php">
	         <img src="Img/vj_afm.jpg" align="left" vspace="2" hspace="20" alt="М. Зощенко Веселая жизнь" width="130" height="102" border="0">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Михаил Зощенко<br>
			<a href="/sp/vj.php" class=stress_big_bold_colour>«Весёлая жизнь»</a><br>
			(Театральная сюита из 6-ти сюжетов)<br><br>
			<b>2001 г. </b><br><br>
			<b><a href="/sp/vj.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="/sp/vj_photo.php">Фотогалерея спектакля &gt;&gt;</a></b><br>
			<b><a href="http://youtu.be/yorYKU-82AI" target="_blank">Видео (2010 г.) &gt;&gt;</a></b><br>
	  
			<b><a href="http://www.youtube.com/watch?v=5ikT3Ct4ACU" target="_blank">Видео (2014 г.) &gt;&gt;</a></b><br>
	  
			<b><a href="/afterparty.php">«Театральный разъезд» &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Концерт по заявкам» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/kpz.php">
	         <img src="/sp/img/kpz_m.jpg" border="0" alt="Ф. К. Крёц Концерт по заявкам" vspace="2" hspace="20" align="left" width="130" height="128">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Франц Ксавер Крёц<br>
			<a href="/sp/kpz.php" class=stress_big_bold_colour>«Концерт по заявкам»</a><br><br>
			<b> 2005г. </b><br><br>
			<b><a href="/sp/kpz.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="/sp/kpz_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
			<b><a href="http://www.youtube.com/watch?v=v74m6YwDEpw" target="_blank">Видео &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Житейские эпизодики», «Супруга» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/je_s.php">
	         <img src="sp/img/je_s_m.png" border="0" alt="Житейские эпизодики" vspace="2" hspace="20" align="left" width="130" height="128">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Антон Чехов <br>
			<a href="/sp/je_s.php" class=stress_big_bold_colour>«Житейские эпизодики»</a><br>
			<a href="/sp/je_s.php" class=stress_big_bold_colour>«Супруга»</a><br>
			(страшная ночь в кабинете Николая Евграфовича) <br>
			<b> 2005г.</b><br><br>
			<b><a href="/sp/je_s.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="/sp/je_photo.php">Фотогалерея спектакля «Житейские эпизодики» &gt;&gt;</a></b><br>
			<b><a href="/sp/s_photo.php">Фотогалерея спектакля «Супруга» &gt;&gt;</a></b><br>
			<b><a href="http://www.youtube.com/watch?v=JOw2dtD-s_o" target="_blank">Видео &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Женитьба» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/jen.php">
	         <img src="Img/jen_afm.jpg" align="left" vspace="2" hspace="20" alt="Н. Гоголь Женитьба" border="0" width="130" height="187">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Николай Гоголь<br>
			<a href="sp/jen.php" class=stress_big_bold_colour>«Женитьба»</a><br>
			(Совершенно невероятное событие 
			в двух действиях)<br><br>
			<b>2006 г.</b><br><br>
			<b><a href="sp/jen.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="sp/jen_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
			<b><a href="http://www.youtube.com/watch?v=5iC6yDhQscc" target="_blank">Видео &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Повесть о том...» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/ppi.php">
	         <img src="/Img/ppi_afm.png" align="left" vspace="2" hspace="20" alt="Н. Гоголь Повесть о том..." border="0" width="130" height="168">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Николай Гоголь<br>
			  <a href="/sp/ppi.php" class=stress_big_bold_colour>
			   «Повесть о том, как поссорился Иван Иванович с Иваном Никифоровичем»
			  </a><br>
			  <br>
			  <b>2008 г.</b><br><br>
			  <b><a href="/sp/ppi.php">О спектакле &gt;&gt;</a></b><br>
			  <b><a href="/sp/ppi_photo.php">Фотогалерея спектакля &gt;&gt;</a></b><br>
			  <b><a href="http://www.youtube.com/watch?v=lpgkcFUCuGY" target="_blank">Видео &gt;&gt;</a>
		  </td>
		<tr>
		
		<!-- «Проба пера - 2010» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/pp.php">
	         <img src="/sp/img/ppm.jpg" border="0" alt="Проба пера" vspace="2" hspace="20" align="left" width="130" height="103">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    <a href="sp/pp.php" class=stress_big_bold_colour>«Проба пера»</a><br>
			(«Актёрский полигон» Студии Нового приёма-09<br>
			и Молодого состава труппы) <br>
			<b> 2010г.</b><br>
			<br>
			<b><a href="sp/pp.php">О спектакле &gt;&gt;</a></b>
		  </td>
		<tr>
		
		<!-- «Ревизор» -->
		<tr valign=top>
	      <td style="padding-bottom: 60px">
		    <a href="/sp/rev.php">
	         <img src="/sp/img/revm.gif" border="0" alt="Ревизор" vspace="2" hspace="20" align="left" width="130" height="114">
	        </a>
		  </td>
		  <td style="padding-bottom: 60px">
		    Николай Гоголь<br>
			<a href="sp/rev.php" class=stress_big_bold_colour>«Ревизор»</a><br>
		  
			<b> 2012г.</b><br><br>
			<b><a href="/order.php">Ближайший показ 18 февраля 18-00</a></b>
			<br><br>
			<b><a href="sp/rev.php">О спектакле &gt;&gt;</a></b><br>
			<b><a href="sp/rev_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> <br>
			<b><a href="http://www.youtube.com/watch?v=mWRuPrknfUs" target="_blank">Видео &gt;&gt;</a></b><br>
			<b><a href="/dorr.php">Дело о реабилитации «Ревизора» &gt;&gt;</a></b>
		  </td>
		<tr>
	  </table>

	  
	  <!-- Репертуар прошлых лет -->
      <span class=stress_big_bold_colour>Репертуар прошлых лет</span><br><br><br>
      Сл.Мрожек <br>
      <span class=stress_big_bold_colour>«В открытом море»</span> (притча в одной действии)<br>
      <b>1967г.</b> 
      <br><br><br>
	  
      Евг.Шварц <br>
      <span class=stress_big_bold_colour>«Дракон»</span> (сказка с грустным началом, но счастливым концом, 
      понятная даже самому взрослому зрителю)<br>
      <b>1969г.</b> 
      <br><br><br>
	  
      Вл.Маяковский<br>
      <span class=stress_big_bold_colour>«Баня»</span> (драма с цирком и фейерверком)<br>
      <b> 1971г.</b> 
      <br><br><br>
 
      М.Булгаков <br>
      <span class=stress_big_bold_colour>«Иван Васильевич»</span> (Комедия в 3-х актах)<br>
      <b> 1972г.</b> 
      <br><br><br>
	  
      А.Арбузов <br>
      <span class=stress_big_bold_colour>«Выбор»</span> (драматическая задача в 2-х частях с прологом и эпилогом) <br>
      <b>1973г.</b> 
      <br><br><br>
	  
      Евг.Шварц <br>
      <span class=stress_big_bold_colour>«Тень»</span> (сказка, действие которой происходит в одной очень жаркой 
      стране) <br>
      <b>1974г.</b> 
      <br><br><br>
	  
      Г.Горин <br>
      <span class=stress_big_bold_colour>«...Забыть Герострата!»</span> (фантазия на темы далекого прошлого 
      в 2-х частях)<br>
      <b> 1975г. </b>
      <br><br><br>
	  
      М.Рощин <br>
      <span class=stress_big_bold_colour>«Старый Новый год»</span> (полукомедия в 4-х сновидениях) <br>
      <b>1976г.</b> 
      <br><br><br>
	  
      А.Вампилов<br>
      <span class=stress_big_bold_colour>«20 минут с ангелом», 
      «История с метранпажем»</span> (анекдоты в одном действии) <br>
      <b>1977г. </b>
      <br><br><br>
	  
      Ю.Марцинкявичюс <br>
      <span class=stress_big_bold_colour>«Сегодня ночью и всегда...»</span> (сновидение в 1 действии) <br>
      <b>1980г.</b> 
      <br><br><br>
	  
      Э.Ветемаа <br>
      <span class=stress_big_bold_colour>«Монумент»</span> (анатомия одной ситуации в 2-х действиях) <br>
      <b>1981г.</b> 
      <br><br><br>
	  
      Ф.Дюрренматт <br>
      <span class=stress_big_bold_colour>«Ромул Великий»</span> (неисторическая историческая комедия в 2-х 
      актах) <br>
      <b>1982г.</b> 
      <br><br><br>
	  
      В. Быков <br>
      <span class=stress_big_bold_colour>«Испытание»</span> (драматическая поэма в 3-х частях по 
      произведениям «Одна ночь», «Круглянский мост», «Волчья стая») <br>
      <b>1985г.</b> 
      <br><br><br>
	  
      А.Гельман <br>
      <span class=stress_big_bold_colour>«Зинуля»</span> (спектакль загадочного жанра) <br>
      <b>1986г.</b> 
      <br><br><br>
	  
      С.Стратиев <br>
      <span class=stress_big_bold_colour>«Автобус»</span> (рейс без антракта) <br>
      <b>1986г.</b> 
      <br><br><br>
	  
      Сл.Мрожек<br> 
      <span class=stress_big_bold_colour>«Полиция»</span> (весьма странное дело в 3-х действиях, 7 картинах без 
      антрактов)<br>
      <b> 1988г.</b> 
      <br><br><br>
	  
      О.Уайлд <br>
      <span class=stress_big_bold_colour>«Кентервильское привидение»</span> (весьма легкомысленная 
      экскурсия по мотивам малознакомого знаменитого писателя)<br>
      <b> 1990г. </b>
      <br><br><br>
	  
      И. Тургенев <br>
      <span class=stress_big_bold_colour>«Вешние воды»</span> (история одной жизни в 2-х частях) <br>
      <b>1992г.</b> 
      <br><br><br>
 
      Ф.Дюрренматт <br>
      <span class=stress_big_bold_colour>«Метеор»</span> (комедия в 2-х актах) <br>
      <b>1993г. </b>
      <br><br><br>
 
      М.Булгаков <br>
      <span class=stress_big_bold_colour>«Мольер»</span> (легенда о знаменитом комедианте)<br>
      <b> 1994г. </b>
      <br><br><br>
 
      Ж.-Б.Мольер <br>
      <span class=stress_big_bold_colour>«Мизантроп»</span> (скандалы а будуаре) <br>
      <b>1996г. </b>
      <br><br><br>
	  
      Ж.-Б.Мольер <br>
      <span class=stress_big_bold_colour>«Жорж Данден»<br>
      «Брак поневоле»</span>  (дилогия о неудачной женитьбе) <br>
      <b>1996г.</b> 
      <br><br><br>
	  
      Е.Шварц, М.Булгаков, А.Пушкин, Ж.-Б.Мольер, У.Шейкспиэр, 
      М.Зощенко, М.Митуа, Н.Гоголь <br>
      <span class=stress_big_bold_colour>«Проба пера»</span> (весьма беглая экскурсия по некоторым шедеврам 
      мировой драматургии и литературы) <br>
      <b>1999г.</b> 
      <br><br><br>
	  
      М.Зощенко <br>
      <span class=stress_big_bold_colour>«Веселая жизнь»</span> (первая попытка открытия Автора) <br>
      <b>2002г. </b>
      <br><br><br>

     </div> <!-- #EndEditable -->
  <?
  include "bottom.php";
  ?>
	
 </body>
<!-- #EndTemplate -->
</html>
