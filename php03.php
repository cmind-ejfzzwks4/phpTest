<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($n) {
    return $n * 2;
}
echo double(6)."<br />";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a, $b) {
    return $a + $b;
}
echo sum(3, 4)."<br />";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function multi($arr){
//配列の最初の要素を初期値とする
$result = $arr[0];
//foreach($arr as $a) {
        //$result *= $a;
    for ($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    return $result;
}
echo multi(array(1, 3, 5, 7, 9))."<br />";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[0];
     foreach($arr as $a){
         //$max_numberと比較して、それより大きければ上書き
         if($max_number < $a) {
             $max_number = $a;
         }
     }
     return $max_number;
}
echo max_array(array(3, 5, 2, 7, 15, 11))."<br />";

// 5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。
    
//strip_tags（HTMLタグを取り除く）
$str = "<h1>PHP関数</h1>"."<p>の課題です</p>";
echo strip_tags($str)."<br />";

//array_push（配列に要素を追加）
$fruits = array("りんご", "みかん", "ぶどう");
array_push($fruits, "ばなな", "れもん");
foreach($fruits as $fruit) {
    echo $fruit."<br />";
}

//array_merge（配列を結合）
$num_1 = array(2, 4, 6, 8, 10);
$num_2 = array(24, 36, 48, 60);
$num_3 = array(101, 102, 103, 104, 105);
$numbers = array_merge($num_1, $num_2, $num_3);
var_dump($numbers);
echo "<br />";

//time（UNIXタイムスタンプの取得）
//1970年1月1日00時00分00秒UTC（協定世界時と一致する標準時）からの経過秒数
echo "現在のUNIXタイムスタンプは、".time()."<br />";

//mktime（指定日時のタイムスタンプを取得）
//mktime(時,分,秒,月,日,年)
$timestamp = mktime(11, 11, 11, 12, 24, 2001);
echo "2001年12月24日12時21分11秒のUNIXタイムスタンプは、".$timestamp."で、<br />";
echo "曜日は、".date("l",$timestamp)."です。<br />";

//date（タイムスタンプから日付に戻す）
echo date("Y-m-d H:i:s", 1223334444)."<br />";
echo date("Y年m月d日 H時i分s秒",time());