<?php
include "../../config.php";
/*
 * Имитируем долгий и нудный ajax запрос
 * В рабочем проекте конечно же убрать
 */

/*
 * Мы получаем GET параметром id страны и подгружаем список городов по этому id.
 */
$subplay_id = @intval($_GET['subplay_id']);

$CharsQuery = mysql_query("SELECT COUNT(*) AS NP FROM `chars` WHERE `play`={$subplay_id}") or die("Error char query!");
$CountChars = mysql_fetch_assoc($CharsQuery);
 
if ($CountChars['NP'] == 0)
{
	$chars[] =  array('id'=>'0', 'title'=>'Нет ролей');
}
else
{
	$CharsQuery = mysql_query("SELECT * FROM `chars` WHERE `play`={$subplay_id} ORDER BY `charachter`") or die("Error char query!");
		$chars[] =  array('id'=>'0', 'title'=>'Выберите роль');
		while ($Char = mysql_fetch_assoc($CharsQuery))
		{
			$chars[] = array('id'=>$Char['id'], 'title'=>$Char['charachter']);
		};
};

    $result = array('type'=>'success', 'regions'=>$chars);
;

/*
 * Упаковываем данные с помощью JSON
 */
print json_encode($result);

?>