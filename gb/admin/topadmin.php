<?php
  ///////////////////////////////////////////////////
  // Гостевая книга с использованием MySQL
  // 2003-2004 (C) IT-студия SoftTime (http://www.softtime.ru)
  // Симдянов И.В. (simdyanov@softtime.ru)
  // Кузнецов М.В. (kuznetsov@softtime.ru)
  // Голышев С.В. (softtime@softtime.ru)
  ///////////////////////////////////////////////////
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Жалобная книга: админка. Театр Старый Дом</title>
<link rel="stylesheet" type="text/css" href="admin.css">
<?
/*Правка Гриши Кима*/
if ($ScryptToAdd!="") {echo $ScryptToAdd."\n";};
/*Конец исправлений Гриши*/
?>
</head>
<body leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0" topmargin="0"<?/*Правка Гриши Кима*/echo " ".$OnLoadFunction;/*Конец исправлений Гриши*/?>>
<table class=topadmin border="0" cellspacing="9">
    <tr align="center">
        <td width="10%">&nbsp;</td>
        <td><p><a href="/guest.php" class=link title="Вернуться в гостевую книгу">Гостевая книга</b></a></td>
        <td><p><a href="/main.php" class=link title="Вернуться на заглавную страницу сайта" >Вернуться на главную страницу сайта</b></a></td>
        <td><p><form method="POST" action="/gb/admin/index.php" style="display:inline"><?=@gbadmin?>&nbsp;<input type="submit" name="gbexit" value="Выйти!" /></form></p></td>
        <td width="50">&nbsp;</td>
    </tr>
</table>
<table border="0" cellpadding="0" cellspacing="20" >
    <tr valign="top">
        <td><nobr><h1 class=z1><? echo $titlepage ?></h1></nobr></td>
        <td><p class=help><? echo $helppage ?></p></td>
    </tr>
</table>
<table width=100%><tr><td width=10%>&nbsp;</td><td>