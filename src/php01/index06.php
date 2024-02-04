<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です" . "<br />";
  return;
}

outputNumber(8);

function outputHello()
{
  echo "Hello world" . "<br />";
}

outputHello(); // ①

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total . "<br />";

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total2 = addNumber(2, 3);
print $total2 . "<br />";

/*Q. 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。*/


function exam($score1, $score2, $score3)
{
  $total3 = $score1 + $score2 + $score3;
  if ($total3 > 210) {
    echo $total3 . "点なので合格です" . "<br />";
  } else {
    echo $total3 . "点なので不合格です" . "<br />";
  }
}
echo (exam(10, 60, 90));

/*Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。*/

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
