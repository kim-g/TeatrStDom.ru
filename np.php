<?
//Добавление модулей в проект.
include 'main-texts.php'; 	//Добавление глобальных текстовых констант.

//Определение локальных текстовых констант
$Page_Menu 	= 'Конкурсный набор';						//Выбранный пункт MainMenu
$Season		= "{$N_Season}-го сезона ({$Year_Season}-".($Year_Season+1).')';//Номер и годы текущего сезона
$DatesNP	= ""/*'<b><span class=tr>Даты конкурсных туров будут объявлены позднее</span>.</b>'*/;			//Даты проведения НП	
$Page_SubTitle = $Page_Menu;			//Название под шапкой.

// Прочие константы
function IsEmpty($Edit)
{
	if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($Edit == "")) { echo " style = 'background-color: #FF5555'"; };
};

function Value($Edit)
{
	if (isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0 == "") { echo " value='{$Edit}'"; };
};


?>
<html><!-- #BeginTemplate '/Templates/main.dwt' -->
 <head>
 <!-- #BeginEditable '%E7%E0%E3%EE%EB%EE%E2%EE%EA' --> 
  <title><?=$Title_Start;?></title>
  <!-- #EndEditable -->
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
  <link rel='stylesheet' type='text/css' href='common.css'>
  <script type='text/javascript' src='/sp/highslide/highslide.js'></script>
  <link rel='stylesheet' type='text/css' href='/sp/highslide/highslide.css' />
  <script type='text/javascript'>
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = 'highslide/graphics/';
  </script>
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
  <script type='text/javascript' src='/np.js'></script>
  <script>
  jQuery(function($){
   $('#date').mask('99.99.9999');//Дата рождения
   $('#telephone').mask('8-(999)-999-99-99');//Телефон
   });
  </script>
 </head>


