<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.
include "functions.php";

//Определение локальных текстовых констант
$Page_Menu 	= "Репертуар";						//Выбранный пункт MainMenu
?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.". ".$Page_Menu;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
  <link rel="stylesheet" type="text/css" href="dorr.css">
  <script type="text/javascript" src="/sp/highslide/highslide.js"></script>
  <link rel="stylesheet" type="text/css" href="/sp/highslide/highslide.css" />
  <script type="text/javascript">
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = 'highslide/graphics/';
	
    (function(){
function raz(e) {
  var t = this.getElementsByTagName('span')[0],
      em = '-20', // 20 = max-width подсказки
      tR = t.getBoundingClientRect(),
      tS = getComputedStyle(t, '').fontSize.slice(0, -2),
      d = document.documentElement.getBoundingClientRect().right - tR.right;
  if(tR.left < 0) t.style.left = parseInt(tS * em - tR.left * 2) + 'px';
  if(d < 0) t.style.right = parseInt(tS * em - d * 2) + 'px';
}
var tooltip = document.querySelectorAll('.tooltip');
for (var i = 0; i < tooltip.length; i++) {
  tooltip[i].addEventListener('click', raz, false);
  tooltip[i].addEventListener('mouseover', raz, false);
}
})()
  </script>
 </head>


<body bgcolor="#FFFFFF" text="#000000" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style="margin:0 0 0 0;">
 <?
 include "head.php";
 ?>

        <!-- #BeginEditable "texy" --> 
     <div class=page_subtitle>Тестовая страница</div>

	 Итоги 50-го сезона: Не имея возможности играть на родной сцене в УрФУ в зале Т-216, театр «Старый Дом» провёл <b>50-й</b> репертуарный сезон (2015 – 2016) на сцене Муниципального театра балета <b>«Щелкунчик»</b>:<br><br>
<div align=center class=stress_big_bold_black>РЕПЕРТУАР:</div><br>

<table border=1 cellspacing=0>
  <tr>
    <td style="color: #FF0000; font-style: italic;">7 ноября</td>
	<td>
	  <b><i>Мих.Зощенко</i> 
	  <a href="/sp/vg.php">«ВЕСЁЛАЯ ЖИЗНЬ»</a></b><br>
	  <i>театральная сюита из 6-ти сюжетов</i>
    </td>
  </tr>
  <tr>
    <td style="color: #FF0000; font-style: italic;">5 декабря</td>
	<td>
	  <b><i>Н. Гоголь</i> 
	  <a href="/sp/jen.php">«ЖЕНИТЬБА»</a></b><br>
	  <i>совершенно невероятное событие в двух действиях</i>
    </td>
  </tr>
  <tr>
    <td style="color: #FF0000; font-style: italic;">21 февраля</td>
	<td>
	  <b><i>Н. Гоголь</i> 
	  <a href="/sp/ppi.php">«ПОВЕСТЬ О ТОМ,КАК ПОССОРИЛСЯ ИВАН ИВАНОВИЧ С ИВАНОМ НИКИФОРОВИЧЕМ»</a></b><br>
    </td>
  </tr>
  <tr>
    <td style="color: #FF0000; font-style: italic;">9 апреля</td>
	<td>
	  <b><i>Н. Гоголь</i> 
	  <a href="/sp/rev.php">««РЕВИЗОР»»</a></b><br>
    </td>
  </tr>
  <tr>
    <td style="color: #FF0000; font-style: italic;">30 апреля</td>
	<td>
	  <b><i>И. Тургенев</i> 
	  <a href="/sp/vv.php">«ВЕШНИЕ ВОДЫ»</a></b><br>
	  <i>история одной жизни в 2-х частях</i>
    </td>
  </tr>
  <tr>
    <td style="color: #FF0000; font-style: italic;">21 мая</td>
	<td>
	  <b><i>Мих.Зощенко</i> 
	  <a href="/sp/vg.php">«ВЕСЁЛАЯ ЖИЗНЬ»</a></b><br>
	  <i>театральная сюита из 6-ти сюжетов</i>
    </td>
  </tr>
</table>
<br><br>

В настоящий момент кипит глобальная работа над возобновлением одного из наших шедевров прошлых лет:<br><br>
<!-- «Мольер» -->
<table>
  <tr valign=top>
    <td>
	  <a href="sp/mb.php">
	   <img src="sp/img/mb_mini.png" align="left" vspace="2" hspace="20" alt="М. Булгаков. Мольер" border="0" width="130" height="236">
	  </a> 
	</td>
	<td>
      Михаил Булгаков <br>
      <a href="sp/mb.php" class=stress_big_bold_colour>«Мольер»</a><br>
	  (Легенда о знаменитом комедианте)<br>
      <br>
      <b>1994 г.</b>
	  <br><br>
      <b><a href="sp/mb.php">О спектакле &gt;&gt;</a></b><br>
      <!--<b><a href="sp/vv_photo.php">Фотогалерея спектакля &gt;&gt;</a></b><br>-->
	  <b><a href="http://www.youtube.com/watch?v=6-WDvKmrYtQ" target="_blank">Видео &gt;&gt;</a></b>
    </td>
  </tr>
</table>
<br>

Этот спектакль был поставлен в декабре <b>1994</b> года и шёл в репертуаре по май <b>2004</b> года; он игрался в специфическом сценическом пространстве Малого зала 3-го учебного корпуса, где тогда находился наш театр.
Поэтому сейчас мы решаем многосложные задачи по переносу сценографии спектакля в пространство сцены и зала театра «Щелкунчик».
И конечно, репетируем! На многие роли вводим наших молодых актёров, однако в нескольких ролях останутся ветераны спектакля: <b>[person]125[/person]</b> (Мольер), <b>[person]190[/person]</b> (архиепископ Шаррон), <b>[person]101[/person]</b> (маркиз д'Орсиньи), <b>[person]242[/person]</b> («Справедливый сапожник»), <b>[person]243[/person]</b> (Мадлена Бежар).
<br><br>
Спектакль запланирован <b>на 5 ноября</b>; мы посвящаем его <b>50-летию нашего театра</b>.


     </div> <!-- #EndEditable -->
  <?
  include "bottom.php";
  ?>
	
 </body>
<!-- #EndTemplate -->
</html>
