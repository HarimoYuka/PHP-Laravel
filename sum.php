<?php
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($number) {
    echo $number * 2;
    }
echo double(4);
echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function f($a, $b){
    return $a + $b;
}
echo f(2,4);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
function x($arr){
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo x(array(1, 3, 5, 7, 9));
echo "\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数
//を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number) {
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array(array(2, 4, 6, 8));
echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$str = '<p>HTMLタグ</p><a>取れたよ！</a><ここも取れるらしい！><h1>取らないこともできるらしい！</h1>';
echo strip_tags($str,'<h1>');
echo "\n";

//array_push
$animal = array("mouse", "cow", "tiger");
array_push($animal, "rabbit", "dragon");
echo($animal[4]);
echo "\n";

//array_merge
$animal = array("snake", "horse");
$animal = array_merge($animal,array("sheep", "monkey"));
echo ($animal[2]);
echo "\n";

//time,mktime
echo '2020.3.8.13:56のタイムスタンプ' .time();
echo"\n";
date_default_timezone_set('Asia/Tokyo');
$timestamp = '2020.3.8.14:31のタイムスタンプ' .mktime(14, 31, 0, 3, 8, 2020);
echo $timestamp;
echo "\n";

//date
$date = date('w');
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
];
echo 'きょうは' .date('Y年m月d日') , $week[$date] .'曜日です。';
echo "\n";