<?php
for ($a = 0; $a < 4; $a++) {
  echo $a;
}

for ($b = 1; $b <= 5; $b++) {
    echo $b * 2 . '<br />';
  }

$c = 0;

while ($c < 3) {
  echo 'c = ' . $c . '<br />';
  $c += 1;
}

$count = 0;

while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}

$d = 0;
while ($d < 10) {
  if ($d == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $d . "<br />";
  $d++;
}

$e = 0;
while ($e < 10) {
  if ($e == 5) {
    $e++;
    continue;
    // $eが5の時、$eに1を足す処理をし、スキップをする。
  }
  echo $e;
  $e++;
}

$f = 0;
do {
  echo $f . '<br />';
  $f++;
} while ($f < 5);


for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 10; $j++) {
    echo "※";
  }
  echo "<br />";
}