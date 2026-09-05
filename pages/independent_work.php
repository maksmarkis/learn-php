<?php
echo "<br>" . "<h2>Как посмотреть содержимое массива в PHP</h2>";
$a = ['a', 'b', 'c'];
foreach ($a as $text) {
    echo $text . '<br>'; // Каждый элемент на новой строке
}
var_dump($a);

// Отдельный элемент массива в PHP

echo "<br>" . "<h2>Отдельный элемент массива в PHP</h2>";
$arr = ['a', 'b', 'c'];
echo $arr[0] . '<br>';
echo $arr[1] . '<br>';
echo $arr[2] . '<br>';

$arr1 = ['a','b','c','d','e'];
echo $arr1[0] . "+" . $arr1[1] . "+" . $arr1[2] . "+" . $arr1[3];

echo "<br>";
$arr2 = [1,2,3,4,5];
echo array_sum($arr2);

echo "<br>";
$arr3 = [2,5,3,9];
$res = $arr3[0] * $arr3[1] + $arr3[2] * $arr3[3];
echo $res;

echo "<br>" . "<h2>Ассоциативные массивы в PHP</h2>";

$user =["name" => "Anton","surname"=>"Chigurh","patronymic"=>"Antonovich"];
echo $user["name"] . " " . $user["surname"] . " " . $user["patronymic"] . " ";

echo "<br>";
$arr4 = [1 => "Понедельник",2 => "Вторник",3 => "Среда",4 => "Четверг",5 => "Пятница",6 => "Суббота",7 => "Воскресенье"];
foreach ($arr4 as $day) {
    echo $day . "<br>";
}

echo "<br>" . "<h2>Хитрость с ключами в PHP</h2>";

$month = [1=>"Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь",];
echo $month[1] . " ";
echo $month[2] . " ";
echo $month[3] . " ";
echo $month[4] . " ";

echo "<br>" . "<h2>Порядок элементов в массивах в PHP</h2>";

$month1 = [3=>"Январь",12=>"Февраль",11=>"Март",1=>"Апрель",2=>"Май",4=>"Июнь",5=>"Июль",6=>"Август",7=>"Сентябрь",8=>"Октябрь",9=>"Ноябрь",10=>"Декабрь",];
echo $month1[1] . " ";
echo $month1[2] . " ";
echo $month1[3] . " ";
echo $month1[4] . " ";

echo "<br>" . "<h2>Длина массива в PHP</h2>";

$arr5 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr5);

echo "<br>";
$arr6 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($arr6);

echo "<br>" . "<h2>Изменение элементов массива в PHP</h2>";
echo "<br>";
$arr7 = ['a' => 1, 'b' => 2, 'c' => 3];
$arr7[0] = 'popa';
$arr7[1] = 'jopa';
$arr7[2] = 'stepa';
echo implode(", ", $arr7);

echo "<br>" . "<h2>Перезапись элементов массива в PHP</h2>";

$arr8 = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($arr8 as $key => $value) {
    $arr8[$key] = $value + 3;
}
echo implode(", ", $arr8);

echo "<br>" . "<h2>Заполнение массивов в PHP</h2>";

$arr9 = [];
$arr9[] = 1;
$arr9[] = 2;
$arr9[] = 3;
$arr9[] = 4;
$arr9[] = 5;
echo implode(", ", $arr9);

echo "<br>";
$arr10 = [1, 2, 3];
$arr10[] = 4;
$arr10[] = 5;
echo implode(", ", $arr10);

echo "<br>" . "<h2>Явное указание ключей в PHP</h2>";

$arr11=[];
$arr11['year'] = 2026;
$arr11['month'] = '09';
$arr11['day'] = '05';
echo implode("-", $arr11);

echo "<br>" . "<h2>Ключи из переменных в PHP</h2>";

$arr12 = [1, 2, 3, 4, 5];
$key1 = 1;
$key2 = 2;
$sum = $key1 + $key2;
echo $sum;

echo "<br>";
$arr12 = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'b';
echo $arr12[$key];

