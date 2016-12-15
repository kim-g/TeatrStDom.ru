<? 
//Добавление модулей в проект.
include "db_config.php";    //Инициализация БД
include "main-texts.php";     //Добавление глобальных текстовых констант.
include "air_dates.php";

//Определение локальных текстовых констант
$MMenu_Prefix     = "../";            //Выход в корневую директорию в MainMenu (А нужно ли?!)
$Page_Menu     = "Актёры и роли";        //Выбранный пункт MainMenu
$Title_End     = " ".$Page_Menu;        //Окончание заголовка страницы
$Table_Title     = $Past_Members;        //Название таблица ЛиГ
$Page_SubTitle = $Page_Menu;			//Название под шапкой.


//Получение GET данных
if(isset($_GET['page'])) { $Page = $_GET['page'];} else {$Page=1;};        //Номер страницы. 1 - 66-78 гг, 2 - 78-90 гг, 3 - 90 - наст. время


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
        <td  width="73%" class=podzag3><?=$Table_Title;?></td>
    <td  width="2%">&nbsp;</td>
        <td  width="25%"><a href="troupe.php" class=podzag2><?=$Current_Members;?> &gt;&gt;</a></td>
       </tr>
       <tr>
        <td>
         <div class=menu>
          <?
          $Pages_Text = "";         //Внизу списка выведем то же самое
          for ($i=1; $i<=$NumYears; $i++)
            {
            if ($i==$Page)
              {
              $Pages_Text = $Pages_Text."<span class='years_selected'>{$Years[$i]}</span>";
              }
             else
              {
              $Pages_Text = $Pages_Text."<a href='past_members.php?page={$i}' class=years_link>{$Years[$i]}</a>";
              };
            if ($i<$NumYears)
              {
              $Pages_Text = $Pages_Text."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
              };
            };
          $Pages_Text = $Pages_Text."\n";
          echo $Pages_Text;
          ?>
         </div>
        </td>
    <td>&nbsp;</td>
        <td>&nbsp;</td>
       </tr>
       <tr>
        <td>
     <table width="100%" border="0" cellpadding="2">
          <tr class=nt>
           <td width="10%" align=center><b><?=$Table_Head[1];?></b>&nbsp;</td>
           <td width="5%" align=center><b><?=$Table_Head[2];?></b>&nbsp;</td>
           <td width="45%"><b><?=$Table_Head[3];?></b></td>
           <td width="35%"><b><?=$Table_Head[4];?></b></td>
          </tr>
          <tr>
           <td><img src="<?=$CP;?>" width=1 height=2></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
          </tr>
          
  
          <!-- Получено из БД -->
          
          <?
          //Получение информации из БД
          $seasons=mysql_query("SELECT * FROM `seasons` WHERE `id`".$Seasons_on_page[$Page]);
          while ($season=mysql_fetch_assoc($seasons))
            {
            echo "<tr class=trfon>
           <td><img src='{$CP}' width=1 height=1></td>
           <td><img src='{$CP}' width=1 height=1></td>
           <td><img src='{$CP}' width=1 height=1></td>
           <td><img src='{$CP}' width=1 height=1></td>
          </tr>
          <tr>
           <td><img src='{$CP}' width=1 height=2></td>
           <td><img src='{$CP}' width=1 height=1></td>
           <td><img src='{$CP}' width=1 height=1></td>
           <td><img src='{$CP}' width=1 height=1></td>
          </tr>\n";
            $NPersArr=mysql_query("SELECT COUNT(*) AS NN FROM `people` WHERE (`season`={$season['id']}) AND (`group` <> 1);");
            $NPers=mysql_fetch_assoc($NPersArr);
            $Persons=mysql_query("SELECT * FROM `people` WHERE (`season`={$season['id']}) AND (`group` <> 1);");
            $N=0;
            while ($Person=mysql_fetch_assoc($Persons))
              {
              $N++;
              echo "          <tr class=nt>\n";
              switch($N)
                {
                case 1: {echo "           <td align=center valign=top rowspan=2><b>{$season['number']}<br>{$season['year']}</b></td>\n"; break;};
                case 2: {break;};
                default: {echo "           <td align=center>&nbsp;</td>"; break;}
                };
              echo "";
              $LinkM = "";
              switch($Person['group'])
                {
                case 0: {$LinkB=""; $LinkE=""; break;};
                case 1: { if ($Person['link']==1) {$LinkB="<a href='person.php?num={$Person['Number']}'  class=tr>";$LinkE="</a>";$LinkM="&nbsp;&gt;&gt;";} else {$LinkB="<span class=tr_no_link>";$LinkE="</span>";$LinkM="";};   break;};
                case 2: {if ($Person['link']==1) {$LinkB="<a href='person.php?num={$Person['Number']}'  class=tr2>";$LinkE="</a>";$LinkM="&nbsp;&gt;&gt;";} else {$LinkB="";$LinkE="";$LinkM="";};   break;};
                };
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
            if ($NPers['NN'] == 1) {echo "          <tr><td></td><td></td><td></td></tr>";};
            };
          ?>
          
          <!-- /Получено из БД --> 
          <tr>
           <td><img src="<?=$CP;?>" width=1 height=10></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
           <td><img src="<?=$CP;?>" width=1 height=1></td>
          </tr> 
         </table>
    </td>
    <td>&nbsp;</td>
            <td valign=top>&nbsp;</td>
  </tr>
   <tr>
    <td>
              <div class=menu><?=$Pages_Text;?></div>
            </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
