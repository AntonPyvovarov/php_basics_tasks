<?php
$name = "Anton";
$age = 29;
echo "Меня зовут $name" . "<br>";
echo 'Мне ' . $age . ' лет' . "<br>";
if (($age >= 18) && ($age <= 59)) {
    echo"Вам еще работать и работать" . '<br>';
} elseif ($age > 59) {
    echo'Вам пора на пенсию' . '<br>';
} elseif (($age > 0) && ($age <= 17)) {
    echo 'Вам еще рано работать' . '<br>';
} else {
    echo 'Неизвесный формат' . '<br>';
}