<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br />";
echo $people[2];
echo "<br />";

$people2 = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
  );
  
  var_dump($people2);
echo "<br />";

$people3 = [
    'person4' => 'taro',
    'person5' => 'jiro',
    'person6' => 'Saburo'
  ];

  echo $people3['person5'];
echo "<br />";


$people4 = [
    [
      "last_name" => "山田",
      "first_name" => "太郎",
      "age" => 29,
      "gender" => "男性"
    ],
    [
      "last_name" => "鈴木",
      "first_name" => "次郎",
      "age" => 25,
      "gender" => "男性"
    ],
    [
      "last_name" => "佐藤",
      "first_name" => "花子",
      "age" => 20,
      "gender" => "女性"
    ]
  ];

  echo $people4[2]["last_name"];
echo "<br />";

$people5 = array('Taro', 'Jiro', 'Saburo');

foreach ($people5 as $person) {
  echo $person;
  echo '<br />';
}

$people6 = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
  );
  
  foreach ($people6 as $person2 => $name) {
    print $person2 . "は" . $name . "です" . '<br />';
  }

  /*Q. foreach文をつかって多次元配列の値をすべて出力してみましょう。*/

  $people7 = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
  ];
  
  foreach ($people7 as $person3) {
    echo $person3[0] . '(' . $person3[1] . '歳' . $person3[2] . ')';
    echo '<br />';
  }