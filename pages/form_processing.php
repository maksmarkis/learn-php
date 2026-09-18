<?php

// Получение данных из адресной строки (суперглобальный массив $_GET)
$data1= (isset($_GET['p'])) ? $_GET['p'] : "Данные отстутствуют";
$data2= (isset($_GET['do'])) ? $_GET['do'] : "Данные отстутствуют";

print_r($data1); echo "<br><br>";
print_r($data2); echo "<br><br>";


// strip_tags() - удаляет html теги
// htmlspecialchars() - заменяет спец.символы на их htm;-код
// htmlentities() - экранизация данных

$login= (isset($_POST['login'])) ? strip_tags($_POST['login']): "Логин отстутствуют";
$password= (isset($_POST['pass'])) ? (htmlspecialchars(htmlentities($_POST['pass']))) : "Пароль отстутствуют";




if ( (isset($_POST['login'])) && (isset($P_POST['pass'])) ){
 echo "Ваш логин{$login},ваш пароль:{$password}";
}else {
    echo '<form action="index.php?p=form_processing" method="POST">
    <div>
        <label for="login">Логин</label>
        <input id="login" name="login" type = "text" placeholder="Введите ваш логин">
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" name="pass" type = "password" placeholder="Введите ваш пароль">
    </div>
    <div>
        <input type="hidden" name="p" value="form_processing">
        <button type="reset">Сброс данных</button>
        <button type="submit">Отправить данные</button>
    </div>
</form>
';
}

$users = isset($P_POST["users"]) ? $P_POST["users"] : [];
echo "В массиве USERS" . count($users) . " элементов <br>";
foreach ($users as $user) {
    echo $user . "<br>";
}
echo '

<form action="index.php?p=form_processing" method="POST">
<form action="index.php?p=form_processing" method="POST">
<input type="text" name="users[]">
<input type="text" name="users[]">
<input type="text" name="users[]">
<button type="submit">Отправить</button>

</form>

';


$sex = isset($_POST['sex']) ? $_POST['sex'] : "ХЗ";
echo "Ваш пол:" . (((int)$sex===1)? "Мужской" : "Женский");

echo "<br>";
$sixseven = isset($_POST['sixseven']) ? $_POST['sixseven'] : [];
foreach ($sixseven as $vkus) {
    echo $vkus . "<br>";

}


$spisok = isset($_POST['spisok']) ? $_POST['spisok'] : null;
echo "Вы выбраил:" .$spisok . "<br>";

$spisok2 = isset($_POST['spisok2']) ? $_POST['spisok2'] : [];
foreach ($spisok2 as $sp) {
    echo $sp . "<br>";
}

echo '
       <form action="index.php?p=form_processing" method="POST">
             <input type="radio" name="sex" value="1">Мужской 
             <input type="radio" name="sex" value="0">Женский
             
             <input type="checkbox" name="sixseven[]" value="Мороженое">Мороженое
             <input type="checkbox" name="sixseven[]" value="Пивчански">Пивчански
             <input type="checkbox" name="sixseven[]" value="Конфета">Конфета
             <input type="checkbox" name="sixseven[]" value="Газировка">Газировка
             
             <select name="spisok" >
             <option value="ТЭПК">ОГБПОУ ТЭПК</option>
             <option value="ТТИТ">ОГБПОУ ТТИТ</option>
             <option value="ТомИнТех">ОГБПОУ ТомИнТех</option>
             </select>         
             
                  <select name="spisok2[]" multiple="multiple"> >
             <option value="ТЭПК">ОГБПОУ ТЭПК</option>
             <option value="ТТИТ">ОГБПОУ ТТИТ</option>
             <option value="ТомИнТех">ОГБПОУ ТомИнТех</option>
             </select>         
             
             
             <button type="submit">Отправить</button>
       </form>

';



?>