<?
if (!headers_sent()) { header("Content-Type: text/html; charset=utf-8"); };
?>

<html>
  <head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>403 Forbidden</title>
  </head>
  <body>
    <h1>403 Forbidden</h1>
	Вход на страницу запрещён. Обратитесь к администратору сайта.
  </body>
</html>

<?
// Пока закроем
/*
//Добавление модулей в проект.
include "main-texts.php"; 	//Добавление глобальных текстовых констант.
include "functions.php";	//Добавление специальных функций

//Определение локальных текстовых констант
$Page_Menu 	= "Конкурсный набор";		//Выбранный пункт MainMenu
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
  <style>
	.gray_bkgd {position: fixed; z-index: 1000; width: 100%; height: 100%; background-color: #000000; opacity: 0.4}
	.transp_bkgd {position: fixed; z-index: 1100; width: 100%; height: 100%; text-align:center !important;}
	.window {position: fixed; z-index: 1000; background-color: #FFFFFF; padding: 20px; max-width: 500px; height: 50px; left:0; top: 0; right: 0; bottom: 0; margin:auto; border-style: solid;}
  </style>
 </head>

 <body bgcolor="#FFFFFF" text="#000000" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style="margin:0 0 0 0;">
  <?
  if (isset($_GET["delete_id"]))
  {
	  $DelOrders=mysql_query("SELECT * FROM `np` WHERE `id` = {$_GET['delete_id']};");
	  $DelOrder = mysql_fetch_array($DelOrders);
	  if ($_GET["protection"] == md5($DelOrder['surname']." ".$DelOrder['name']." ".$DelOrder['f_name']."123456789"))
	  {
		  ?>
		  <!--  Окно удаления -->
		  <div class=gray_bkgd></div>
		  <div class=transp_bkgd>
			<div class="window stress_big_bold_colour_red"> Удалить анкету «<?=$DelOrder['surname']." ".$DelOrder['name']." ".$DelOrder['f_name'];?>»?
			<br><br>
			<a href="np_list.php?remove_id=<?=$DelOrder['id'];?>&protection=<?=md5($DelOrder['surname']." ".$DelOrder['name']." ".$DelOrder['f_name']."123456789")?>" class=stress_big_bold_colour_red>Удалить</a>
			<a href="np_list.php" class=stress_big_bold_black>Отменить</a>
			</div>
		  </div>
		  <!--  /Окно удаления -->
		  <?
	  }
  };
  
  if (isset($_GET["remove_id"]))
  {
	  $RemOrders=mysql_query("SELECT * FROM `np` WHERE `id` = {$_GET['remove_id']};");
	  $RemOrder = mysql_fetch_array($RemOrders);
	  if ($_GET["protection"] == md5($RemOrder['surname']." ".$RemOrder['name']." ".$RemOrder['f_name']."123456789"))
	  {
		  mysql_query("DELETE FROM `np` WHERE `id` = {$_GET['remove_id']} LIMIT 1;");
	  }
  };
 
  include "head.php";
  
  $Orders=mysql_query("SELECT DISTINCT * FROM `np` ORDER BY `id`;");
  ?>
  
  <div class=page_subtitle>Заявки НП-<?=$Year_Season;?></div>
  <table border=1>
    <?
	while ($Order = mysql_fetch_array($Orders))
	{
		$BirthDay = new DateTime($Order['date_of_birth']);
		?>
	<tr>
	  <td><?=$Order['surname'];?> <?=$Order['name'];?> <?=$Order['f_name'];?></td>
	  <td><?=$BirthDay->format('d.m.Y');?></td>
	  <td><?=$Order['group_urfu'];?></td>
	  <td><?=$Order['university'];?></td>
	  <td><?=$Order['year'];?></td>
	  <td><?=$Order['job'];?></td>
	  <td width = 300><?=$Order['biography'];?></td>
	  <td><?=$Order['telephone'];?></td>
	  <td><a href="mailto:<?=$Order['email'];?>"><?=$Order['email'];?></a></td>
	  <td><a href="<?=$Order['vk'];?>" target="_blank"><?=$Order['vk'];?></a></td>
	  <td>
	    <a href="anketa.php?id=<?=$Order['id'];?>" target="_blank">Анкета</a>
		<a href="np_list.php?delete_id=<?=$Order['id'];?>&protection=<?=md5($Order['surname']." ".$Order['name']." ".$Order['f_name']."123456789")?>">Удалить</a>
	  </td>
	</tr>
		<?
	};
	?>
  </table>
    
  <?
  include "bottom.php";
  ?>
 </body>
<!-- #EndTemplate -->
</html>
*/?>
