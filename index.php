<?php

$test = "これはサンプルです。";
$testNum = 123;
$integer = 20;
$new_integer = $integer + 10;
$array = [2017, 2018, 2019, 2020];
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
];

echo $test;
echo $testNum;
echo $integer;
echo $new_integer."<br />";
echo $array[0];
echo "<br />";
echo $animals["cat"];
echo "<br />";

$result = true;
if ($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
}
echo "<br />";

$value = "AAA";
echo $value."BBB"."<br>";

$value = 10;
$result = $value == 20;
var_dump($result);
echo "<br />";

$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);
echo "<br />";

// === は左項と右項が同じ型で同じ値を持つか判定する
$result = $a === $b;
var_dump($result);
echo "<br />";

$value = 10;
// $value に1を足した結果が$valueに代入される
++$value;
echo $value."<br />";

$value = 10;
// $value から1引いた結果が$valueに代入される
--$value;
echo $value."<br />";

$value = 10;
// $value に　５足した結果が$valueに代入される
$value += 5;
echo $value."<br />";

$value = 'apple';
// .= は変数に文字列を連結する
$value .= ' orange';
echo $value."<br />";

// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;
//ここでは、文字列を囲む記法で ” (ダブルクオート) ではなく ‘ (シングルクオート) を使いました。
//これは、” で囲った文字列内では変数がその内容に展開されるためです。
//=> 10 は 20 より小さい と表示される