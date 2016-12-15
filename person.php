<?
//Добавление модулей в проект.
include "main-texts.php";     //Добавление глобальных текстовых констант.
include "functions.php";    //Добавление специальных функций

setlocale (LC_CTYPE, "ru_RU.UTF-8");

//Получение GET данных
$id  = isset($_GET['id'])  ? $_GET['id']  : -1;         // Ключ персоны
$num = isset($_GET['num']) ? $_GET['num'] : -1;			// Табельный номер

// Если актёр задан по табельному номеру, найдём его ID
if ($id == -1 && $num > -1)
{
	$PersonNums = mysql_query("SELECT COUNT(*) AS PersonN FROM `people` WHERE `Number` = {$num} LIMIT 1;") or die("Ошибка запроса mysql при определении числа подходящих членов труппы.");
	$PersonNum = mysql_fetch_assoc($PersonNums);

	if ($PersonNum['PersonN']>0) 
	{
		$PersonIDs = mysql_query("SELECT `id` FROM `people` WHERE `Number` = {$num} LIMIT 1;") or die("Ошибка запроса mysql при выборе члена труппы.");
		$PersonID = mysql_fetch_assoc($PersonIDs);
		$id = $PersonID['id'];
	} else {$id = -2; /* Не существующий актёр */}
};

// Ищем по id
$Persons = mysql_query("SELECT COUNT(*) AS PersonN FROM `people` WHERE `id` = {$id} LIMIT 1;") or die( "Ошибка запроса mysql при определении числа подходящих членов труппы.");
$PersonN = mysql_fetch_assoc($Persons);

if ($PersonN['PersonN']>0) 
{
    $Persons = mysql_query("SELECT * FROM `people` WHERE `id` = {$id} LIMIT 1;") or die("Ошибка запроса mysql при выборе члена труппы.");
    $Person = mysql_fetch_assoc($Persons);
};

//Функция заголовка
function SubTitlePage($_id, $PersonN, $Person)
{
	$text = "<a href='air.php' class=stress_big_bold_colour>Актёры и роли</a>";
	
	/* Обработка ошибки отсутствия id в GET запросе. */
	if ($id == -1) { return $text; };
	if ($PersonN['PersonN'] == 0) { return $text; };
	if ($Person['link'] == 0) { return $text; };
	
	$text = $text."&nbsp;&nbsp;/ &nbsp;&nbsp;";
	if ($Person['group'] == 1) { $text = $text."<a href='troupe.php' class=podzag2>Действующая труппа</a>"; }
    else { $text = $text."<a href='past_members.php' class=podzag3>Актёры прошлых лет</a>"; };
	
	return $text;
}

//Определение локальных текстовых констант
$Page_Menu     = "Актёры и роли";        //Выбранный пункт MainMenu
$Page_SubTitle = SubTitlePage($id, $PersonN, $Person);

$PlaysToTable = Array('Проба пера', 'Весёлая жизнь', 'Веселая жизнь', 'Житейские эпизодики');

// Функции
function Role($Play,$Year,$Char)
{
    $Plays = mysql_query("SELECT * FROM `play` WHERE `id` = ".$Play);
    $P = mysql_fetch_assoc($Plays);
    
    ?>
          <tr class=nt valign=top>
            <td valign=top class=author><? if ($Play == -1) {echo "&nbsp;";} else { echo $P['author'];}; ?></td>
            <td align=center>
              <span class=author>
			  
              <?
              if ($Play == -1) {echo "&nbsp;";} else 
              {
                if ($P['link']!=""){echo "<a href=/sp/{$P['link']}.php>";};
                $TempS = mb_strtoupper($P['name']);
                echo "«{$TempS}»";
                if ($P['link']!=""){echo "</a>";};
                echo "              </span><br>\n";
              
                if ($P['comment'] != "") {echo "              <span class=subtitle>{$P['comment']}</span>";};
              };
              ?>              
            </td>
            <td align=center valign=top class=person><? if ($Year == -1) {echo "&nbsp;";} else { echo $Year;}; ?></td>
            <td class=person><?
            if ($Char == -1) {echo "&nbsp;";} else 
            {
                $Chars = mysql_query("SELECT * FROM `chars` WHERE `id` = ".$Char);
                $C = mysql_fetch_assoc($Chars);
                
                echo $C['charachter'];
            };
            ?></td>
          </tr>
    <?
};

