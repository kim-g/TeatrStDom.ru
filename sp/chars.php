<?
/*
Функции для построения списка занятых в спектакле.

 - Role($Name, $Comma, $Job, $Act, $Space) - универсальная функция роли. 
   $Name - Имя персонажа. Если нет, ставим ''.
   $Comma - если есть и $Name, и $Job, то true ставит ",<br>" между ними. Если хотя бы одного из них нет, то $Comma игнорируется.
   $Job - внесценическая роль или пояснение к сценической роли (нежирный курсив). Если нет, то ставится ''.
   $Act - массив исполнителей. Записывается как array(<"элемент1>, <"элемент2>, ... , <"элементN>), где <"элементM"> может быть:
     - Число - табельный номер человека
	 - "@Строка" - начинается с символа "@" - произвольная строка (символ "@" убирается)
	 - "ТабНомер@Строка" - Человек по табельному номеру + произвольная строка после символа "@"
   $Space - выводит пустую строку после роли. 
 
 - SubStory($Name,$Subtitle,$Space) - Название и подзаголовок сюжета в спектакле

 **************************************
 
 Старые (для совместимости):

 - Char($Name, $Act, $Space) - Роль ($Name) - Актёры ($Act)
 - CharJob($Name, $Job, $Act, $Space) - Роль($Name),<br> подзаголовок роли ($Job) - Актёры ($Act)
 - CharQuality($Name, $Quality, $Act, $Space) - Роль($Name) подзаголовок роли ($Job) (без запятых и переносов каретки) - Актёры ($Act)
 - Job($Job, $Act, $Space) - Задача ($Job) - Исполнитель ($Act)
 - JobNames($Job, $Names, $Space) - Задача ($Job) - Исполнитель (вводится имя НЕ члена труппы (i.e. Аня Ким) ($Names)
 
Во всех функциях $Act - это массив (array()) с ТАБЕЛЬНЫМИ НОМЕРАМИ (`Number`, а не `id` в базе данных) членов труппы. Идут через запятую.
$Space - делать ли после строки пустую строку. 


***************************************

*/
              
include "../functions.php";   

              function Space()
              {?>
              <tr class=nt >
                <td colspan=2>&nbsp;</td>
              </tr>
              <?}              
    
              function Char($Name, $Act, $Space)
              {
?>
                <tr class=nt >
                <td valign=top class=charackter>
                  <?=$Name."\n";?>
                </td>
                <td valign=top class=person>
<?
                  $ArN = Count($Act);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  ".PersonName_Surname($Act[$i])."<br>\n"; };
                  };
                  echo "                  ".PersonName_Surname($Act[$i])."\n";
                ?>
                </td>
              </tr>
<?            if ($Space) {Space();};
              }
              
              function CharJob($Name, $Job, $Act, $Space)
              {
?>
                <tr class=nt >
                <td valign=top class=charackter>
                  <?=$Name;?>,<br>
                  <span class=job><?=$Job;?></span>
                </td>
                <td valign=top class=person>
<?
                  $ArN = Count($Act);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  ".PersonName_Surname($Act[$i])."<br>\n"; };
                  };
                  echo "                  ".PersonName_Surname($Act[$i])."\n";
                ?>
                </td>
              </tr>
<?            if ($Space) {Space();};
              }
              
                            
              function CharQuality($Name, $Quality, $Act, $Space)
              {?>
                <tr class=nt >
                <td valign=top class=charackter>
                  <?=$Name;?>
                  <span class=job><?=$Quality;?></span>
                </td>
                <td valign=top class=person>
<?
                  $ArN = Count($Act);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  ".PersonName_Surname($Act[$i])."<br>\n"; };
                  };
                  echo "                  ".PersonName_Surname($Act[$i])."\n";
                ?>
                </td>
              </tr>
<?            if ($Space) {Space();};
              }
              
              
              function Job($Job, $Act, $Space)
              {?>
                <tr class=nt >
                <td valign=top class=job>
                  <?=$Job;?>
                </td>
                <td valign=top class=person><?
                  $ArN = Count($Act);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  ".PersonName_Surname($Act[$i])."<br>\n"; };
                  };
                  echo "                  ".PersonName_Surname($Act[$i])."\n";
                ?></td>
              </tr>
