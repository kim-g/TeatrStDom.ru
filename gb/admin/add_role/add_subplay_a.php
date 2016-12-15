<?
$play = @intval($_GET['play']);
$subplay = $_GET['subplay'];

include "../../config.php";

$OwnerPlays = mysql_query("SELECT `author` FROM `play` WHERE `id` = {$play};") or die("Error! ".mysql_error());;
$OwnerPlay = mysql_fetch_assoc($OwnerPlays);

mysql_query("INSERT INTO `play` (`author`,`name`,`comment`,`owner`,`link`) 
VALUES ('{$OwnerPlay['author']}','{$subplay}','',{$play},'');") or die("Error! ".mysql_error());
print json_encode("OK!");

?>