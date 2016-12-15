<?
//Шапка и главное меню

include "main-texts.php"; //Добавление глобальных текстовых констант.

?>
<!--LiveInternet counter-->
  <script type="text/javascript">
   <!--
   new Image().src = "//counter.yadro.ru/hit?r"+
   escape(document.referrer)+((typeof(screen)=="undefined")?"":
   ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
   screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
   ";"+Math.random();
   //-->
  </script>
  <!--/LiveInternet-->

  <!--  Top Title   -->
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <td width=100% height=1 class=banfon><a href="/main.php"><img src="/Img/logo_n.gif" width="250" height="110" border="0"></a></td>
   </tr>
   <tr  class=nizz>
    <td width=100% height=1>
     <img src="<?=$CP;?>" width="1" height="5">
    </td>
   </tr>
   <tr  class=nizz>
    <td width=100% height=1>
 
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <td width="52%"> 
        <div  class=bantx_i>&nbsp;
         <?=$Page_Title;?>
        </div>
       </td>
       <td width="35%"> 
        <div class=season>
         <?=$Page_Season;?>
        </div>
       </td>
       <td align=right width="13%">
        <div  class=bantx_i>
		 &nbsp;Екатеринбург,&nbsp;<a href="<?=$University_URL?>" target="_blank"  class=bantx_i><?=$University_Name?></a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
       </td>
      </tr>
     </table>
    </td>
   </tr>
   <tr  class=nizz>
    <td width=100% height=1>
     <img src="<?=$CP;?>" width="1" height="5">
    </td>
   </tr>
   
   <tr  class=nizr>
    <td width=100% height=1>
     <img src="<?=$CP;?>" width="1" height="5">
    </td>
   </tr>
   <tr class=nizr>
       <td colspan=3 align=center class=stress_big_bold_white> 
        50 лет работы театра (1966-2016)
       </td>
   </tr>
   <tr  class=nizr>
    <td width=100% height=1>
     <img src="<?=$CP;?>" width="1" height="5">
    </td>
   </tr>

  </table>
  
  <!-- Site menu -->
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <td width=250 height=1><img src="<?=$CP;?>" width=250 height=10></td>
    <td width=10 height=1 class=menfon><img src="<?=$CP;?>" width=10 height=10></td>
    <td width=20 height=1><img src="<?=$CP;?>" width=20 height=10></td>
    <td width=100% height=1><img src="<?=$CP;?>" width=450 height=10></td>
    <td width=20 height=1><img src="<?=$CP;?>" width=20 height=10></td>
   </tr>
   <tr>
    <td width=250 height=1 valign=top> 
      <!-- #BeginEditable "menu" --> 
	
	<!-- #BeginLibraryItem "/Library/air.lbi" -->
     <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
       <td width=10 height=1><img src="<?=$CP;?>" width=20 height=60></td>
       <td width=100% height=1><img src="<?=$CP;?>" width=100 height=1></td>
       <td width=20 height=1><img src="<?=$CP;?>" width=10 height=1></td>
      </tr>

      <?
      foreach($MMenu as $M_URL=>$M_NAME)	//Для каждого элемента MMenu...
        {
        echo "      <tr> 
       <td width=10 height=1><img src='{$CP}' width=1 height=31></td>\n";	//...выведем первую ячейку таблицы
       if($M_NAME==$Page_Menu) 						//Если в ячейке отображена уже открытая страница...
         {
         $M_Style='menur';						//...рисуем её стилем menur
         }
        else
         {
         $M_Style='menu';		//...в противном случае - menu
         };
        echo "       <td width=100% height=1><a href='{$M_URL}' class={$M_Style}>{$M_NAME}</a></td>
       <td width=20 height=1><img src='{$CP}' width=1 height=1></td>
      </tr>
      <tr> 
       <td width=10 height=1><img src='{$CP}' width=1 height=5></td>
       <td width=100% height=1><img src='{$CP}' width=1 height=1></td>
       <td width=20 height=1><img src='{$CP}' width=1 height=1></td>
      </tr>\n";								//И дорисуем всё остальное.
        };
      ?>
     </table><!-- #EndLibraryItem --><!-- #EndEditable -->
    </td>
    <td width=10 height=1 class=menfon><img src="<?=$CP?>" width=10 height=1></td>
    <td width=20 height=1><img src="<?=$CP?>" width=20 height=1></td>
    <td width=100% height=1 valign=top>
	<div class=nt  align=justify><span class=page_subtitle><?=$Page_SubTitle;?> </span>
	<br><br><br>
	
	<div class=page_subtitle_quote align=right>
      <i>
     <?
	 //Определение локальных текстовых констант
$Max_Text	= 7;							//Количество афоризмов
$Text[1]	= "Над вымыслом слезами обольюсь.";			//Афоризм
$Text[2]	= "Человек играет только тогда, когда он в полном значении слова человек, и он бывает вполне человек лишь тогда, когда играет.";
$Text[3]	= "Мне кажется, всякий, кто в здравом уме, всегда стремится быть подле того, кто лучше его самого.";
$Text[4]	= "Искусство есть средство единения людей.";
$Text[5]	= "Едва ли есть высшее из наслаждений, как наслаждение творить.";
$Text[6]	= "В сущности, искусство - зеркало, отражающее того, кто в него смотрится, а вовсе не жизнь.";
$Text[7]	= "Я люблю театр, он гораздо реальнее жизни.";
$Text_Author[1]	= "А. Пушкин";						//Автор афоризма
$Text_Author[2]	= "Ю. Лотман";
$Text_Author[3]	= "Платон";
$Text_Author[4]	= "Л. Толстой";
$Text_Author[5]	= "Н. Гоголь";
$Text_Author[6]	= "О. Уайлд";
$Text_Author[7]	= "О. Уайлд";
	 
     $RND = rand(1, $Max_Text);
     echo "      <div align=right>«{$Text[$RND]}»</div>
      <div align=right>{$Text_Author[$RND]}</div>";
     ?>

      </i>
     </div>
	 <br><br>