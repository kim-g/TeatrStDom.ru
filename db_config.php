<?
// Инициирование БД
//Объявление глобальных констант
$nameDB = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "u5474_std";	//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "u5474";	//Имя пользователя БД
$passUSER = $_SERVER['HTTP_HOST']=='teatrstdom.aaa.ru' ? "std" : "nocev6rivol";	//Пароль пользователя БД

//Подключение к БД
mysql_connect($nameSERVER,$nameUSER,$passUSER);
mysql_select_db($nameDB);
mysql_set_charset('utf8');
?>
