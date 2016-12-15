<?
if (!headers_sent()) { header("Content-Type: text/html; charset=utf-8"); };

//Здесь находятся главные текстовые константы сайта.

$Title_Start 		= "Театр Старый Дом. Екатеринбург.";										//Общее название страницы
$Page_Title 		= "Народный студенческий театр «Старый Дом»";								//Заголовок шапки
$N_Season			= 51;																		//Номер сезона
$Year_Season		= 1965 + $N_Season;															//Год начала сезона
$SP_Played_TEF 		= 88;																		//Спектаклей сыграно в ТЭФ
$Prem_TEF 			= 6;																		//Поставлено премьер в ТЭФ
$SP_Played 			= 587;																		//Спектаклей сыграно всего
$Prem 				= 36;																		//Поставлено премьер всего
$Page_Season 		= "{$N_Season}-й СЕЗОН  ({$Year_Season}-".($Year_Season+1).")";				//Сезон в шапке
$University_Name 	= "УрФУ";																	//Имя родного университета
$University_URL 	= "http://urfu.ru/";														//URL адрес родного университета
$Bottom_Name 		= "&nbsp;Народный студенческий<br>&nbsp;театр  «Старый Дом»";				//Название театра для нижней планки
$Bottom_Address 	= "&nbsp;ул. С Ковалевской 5";												//Адрес театра для нижней планки
$Bottom_Phone 		= "тел. 375-44-94";															//Телефон театра для нижней планки
$Bottom_E_Mail 		= "stary-dom@yandex.ru";													//e-mail театра для нижней планки
$Bottom_Author 		= "Создание сайта - <b><a href='/person.php?id=223' class=web>Ольга Герасимова</a></b>";	//Автор сайта театра для нижней планки
$CP 				= "/cp.gif";																//Адрес картинки cp.gif

$Current_Members 	= "Действующая труппа";														//Название основного состава + МС + НП
$Past_Members		= "Актёры прошлых лет";														//Важные актёры прошлого

//Main menu
$MMenu["/main.php"]='Главная';
$MMenu["/repertoire.php"]='Репертуар';
$MMenu["/affiche.php"]='Афиша';
$MMenu["/order.php"]='Заказ билетов';
$MMenu["/about_theatre.php"]='О нашем театре';
$MMenu["/history.php"]='Штрихи истории';
$MMenu["/news.php"]='Новости';
$MMenu["/air.php?page=1"]='Актёры и роли';
$MMenu["/director.php"]='Николай Стуликов';
$MMenu["/dorr.php"]='Дело о реабилитации «Ревизора»';
$MMenu["/guest.php"]='«Жалобная книга»';
$MMenu["/afterparty.php"]='«Театральный разъезд»';
$MMenu["/np.php"]='Конкурсный набор';
$MMenu["/contact_us.php"]='Наши координаты';
?>
