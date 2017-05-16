<?php

$cities = require __DIR__ . '/data.php';

function searchCity ($firstLetter, $citiesArray) {
    $firstLetter = mb_strtoupper($firstLetter);
    foreach ($citiesArray as $city) {
        if ($firstLetter == mb_substr($city, 0, 1)) {
            return $city;
        }
    }
}

assert('Уфа' == searchCity('У', $cities));
assert('Челябинск' == searchCity('ч', $cities));
assert('Москва' == searchCity('м', $cities));
assert('Казань' == searchCity('к', $cities));
assert('Воронеж' == searchCity('в', $cities));
assert('Пермь' == searchCity('П', $cities));
assert('Ростов-на-Дону' == searchCity('Р', $cities));