<?
include "db_config.php";

function WordCase($Number,$One,$Two_four,$Five_zero) 
 {
 if (($Number>10) and ($Number<21))
   {
   return $Five_zero;
   }
  else
   switch (bcmod($Number,10))
    {
    case 1: {return $One; break;};
    case 2;
    case 3;
    case 4: {return $Two_four; break;};
    case 0;
    case 5;
    case 6;
    case 7;
    case 8;
    case 9: {return $Five_zero; break;};
    default: {return $Five_zero; break;};
    };
 }
 
 
function Word_Years($Number) 
 {
 return WordCase($Number, 'год', 'года', 'лет');
 }

function PersonName_Surname_No_a($Tab_No)
{
    $PersonArr = mysql_query("SELECT * FROM `people` WHERE `Number` = {$Tab_No} LIMIT 1");
    $Person = mysql_fetch_array($PersonArr);
    return "{$Person["name"]} {$Person["surname"]}";
};
 
function PersonName_Surname($Tab_No)
{
    if ($Tab_No[0] == '@')
	{
		return substr($Tab_No,1);
	}
	
	$Tab_No_Beg = $Tab_No;
	$MoreText = "";
	if (strpos($Tab_No, '@') != false)
	{
		$Tab_No_Beg = substr($Tab_No,0, strpos($Tab_No, '@'));
		$MoreText = substr($Tab_No, strpos($Tab_No, '@')+1);
	}

    $PersonArr = mysql_query("SELECT * FROM `people` WHERE `Number` = {$Tab_No_Beg} LIMIT 1");
    $Person = mysql_fetch_array($PersonArr);
    if ($Person['link']==1) 
    {
        return "<a href='/person.php?num={$Tab_No}'>{$Person["name"]} {$Person["surname"]}{$MoreText}</a>";
    }
    else
    {
        return "{$Person["name"]} {$Person["surname"]}{$MoreText}";
    };
}

function Person_by_num_in_text($textIn)
{
	$Search="#\[person](.+?)\[\/person\]#is";
	$Replace="\\1";
	$text = $textIn;
	
	$result = preg_match($Search,$text,$found);
	
	for ($i=0; $i<$result; $i++)
	{
		$Tab_No[$i] = preg_replace($Search, $Replace, $found[$i]);
		
		$PersonArr = mysql_query("SELECT * FROM `people` WHERE `Number` = {$Tab_No[$i]} LIMIT 1");
		$Person = mysql_fetch_array($PersonArr);
		if ($Person['link']==1) 
		{
			$ResStr[$i] = "<a href='/person.php?num={$Tab_No[$i]}'>{$Person["name"]} {$Person["surname"]}</a>";
		}
			else
		{
			$ResStr[$i] = "{$Person["name"]} {$Person["surname"]}";
		};
		
		$text = str_replace($found[$i], $ResStr[$i], $text);
	}
	
	if ($result > 0) $text = Person_by_num_in_text($text);
	
	return $text;
	
}

function Person_Season($Tab_No, $N_Season, $StartSeason, $division)
{
	$PersonArr = mysql_query("SELECT * FROM `people` WHERE `Number` = {$Tab_No} LIMIT 1");
    $Person = mysql_fetch_array($PersonArr);
    if ($Person['link']==1) 
    {
        return "<nobr><b><a href='/person.php?num={$Tab_No}'>{$Person["name"]} {$Person["surname"]}</a></b> (".($N_Season-$StartSeason-1)." ".Word_Years($N_Season-$StartSeason-1)."){$division}</nobr>";
    }
    else
    {
        return "{$Person["name"]} {$Person["surname"]}";
    };
}

function get_in_translate_to_en($string, $gost=false)
{
	if($gost)
	{
		$replace = array("А"=>"A","а"=>"a","Б"=>"B","б"=>"b","В"=>"V","в"=>"v","Г"=>"G","г"=>"g","Д"=>"D","д"=>"d",
                "Е"=>"E","е"=>"e","Ё"=>"E","ё"=>"e","Ж"=>"Zh","ж"=>"zh","З"=>"Z","з"=>"z","И"=>"I","и"=>"i",
                "Й"=>"I","й"=>"i","К"=>"K","к"=>"k","Л"=>"L","л"=>"l","М"=>"M","м"=>"m","Н"=>"N","н"=>"n","О"=>"O","о"=>"o",
                "П"=>"P","п"=>"p","Р"=>"R","р"=>"r","С"=>"S","с"=>"s","Т"=>"T","т"=>"t","У"=>"U","у"=>"u","Ф"=>"F","ф"=>"f",
                "Х"=>"Kh","х"=>"kh","Ц"=>"Tc","ц"=>"tc","Ч"=>"Ch","ч"=>"ch","Ш"=>"Sh","ш"=>"sh","Щ"=>"Shch","щ"=>"shch",
                "Ы"=>"Y","ы"=>"y","Э"=>"E","э"=>"e","Ю"=>"Iu","ю"=>"iu","Я"=>"Ia","я"=>"ia","ъ"=>"","ь"=>"");
	}
	else
	{
		$arStrES = array("ае","уе","ое","ые","ие","эе","яе","юе","ёе","ее","ье","ъе","ый","ий");
		$arStrOS = array("аё","уё","оё","ыё","иё","эё","яё","юё","ёё","её","ьё","ъё","ый","ий");        
		$arStrRS = array("а$","у$","о$","ы$","и$","э$","я$","ю$","ё$","е$","ь$","ъ$","@","@");
                    
		$replace = array("А"=>"A","а"=>"a","Б"=>"B","б"=>"b","В"=>"V","в"=>"v","Г"=>"G","г"=>"g","Д"=>"D","д"=>"d",
                "Е"=>"Ye","е"=>"e","Ё"=>"Ye","ё"=>"e","Ж"=>"Zh","ж"=>"zh","З"=>"Z","з"=>"z","И"=>"I","и"=>"i",
                "Й"=>"Y","й"=>"y","К"=>"K","к"=>"k","Л"=>"L","л"=>"l","М"=>"M","м"=>"m","Н"=>"N","н"=>"n",
                "О"=>"O","о"=>"o","П"=>"P","п"=>"p","Р"=>"R","р"=>"r","С"=>"S","с"=>"s","Т"=>"T","т"=>"t",
                "У"=>"U","у"=>"u","Ф"=>"F","ф"=>"f","Х"=>"Kh","х"=>"kh","Ц"=>"Ts","ц"=>"ts","Ч"=>"Ch","ч"=>"ch",
                "Ш"=>"Sh","ш"=>"sh","Щ"=>"Shch","щ"=>"shch","Ъ"=>"","ъ"=>"","Ы"=>"Y","ы"=>"y","Ь"=>"","ь"=>"",
                "Э"=>"E","э"=>"e","Ю"=>"Yu","ю"=>"yu","Я"=>"Ya","я"=>"ya","@"=>"y","$"=>"ye");
                
		$string = str_replace($arStrES, $arStrRS, $string);
		$string = str_replace($arStrOS, $arStrRS, $string);
	}
        
	return iconv("UTF-8","UTF-8//IGNORE",strtr($string,$replace));
}
?>