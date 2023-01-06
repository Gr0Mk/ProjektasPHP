<?php

$br = '<br>';
$repeatBR = str_repeat($br, 2);
echo 'PHP MOKSLAS PRAKTIKA' . $repeatBR;

/*$age = 30;
$name = 'Martynas';
$hasKids = false;
$cashOnHand = 0.15;

$numeriai = [1,5,6,8,7,9,10,54,6];

$spalvos = [[
    'blue' => 'melyna',
    'red' => 'raudona',
    'green' => 'zalia'
],
[
    'yellow' => 'geltona',
    'black' => 'juoda',
    'purple' => 'violetine'
]
];*/

/*echo $spalvos[1]['black'] . $repeatBR;*/

/*loops*/

/*for ($x = 0; $x <= 50; $x++) {
    echo $x . '<br>';
}*/
/*
$kazkas = 1;
while ($kazkas <= 15) {
    echo 'Numeris yra:' . $kazkas;
    $kazkas++;
}*/

/*$kt = 0;
while ($kt < 10) {
    $kt++;
    echo $kt . '<br>';
}*/

/*$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++ ) {
    echo $posts[$x];
}
 foreach ($posts as $index => $post) {
     echo $index . ' - ' . $post . '<br>';
 }*/

/*$spalvos1 = [
    'blue' => 'melyna',
    'red' => 'raudona',
    'green' => 'zalia'
];

foreach ($spalvos1 as $key => $value) {
    echo "$key - $value<br>";
}

FUNKCIJOS*/

 $x = 10;
function registerUser($email){
    echo $email . 'registered';
}

/*registerUser('Martynas');*/

function sum($n1, $n2){
    return $n1 + $n2;
}
$number = sum(5, 6);
echo $number;

$substract = function($n1, $n2) {
    return $n1 / $n2;
};




