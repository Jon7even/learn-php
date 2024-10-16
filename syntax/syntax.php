/* Личная шпаргалка по PHP  */
<?php

/* Типы данных:

Int - целочисленное значение
Float - числа с плавающей точкой 
Bool - логический тип
Null - переменная не имеет значения. Не имеет регистра. 
String - строки. Бывают в двойных кавычках "" и одираных ''. От типа кавычек зависит обработка интерпретатором. 
В двойных кавычках - переменные заменяются значениями, а переменные в одираных - остаются неизменными. 
*/

// 0. Операции
$a = 7;
echo $a + 2 . PHP_EOL; // сложение
echo $a - 2 . PHP_EOL; // вычитание
echo $a * 2 . PHP_EOL; // умножение
echo $a / 2 . PHP_EOL; // деление
echo $a % 3 . PHP_EOL; // деление по модулю
echo $a ** 2 . PHP_EOL; // возведение в степень
++$a; // инкремент префиксный
echo $a . PHP_EOL; 
$a++; // инкремент постфиксный
echo $a . PHP_EOL; 
--$a; // декремент префиксный
echo $a . PHP_EOL;
$a--; // декремент постфиксный
echo $a . PHP_EOL; 

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
    echo "1е условие не сработало." . PHP_EOL;
}

// 5. Функции
function replaceGreet($StringOne, $StringSecond) {
    return $StringOne . $StringSecond;
}

// 6. Результат работы функции
$varibleGreetingHello = replaceGreet("Goodbye", " Commandor" . PHP_EOL);
echo $varibleGreetingHello . PHP_EOL;

// 7. Функции с условиями
function equalString($StringOne, $StringSecond) {
    if ($StringOne == "Hello") {
        return "Мы еще вначале изучения сработало условие 1" . PHP_EOL;
    } else {
        return "1е условие не сработало." . PHP_EOL;
    }
}
echo equalString($varibleGreetingHello, $varibleGreetingHello);

/*8. Операции сравнения двух значений

== Сравнение, если они равны true
=== Тождественность дополнительно сравнивает тип переменной
!= если не равны возвращает true
!== дополнительно сравнивает тип переменной
> если первое больше возвращает true
>= если первое равно или больше true
< если первое меньше возвращает true
<= если первое равно или меньше true
*/

/*9. Логические операции: 

&& возвращает true, если оба true
and возвращает true, если оба true
|| возвращает true, если хоть одна операция true
or возвращает true, если хоть одна операция true
! возвращает true, если операция сравнения возвращает false
xor возвращает true, если только одно из значений true
*/

/*10. Приоритет операций

**
++ -- ~
!
* / %
+ - .
<< >>
< > <= >=
== != === !== << <=<
&
^
|
&&
||
? :
= += -= *= **= /= .= %= &= |= ^= <<= >>=
and
xor
or
*/

//11. Определенные условия в зависимости от типов данных
if (0) {}       // false
if (-0.0) {}    // false
if (-12) {}      // true 
if ("") {}      // false (пустая строка)
if ("text") {}     // true (непустая строка)
if (null) {}    // false (значие отсутствует)

//12. Синтаксический сахар if:
// Вместо открывающей фигурной скобки ставится :, а в конце конструкции ставится endif
if (-1):
    echo "Синтаксический сахар". PHP_EOL;
endif;

//13. Тернарная операция [Условие] ? [Значение 1] : [Значение2];
echo 1 < 5 ? "1 < 5 Да, это правда" : "Нет, это ложно" . PHP_EOL;

/*14. Конструкция switch case

switch (выражение) {
    case значение1: 
        действия; 
        break;
    case значениеN: 
        действия; 
        break;
    default: 
        действие по умолчанию; 
        break;
}
*/

/*15. Оптимизированная конструкция switch - match
switch - сравнивает только значение, но не учитывает тип
match - учитывает тип сравниваемого выражения

match(выражение) {
    значение 1 => действия,
    значение 2 => действия,
    default => действие по умолчанию,
};


*/
?>