<?            if ($Space) {Space();};
              }
              
              function JobNames($Job, $Names, $Space)
              {
?>
                <tr class=nt >
                <td valign=top class=job>
                  <?=$Job."\n";?>
                </td>
                <td valign=top class=person>
<?
                  $ArN = Count($Names);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  {$Names[$i]}<br>\n"; };
                  };
                  echo "                  {$Names[$i]}\n";
                ?>
                </td>
              </tr>
<?            if ($Space) {Space();};
              }
              
              function Role($Name, $Comma, $Job, $Act, $Space)
              {
?>

              <!-- <? if ($Name == "") {echo $Job;} else {echo $Name;}; ?> -->

              <tr class=nt >
                <td valign=top class=<? if ($Name!=""){echo "charackter";} else {echo "job";};?>>
                  <?
                  if ($Name!="") 
                  {
                      echo $Name;
                      if ($Job!="") 
                      {
                          if ($Comma) {echo ",<br>\n";} else {echo "\n";};
                          echo "                  <span class=job>{$Job}</span>\n";
                      }
					  else {echo "\n";};
                  }
                  else
                  {
                      if ($Job!="") 
                      {
                          echo $Job."\n";
                      }
                      else
                      {
                          echo "&nbsp;\n";
                      }
                  }
                  ?>
                </td>
                <td valign=top class=person>
<?
                  $ArN = Count($Act);
                  $i = 0;
                  if ($ArN>1)
                  {
                    for ($i = 0; $i<$ArN-1;$i++) { echo "                  ".PersonName_Surname($Act[$i])."<br>\n"; };
                  };
                  echo "                  ".PersonName_Surname($Act[$i])."\n";
                ?>
                </td>
              </tr>
<?            if ($Space) {Space();};
              }
              
              function SubStory($Name,$Subtitle,$Space)
              {?>
            <!-- <?=$Name;?> -->
            <tr class=nt >
             <td colspan=2>
              <span class=chapter_title><?=$Name;?></span><? if ($Subtitle!="") {echo "<br>
              <span class=chapter_subtitle>
              {$Subtitle}
              </span>"; }?>
             </td>
            </tr>
<?            if ($Space) {Space();};
              }
            
            function PlainTextFull($Text,$Space)
              {?>
            <tr class=nt >
             <td colspan=2>
              <?=$Text;?>
             </td>
            </tr>
<?            if ($Space) {Space();};
              }
              
              
             function Photo_Add($Play,$Name,$Sm_Name)
             {
                 ?>
      <div style="float: left"> 
        <a onclick="return hs.expand(this);" class="highslide" href="/sp/photo/<?=$Play."/".$Name;?>.jpg">
          <img vspace="5" hspace="10" src="/sp/photo/<?=$Play."/".$Sm_Name;?>.jpg" title="Увеличить >>" border="0">
        </a> 
        <div class='highslide-caption'>
          <a href="#" onclick="return hs.previous(this)" title="Previous (left arrow key)">&lt;&lt; Предыдущая</a> 
          <a href="#" onclick="return hs.next(this)" title="Next (right arrow key)">Следующая &gt;&gt;</a> 
        </div>
      </div>
                 <?
             }
			 
			 function Affiche($Mini,$Large, $Alt)
             {
                 ?>
      <div style="float: left"> 
        <a onclick="return hs.expand(this);" class="highslide" href="/Img/<?=$Large;?>.png">
          <img vspace="5" hspace="10" src="/Img/<?=$Mini;?>.png" title="Увеличить >>" border="0" alt="<?=$Alt;?>">
        </a> 
        <div class='highslide-caption'>
          <a href="#" onclick="return hs.previous(this)" title="Previous (left arrow key)">&lt;&lt; Предыдущая</a> 
          <a href="#" onclick="return hs.next(this)" title="Next (right arrow key)">Следующая &gt;&gt;</a> 
        </div>
      </div>
                 <?
             }