<?//������� SMS �������� ����� sms-7.ru.
  include "../../config.php";
   
  $title=$titlepage="������ � ��������. �������� ���";
   // ������� ����� ��������
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"../admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"tickets.css\">
<script type='text/javascript' src='tickets.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  $OnLoadFunction="onload='preloadall()'";
  include "../topadmin.php";
  echo "<div><a href='index.php' class=button-ticket>������� � ������ � �������� �������</a></div>";

?> 
<form accept-charset="UTF-8" action="sms.send.php" method="post" name="sms.text">
 <p class=text>������� �����:</p> 
 <input type="text" name="text" >
 <input type="submit" name="send" value="���������">
</form>
<?
include "../bottomadmin.php";
?>