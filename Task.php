<?php

//1) В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?
$users = 28;

$sportusers = 28*75/100 . "<br>";

echo $sportusers;

 function sportusers($users)
{
    return $sportusers = $users*75/100;
}

echo sportusers(28) ."<br>";



// 2)	Реализовать алгоритм извлечения числовых значений со строки:
$msg = 'This server has 386 GB RAM and 5000 GB storage';
preg_match_all('/\d+!', $msg, $match);
print_r($match);



//3) Как получить первый элемент массива [2,3,56,65,56,44,34,45,3,5,35,345,3,5] ?
$s = array(2,3,56,65,56,44,34,45,3,5,35,345,3,5);

//echo $s[0] ."<br>";
reset($s);


// 4)	Как вычислить остаток от деления 10/3
$a=10;
$b=3;
$c = $a%$b;
echo $c;
echo bcmod('10','3');


// 5)	Нужно поменять 2 переменные местами без использования третьей:
$а = [1,2,3,4,5];
$b = 'Hello world';

$a = [4,9,2,7,3]; 
$b = 'Hello world';
list($a, $b)    =   [$b, $a];
echo $a ."<br>";
print_r($b);


// 6)	Чем отличается оператор == от === ?

// ==  равно - после преобразования типов данных 
// === идентично - и тот же тип данных

// 7)	Чем отличается require от include ?

// Require -  в случае ошибки выдает Fatal error и прекращает работу програмы.

//  Include -  в случае ошибки выдает Warning но программа продолжает работать

// 8)	Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными: cookie, данные сессии, IP-адрес пользователя , User-Agent? Почему?


// Session IP

// Сейчас подменить можно фактически все, в сесcию данные попадають через код програмиста, пользователь повлиять на них не может, но по факту если захотеть доступ к сесииям можно получить.


// 9)	Что выведет следующий код на JavaScript и почему:
for( var i =0; i < 10; i++){ setTimeout(function () {
console.log(i);
}, 100);
}

// 10101010101010101010
