<?php

echo "<h2>Основы синтаксиксевена</h2>";

// Однострочный комментарий

/* Многострочный
     комментарий*/

// Опертаор вывода
echo "Вывод текста";
echo "<p>Вывод текста и HTML</p>";

// Инициализация переменной
$null = null;
$variable = "Значение переменной";
$number = 67;
$decimal = 6.7;

echo "Вывод переменной variable: ";
echo $variable;

echo "<p>Текст $number</p>";
// Оператор конкатенации - операция склеивания двух или более линейных объектов (чаще всего текстовых строк)
echo '<p>Тебя накрывали  ' . $number . ' раз </p>';
echo "<p>Тебя посылали  " . $number . " тысяч раз в жопу </p>";

echo"<p>Текст $number флепок</p>";
echo"<p>Текст {$number}флепок</p>";
echo ($number - 2 + 2) * 10;
echo ($number==67) ? "<p>Это кайфик " : "Это минус вайбик</p>";
echo true;
echo false;
echo " ОГБПОУ \"ТЭПК\"";
// % - целочисленный остаток от деления, ** - возведение в степень
echo ((2+3) - (5*2) / 5**2)%2;
$increment = 10;
echo $increment++; //10
echo ++$increment; //12
$bool = 10 <= 11;
echo $bool . "<br>";
$a = "10";
$b = 10;
echo "<br>" . ($a == $b) . "- истинно";
echo "<br> " . ($a === $b) . "- ложно";

// Конструкция if..else
if ($a >= $b) {
    echo "<p> $a >= $b </p>";
}else {
    echo "<p>$a < $b</p>";
}

// Тернарная операция
$a1 = 10;
$b1 = 20;
echo ($a > $b) ? "Истина" : "Ложь";

// Оператор switch (сравнивает только значение)
switch($a1){
    case 1: echo " 1"; break;
    case "10": echo " Строка 10";break;
    //case 10: echo " Число 10";break;
    default: echo "Not found";break;
}

// Оператор match (Сравнивает не только значение, но и тип данных)
match($a1){
    1 => "1",
    "10" => "Строка 10",
    10 => " Число 10",
    default => "Not found",
};

// Цикл for
for($i=1;$i<=10;$i++){
    echo "<br>". $i;
}

// Цикл do...while (цикл с постусливем)
$counter = 1;
do{
    echo "<p>$counter штук</p>";
    $counter++;
}while($counter < 10);

// Цикл while (Цикл с предусловием)
$counter = 1;
while($counter < 10){
    echo "<br>". $counter;
    $counter++;
}

// Операторы continue и break
for ($i = 1; $i <= 10; $i++) {
    if($i % 3 == 0) continue; // перейти к следующей итерации (шагу)
    echo "<p>Число -  $i</p>"; // выход из конструкции (в данном случае - заврешение цикла)
    echo "<p>Число -  $i</p>";
}

// Вложенные циклы
echo "<table border='1'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for($j=1; $j<=9; $j++){
        echo"<td>" .  $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Массивы
$mas1 = array(1,2,3,4,5,6,7,8,9);
echo $mas1[5];

$mas2 = [1,2,3,4,5,6,7,8,9];
echo "<br>" .  $mas2[5];

// Пустой массив
$mas3 = [];

// Перебор элементов массива
$sum = 0;
for($i=0;$i<=8;$i++){
    echo $mas2[$i] . " ";
    $sum += $mas2[$i];
}
echo "<p>Сумм элементов массива: $sum</p>";

$mas4 = [0 => 10, 1 => 20,4 =>30,8=>40];

// Цикл foreach
foreach($mas4 as $el){
    echo $el . " ";
}

echo "<br>";

foreach($mas4 as $key => $el){
    echo " Индекс {$key} - {$el} <br>";
}

// Оператор выводов сложных типов print_r
print_r ($mas4);

// Ассоциативный массив
$colors = ["red" => "Красный", "green" => "Зеленый", "blue" => "Синий"];
print_r($colors);
echo ($colors["red"]);
echo ($colors["green"]);
echo ($colors["blue"]);

echo "<br>";
foreach($colors as $index => $color){
    echo $color . "<br>";
}

$data = [1=>"Стас", "four" => "Егор", 20 => "Кирюха", 1.3 => "Иван"];
print_r($data[1.3]);

// Многомерный массив
$users = [
    ["id"=>1,"Stas","Student"],
    ["id"=>70,"Egor","Driver"],
   "two" => ["id"=>178,"Dan","Programmer"]
];
echo "<h2>Двухмерный массив</h2>";
$users[2][1] = "Кирилл";
print_r($users);

// Вывод многомерного массива
echo "<table border='1'>";
foreach ( $users as $user) {
    echo "<tr>";
   foreach($user as $key => $value){
       echo "<td>" . $value . "</td>";
   }
   echo "</tr>";
}
echo "</table>";

echo $users["two"]["id"];








