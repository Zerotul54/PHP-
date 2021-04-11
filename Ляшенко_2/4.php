<?$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
$en = [];
$ru = [];
foreach ($arr as $itemEn => $itemRu) {
    $en[] = $itemEn;
    $ru[] = $itemRu;
}
echo "En: ";
print_r($en);
echo "<br>";
echo "Ru: ";
print_r($ru);?>