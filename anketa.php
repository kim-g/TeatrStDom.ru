<?
include "main-texts.php"; 	//Добавление глобальных текстовых констант.
include "functions.php";	//Добавление специальных функций

 $Orders=mysql_query("SELECT * FROM `np` WHERE `id` = {$_GET['id']};");
 $Order = mysql_fetch_array($Orders);
 
//Список параметров
$BirthDay = new DateTime($Order['date_of_birth']);
$age = $BirthDay
     ->diff(new DateTime("{$Year_Season}-08-01"))
     ->y; 

$params = array(
    'Name'    => "{$Order['name']} {$Order['f_name']}",
    'Surname' => $Order['surname'],
	'Year' => $Year_Season,
	'Group' => $Order['group_urfu'],
	'VUZ' => "{$Order['university']}, {$Order['year']} курс",
	'Job' => $Order['job'],
	'Date' => $BirthDay->format('d.m.Y'),
	'Phone' => $Order['telephone'],
	'Bio' => $Order['biography'],
	'Age' => $age,
	'EMail' => $Order['email'],
	'VKPage' => $Order['vk']
);

//Указываем путь до подготовленного документа
$NameT = $Order['name'];
$FNameT = $Order['f_name'];
$NameT = mb_substr($NameT, 0, 2);
$FNameT = mb_substr($FNameT, 0, 2); 
$docxFile =  get_in_translate_to_en( "quest/{$Order['surname']}_{$NameT}.{$FNameT}.docx"); 

if ($Order['group_urfu']<>"") {copy('quest/urfu.docx',$docxFile);}
else if ($Order['university'] <> "") {copy('quest/vuz.docx',$docxFile);}
else {copy('quest/job.docx',$docxFile);}
 
if (!file_exists($docxFile)) {
    die('Error 1: File not found.');
}
 
$zip = new ZipArchive();
 
if (!$zip->open($docxFile)) {
    die('Error 2: File not open.');
}
 
$documentXml = $zip->getFromName('word/document.xml');
 
//Заменяем все найденные переменные в файле на значения
$documentXml = str_replace(array_keys($params), array_values($params), $documentXml);
 
$zip->deleteName('word/document.xml');
$zip->addFromString('word/document.xml', $documentXml);
 
//Закрываем и сохраняем архив
$zip->close();

// заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($docxFile));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($docxFile));
    // читаем файл и отправляем его пользователю
    readfile($docxFile);
    exit;
?>
