<?
  include "gb/config.php";
  $title=$titlepage="Добавить новость";
   // Выводим шапку страницы
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"gb/admin/admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"gb/admin/tichets/tickets.css\">

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>";
  include "gb/admin/topadmin.php";
  
?>
<!-- отрисовываем форму -->

<form action="#" method="get">
	<table border="0">
		<tr>
			<td>
				<b>Добавление новости</b>
				<p>Дата</p>
				<input type="text" size="40" name="date_id" id="date_id">
				<p>Сюжет:</p>
				<textarea rows="10" cols="45" name="text_id"></textarea>
				<br><br>
				<input type=button value="Добавить новость" id="submit_id" name="submit_id">
			</td>
			
		</tr>
	</table>
</form>
  
<?
include "gb/admin/bottomadmin.php";
?>