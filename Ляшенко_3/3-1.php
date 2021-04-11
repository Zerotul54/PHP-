
<?php if (!isset($_GET['calculator'])) { ?>
<form action="?calculator" method="POST">
A: <input type="text" name="A"/><br />
B: <input type="text" name="B" /><br />
H: <input type="text" name="H"/><br />
<input type="submit" value="Rasschitat" class="submit_button">
</form>
<?php }
?>

<?php
if (isset($_GET['calculator']))
{
$a=$_POST['A'];
$b=$_POST['B'];
$h=$_POST['H'];
$s=(($a + $b)*0.5)*$h;
echo "S= $s";
}
?>