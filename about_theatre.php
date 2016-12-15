<?
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.
include "functions.php";	//Добавление специальных функций

//Определение локальных текстовых констант
$Page_Menu 	= "О нашем театре";		//Выбранный пункт MainMenu
$Years_text = Word_Years($N_Season-1);
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
     <div class=page_subtitle_quote align=left><i>Может быть, театр – это именно то, что Вам нужно?</i></div>
     <br>
     <br>
    
     <div class=nt  align=justify>
        Вот уже <?=($N_Season-1)." ".$Years_text;?> в стенах Alma-mater - - УГТУ-УПИ ( или, как теперь говорят, УрФУ )  существует 
        <span class=stress_big_bold_colour_italic>студенческий театр «Старый Дом».</span>
        <br><br>
        <img src="Img/jen1.jpg" width="200" height="157" align="right" vspace="5" hspace="10" alt="Н. Гоголь Женитьба"> 
        Сначала (в <b>1966 г</b>.) это был <b>«Театр эстрадных миниатюр Политехнического института»</b> (ТЭМПИ), потом 
        <b>«Сатирический театр»</b>(«СТ»), потом <b>«Студенческий театр драмы»</b> («СТд»), потом театр <b>«Старый Дом»
        </b> («СтД»). 
        <br><br>
        
        ...Иногда зрители интересуются, а почему «старый» дом? Догадаться нетрудно: если в одном и том же месте более <?=($N_Season-1)-(($N_Season-1) % 5);?> 
        лет постоянно существует этот театр, то «новым»его никак не назовёшь. а «старый» - это надёжность, испытанность 
        временем, это «родовое» гнездо для многих поколений его Актёров - для трёх сотен человек, которые за <?=($N_Season-1)." ".$Years_text;?> жизни 
        театра принимали участие в его творческой работе.
        <br><br>
        
        А ещё нередко задаются вопросом: а какой это театр? Самодеятельный? Любительский? Студенческий? Профессиональный? 
        Непрофессиональный?
        <br><br>
        
        <span class=stress_big_bold_colour_italic>Любительский?</span> 
        Ну конечно! Ведь деятели именно такого театра работают в нем действительно только из любви к Делу. Ведь его актеры 
        не получают за свой творческий труд материального вознаграждения и даже скромные средства, выручаемые от спектаклей, 
        тратят на постановочные расходы. Театр какого-либо иного типа, возможно, и может существовать без Любви, а такой, 
        как наш  нет, это уж точно!
        <br><br>
        
        <span class=stress_big_bold_colour_italic>Студенческий?</span> 
        Да, театр работает под крышей ВУЗа, и в его труппе, и среди его зрителей непременно есть студенты, причем самых 
        разных ВУЗов города.
        <br><br>
        
        <span class=stress_big_bold_colour_italic>Самодеятельный?</span> 
        И это верно, несмотря на скомпрометированный в прошлом и несколько пресловутый термин, ведь никто не распоряжался 
        сверху о его создании. Театр в свое время сам себя создал, изобрел и сам себя делает каждодневно и постоянно вот 
        уже <?=($N_Season-1)." ".$Years_text;?>. 
        <br><br>
        
        <img src="/Img/ppi1.jpg" width="200" height="157" align="right" vspace="5" hspace="10" alt="Н. Гоголь Повесть о том, как..."> 
        <span class=stress_big_bold_colour_italic>Профессиональный или непрофессиональный?</span> 
        С этим определением загадочнее всего. Как его понимать? Если иметь в виду наличие у актеров труппы дипломов о 
        специальном театральном образовании, то их нет в принципе. (Хотя рано или поздно дипломы о высшем образовании  
        появляются почти у всех членов труппы.) Значит, непрофессиональный? Но мы убеждены, что истинный показатель 
        профессионализма - это качество спектаклей. Помните, как у М. Булгакова осетрины «второй свежести» не бывает! Так вот, 
        если зритель не без удовольствия посещает спектакли какого-либо театра, с интересом следит за действием, не уходит во 
        время спектакля или антракта, подолгу аплодирует, стремится посетить другие спектакли этого театра, и даже не 
        чертыхаются искушенные критики (что с ними бывает нередко!), то, стало быть, это игрище-зрелище сработано 
        профессионально. И наоборот! 
        <br><br>
        
        Поэтому следует отбросить все эти неуклюжие прилагательные, и да здравствует просто Театр, главное в котором для Зрителя  
        это качество репертуара. И в этом смысле нам есть что предложить вам!
        <br><br><br><br><br>
     </div> <!-- #EndEditable -->
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>