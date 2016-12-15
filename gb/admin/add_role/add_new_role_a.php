<?
$play = @intval($_GET['play']);
$subplay = @intval($_GET['subplay']);
$role = $_GET['charachter'];

include "../../config.php";

mysql_query("INSERT INTO `chars` (`charachter`,`play`) 
VALUES ('{$role}','".($subplay == 0 ? $play : $subplay)."');") or die("Error! ".mysql_error());
print json_encode("OK!");

?>