function Space()
{
    ?>
          <tr>
            <td><IMG src="../cp.gif" width=1 height=20></td>
            <td><IMG src="../cp.gif" width=1 height=1></td>
            <td><IMG src="../cp.gif" width=1 height=1></td>
            <td><IMG src="../cp.gif" width=1 height=1></td>
          </tr>
    <?
};

function AddSimilar($OldElement,$NewElement,$NElement,$NRec)
{
    $NElement[$NRec] = 0;
    if ($OldElement == $NewElement) 
    {
        $NElement[0] = 0;
        $NElement[$NRec-1] = 1;
        for ($i = 1; ($NElement[$NRec-$i] > 0) and (($NRec - $i) > 0); $i++)
        {
            $NElement[$NRec-$i] = $i;
        };
    };

    return $NElement;
};

?>
<html><!-- #BeginTemplate "/Templates/main.dwt" -->
 <head>
 <!-- #BeginEditable "%E7%E0%E3%EE%EB%EE%E2%EE%EA" --> 
  <title><?=$Title_Start;?></title>
<!-- #EndEditable -->
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="/common.css">
  <link rel="stylesheet" type="text/css" href="/air.css">
  <link rel="stylesheet" type="text/css" href="/person.css">
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
     <!-- #BeginEditable "texy" --> 
     <div class=nt  align=justify>
      <?
        /* Обработка ошибки отсутствия id в GET запросе. */
        if ($id == -1)
        {
            ?>
            <br>
            <div class=nt>
              <p class=stress_big_bold_colour>
                Не был выбран актёр.
              </p>
              <p>
                Это возможно произошло из-за ошибки сайта, либо Вы ошиблись в наборе URL. Пожалуйста, уточните URL или ссылку.
              </p>
              <p>
                Чтобы корректно перейти на страницу члена труппы воспользуйтесь разделом <a href="/air.php" class=stress_big_bold_colour>«Актёры и роли»</a>
              </p>
            </div>
            <?
            die();
        };
        
        /* Обработка ошибки отсутствия записи в базе. */
        if ($PersonN['PersonN'] == 0)
        {
            ?>
            <br>
            <div class=nt>
              <p class=stress_big_bold_colour>
                Выбран несуществующий актёр.
              </p>
              <p>
                Это возможно произошло из-за ошибки сайта, либо Вы ошиблись в наборе URL. Пожалуйста, уточните URL или ссылку.
              </p>
              <p>
                Чтобы корректно перейти на страницу члена труппы воспользуйтесь разделом <a href="/air.php" class=stress_big_bold_colour>«Актёры и роли»</a>
              </p>
            </div>
            <?
            die();
        };
        
        /* Обработка ошибки отсутствия страницы об актёре. */
        if ($Person['link'] == 0)
        {
            ?>
            <br>
            <div class=nt>
              <p class=stress_big_bold_colour>
                Страница об актёре не существует.
              </p>
              <p>
                Это возможно произошло из-за ошибки сайта, либо Вы ошиблись в наборе URL. Пожалуйста, уточните URL или ссылку.
              </p>
              <p>
                Чтобы корректно перейти на страницу члена труппы воспользуйтесь разделом <a href="/air.php" class=stress_big_bold_colour>«Актёры и роли»</a>
              </p>
            </div>
            <?
            die();
        };
      ?>
      <div class=nt  align=justify>
      
        <table width="100%" border="0" cellpadding="2">
          <tr class=nt>
            <td width="10%" align=center>
              <?if ($Person['dead'] == 1) {echo "<div class='border_dead'>";};?>
              <img src="/Img/air/<?=$Person['Number'];?>.jpg" alt="<?=$Person['name']." ".$Person['surname'];?>">
              <?if ($Person['dead'] == 1) {echo "<br><br>\n<b>{$Person['life_dates']}</b>\n<br><br>\n</div>";};?>
            </td>
            <?
              if ($Person['HMT'] == 1) 
              {
                  echo "            <td width='10%' align=center>
              <img src='/Img/air/hmt.gif' width='149' height='150'>
            </td>
            <td width='20%' class=stress_big_bold_colour_italic align=left>";
              } else 
              {
                  if ($Person['zasrak'] == 1) 
                  {
                      echo "            <td width='10%' align=center>
              <img src='/Img/air/zasrak.gif' width='149' height='150'>
            </td>
            <td width='20%' class=stress_big_bold_colour_italic align=left>";
                  } else
                  {
                      echo "            <td width='10%' class=stress_big_bold_colour_italic align=left colspan=2>
              ";
                  };
              }; 
            if ($Person['group'] == 2) 
            {
                echo "Служил";
                if ($Person['sex'] == 0) {echo "а";};
                echo " в театре:<br>".$Person['seasons'];
            };
            
            ?></td>
            <td width="40%" align=center>
              <div class=stress_big_bold_colour>
                <nobr><i><? 
                if ($Person['Number'] == '0') { echo "Режиссёр&nbsp;и&nbsp;актёр"; } else {
                if ($Person['sex'] == 1) {echo "актёр";} else {echo "актриса";};}; 
                ?></i></nobr><br>
                <span class=caption_big>
                  <i><?=$Person['name'];?><br>
                  <?=$Person['surname'];?>
                  <? if ($Person['NewSurname']!=NULL) { echo "<br>({$Person['NewSurname']})"; };?></i>
                </span>
              </div>
            </td>
            <td width="10%" valign=top><b>№<?=$Person['Number'];?></b></td>
          </tr>
        </table>
        
        <? 
        if ($Person['Number'] == '0')
        {
          include "plays_N_A.php";
        };    
        ?>
        
        <!-- Спектакли и роли -->
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%"><IMG src="../cp.gif" width=1 height=10></td>
            <td width="50%"><IMG src="../cp.gif" width=1 height=1></td>
            <td width="10%"><IMG src="../cp.gif" width=1 height=1></td>
            <td width="20%"><IMG src="../cp.gif" width=1 height=1></td>
          </tr>
          <tr>
            <td><IMG src="../cp.gif" width=1 height=20></td>
            <td align=center class=caption><?=$Person['Number'] == '0' ? "Роли" : "Спектакли и роли";?></td>
            <td><IMG src="../cp.gif" width=1 height=1></td>
            <td><IMG src="../cp.gif" width=1 height=1></td>
          </tr>
          <?Space();
          
          $Roles = mysql_query("SELECT * FROM `air` WHERE `person` = {$id}") or die("ERROR 1");
          
          for ($NRec = 0; $NRec<=1; $NRec++)
          {
            $NAuthors[$NRec] = 0;
            $NPlays[$NRec] = 0;
            $NSubPlays[$NRec] = 0;
            $NLinks[$NRec] = 0;
            $NComments[$NRec] = 0;
            $NYears[$NRec] = 0;
            $NChars[$NRec] = 0;
            $NSChars[$NRec] = 0;
          };
          $NRec = 1;
            
          while ($Role = mysql_fetch_assoc($Roles))
          {
              $PlaysQuery = mysql_query("SELECT * FROM `play` WHERE `id` = ".$Role['play']);
              $Play = mysql_fetch_assoc($PlaysQuery);
              
              $SubPlay['name'] = '';
              if ($Role['subplay']>0)
              {
                $SubPlaysQuery = mysql_query("SELECT * FROM `play` WHERE `id` = ".$Role['subplay']);
                $SubPlay = mysql_fetch_assoc($SubPlaysQuery);
              };
              
              $Authors[$NRec] = $Play['author'];
              $Plays[$NRec] = $Play['name'];
              $SubPlays[$NRec] = $SubPlay['name'];
              $Links[$NRec] = $Play['link'];
              $Comments[$NRec] = $Play['comment'];
              $Years[$NRec] = $Role['year'];
              if ($Role['char'] == -1) { $Chars[$NRec] = ''; } else 
              {
                 $CharsQuery = mysql_query("SELECT * FROM `chars` WHERE `id` = ".$Role['char']);
                 $Char = mysql_fetch_assoc($CharsQuery);
                 $Chars[$NRec] = $Char['charachter'];        
                 $SChars[$NRec] = $Char['subname'];                 
              };
              $NChars[$NRec] = 0;
              
              if($NRec != 1)
              {
                  $NAuthors =     AddSimilar($Authors[$NRec-1],    $Authors[$NRec],    $NAuthors,    $NRec);
                  $NPlays =     AddSimilar($Plays[$NRec-1],        $Plays[$NRec],        $NPlays,    $NRec);
                  $NSubPlays =     AddSimilar($SubPlays[$NRec-1],    $SubPlays[$NRec],    $NSubPlays,    $NRec);
                  $NLinks =     AddSimilar($Links[$NRec-1],        $Links[$NRec],        $NLinks,    $NRec);
                  $NComments =     AddSimilar($Comments[$NRec-1],    $Comments[$NRec],    $NComments,    $NRec);
                  $NYears =     AddSimilar($Years[$NRec-1],        $Years[$NRec],        $NYears,    $NRec);
                  $NChars =     AddSimilar($Chars[$NRec-1],        $Chars[$NRec],        $NChars,    $NRec);
                  $NSChars =     AddSimilar($SChars[$NRec-1],    $SChars[$NRec],        $NSChars,    $NRec); 
              };
              
              $NRec++;
          };
          

          for($i = 1; $i < $NRec; $i++)
          {
              
              if ($NPlays[$i-1]==0) {Space();};
              $TempStr = str_replace("<br>"," ", $Plays[$i]);
              echo "\n          <!-- ".str_replace("<br>"," ", $Authors[$i])." «".str_replace("<br>"," ", $Plays[$i])."» – ".str_replace("<br>"," ", $Chars[$i])." -->";
              if (in_array($Plays[$i], $PlaysToTable))
              {
                  
            ?>

          <tr class=nt valign=top>
            <td valign=top class=author><?= $Authors[$i]; ?></td>
            <td colspan=3>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?             
              $ti = $i;
              for ($i=$ti; $i<($ti+$NPlays[$ti]+1); $i++)
                  {?>
                <tr class=nt valign=top>
<?                  
                  if (($NPlays[$i-1] == 0) or ($NSubPlays[$i-1] == 0)) 
            {?>
                  <td width=62.5% align=center <?if ($NPlays[$i]>0) {echo "rowspan=".(min($NPlays[$i],$NSubPlays[$i])+1);}?>>
<?              if ($NPlays[$i-1]==0) 
              {?>
                    <<? if (($Links[$i] == '') or ($Links[$i] == null)) {echo 'span';} else {echo "a href='/sp/{$Links[$i]}.php'";};?> class=play_name> 
                      «<?= $Plays[$i]; ?>» 
                    </<? if (($Links[$i] == '') or ($Links[$i] == null)) {echo 'span';} else {echo "a";};?>>
<?              }
              
              
              if (($Comments[$i] != '') and ($NComments[$i-1] == 0)) 
              {
                  ?>
                    <br>
                    <span class=subtitle> <?=$Comments[$i];?> </span>
<?                  
              };
              
              if (($SubPlays[$i] != '') and ($NSubPlays[$i-1] == 0)) 
              {
                  if ($NPlays[$i-1]==0) {?>
                  </td>
                  <td width = 12.5%>&nbsp;</td>
                  <td width=25%>&nbsp;</td>
                </tr>
                <tr class=nt valign=top>
                  <td align=center class=subtitle><?};?>
<?              
                if (strpos($SubPlays[$i],"@")=== false) {echo "«{$SubPlays[$i]}»";}
                else {echo substr($SubPlays[$i], 1);};
                };
              ?></td>
<?            };
            if (($NYears[$i-1]==0) or ($NPlays[$i-1]==0))
            {
            ?>
                  <td class=person <?if ($NYears[$i]>0) 
            {
                echo " rowspan=".(min($NYears[$i],$NPlays[$i])+1);
            };
            ?>><?=$Years[$i];?> г.</td>
<?            };?>
                  <td class=person <?if ($NChars[$i]>0) 
            {
                echo " rowspan=".($NChars[$i]+1);
            };
            if($SubPlays[$i]!='') {echo " style='vertical-align: bottom'";};?>><?=$Chars[$i];?></td>
                </tr>
<?				  } $i--;?>
              </table>
            </td>
          </tr>
<?            
              }
              else 
              { ?>
		  
          <tr class=nt valign=top>
<?             if ($NPlays[$i-1]==0) {?>
            <td valign=top class=author <?if ($NPlays[$i]>0) 
            {
                echo "rowspan=".($NPlays[$i]+1);
            };?>><?= $Authors[$i]; ?></td>
<?            };
            
            if (($NPlays[$i-1] == 0) or ($NSubPlays[$i-1] == 0)) 
            {?>
            <td align=center <?if ($NPlays[$i]>0) {echo "rowspan=".(min($NPlays[$i],$NSubPlays[$i])+1);}?>>
<?              if ($NPlays[$i-1]==0) 
              {?>
              <<? if (($Links[$i] == '') or ($Links[$i] == null)) {echo 'span';} else {echo "a href='/sp/{$Links[$i]}.php'";};?> class=play_name> 
                «<?= $Plays[$i]; ?>» 
              </<? if (($Links[$i] == '') or ($Links[$i] == null)) {echo 'span';} else {echo "a";};?>>
<?              }
              
              
              if (($Comments[$i] != '') and ($NComments[$i-1] == 0)) 
              {
                  ?>
              <br>
              <span class=subtitle> <?=$Comments[$i];?> </span>
<?                  
              };
              
              if (($SubPlays[$i] != '') and ($NSubPlays[$i-1] == 0)) 
              {
                  if ($NPlays[$i-1]==0) {?>
              <br><?};?>
              <span class=subtitle> <?
                if (strpos($SubPlays[$i],"@")=== false) {echo "«{$SubPlays[$i]}»";}
                else {echo substr($SubPlays[$i], 1);};
                ?> </span>
                  <?
              };
              ?>
            </td>
<?            };
            if (($NYears[$i-1]==0) or ($NPlays[$i-1]==0))
            {
            ?>
            <td class=person <?if ($NYears[$i]>0) 
            {
                echo " rowspan=".(min($NYears[$i],$NPlays[$i])+1);
            };
            if($SubPlays[$i]!='') {echo " style='vertical-align: bottom'";};?>><?=$Years[$i];?> г.</td>
<?            };?>
            <td class=person <?if ($NChars[$i]>0) 
            {
                echo " rowspan=".($NChars[$i]+1);
            };
            if($SubPlays[$i]!='') {echo " style='vertical-align: bottom'";};?>><?
              echo $Chars[$i];
              if($SChars[$i]!=null){echo ",<br><span class=subtitle>{$SChars[$i]}</span>";};
            ?></td>
          </tr>
<?              };};
          
          if ($Person['Other_dates']!=null)
          {
            Space();  
              ?>
          <tr>
            <td>&nbsp;</td>
            <td class=special><?=$Person['Other'];?></td>
            <td class=special><?=$Person['Other_dates'];?></td>
          </tr>          
              <?
          };
          ?>
          
        </table>
      </div>
      <br><br><br><br>
  <?
  include "bottom.php";
  ?>
 </body>
 <!-- #EndTemplate -->
</html>
