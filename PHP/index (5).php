<?php
$break = "<br>";

$output = <<<INFO
"Аптеку позабудь ты для венпиков лавровых
И не мори больных, но усыпляй здоровых."
INFO;

echo nl2br($output);
echo "<br><br>";

$date = "010122";
echo substr(chunk_split($date, 2, '.'), 0, -1);
echo "<br><br>";

$date = "Я считаю до пяти";
if (strpos($date, 'пяти') !== false) {
    echo "Слово присутвует в строке. {$break}";
} else {
    echo "Слова нет в строке. {$break}";
}
echo $break;

$pathToFile = "E:\OSPanel\domains\localhost\index.php";
$fileName substr(strrchr($pathToFile, "/"), 1);
echo $fileName;



