<?
function Navigate($Play)
  {return "      <a href='../repertoire.php'><b>Текущий репертуар</b></a> / <b>«{$Play}»</b>";
  };
  
function NavigatePhoto($Play,$PlayAddr)
  {return "      <a href='../repertoire.php'><b>Текущий репертуар</b></a> / <a href='{$PlayAddr}.php'><b>«{$Play}»</b></a> / <b> Фотогалерея </b>";
  };

function Video($Label, $Addr)
	{
	?>
	<b><a href="http://www.youtube.com/watch?v=<?=$Addr;?>" target="_blank"><?=$Label;?> &gt;&gt;</a></b>
	<?
	};
	
function Photo($Mini, $Full, $Width, $Height, $BR)
	{
	?>
	    <a onclick="return hs.expand(this);" class="highslide" href="img/<?=$Full;?>">
		  <img src="img/<?=$Mini;?>"  align="right" vspace="1" hspace="10" alt="Увеличить &gt;&gt;" border="0" width="<?=$Width;?>" height="<?=$Height;?>">
		</a> 
        <div class='highslide-caption'>
		  <a href="#" onclick="return hs.previous(this)" title="Previous (left arrow key)">&lt;&lt; Предыдущая</a> 
		  <a href="#" onclick="return hs.next(this)" title="Next (right arrow key)">Следующая &gt;&gt;</a> 
		</div>
	<?
	
	for($i=0; $i<$BR; $i++){ echo "<br>"; };
	};
?>