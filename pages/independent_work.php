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
foreach ($arr30 as $index => $user) {
    foreach ($user as $key => $value) {
        echo "{$key}: {$value}";
    }
    echo "<br>";
}

echo "<br>";
$arr31 = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],

];

foreach ($arr31 as $group => $users) {
    foreach ($users as $user) {
        echo "{$group} - {$user}<br>";
    }
}

echo "<br>" . "<h2>Заполнение многомерных массивов PHP</h2>";

$arr32 = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 1; $j <= 5; $j++) {
        $subArray[] = $j;
    }
    $arr32[] = $subArray;
}
echo '<pre>';
print_r($arr32);
echo '</pre>';

echo "<br>";

$arr33 = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 4; $j++) {
        $subArray[] = 'x';
    }
    $arr33[] = $subArray;
}

echo '<pre>';
print_r($arr33);
echo '</pre>';

echo "<br>";


$arr34 = [];

for ($i = 0; $i < 3; $i++) {
    $subArray1 = [];
    for ($j = 0; $j < 2; $j++) {
        $subArray2 = [];
        for ($k = 1; $k <= 5; $k++) {
            $subArray2[] = $k;
        }
        $subArray1[] = $subArray2;
    }
    $arr34[] = $subArray1;
}

echo '<pre>';
print_r($arr34);
echo '</pre>';

echo "<br>" . "<h2>Заполнение многомерных массивов числами по порядку в PHP</h2>";


$arr35 = [];
$counter = 1;

for ($i = 0; $i < 4; $i++) {
    $subArray = [];
    for ($j = 0; $j < 2; $j++) {
        $subArray[] = $counter;
        $counter++;
    }
    $arr35[] = $subArray;
}

echo '<pre>';
print_r($arr35);
echo '</pre>';

echo "<br>";
$arr36 = [];
$counter = 2;

for ($i = 0; $i < 4; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = $counter;
        $counter += 2;
    }
    $arr36[] = $subArray;
}

echo '<pre>';
print_r($arr36);
echo '</pre>';

echo "<br>";
$arr37 = [];
$counter = 1;

for ($i = 0; $i < 2; $i++) {
    $subArray1 = [];
    for ($j = 0; $j < 2; $j++) {
        $subArray2 = [];
        for ($k = 0; $k < 2; $k++) {
            $subArray2[] = $counter;
            $counter++;
        }
        $subArray1[] = $subArray2;
    }
    $arr37[] = $subArray1;
}

echo '<pre>';
print_r($arr37);
echo '</pre>';

echo "<br>" . "<h2>Массив ассоциативных массивов в PHP</h2>";

$products = [
    ['name' => 'prod1', 'price' => 100, 'amount' => 5],
    ['name' => 'prod2', 'price' => 200, 'amount' => 6],
    ['name' => 'prod3', 'price' => 300, 'amount' => 7],
];

foreach ($products as $product) {
    echo "{$product['name']} — {$product['price']} руб. ({$product['amount']} шт.)<br>";
}

echo "<br>" . "<h2>Массив ассоциативных массивов в PHP</h2>";

$data = [
    ['country' => 'country1', 'city' => 'city1'],
    ['country' => 'country2', 'city' => 'city2'],
    ['country' => 'country1', 'city' => 'city3'],
    ['country' => 'country1', 'city' => 'city4'],
    ['country' => 'country3', 'city' => 'city5'],
    ['country' => 'country2', 'city' => 'city6'],
    ['country' => 'country3', 'city' => 'city7'],
];

$result = [];

foreach ($data as $item) {
    $country = $item['country'];
    $city    = $item['city'];

    $result[$country][] = $city;
}

echo '<pre>';
print_r($result);
echo '</pre>';

echo "<br>" . "<h2>Степень и корень в PHP</h2>";

echo 2 ** 10;
echo "<br>";
echo sqrt(245);

echo "<br>";
$arr = [4, 2, 5, 19, 13, 0, 10];

$sum = 0;
foreach ($arr as $value) {
    $sum += $value ** 2;
}

$result = sqrt($sum);
echo $result;

echo "<br>" . "<h2>Функции округления в PHP</h2>";
$num = 379;

echo round(sqrt($num));
echo '<br>';
echo round(sqrt($num), 1);
echo '<br>';
echo round(sqrt($num), 2);

echo '<br>';
$num = 587;

$result = [
    'floor' => floor(sqrt($num)),
    'ceil'  => ceil(sqrt($num)),
];

var_dump($result);

echo "<br>" . "<h2>Экстремальные числа в PHP</h2>";

$arr38 = [4, -2, 5, 19, -130, 0, 10];
echo min($arr38);
echo "<br>";
echo max($arr38);
echo "<br>";
$a = 43;
$b = 67;
$sum = $a - $b;
echo abs($sum);

echo "<br>" . "<h2>Математические операции над массивами в PHP</h2>";
$arr40 = [1, 2, 3, 4, 5];
echo array_sum($arr40);
echo "<br>";
echo array_product($arr40);

echo "<br>";
$arefm = array_sum($arr40) / count($arr40);
echo $arefm;

