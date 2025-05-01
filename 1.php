<?php
$a = [1 => ["Eye", "Ankh", "J"], 2 => ["Eye", "Q", "Wick"], 3 => ["Lotus", "K", "A"], 4 => ["Wick", "Wick", "Lotus"], 5 => ["K", "A", "Wick"]];
//echo json_encode($a);

$a = [];
$a[] = ['type' => 'message', 'img' => '/messages/1.jpg', 'text' => "пример текста", 'title'=>'title'];
$a[] = ['type' => 'message', 'text' => "строка1\r\nстрока2", 'title'=>'title1'];
$a[] = ['type' => 'none', 'text' => "test"];

echo json_encode($a);

