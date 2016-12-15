<?
//Определение локальных текстовых констант
$Page_Menu     = "Репертуар";            //Выбранный пункт MainMenu
$Play = "Женитьба";                //Название


//Добавление модулей в проект.
include "../main-texts.php";     //Добавление глобальных текстовых констант.
include "spectacle.php";    //Общие функции спектаклей
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
      <span class=page_subtitle>
       Николай Гоголь «Женитьба»<br> 
       (Совершенно невероятное событие в двух действиях)<br>
       2006 г.
      </span> <br><br>
      Продолжительность спектакля <b>2</b> часа <b>15</b> мин.<br>
      <i>(спектакль идет с одним ан<img src="../Img/jen_af.jpg" align="left" vspace="2" hspace="20" alt="Н. Гоголь Женитьба" width="190" height="273">трактом)</i><br>
      <br>
      Спектакль поставлен в декабре 2006 г.<br><br>
      <!--  <b><a href="/affiche.php">Ближайший показ &gt;&gt;</a></b><br><br>
      <b><a href="/order.php?sp=jen">Заказать билеты &gt;&gt;</a></b><br>
      <br>-->
      <b><a href="jen_photo.php">Фотогалерея спектакля &gt;&gt;</a></b> 
      <br><br>
	  <? Video("Видео","5iC6yDhQscc"); ?>
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td  width="85%" valign=top><DIV class=nt  align=justify> Николай Гоголь. Самое загадочное событие русской литературы. Его понимание (весьма осложненное, к тому же вбитыми в нас школьными штампами) - процесс скорее личный, интимный. К Гоголю надо прийти индивидуально.
        <br><br>
        Постановкой сначала «Женитьбы», а затем «Повести о том, как поссорился Иван Иванович с Иваном Никифоровичем» театр делится со зрителем своим ощущением: мы кое-что поняли… 
        <br><br>
        Понять Гоголя. Ну, хоть отчасти. Гоголя, актуального без всякого пошлого «осовременивания». Гоголя, щемящего, тоскующего по недостижимой гармонии жизни, и при этом - иногда, безумно смешного. А ведь драматург Гоголь оставил миру по сути всего две пьесы. И при этом оказался одним из величайших драматургов цивилизации. Загадка? Весь Гоголь – загадка. Как загадка - его странная пьеса «Женитьба», с её невероятными героями, с невероятными перипетиями, невероятными поступками персонажей. 
        <br><br>
        Те, кто давно не перечитывал эту невероятную историю, будут захвачены её вихреобразным развитием; те же, кто помнит сюжет, удивятся: трудно представить себе такого Кочкарева, такого Подколесина, совершенно неожиданны сваха Фекла, невеста Агафья Тихоновна… 
        <br><br>
        «Совершенно невероятное событие» в прочтении театра «Старый дом».
        <br><br><br>
        <span class=podzag>Актерские юбилеи</span><br><br>
          
        <object type="application/x-shockwave-flash" data="http://teatrstdom.ru/pl/uflvplayer_500x375.swf" height="300" width="500">
         <param name="bgcolor" value="#FFFFFF" />
         <param name="allowFullScreen" value="true" />
         <param name="allowScriptAccess" value="always" />
         <param name="movie" value="http://teatrstdom.ru/pl/uflvplayer_500x375.swf" />
         <param name="FlashVars" value="way=http://teatrstdom.ru/pl/G23_Fin.flv&amp;swf=http://teatrstdom.ru/pl/uflvplayer_500x375.swf&amp;w=500&amp;h=300&amp;pic=http://teatrstdom.ru/pl/stdu.jpg&amp;autoplay=0&amp;tools=1&amp;skin=white&amp;volume=70&amp;q=&amp;comment=" />
        </object>
        <span class=stress_big_bold_colour> 
         
		 <br><br><br>
         Действующие лица и актёры
        </span>
        <br><br> 
       </div>
       
       <!-- Актёры и роли -->
       <table width="80%" border="0" cellspacing="0" cellpadding="0">
        <tr class=nt><td width="40%"></td><td width="40%"></td></tr> 
        
		<?
		  Role("Агафья Тихоновна Купердягина",	true,	"купеческая дочь, невеста",		array(283,326),	true);
		  Role("Арина Пантелеймоновна",			true,	"тётка",						array(239,243),	true);
		  Role("Фёкла Ивановна",				true,	"сваха",						array(274,327),	true);
		  Role("Иван Кузьмич Подколесин",		true,	"служащий, надворный советник",	array(190),		true);
		  Role("Илья Фомич Кочкарёв",			true,	"друг его",						array(101),		true);
		  Role("Иван Павлович Яичница",			true,	"экзекутор",					array(242),		true);
		  Role("Никанор Иванович Анучкин",		true,	"отставной пехотный офицер",	array(125),		true);
		  Role("Балтазар Балтазарович Жевакин",	true,	"моряк",						array(227,92),	true);
		  Role("Акинф Степанович Пантелеев",	true,	"титулярный советник",			array(305),		true);
		  Role("Алексей Дмитриевич Стариков",	true,	"купец",						array(234),		true);
		  Role("Дуняшка",						true,	"девочка в доме",				array(301,355),	true);
		  Role("Степан",						true,	"слуга Подколесина",			array(296),		true);
		  Role("Извозчик",						false,	'',								array(0),		true);
		  
		  Space();
		  Space();
		  
		  Role('',	false,	"Режиссер-постановщик, сценическая композиция, сценография, музыкальное оформление",	array(0),	true);
		?>
        
        <tr class=nt >
         <td colspan=2 align=center><i>Музыка </i>– <b>Франческо Манфредини </b>(1688-1748)</td>
        </tr> 
        <tr class=nt >
         <td colspan=2 align=center>Симфония № 10</td>
        </tr> 
		
		<?
		  Space();
		  Role('',	false,	"Главный помощник режиссёра, постановочная часть, элементы сценографии, звукорежиссура",	array(125),	true);
		  Role('',	false,	"Электро/радио цех",		array(190),				true);
		  Role('',	false,	"Помощники режиссёра",		array(301,274,222),		true);
		  Role('',	false,	"Светооператор",			array(299),				true);
		  Role('',	false,	"Звукооператор",			array(324),				true);
		  Role('',	false,	"Группа зала и фойе",		array(239,339,331,344,345,284,278,'@и Студия Нового приёма – 2014'),		true);
		?>

        </table>
       <!-- Конец списка «Актёры и роли» -->
      </td>
      
      
      <td  width="15%" align=right valign=top>
       <img src="../Img/gogol_1.gif">
       <br><br><br><br><br><br><br> 
       
		<?
		Photo("jen2m.jpg", "jen2.jpg", 200, 166, 16); 
		Photo("jen6m.jpg", "jen6.jpg", 200, 156, 15); 
		Photo("jen4m.jpg", "jen4.jpg", 200, 157, 15); 
		Photo("jen5m.jpg", "jen5.jpg", 200, 129, 1); 
		?>
		
      </td>
     </tr>
    </table>
    
    <br><br>
    
	<span class=stress_big_bold_colour>Награды спектакля</span>
	<br><br>
	
	
	<?
	Photo("jen7m.jpg", "jen7.jpg", 150, 172, 1); 
	?>
	
	На фестивале <b>«Фестиваль студенческих театров»' 2007</b> спектакль завоевал следующие награды :
	<br><br>
	
    <b>ДИПЛОМ</b> в номинации «Лучшая мужская роль» – <b><?=PersonName_Surname(190);?></b> за роль Подколесина 
	<br><br>
	
    <b>ДИПЛОМ</b> в номинации «Лучшая эпизодическая роль» – <b><?=PersonName_Surname(267);?></b> за роль Дуняшки 
	<br><br>
	
    <b>ДИПЛОМ</b> за исполнение роли «Ивана Павловича Яичницы» – <b><?=PersonName_Surname(242);?></b> 
	<br><br><br>
	
    <b>ДИПЛОМ</b> награждается 
    <ul>
     - Заслуженный работник культуры России<br> 
     - заслуженный инженер-строитель нерушимого «Старого Дома» <br>
     - Конструктор и бессменный капитан непотопляемого театрального <br>
     «Титаника» <br>
     - рыцарь студенческого театра <br><br>
          <b><?=PersonName_Surname(0);?></b> 
    </ul>
	за создание убедительного образа внесценического персонажа Извозчика.   <br>
	<br><br>
   
   </div>
   <!-- #EndEditable -->
   <?
    include "../bottom.php";
   ?>
 </body>
 <!-- #EndTemplate -->
</html>
