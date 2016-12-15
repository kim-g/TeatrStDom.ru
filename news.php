<? 
define("am",true);  
include "main-texts.php"; 	//Добавление глобальных текстовых констант
include "gb/config.php";
include "functions.php";

$date = isset($_GET['date']) ? $_GET['date'] : "NONE";

$query = isset($_GET['date']) ? "SELECT count(*) FROM news WHERE `date` = '{$date}'" : "SELECT count(*) FROM news";
$tot = @mysql_query($query);
$count= @mysql_result($tot,0);

$page_num=intval($_GET['page']);
$start=$page_num * $pnumber;
$query = isset($_GET['date']) ? "SELECT * FROM news  WHERE `date` = '{$date}' ORDER BY date DESC LIMIT {$start}, {$pnumber}" : "SELECT * FROM news ORDER BY date DESC LIMIT {$start}, {$pnumber}";
$thm = mysql_query($query);
if(!$tot || !$thm) puterror("Проблемы на сервере хостинга<br />Пожалуйста, зайдите позже","mysql_query fails");
if ($count && 0==mysql_num_rows($thm)) header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');

$par=array();
$pages= include1('pages', $tmp=array(
'link'=>$_SERVER['PHP_SELF']
,'page_num'=>$page_num
,'count_page'=>$pnumber
,'count'=>$count) );
$par['nav']=$pages;

ob_start();
?>
      <table width="80%" border="0" cellspacing="0" cellpadding="5">
<?
while($themes = mysql_fetch_array($thm)) {
    // Вытаскиваем переменные из базы данных
    $date=date("d.m.Y", strtotime($themes['date']));
    $message = Person_by_num_in_text(trim($themes['message']));
?>
       <tr id="<?=$themes['date'];?>">
	    <td valign=top class=date><?=$date;?></td>
		<td class=nt align=justify>
		 <?=$message;?>
		 <br><br><br>
		</td>
	   </tr>
      
<?
}
?>
      </table>
	  <br/><br/><br/>
	  
<?
//$par['nav']
$Messages=ob_get_clean();

include "main-texts.php"; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= "Новости";						//Выбранный пункт MainMenu
$TempStr = isset($_GET['date']) ? " (".date("d.m.Y", strtotime($_GET['date'])).")" : "";
$Page_SubTitle = "Наши новости".$TempStr;			//Название под шапкой.	

?>

<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start.". ".$Page_Menu;?></title>
  <!-- #EndEditable -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="common.css">
  <link rel="stylesheet" type="text/css" href="guest.css">
  <link rel="stylesheet" type="text/css" href="news.css">
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
     <div class=nt  align=justify>
      <span class=stress_big_bold_colour><?=$pages;?></span>
      <br><br>
      <div>
<?=$Messages;?>
	  </div>
      <span class=stress_big_bold_colour><?=$pages;?></span>
      <br><br><br><br><br><br><br>
     </div> 
 
<?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>


