<?php
//if文
$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
echo "<br />";

//swich文
$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
// break 文 を記述しないと、全ての条件が実行されてしまいますので注意しましょう。
switch ($weekday) {
    case "月曜":
        echo "可燃ごみの日です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";  
        break;
}
echo "<br />";

$weekday = "木曜";
// $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
//caseはいくつでも連続して書くことができます!!
switch ($weekday) {
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";
        break;
}
echo "<br />";

$a = 3;
$b = 3;
$c = "3";

// $a と $b が等しいときに true　そうでなければ false を返す。
var_dump($a == $b);
//=> bool(true) が表示される。
echo "<br />";

// $a と $b が等しくないときに true　そうでなければ false を返す。
var_dump($a != $b);
//=> bool(false)　が表示される。
echo "<br />";

//$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
var_dump($a === $c);
//=> bool(false)が表示される。
echo "<br />";

//$a が $c　の値が等しいときに true、そうでなければ false を返す。
var_dump($a == $c);
//=> bool(true)が表示される。
echo "<br />";

//$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
var_dump($a !== $c);
//=> bool(true)が表示される。
echo "<br />";

//var_dump($a !=== $c);はエラーになる

//for文
//  for ( カウンター変数の初期化; ループを続ける条件; 条件の変化指定 ) {
//    要素一つに対して実行したい処理
//  }
for($i = 0; $i < 10; $i++) {
    echo $i;
}
//=> 0123456789 が表示される。
echo "<br />";

$total = 0;
echo $total;
echo "<br />";

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
//=> 5050 と表示される。
echo "<br />";

# 配列の全ての要素を出力
$fruits = array("apple", "orange", "lemon");
 
//=> 3 と表示される。
echo count($fruits);
echo "<br />";

for($i = 0; $i < count($fruits); $i++) {
    echo "要素は".$fruits[$i];
    // echo "\n";
    echo "<br />";
}
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> と表示される

//foreach
//foreach (配列 as 一時変数) {
//    要素一つに対して実行したい処理
//  }
$animals = array("dog", "cat", "panda");

foreach($animals as $animal) {
    echo "要素は".$animal;
    // echo "\n";
    echo "<br />";
}
//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される