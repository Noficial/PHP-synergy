<?php
$lineBreak  ="<br>";
ob_start();
echo "Первая строка{$lineBreak}";
$firstRow = ob_get_contents();
ob_end_clean();
echo "Вторая строка{$lineBreak}";
echo $firstRow;
echo $lineBreak;

function ob_handler ($buffer) {
    $newStr = "";
    while ($i < strlen($buffer)) {
        $newStr = $newStr . $buffer[(strlen($buffer) - 1) - $i];
        $i = $i + 1;
    }
    return $newStr;
}
ob_start("ob_handler");
echo "Revers srt.";
ob_end_flush();
echo $lineBreak;

echo ob_get_level();
ob_start();
echo ob_get_level();
ob_start();
echo ob_get_level();
ob_start();
echo ob_get_level();
ob_end_flush();
ob_end_flush();
ob_end_flush();
echo $lineBreak;
echo "Итог. {$lineBreak}";
ob_start();
ob_start();
ob_start();
echo ob_get_level();
ob_end_flush();
echo ob_get_level();
ob_end_flush();
echo ob_get_level();
ob_end_flush();
echo ob_get_level();