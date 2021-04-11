<?$arr = ['html', 'css', 'php', 'js', 'jq'];
print_r($arr);
echo "<br>";
shuffle($arr);
print_r($arr);
echo "<br>";
$offset = rand(1,count($arr)-1);
for($i=0;$i<$offset;$i++){
$a = array_shift ($arr);
$arr[] = $a;}
print_r($arr);?>