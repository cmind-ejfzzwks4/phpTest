<?php

// 1. 引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください
function tax_inc_price($price) {
    return ceil($price * 1.1);
}
echo tax_inc_price(198) . "\n";

// 2. $name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください
function age_lim_20($age, $name) {
    if ($age >= 20) {
        return $name;
    } else {
        return "未成年";
    }
}
echo age_lim_20(37, "hogeyama") . "\n";

// 3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5, 7, 9) を渡すとその要素の中央値を返す関数を作成してください。
function median($arr) {
    sort($arr);
    // 配列が偶数個のとき
    if(count($arr) % 2 == 0) {
        return ($arr[(count($arr) / 2) - 1] + $arr[count($arr) / 2]) / 2;
    // 配列が奇数個のとき
    } else {
        return ($arr[floor(count($arr) / 2)]);
    }
}
echo median(array(1, 3, 5, 7, 9)) . "\n";

// 4. $price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください
function dis_price($price, $amount) {
    $total = $price * $amount;
    if($total >= 10000) {
        return ceil($total * 0.8);
    } else {
        return ceil($total);
    }
}
echo dis_price(5998, 6) . "\n";

// 5. 【応用】次のプログラムは、配列の中で1番小さい値を返す min_array という関数を実装しようとしています。途中の部分を完成させてください。

function min_array($arr) {
    // とりあえず配列の最初の要素を1番小さい値とする
    $min_number = $arr[0];
    foreach($arr as $a) {
        //$min_numberと比較して、それより小さければ上書き
        if($min_number > $a) {
            $min_number = $a;
        }
    }
    return $min_number;
}
$array = [16, 23, 8, 59, 3];
echo min_array($array) . "\n";