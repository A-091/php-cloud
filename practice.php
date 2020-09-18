<?php
echo 'hello php!';
// 変数　$integer に 20 を代入
$interger = 20;
// 変数 $string　に "abc" を代入
$string = "abc";
// 変数 $integer を出力
echo $interger;
// => 20 と表示される
// 変数 $string を出力
echo $string;
// => abc と表示される。
// 変数 $integer と 10 を足した結果を 変数 $new_integer に代入する。
$new_integer = $interger + 10;
// 変数 $new_integer を出力する
echo $new_integer;
// => 30 と表示される
// 変数 $array に 配列 [2017, 2018, 2019, 2020] を代入する
$array = [2017,2018,2019,2020];
// $array から 2017 を取り出して表示する
echo $array[0];
// => 2017 と表示される
// $array から 2019 を取り出して表示する
echo $array[2];
// $array2 に spring, summer, autumn, winterを代入する。
$array2 = ["spring","summer","autumn","winter"];
// $array2 から autumn を取り出して表示する。
echo $array2[2];
//=> autumn と表示される。
// $animals という連想配列を定義する
$animals =["cat"=>"猫","dog"=>"犬","bird"=>"鳥"];
// $animals から "猫" を取り出して表示する。
echo $animals["cat"];
// => 猫 と表示される
// $animals から　"鳥" を取り出して表示する。
echo $animals["bird"];
// => 鳥 と表示される
// $result に true を代入する。
$result = true;
// もし $result が true であれば、 成功しました。 が表示される
// そうでなければ、　失敗しました が表示される
if ($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
}
// => 成功しました。 が表示される
//演算子
$value = 6;
echo $value + 2; //加算
$value = 6;
echo $value - 2; //減算
$value = 6;
echo $value * 2; //積算
$value = 6;
echo $value / 2; //除算
// . は文字列を連結する演算子
$value = "AAA";
echo $value . "BBB";
//=> "AAABBB" が表示される
// == は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result);
//=> bool(false) が表示される
// < は左項が右項より小さいか判定する
$value =10;
$result = $value < 20;
var_dump($result);
//=> bool(true) が表示される
// > は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
//=> bool(false) が表示される
// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;
$result = $a == $b;
var_dump($result);
//=> true が表示される
$result = $a === $b;
var_dump($result);
// false が表示される
// ++ は変数の値をひとつ増加させる
$value = 10;
// $value に1を足した結果が$valueに代入される
++$value;
echo $value;
//=>11 と表示される
// — は変数の値をひとつ減少させる
$value = 10;
// $value から1引いた結果が$valueに代入される
--$value;
echo $value;
//=> 9 と表示される
// += は変数の値を増加させる
$value = 10;
// $value に　５足した結果が$valueに代入される
$value += 5;
echo $value;
//=> 15 と表示される
// -= は変数の値を減少させる
$value = 10;
// $value に　５足した結果が$valueに代入される
$value -= 5;
echo $value;
//=> 5 と表示される
// .= は変数に文字列を連結する
$value = 'apple';
$value .= 'orange';
echo $value;
//=> apple orange と表示される
// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;
//=> $value は 20 より小さい と表示される
$value = 10;
$result = ($value < 20) ? "$value は 20 より小さい" : "$value は 20 と等しいかまたは大きい";
//117行目は'シングルクオート　121行目は"ダブルクオート　変数が展開される
echo $result;
//=> 10 は 20 より小さい と表示される