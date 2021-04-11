<?
function pal($word){
if ($word === strrev($word)){
echo 'Палиндром';
}
else{
echo 'Не Палиндром';
}}
echo pal("radar");
echo "<br>";
echo pal("sun");
?>