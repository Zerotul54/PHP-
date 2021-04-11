
<?php if (!isset($_GET['rass'])) { ?>
<form action="?rass" method="POST">
	Первое основание: <input type="text" name="a"/><br />
	Второе основание: <input type="text" name="b" /><br />
	Высота: <input type="text" name="h"/><br />
	   <input type="submit" value="Расчитать" class="submit_button">
</form>
<?php } ?>
<?php
if (isset($_GET['rass']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$h=$_POST['h'];
$s=(($a + $b)/2)*$h;
echo "Площадь трапеции равна $s";
}?>