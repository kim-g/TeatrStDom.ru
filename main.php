<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "Главная";						//Выбранный пункт MainMenu
?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
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
     <div class=nt  align=justify>
      <table width="250" border="0" cellspacing="0" cellpadding="5" align=right>
       <tr>
        <td align=center>
         <img src="Img/rej.jpg" vspace="1" hspace="3" width="200" height="262" alt="Николай Стуликов"> 
        </td>
       </tr>
       <tr>
        <td align=center> <img src="<?=$CP;?>" width=250 height=10></td>
       </tr>
       <tr>
        <td class=nt_bold align=center>
         Художественный руководитель театра «Старый Дом», заслуженный работник культуры России, <br>
         Лауреат Губернаторской премии<br>
         за 2013 год
         <br>
         Николай Александрович Стуликов
        </td>
       </tr>
      </table>
      
      <div class=ntm align=justify>Студенческий театр «Старый дом» приветствует своего зрителя. Вчерашнего, или завтрашнего?  Мы встречались с вами или еще только встретимся на будущих спектаклях? 
      В любом случае - ЗДРАВСТВУЙТЕ!<br><br>
      А ведь, если задуматься, то довольно странно получается. Театр на сайте. ТЕАТР: то, что может существовать только «здесь, сегодня и сейчас», то, что даже записанное на пленку 
      мгновенно теряет львиную долю своего обаяния, то, что совместно, в зале,  создают эти самые актеры с этими самыми зрителями - все это в Интернете, в виртуальном мире с его 
      особенностями…<br><br>
      На этих страничках мы только чуть-чуть расскажем о себе, только дадим настройки, резонансные частоты, только намекнем на то, как и о чем мы думаем. Для того, чтобы пробудить 
      интерес. И побудить к действию. К реальному походу в настоящий театр, о котором, конечно, можно и прочитать… <br>
      Но лучше - увидеть. Лично. Самому. <br><br>
      Как там у Вознесенского ? <br>
      «Без посредников - к настоящему.»
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

     </div>
	 <!-- #EndEditable -->
  <?
  include "bottom.php";   
  ?>
 </body>
<!-- #EndTemplate -->
</html>
