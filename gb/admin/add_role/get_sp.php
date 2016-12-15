<?php
include "../../config.php";
/*
 * Имитируем долгий и нудный ajax запрос
 * В рабочем проекте конечно же убрать
 */

/*
 * Мы получаем GET параметром id страны и подгружаем список городов по этому id.
 */
$play_id = @intval($_GET['play_id']);

$PlaysQuery = mysql_query("SELECT COUNT(*) AS NP FROM `play` WHERE `owner`={$play_id}") or die("Error plays query!");
$CountSubPlay = mysql_fetch_assoc($PlaysQuery);
 
if ($CountSubPlay['NP'] == 0)
{
	$subplays[] =  array('id'=>'0', 'title'=>'Нет сюжетов');
}
else
{
	$subplays[] =  array('id'=>'0', 'title'=>'Выберите сюжет');
	$PlaysQuery = mysql_query("SELECT * FROM `play` WHERE `owner`={$play_id} ORDER BY `name`") or die("Error plays query!");
		while ($Play = mysql_fetch_assoc($PlaysQuery))
		{
			$subplays[] = array('id'=>$Play['id'], 'title'=>$Play['name']);
		};
};

    $result = array('type'=>'success', 'regions'=>$subplays);
;

/*
 * Упаковываем данные с помощью JSON
 */
print json_encode($result);

?>