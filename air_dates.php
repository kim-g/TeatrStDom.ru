<?
/* air dates */

$NumYears	 = 4;						// Количество блоков годов
$Years[1]    = '66-78 гг.';            //Названия страниц
$Years[2]    = '78-90 гг.';
$Years[3]    = '90-04 гг.';
$Years[4]    = '04-... гг.';
$Table_Head[1]    = 'Годы, сезоны';        //Названия столбцов в таблице
$Table_Head[2]    = '№';
$Table_Head[3]    = 'Персона';
$Table_Head[4]    = 'Годы';
$Seasons_on_page[1] = ' BETWEEN 1 AND 55';        //Какие сезоны показывать на странице
$Seasons_on_page[2] = ' BETWEEN 56 AND 67';
$Seasons_on_page[3] = ' BETWEEN 68 AND 81';
$Seasons_on_page[4] = ' > 81';

function Dates()
{
	$Pages_Text = "";         //Внизу списка выведем то же самое
          for ($i=1; $i<=$NumYears; $i++)
            {
            if ($i==$Page)
              {
              $Pages_Text = $Pages_Text."<span class='years_selected'>{$Years[$i]}</span>";
              }
             else
              {
              $Pages_Text = $Pages_Text."<a href='air.php?page={$i}' class=years_link>{$Years[$i]}</a>";
              };
            if ($i<$NumYears)
              {
              $Pages_Text = $Pages_Text."&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;";
              };
            };
          $Pages_Text = $Pages_Text."\n";
          return $Pages_Text;
}
?>
