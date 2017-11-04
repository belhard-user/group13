<?php
require_once "vendor/autoload.php";




$subject = ' Bbb';

preg_replace_callback_array(
    [
        '/[a]+/i' => function ($match) {
            echo strlen($match[0]), ' matches for "a" found<br>';
        },
        '~[b]+~i' => function ($match) {
            echo strlen($match[0]), ' matches for "b" found<br>';
        }
    ],
    $subject
);










/*$array = [1, 2, 2.2, 3, 4.6];

$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);
dump($fl_array);*/
// PREG_SPLIT_OFFSET_CAPTURE
// $str = 'кусок кусок2,кусок3, кусок4';
// dump(preg_split('/ ?, ?| /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE));








// @adasdads@g

/*$phone = 'my phone +375 25 5645901 понятно? +375 33 7777777 +375 33 7777334 +375 29 7678545';
$pattern = '@\+375 (29|25|33) (\d{7})@u';
preg_match_all($pattern, $phone, $m, PREG_OFFSET_CAPTURE);

dump($m);*/

/*$operators = [
    29 => 'MTS',
    33 => 'Velcome',
    25 => 'Life :)'
];

echo "Ваш оператор " . $operators[$m[1]];*/










/*$str = 'visit my web site http://site.com https://onliner.by https://tut.by';
$rep = "<a href=\"$1\">$2</a>";
$pattern = '@(https?://([^.]+)\.[a-z]{2,10})@';

$r = preg_match($pattern, $str, $m);
dump($m);*/









// this is a php
// /php/

/*$dates = [
    '12-04-17',
    '1207-2017',
    '12-07-2017',
    '12-7-2017',
    'asdasdasd2-7-2017asdasdasd',
    '2-7-201',
];

$dates = array_filter($dates, function($item){
    return preg_match('@^\d\d?-\d{1,2}-\d{4}$@', $item, $m);
});

dump($dates);*/