echo "<br>" . "<h2>Длина строки в PHP</h2>";

$str = 'abcde';
echo strlen($str);
echo "<br>";
$str1 = "Привет";
echo mb_strlen($str1);
echo "<br>";
$password ='dsdsds2dqwdqwdqw';
$len = strlen($password);

if ($len > 5 && $len < 10) {
    echo 'Пароль подходит';
} else {
    echo 'Нужно придумать другой пароль';
}
echo "<br>" . "<h2>Регистр символов в PHP</h2>";

$str2 = 'php';
echo strtoupper($str2);
echo "<br>";

$str3 = 'PHP';
echo strtolower($str3);
echo "<br>";

$str4 = 'london';
echo ucfirst($str4);
echo "<br>";

$str5 = 'London';
echo lcfirst($str5);
echo "<br>";

$str6 = 'london is the capital of great britain';
echo ucwords($str6);
echo "<br>";

$str7 = strtolower('LONDON');
echo ucfirst($str7);
echo "<br>";

$str8 = 'привет';
echo mb_strtoupper($str8, 'UTF-8');

echo "<br>";
$str8 = 'ПРИВЕТ';
echo mb_strtolower($str8, 'UTF-8');

echo "<br>" . "<h2>Вырезание строк в в PHP</h2>";

$str9 = 'html css php';
echo substr($str9, 0, 4);
echo "<br>";
echo substr($str9, 5, 3);
echo "<br>";
echo substr($str9, 9, 3);

echo "<br>";
$str10 = 'abcdefgh';

echo substr($str10, -3);
echo "<br>";

$str11 = 'abcdefgh';
echo substr($str11, -3);
echo "<br>";
$str11 = 'http://example.com';

if (strpos($str11, 'http://') === 0) {
    echo 'Начинается на http://';
} else {
    echo 'Не начинается на http://';
}

echo "<br>";

$str12 = 'https://example.com';

if (strpos($str12, 'http://') === 0 || strpos($str12, 'https://') === 0) {
    echo 'Начинается на http:// или https://';
} else {
    echo 'Не начинается';
}
echo "<br>";

$str13 = 'image.png';

if (strpos($str13, '.png') === strlen($str13) - 4) {
    echo 'Заканчивается на .png';
} else {
    echo 'Не заканчивается на .png';
}
echo "<br>";


$str14 = 'photo.jpg';

if (substr($str14, -4) === '.png' || substr($str14, -4) === '.jpg') {
    echo 'Заканчивается на .png или .jpg';
} else {
    echo 'Не заканчивается';
}
echo "<br>";
$str15 = 'This is a long string';

if (mb_strlen($str15) > 5) {
    echo mb_substr($str15, 0, 5) . '...';
} else {
    echo $str15;
}
echo "<br>";

$str16 = 'многобайтовые строки требуют особого подхода';
$words = explode(' ', $str16);

echo end($words);

echo "<br>";
$str17 = 'пример работы с кириллическими символами';

// Разбиваем строку на слова
$words1 = explode(' ', $str17);

echo $words1[1];
echo "<br>";
echo $words1[3];

echo "<br>" . "<h2>Проверка строк в PHP</h2>";
$str18 = 'document.pdf';

if (str_ends_with($str18, '.pdf')) {
    echo 'Заканчивается на .pdf';
} else {
    echo 'Не заканчивается на .pdf';
}
echo "<br>";
$str19 = 'https://example.com';

if (substr($str19, 0, 8) === 'https://') {
    echo 'Начинается на https://';
} else {
    echo 'Не начинается на https://';

}
echo "<br>";
$str20 = 'The quick brown fox';

if (str_contains($str20, 'fox')) {
    echo 'Содержит подстроку fox';
} else {
    echo 'Не содержит подстроку fox';
}
echo "<br>";
$str21 = 'image.png';

if (str_ends_with($str21, '.png') || str_ends_with($str21, '.jpg')) {
    echo 'Заканчивается на .png или .jpg';
} else {
    echo 'Не заканчивается на .png или .jpg';
}
echo "<br>";
$str22 = 'admin@example.com';

if (str_contains($str22, '@') && str_ends_with($str22, '.com')) {
    echo 'Строка содержит @ и заканчивается на .com';
} else {
    echo 'Условие не выполнено';
}
echo "<br>" . "<h2>Поиск по строкам в PHP</h2>";

$str23 = 'abc abc abc';

echo strpos($str23, 'b');
echo "<br>";
$str24 = 'abc abc abc';

echo strrpos($str24, 'b');
echo "<br>";
$str25 = 'abc abc abc';

echo strpos($str25, 'b', 3);
echo "<br>";
$str26 = 'aaa aaa aaa aaa aaa';

echo strpos($str26, ' ', strpos($str26, ' ') + 1);
echo "<br>";
$str27 = 'example..com';

if (str_contains($str27, '..')) {
    echo 'Есть две точки подряд';
} else {
    echo 'Нет двух точек подряд';
}
echo "<br>";
$str28 = 'http://example.com';

if (str_starts_with($str28, 'http://')) {
    echo 'Начинается на http://';
} else {
    echo 'Не начинается на http://';
}










?>