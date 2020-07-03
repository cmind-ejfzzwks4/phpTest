<?php

// 1〜$max までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
   $result = 0;
   
   // $i は 1　からはじまり $max より大きくなるまでループする
   for($i = 1; $i <= $max; $i++){
   
   // $result に　$i を順番に足していく
   $result += $i;
   }
   
   // $result を結果として返す
   return $result;
}
//関数を1つ定義することで、引数を変えるだけで様々な値の結果を得ることができます
echo sum(100);
echo "<br />";

// 1から100までを順番に表示する関数（戻り値なし）
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
echo print_number();
echo "<br />";

// strlen : 文字の長さを取得する
$string = "ABCDEF";
echo strlen($string);
echo "<br />";

// str_replace : 文字列を置換する
$string = "I love Ruby!";
// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
echo "<br />";

// count : 配列の要素の個数を取得する
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
echo "<br />";

// asort, arsort : 配列をソート（並び替え）する
$array = array(2,5,9,7,3,1,8,6,4);
// 配列を昇順（小さい順）にソートする
asort($array);
// print_rで表示する
print_r($array);
//=> Array
//=> (
//=>     [5] => 1
//=>     [0] => 2
//=>     [4] => 3
//=>     [8] => 4
//=>     [1] => 5
//=>     [7] => 6
//=>     [3] => 7
//=>     [6] => 8
//=>     [2] => 9
//=> )
//=> と表示される。
echo "<br />";

// $array を降順(大きい順)にソートする
arsort($array);
print_r($array);