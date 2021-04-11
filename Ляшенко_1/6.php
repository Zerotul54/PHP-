<?php if (!isset($_GET['mes'])) { ?>
<form action="?mes" method="POST">
	Номер месяца: <input type="text" name="mes"/><br />
	   <input type="submit" value="Расчитать" class="submit_button">
</form>
<?php } ?>
<?php
if (isset($_GET['mes']))
{
	$mes=$_POST['mes'];
	switch($mes){
		case 1:echo "Январь";break;
		case 2:echo "Февраль";break;
		case 3:echo "Март";break;
		case 4:echo "Апрель";break;
		case 5: echo "Май";break;
		case 6:echo "Июнь";break;
		case 7:echo "Июль";break;
		case 8:echo "Август";break;
		case 9:echo "Сентябрь";break;
		case 10: echo "Октябрь";break;
		case 11: echo "Ноябрь";break;
		case 12: echo "Декабрь";break;
	}
	}?>
