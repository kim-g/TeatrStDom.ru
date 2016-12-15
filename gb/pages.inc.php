<?
if (!defined('am')) die("am only");
//array('page_num'=>$page_num,'count_page'=>$count_page,'count'=>$count)
extract($d);

if ($count<=$count_page) return "";

$p_max= ceil($count/$count_page);

ob_start();
?>
<div class="pages">

<?if ($page_num!=0) {?>
<a href="<?=link_plus($link,'page='.($page_num-1))?>" class="vpered" style="margin-left:0;">« Назад</a>
<?}else{?>
<i class="vpered ser" style="margin-left:0;">« Назад</i>
<?}?>



<?
$p=0;
$pa=$page_num-3; $pb=$page_num+3;
//die("Eee $p $p_max");
while ($p<$p_max) {
	if ($p>0 && $p<$pa) {
		echo '<i class="t3">&nbsp;</i>';
		$p=$pa;
		continue;
	}elseif ($p>$pb && $p<$p_max-1 ) {
		echo '<i class="t3">&nbsp;</i>';
		$p=$p_max-1;
		continue;
	}
?>
<?if ($page_num!==$p){?>
<a href="<?=link_plus($link,'page='.$p)?>"><?=$p+1?></a>
<?}else{?>
<i class="cur"><?=$p+1?></i><?
}
	$p++;
}//endwhile
?>


<?if ($page_num!=$p_max-1) {
	?>
<a href="<?=link_plus($link,'page='.($page_num+1))?>" class="vpered">Дальше »</a>
<?}else{?>
<i class="vpered ser">Дальше »</i>
<?}?>



<?
if (false) {
if (strval($page_num)!='all'){?>
<a style="margin-left:15px;" class="vpered" href="<?=link_plus($link,'page=all')?>">всего <?=$count?>, показать</a>
<?}else{?>
<i style="margin-left:15px;" class="vpered cur">всего <?=$count?>, показать</i>
<?}
}
?>

</div>
<?
$t=ob_get_contents();
ob_end_clean();
$t=preg_replace('/>\s+</s','><', $t);
echo $t;
?>