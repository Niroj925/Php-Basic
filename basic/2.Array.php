<?php

$numbers=[1,3,5,7,6];
$fruits =array('apple','kiwi','mango');

var_dump(count($numbers));
var_dump($fruits);

echo $fruits[1];

$colors=[
    1=>'purple',
     2=> 'red',
     7=> 'blue',
     3=> 'green',
     9=>'black'
];

echo $colors[3];

$hex=[
    'red'=>'#f00',
    'blue'=>'#0f0',
    'green'=>'#00f'
];
echo $hex['green'];

//multi dimensional array
$people=[
    [
        'f_name'=>'Niro',
        'l_name'=>'Thapa',
        'email'=>'nn@gmail.com'
    ],
    [
        'f_name'=>'Niro',
        'l_name'=>'Thapa',
        'email'=>'nn@gmail.com'
    ],
    [
        'f_name'=>'Niro',
        'l_name'=>'Thapa',
        'email'=>'nn@gmail.com'
    ]
    ];

    echo $people[1]['email'];

    var_dump(json_encode($people));
