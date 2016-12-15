<?
  include "../../config.php";
  $title=$titlepage="Добавить роль";
   // Выводим шапку страницы
  $ScryptToAdd="<link rel=\"stylesheet\" type=\"text/css\" href=\"/gb/admin/admin.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/gb/admin/tichets/tickets.css\">

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type='text/javascript' src='add_role.js'></script>";
  include "../topadmin.php";
  
?>
<!-- отрисовываем форму -->

<form action="#" method="get">
	<table border="0">
		<tr>
			<td>
				<b>Добавление актёра в роли</b>
				<p>Спектакль</p>
				<select name="play_id" id="play_id">
				<?
				$PlaysQuery = mysql_query("SELECT * FROM `play` WHERE `owner` IS NULL") or die("Error plays query!");
				while ($Play = mysql_fetch_assoc($PlaysQuery))
				{
					echo "		<option value='{$Play['id']}'>{$Play['name']}</option>\n";
				};
				?>
				</select>
				<p>Сюжет:</p>
				<select name="subplay_id" id="subplay_id" disabled="disabled">
					<option value="0">- выберите спектакль -</option>
				</select>
				<p>Роль:</p>
				<select name="char_id" id="char_id" disabled="disabled">
					<option value="0">- выберите сюжет -</option>
				</select>
				<p>Актёр:</p>
				<select name="person_id" id="person_id" disabled="disabled">
					<option value='-1'> - Выберите актёра - </option>
					<?
					$PersonsQuery = mysql_query("SELECT `id`, `name`, `surname` FROM `people` ORDER BY `surname`") or die("Error people query!");
					while ($Person = mysql_fetch_assoc($PersonsQuery))
					{
						echo "		<option value='{$Person['id']}'>{$Person['surname']} {$Person['name']}</option>\n";
					};
					?>
				</select>
				<p>Год:</p>
				<input type="text" size="40" name="year_id" id="year_id">
				<br><br>
				<input type=button value="Добавить роль" id="submit_id" name="submit_id">
	
				<br><br><br>
				<b>Добавление сюжета</b>
				<p>Спектакль</p>
				<select name="play_2_id" id="play_2_id">
					<?
					$PlaysQuery = mysql_query("SELECT * FROM `play` WHERE (`owner` IS NULL) AND (`id`<>74) AND (`id`<>25)") or die("Error plays query!");
					while ($Play = mysql_fetch_assoc($PlaysQuery))
					{
						echo "		<option value='{$Play['id']}'>{$Play['name']}</option>\n";
					};
					?>
				</select>
				<p>Сюжет:</p>
				<input type="text" size="40" name="subplay_add_id" id="subplay_add_id">
				<br><br>
				<input type=button value="Добавить сюжет" id="submit_2_id" name="submit_2_id">
			</td>
			
			<td>
				<b>Добавление роли</b>
				<p>Спектакль</p>
				<select name="play_3_id" id="play_3_id">
					<?
					$PlaysQuery = mysql_query("SELECT * FROM `play` WHERE `owner` IS NULL") or die("Error plays query!");
					while ($Play = mysql_fetch_assoc($PlaysQuery))
					{
						echo "		<option value='{$Play['id']}'>{$Play['name']}</option>\n";
					};
					?>
				</select>
				<p>Сюжет:</p>
				<select name="subplay_3_id" id="subplay_3_id" disabled="disabled">
					<option value="0">- выберите спектакль -</option>
				</select>
				<p>Роль:</p>
				<input type="text" size="40" name="role_add_id" id="role_add_id">
				<br><br>
				<input type=button value="Добавить роль" id="submit_3_id" name="submit_3_id">
			</td>
		</tr>
	</table>
</form>
  
<?
include "gb/admin/bottomadmin.php";
?>