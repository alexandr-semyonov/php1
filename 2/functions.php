<?php

/* Задание 2. Функция вычисления дискриминанта */
function discriminant ($a, $b, $c) {
    return $b**2 - 4 * $a * $c;
}

assert(0 == discriminant(0, 0, 0));
assert(0 == discriminant(2, 4, 2));
assert(1 == discriminant(1, 3, 2));
assert(1 == discriminant(2, 5, 3));
assert(4 == discriminant(3, 8, 5));

/* Задание 4. Функция определения пола по имени.
Женские имена - https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5_%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B0
Мужские имена - https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5_%D0%BC%D1%83%D0%B6%D1%81%D0%BA%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B0
Женские имена заканчиваются на буквы "А", "Ь" и "Я".
В первое условие записываем мужские имена-исключения, которые заканчиваются на буквы "А", "Ь" и "Я", чтобы их ошибочно не определять как женские. Таких имен всего 7.
Во втором условии определяем женские имена.
В третьем условии записываем буквы, на которые заканчиваются мужские имена.
Если имя не подошло ни под одно из условий, значит имя написано с ошибкой.
*/
function gender ($name) {
    $male = 'Мужской';
    $female = 'Женский';
    $letter = mb_substr($name, mb_strlen($name, 'utf-8') - 1, 1);
    if ($name == 'Игорь' || $name == 'Илья' || $name == 'Кузьма' || $name == 'Лука' || $name == 'Никита' || $name == 'Савва' || $name == 'Фома') {
        return $male;
    } elseif ($letter == 'а' || $letter == 'я' || $letter == 'ь') {
        return $female;
    } elseif ($letter == 'б' || $letter == 'в' || $letter == 'г' || $letter == 'д' || $letter == 'й' || $letter == 'к' || $letter == 'л' ||
        $letter == 'м' || $letter == 'н' || $letter == 'р' || $letter == 'с' || $letter == 'т' || $letter == 'ф' || $letter == 'х') {
        return $male;
    } else {
        return null;
    }
}
