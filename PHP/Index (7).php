<?php
$rows = 2;
$cols = 4;
$data = array( array("1", "Воронцов Игорь Владимирович", "Voron19@mail.ru", "М", "1991"),
              arrat("2", "Веткова Наталья Александровна", "Vetka112@mail.ru", "Ж", "2000"),
              arrat("3", "Птичкин Сергей Анатольевич", "Ptichka02@mail.ru", "M", "1989")
             );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Сайт</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><?php echo "Привет новый пользователь"; ?></h1>
<h3>Сегодня:<?php echo date("d/m/y"); ?></h3>
<table class = "table">
<thead>
<th>№</th>
<th>ФИО</th>
<th>E-mail</th>
<th>Пол</th>
<th>Год рождения</th>
</thead>
<?php
echo "<tbody>"; 
for ($tr=0; $tr < $rows ; $tr++) { 
	echo "<tr>";
	for ($td=0; $td < $cols ; $td++) { 
		echo "<td>" . $data[$tr][$td] . "</td>";
	}
	echo "</tr>";
}
echo "</tbody>";
?>
<tfoot>
<td colspan = "5">Итого: 3</td>
</tfoot>
</table>
</body>
</html>
