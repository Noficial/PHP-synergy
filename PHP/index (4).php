<?php
$break = "<br>";
$temperatures = array(-0.4, -2.5, -6.9, -6.2, -4.6, 0.5, 0.6);

$count = count($temperatures);
$sum = 0;
foreach ($temperatures as $temp) {
    $sum +=  $temp; 
}
$average = round($sum / $count);
echo "Средняя максимальнаая температура за неделю составила {$average} &deg;c.{$break} ";

rsort($temperatures);
$warmestTemps = array_slice($temperatures, 0, 3);
echo "<p>Три самых высоких значения температуры:{$break}";
foreach($warmestTemps as $warm){
    echo "{$warm} &deg;c {$break}";
}

$coolestTemps = array_slice($temperatures, -3, 3);
echo "<p>Три самых низких значения температуры: {$break}";
foreach($coolestTemps as $cool){
    echo "{$cool} &deg;c {$break}";
}
echo $break;

echo "Многомерный массив случайных значений: {$break}";
$arr = [];
for ($i=0; $i < 10; $i++) { 
    echo "Значения подмассива <b>{$i}</b>: ";
    for ($j=0; $j < 10; $j++) { 
        $arr[$i][$j] = rand(1, 10);
        echo $arr[$i][$j] . "";
    }
    echo $break;
}
echo $break;

$users = array(
    array(
        "userName" => "Stanley",
        "login" => "stan1994",
        "password" => "pasForStan94"
    ),
    array(
        "userName" => "Martin",
        "login" => "mrMartin78",
        "password" => "12345Martin"
    ),
    array(
        "userName" => "George",
        "login" => "KingGeorge",
        "password" => "sayHi67"
    )
);

echo "Данные пользователей: {$break}";
foreach ($users as $user){
    foreach ($user as $key => $value){
        echo "{$key}: {$value}{$break}";
    }
    echo $break;
}
echo $break;

echo "Сумма квадратов чисел в установленом диапазоне: {$break}";
$sum = 0;
for ($i=1; $i <= 25; $i++) {
    $sum += pow($i, 2);
}
echo $sum . $break;
echo $break;

function greetings($language, $name) {
    $greetingArr = array('ru' => 'Привет', 'en' => 'hello', 'fr' => 'Salut', 'it' => 'Ciao');
    $text = $greetingArr[$language] . ", " . $name . ".";
    return $text;
}

echo "Приветствие на русском языке: " . "<b>" . greetings('ru', 'Алексей') . "</b>{$break}";
echo "Приветствие на английском языке: " . "<b>" . greetings('en', 'George') . "</b>{$break}";
echo "Приветствие на французском языке: " . "<b>" . greetings('fr', 'Alana') . "</b>{$break}";
echo "Приветствие на итальянском языке: " . "<b>" . greetings('it', 'Felice') . "</b>{$break}";
echo $break;



