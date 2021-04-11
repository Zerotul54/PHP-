<?php
$min=20;
$max=50;
?>

<?php
for ($i=$min;$i<=$max;$i++){
if (($i%3==0)&&($i%5!=0)){
echo "$i ";
}
}
?>