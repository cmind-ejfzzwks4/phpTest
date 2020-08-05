<?php
//1. $number に数字を代入し、 if文で $number が偶数だったら 「偶数です」、もし違ったら「奇数です」と表示するように実装してください。
$number = 34;
if($number % 2 == 0) {
    echo "偶数です";
} else {
    echo "奇数です";
}
echo "<br />";

//2. 【応用】$animals に配列で大きい順で好きな動物を5種類代入し、for文で逆番に出力してください。
$animals = ["wolf", "sheep", "pig", "dog", "cat"];
for($i = count($animals)-1; $i >= 0 ; $i--) {
    echo $animals[$i]."<br />";
}

//3. 【応用】 for文を使って、下記のような九九表を表させてください
    // 1 * 1 は 1です
    // 1 * 2 は 2です
    // ~省略~
    // 9 * 8 は 72です
    // 9 * 9 は 81です
for($i = 1; $i <= 9; $i++) {
    for($x = 1; $x <= 9; $x++) {
        $ans = $i * $x;
        echo "$i * $x は ".$ans." です"."<br />";
    }
}
?>