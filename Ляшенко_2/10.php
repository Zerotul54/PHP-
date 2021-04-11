<?function check($num){
for ($i = 2; $i < $num; $i++){
if ($num % $i == 0){
echo 'Не простое';
break;
}
else{
echo 'Простое';
break;
}}}
echo check(7);?>