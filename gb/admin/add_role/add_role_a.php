<?
$play = @intval($_GET['play']);
$subplay = @intval($_GET['subplay']);
$char = @intval($_GET['charachter']);
$person = @intval($_GET['person']);
$year = @intval($_GET['year']);

include "../../config.php";

mysql_query("INSERT INTO `air` (`play`,`subplay`,`char`,`person`,`year`) 
VALUES ({$play},{$subplay},{$char},{$person},{$year});") or die("Error! ".mysql_error());
print json_encode("OK!");
?>