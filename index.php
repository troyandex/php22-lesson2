<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP-Lesson2</title>
</head>

<body>

<?php
$x = rand(0,100);
echo '<h1>Число: ' . $x . '</h1>';
$n1 = 1;
$n2 = 1;
echo '<ul>';
while (true)
{
    if ($n1 > $x) {
        echo '<p>Задуманное число не входит в числовой ряд</p>';
        break;
    }
    if ($n1 === $x) {
        echo '<p>Задуманное число входит в числовой ряд</p>';
        break;
    }
    $n3 = $n1;
    $n1 = $n1 + $n2;
    $n2 = $n3;
    echo '<li>' . $n1 . '</li>';
}
echo '</ul>';
?>

</body>
</html>