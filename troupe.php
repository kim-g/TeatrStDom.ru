<? 
//Добавление модулей в проект.
include "db_config.php";    //Инициализация БД
include "main-texts.php";     //Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$MMenu_Prefix     = "../";            //Выход в корневую директорию в MainMenu (А нужно ли?!)
$Page_Menu     = "Актёры и роли";        //Выбранный пункт MainMenu
$Title_End     = " ".$Page_Menu;        //Окончание заголовка страницы
$Table_Title     = $Current_Members;        //Название таблица ЛиГ
$Table_Head[1]    = 'Годы, сезоны';        //Названия столбцов в таблице
$Table_Head[2]    = '№';
$Table_Head[3]    = 'Персона';
$Table_Head[4]    = 'Годы';
$Page_SubTitle = $Page_Menu;			//Название под шапкой.



?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
  <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.$Title_End;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
  <link rel="stylesheet" type="text/css" href="air.css">
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
      <table width="100%" border="0">
       <tr>
        <td  width="73%" class=podzag2><?=$Table_Title;?></td>
    <td  width="2%">&nbsp;</td>
        <td  width="25%"></a></td>
       </tr>
       <tr>
        <td>
     <table width="100%" border="0" cellpadding="2">
          <tr class=nt>
           <td width="5%" align=center><b><?=$Table_Head[2];?></b>&nbsp;</td>
           <td width="45%"><b><?=$Table_Head[3];?></b></td>
           <td width="35%"><b><?=$Table_Head[4];?></b></td>
          </tr>
          <tr>
           <td><img src="<?=$CP;?>" width=1 height=2></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
          </tr>
		  <tr class=trfon>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
          </tr>
          <tr>
           <td><img src="<?=$CP;?>" width=1 height=2></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
          </tr>
          
  
          <!-- Получено из БД -->
          
          <?
          //Получение информации из БД
          
            $Persons=mysql_query("SELECT * FROM `people` WHERE `group`=1 ORDER BY `Number`");
            $N=0;
            while ($Person=mysql_fetch_assoc($Persons))
              {
              $N++;
			  ?>
              <tr class=nt>
			  <?
              echo "";
              $LinkM = ""; 
			  if ($Person['link']==1) {$LinkB="<a href='person.php?num={$Person['Number']}'  class=tr>";$LinkE="</a>";$LinkM="&nbsp;&gt;&gt;";} else {$LinkB="<span class=tr_no_link>";$LinkE="</span>";$LinkM="";};
              $PName = $Person['surname']." ".$Person['name'];
              if ($Person['zasrak']==1) {$PName=$PName." <img src='/Img/titul1m.gif' width='15' height='15' border='0' alt='Заслуженный работник культуры России'>";};
              if ($Person['HMT']==1) {$PName=$PName." <img src='/Img/titul2m.gif' border='0' alt='Почетный член труппы'>";}
              $TD_Add="";
              if ($Person['dead']==1) {$PName="<div class='ramka' style='border: 2px solid black; padding: 3px 7px ; margin: 5px 3px; width: 180px;'>".$PName.$LinkM." </div>"; $TD_Add=" height='34'";} else {$PName=$PName.$LinkM;}
              
              echo "           <td align=center>{$Person['Number']}</td>
           <td{$TD_Add}>&nbsp;".$LinkB.$PName.$LinkE."</td>\n";
              echo "           <td>{$Person['dates']}</td>
          </tr>\n";
              
              };
            
          ?>
          
          <!-- /Получено из БД --> 
          </table>
    </td>
    <td>&nbsp;</td>
            <td valign=top><a href="past_members.php" class=podzag3><?=$Past_Members;?> &gt;&gt;</a>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
      

      
        
   
      </div>
      <!-- #EndEditable -->
   <?
   include "bottom.php";
   ?>
 </body>
<!-- #EndTemplate -->
</html>
