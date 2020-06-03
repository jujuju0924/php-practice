<?php

$array_1 = ['あああ',2,3];

$array_2 = [
  ['赤','青','黄'],
  ['緑','紫','黒']
];

//0から始まる
// echo $array[0];

echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_3 = [
  '1kumi'=> [
    '本田'=> [
      'height' => 170,
      'hobby' => 'サッカー'
  ],
  '香川'=> [
    'height' => 165,
    'hobby' => 'サッカー'
   ]
  ],
  '2kumi' => [
    '長友' => [
    'height' => 160,
    'hobby' => 'サッカー'
    ],
    '乾'=> [
      'height' => 168,
      'hobby' => 'サッカー'
    ]
  ]
];

echo $array_member_3['2kumi']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';
?>