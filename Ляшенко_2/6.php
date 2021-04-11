<? $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
 $day = 'Вторник';
foreach ($arr as $elem) {
if ($elem == 'Суббота' || $elem == 'Воскресенье') {
if ($elem == $day)
echo '<b><em>'.$elem.'</em></b>'.'<br> ';
else
echo '<b>'.$elem.'</b>'.'<br> ';
}
else if($elem==$day){
echo '<em>'.$elem.'</em>'.'<br> ';
}
else {
echo $elem.'<br> ';
}
}?>
