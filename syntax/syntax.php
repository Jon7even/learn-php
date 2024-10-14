/* Личная шпаргалка по PHP  */
<?php
// 1. Объявляем переменные 
$varibleGreetingHello = "Hello,";
$varibleGreetingUser = " User!";

// 2. Конкатенация строк переменных, где PHP_EOL это константа, которая является концом строки(необязательно)
$resultStringGreet = $varibleGreetingHello . $varibleGreetingUser . PHP_EOL;

// 3. Вывод результата конкатенации
echo $resultStringGreet;

// 4. Базовые условия
if ($varibleGreetingHello == "Hello") {
    echo "Мы еще вначале изучения сработало условие 1" . PHP_EOL;
} else {
    echo "1е условие не сработало.";
}

// 5. Функции
function replaceGreet($StringOne, $StringSecond) {
    return $StringOne . $StringSecond;
}

// 6. Результат работы функции
$varibleGreetingHello= replaceGreet("Goodbye", " Commandor" . PHP_EOL);
echo $varibleGreetingHello;

// 7. Функции с условиями
function equalString($StringOne, $StringSecond) {
    if ($StringOne == "Hello") {
        return "Мы еще вначале изучения сработало условие 1" . PHP_EOL;
    } else {
        return "1е условие не сработало.";
    }
}
echo equalString($varibleGreetingHello, $varibleGreetingHello);




?>