<body bgcolor='#FFFFFF' text='#000000' topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 style='margin:0 0 0 0;'>
 <?
 include 'head.php';
 ?>
    
     <!-- #BeginEditable 'texy' --> 
	 <?
	 
	 function check_input($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			};
		$Name = isset($_POST['name']) ? 				check_input($_POST['name']) : 			'';
		$FName = isset($_POST['fathersname']) ? 		check_input($_POST['fathersname']) : 	'';
		$SName = isset($_POST['surname']) ? 			check_input($_POST['surname']) : 		'';
		$Date = isset($_POST['date']) ? 				check_input($_POST['date']) : 			'';
		$URFU_Group = isset($_POST['urfu_group']) ? 	check_input($_POST['urfu_group']) : 	'';
		$University = isset($_POST['university']) ? 	check_input($_POST['university']) : 	'';
		$Course = isset($_POST['university_year']) ? 	check_input($_POST['university_year']) :'';
		$Job = isset($_POST['job']) ? 					check_input($_POST['job']) : 			'';
		$Bio = isset($_POST['bio']) ? 					check_input($_POST['bio']) : 			'';
		$Phone = isset($_POST['telephone']) ? 			check_input($_POST['telephone']) : 		'';
		$EMail = isset($_POST['email']) ? 				check_input($_POST['email']) : 			'';
		$VK = isset($_POST['vk']) ? 					check_input($_POST['vk']) : 			'';
		$Study = !(($URFU_Group != "") xor !(($University == "") and ($Course == "")) xor ($Job != ""));
	 
	   if (isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0)
	   {  
		
		
        include 'gb/config.php';
		
		if (!(($Name == "") or ($FName == "") or ($SName == "") or ($Date == "") or ((($URFU_Group == "") xor (($University == "") and ($Course == "")) xor ($Job == ""))) or ($Bio == "") or ($Phone == "") or (($EMail == "") and ($VK == ""))))
			{
			$DateSQL = @date('Y.m.d', strtotime($Date));
			
				
			mysql_query("INSERT INTO `np` (`name`, `f_name`, `surname`, `date_of_birth`, `group_urfu`, `university`, `year`, `job`, `biography`, `telephone`, `email`, `vk`, `sent`) VALUES ('{$Name}', '{$FName}', '{$SName}', '{$DateSQL}', '{$URFU_Group}', '{$University}', '{$Course}', '{$Job}', '{$Bio}', '{$Phone}', '{$EMail}', '{$VK}', 0);") or die('MySQL Query Error: '.mysql_error());

			$email = 'stary-dom@yandex.ru';

			$header1 = "From: \"TeatrStDom.ru\" <bot@teatrstdom.ru>;\r\nContent-type: text/html; charset=utf-8;\r\n";
			$subject="Заявка на НП-2016";
			$msg="<html>
<head>
<style>
  h1 { font-family: Arial; color: #000000;  font-size: 30px; font-weight:bold; text-align: center;}
</style>
</head>
<body>
<h1>Заявка на НП-16</h1>
<table>
  <tr>
    <td>Фамилия</td>
	<td>{$SName}</td>
  </tr>
  <tr>
    <td>Имя</td>
	<td>{$Name}</td>
  </tr>
  <tr>
    <td>Отчество</td>
	<td>{$FName}</td>
  </tr>
  <tr>
    <td>Дата рождения</td>
	<td>{$Date}</td>
  </tr>
  <tr>
    <td>Студент УрФУ, № группы</td>
	<td>{$URFU_Group}</td>
  </tr>
  <tr>
    <td>Студент другого ВУЗа</td>
	<td>{$University}</td>
  </tr>
  <tr>
    <td>курс</td>
	<td>{$Course}</td>
  </tr>
  <tr>
    <td>Не студент, род занятий</td>
	<td>{$Job}</td>
  </tr>
  <tr>
    <td>Краткая творческая биография</td>
	<td>{$Bio}</td>
  </tr>
  <tr>
    <td>Контактный телефон</td>
	<td>{$Phone}</td>
  </tr>
  <tr>
    <td>e-mail</td>
	<td>{$EMail}</td>
  </tr>
  <tr>
    <td>Адрес ВКонтакте</td>
	<td>{$VK}</td>
  </tr>
</table>
</body>
</html>";

		mail($email, $subject, $msg, $header1);
   
       ?>
     <div class=stress_big_bold_colour>
	   Ваша заявка принята. Мы уведомим Вас о дате предварительного знакомства.
	   <br><br>
	   <a href=np.php>Вернуться на страницу конкурсного набора &gt;&gt;</a> 
	 </div>
	 <?
			exit();
			};
	    };
		
	
	 ?>
	 
     <div class=nt  align=justify>
      <?/*Театр <b>«Старый Дом»</b> объявляет <b><i>осенний</i> КОНКУРСНЫЙ НАБОР</b> в студию <b>для пополнения труппы театра</b>.
      <br><br>
	  Набор проводится в <b>три</b> тура.
      $DatesNP;
      <br><br>*/?>
      Приглашаются лица с достаточным культурным кругозором и предполагающие у себя творческие способности для создания 
      спектаклей. Для принятых в студию в течение уч.года (сезона) проводятся учебные занятия, после чего решается вопрос 
      о приёме в 'Молодой состав' труппы. <br>
      Подробности условий и правил набора и приёма - при личной встрече. 
      <br><br>
      <b>Для предварительного знакомства подготовьте:</b> 
      <ul>
       <li>стихотворение,
       <li>басню,
       <li>прозаический отрывок,
       <li>небольшой этюд
      </ul>
      <i>(не менее двух из перечисленного)</i>
      <br><br><br>
	  
	  
	  <div id=input_table class=stress_big_bold_colour_red><? if (isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) { echo "Пожалуйста, заполните все поля, отмеченные красным."; }?></div>
      <?/*<form action='<?=$_SERVER['PHP_SELF']?>' method='post'>
	    <input type=hidden name=add_new_request value='1'>*/?>
		<div class=stress_big_bold_colour style='border: 2px solid #FF0000; padding: 10px; max-width: 700; text-align: center;'>
		  Осенний конкурсный набор желающих завершён <span class=stress_big_bold_colour_red>25.09.2016</span><br><hr>
		  Следующий набор возможно будет объявлен в <span style="color: #008800">феврале 2017 г</span>.
		</div>
		
		<?/*<table border=0 style='border: 2px solid #FF0000; padding: 10px; max-width: 700;'>
		 <tr>
		   <td colspan=4 class=stress_big_bold_colour><span class=stress_big_bold_colour_red>До 25 сентября 2016 г.</span> зарегистрируйте свою заявку, она будет рассмотрена, и Вам будут назначены и сообщены дата и время I тура:</td>
		 </tr>
		 <tr>
		   <td colspan=4><br><hr color=red><br></td>
		 </tr>
		 <tr<? IsEmpty($SName); ?>>
		  <td>Фамилия:</td>
		  <td colspan=3><input name=surname type='text' size='40'<? Value($SName); ?>></td>
		 </tr>
		 <tr<? IsEmpty($Name); ?>>
		  <td>Имя:</td>
		  <td colspan=3><input name=name type='text' size='40'<? Value($Name); ?>></td>
		 </tr>
		 <tr<? IsEmpty($FName); ?>>
		  <td>Отчество:</td>
		  <td colspan=3><input name=fathersname type='text' size='40'<? Value($FName); ?>></td>
		 </tr>
		 <tr<? IsEmpty($Date); ?>>
		  <td>Дата рождения:</td>
		  <td colspan=3><input id=date name=date type='text' size='40'<? Value($Date); ?>></td>
		 </tr>
		 <tr<? if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($Study)) { echo " style = 'background-color: #FF5555'"; }; ?>>
		  <td>● Студент УрФУ, № группы:</td>
		  <td colspan=3><input name=urfu_group type='text' size='15'<? Value($URFU_Group); ?>></td>
		 </tr>
		 <tr<?  if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($Study)) { echo " style = 'background-color: #FF5555'"; };  ?>>
		  <td>● Студент другого ВУЗа:</td>
		  <td><input name=university type='text' size='40'<? Value($University); ?>></td>
		  <td>, курс:</td>
		  <td><input name=university_year type='text' size='5'<? Value($Course); ?>></td>
		 </tr>
		 <tr<?  if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($Study)) { echo " style = 'background-color: #FF5555'"; };  ?>>
		  <td>● Не студент, род занятий:</td>
		  <td colspan=3><input name=job type='text' size='40'<? Value($Job); ?>></td>
		 </tr>
		 <tr<? IsEmpty($Bio); ?>>
		  <td colspan=4>Краткая творческая биография <br>
		  <i>(Занимались ли раньше театром (где?), музыкой, др. видами искусства)</i>:</td>
		 </tr>
		 <tr<? IsEmpty($Bio); ?>>
		  <td colspan=4><textarea cols=95 rows=5 name=bio><? if (isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0 == "") { echo $Bio; }; ?></textarea></td>
		 </tr>
		 <tr>
		   <td colspan=4><br><hr color=red><br></td>
		 </tr>
		 <tr<? IsEmpty($Phone); ?>>
		  <td>Контактный телефон:</td>
		  <td colspan=3><input id=telephone name=telephone type='text' size='15'<? Value($Phone); ?>></td>
		 </tr>
		 <tr<? if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($EMail == "") and ($VK == "")) { echo " style = 'background-color: #FF5555'"; }; ?>>
		  <td>e-mail:</td>
		  <td colspan=3><input name=email type='text' size='40'<? Value($EMail); ?>></td>
		 </tr>
		 <tr<? if ((isset($_POST['add_new_request']) ? $_POST['add_new_request'] : 0) and ($EMail == "") and ($VK == "")) { echo " style = 'background-color: #FF5555'"; }; ?>>
		  <td>Адрес ВКонтакте:</td>
		  <td colspan=3><input name=vk type='text' size='40'<? Value($VK); ?>></td>
		 </tr>
		 <tr>
		   <td colspan=4><br><hr color=red><br></td>
		 </tr>
		 <tr>
		   <td colspan=4 align=center>
		     <input type='submit' value='Подать заявку'>
		   </td>
		 </tr>
		</table>
	  </form>*/?>
	  <br><br>


      <b>Наш адрес:</b> 
      г. Екатеринбург,<br>
      ул. Софьи Ковалевской, 5,<br>
	  УрФУ,<br>
      Корпус Теплофак (УралЭНИН), 2-й этаж, оф. Т-225,<br>
      <b> Тел.: </b>(343) 375-44-94, 
      <br><br>
      <b>e-mail:</b> <A href='mailto:<?=$Bottom_E_Mail;?>'><?=$Bottom_E_Mail;?></a>
	  <br><br>
	  Наша группа «В Контакте»: <a href='http://vk.com/teatrstdom'>Театр «Старый дом»</a>
      <br><br>

     </div> 
     <!-- #EndEditable -->
  <?
  include 'bottom.php';
  ?>
 </body>
<!-- #EndTemplate -->
</html>
 
