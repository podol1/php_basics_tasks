<?php
$name = "Сергей";
$age = "24";
$day = 5;

if ($age >= 18 && $age < 60) {
    $message = "Вам еще работать и работать!";
}
elseif ($age < 18 && $age > 0) {
    $message = "Вам еще рано работать!";
}
elseif ($age > 60) {
    $message = "Вам пора на пенсию";
}
elseif ($age < 0) {
    $message = "Неизвестный возраст";
}

else {
    $message = "Неизвестный возраст";
}
echo $message

switch ($day) {
    case 1: echo 'Это рабочий день '; break;
    case 2: echo 'Это рабочий день'; break;
    case 3: echo 'Это рабочий день '; break;
    case 4: echo 'Это рабочий день '; break;
    case 5: echo 'Это рабочий день '; break;
    case 6: echo 'Это выходной день '; break;
    case 7: echo 'Это выходной день '; break;
    default: echo 'Неизвестный день';
}

?>