echo "<br>" . "<h2>Поиск ошибок в коде с массивами PHP</h2>";

$arr13 = [1, 2, 3, 4, 5];
//echo strlen($arr);
echo count($arr13);

echo "<br>";
$arr14 = [1, 2, 3, 4, 5];
//cho $arr[count($arr)];
echo end($arr14);

echo "<br>";
$arr15 = [1, 2, 3, 4, 5];
//echo $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[5];
echo $arr15[0] + $arr15[1] + $arr15[2] + $arr15[3] + $arr15[4];

echo "<br>";
$arr16 = [1, 2, 3, 4, 5];
//echo count([$arr]);
echo count($arr16);

echo "<br>";
$arr17 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
//echo $arr[a] + $arr[b] + $arr[c];
echo $arr17['a'] + $arr17['b'] + $arr17['c'];

echo "<br>";
$arr18 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$k = 'a';
//echo $arr['$k'];
echo $arr18[$k];

echo "<br>";
$arr19 = [1, 2, 3, 4, 5];
echo count($arr19);

/**/
echo "<br>";
$arr20 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$a = 'a';
echo $arr20[$a];

echo "<br>" . "<h2>Многомерные массивы в PHP</h2>";

$arr21= [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
echo $arr21[3][2];
echo $arr21[1][1];
echo $arr21[2][0];
echo $arr21[0][0];

echo "<br>";
$arr22 = [
    [1, 2],
    [3, 4],
    [5, 6]
];

$sum = $arr22[0][0]  + $arr22[0][1] + $arr22[1][0]  + $arr22[1][1] + $arr22[2][0]  + $arr22[2][1];
echo $sum;
/**/

echo "<br>" . "<h2>Трехмерный массив в PHP</h2>";
$arr23 = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = $arr23[0][0][0] + $arr23[0][0][1] + $arr23[0][1][0] + $arr23[0][1][1] + $arr23[1][0][0] + $arr23[1][0][1]
+ $arr23[1][1][0]+$arr23[1][1][1];
echo $sum;

echo "<br>" . "<h2>Ассоциативные массивы в PHP (многомерные)</h2>";
$arr24 = ['user1' => ['name' => 'name1','age'  => 31], 'user2' => ['name' => 'name2', 'age'  => 32]];

$arr25 = [
    'boys'  => [1 => 'John', 2 => 'Jack', 3 => 'Ryan'],
    'girls' => [1 => 'Emma', 2 => 'Lily', 3 => 'Anna'],
];
echo $arr25['boys'][1];
echo "<br>";
echo $arr25['girls'][1];

echo "<br>";
$arr26 = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
$sum = $arr26[0]['salary']+$arr26[2]['salary'];
echo $sum;

echo "<br>" . "<h2>Произвольные массивы в PHP</h2>";

$arr27 = [
    [1, 2, 3, [4, 5, [6, 7]] ],
    [8, [9, 10]]];
$sum = $arr27[0][0] + $arr27[0][1] + $arr27[0][2] + $arr27[0][3][0] + $arr27[0][3][1] + $arr27[0][3][2][0] + $arr27[0][3][2][1] + $arr27[1][0] + $arr27[1][1][0] + $arr27[1][1][1];
echo $sum;

echo "<br>" . "<h2>Перебор многомерных массивов в PHP</h2>";

$arr28 = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [8, 9]
];
foreach ($arr28 as $sub) {
    foreach ($sub as $elem) {
        echo $elem;
    }
}

echo "<br>" . "<h2>Перебор трехмерного массива в PHP</h2>";
$arr29 = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];

$sum = 0;

foreach ($arr29 as $subArray1) {
    foreach ($subArray1 as $subArray2) {
        foreach ($subArray2 as $value) {
            $sum += $value;
        }
    }
}
echo $sum;

echo "<br>" . "<h2>Работа с ключами в многомерных массивах в PHP</h2>";
$arr30 = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
foreach ($arr30 as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
    }
}




















?>