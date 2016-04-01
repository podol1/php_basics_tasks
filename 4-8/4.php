<?php
$name = "Сергей";
$age = "-9";

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

?>

