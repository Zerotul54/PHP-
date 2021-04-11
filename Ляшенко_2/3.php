<?$arr = [];
$n=11;
for($i = 0; $i <= $n; $i++){
    $arr[] = $i & 1;
}
foreach ($arr as $text) {
    $result .= $text;
	}
echo $result;?>