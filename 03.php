<?php
//if文 設定した条件によってある処理を行うかどうかを判定
//身長が 150cm よりも小さい場合は拒否する
$height = 160;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
}
//=> 何も表示されない
//else 文 if文のところで書いた(条件)を満たさなかった場合にelseのあとの{ } に書かれているコードが実行
$height = 160;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。"; 
}
//=> "ご乗車になれます。" が表示される。
//else if 文 else 文は特に条件を指定しませんでしたが、 else if 文は条件を指定することができます。
$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
//=> "200cm 以上の方はご乗車できません。" が表示される。
//switch 文
$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
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
//=> 可燃ごみの日です。 が表示される
//=> breakを入れないと→可燃ごみの日です。 資源ごみの日です。回収はありません。と表示されてしまう。
//break 文を使わないことで得られるメリット
$weekday = "木曜";
// $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
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
//=> 可燃ごみの日です。 
$a = 3;
$b = 3;
$c = "3";
// $a と $b が等しいときに true　そうでなければ false を返す。
var_dump($a == $b);
//=> bool(true) が表示される。
// $a と $b が等しくないときに true
var_dump($a != $b);
//=> bool(false)　が表示される。
// $a が $b　より大きいときに　true、そうでなければ false を返す。
var_dump($a > $b);
//=> bool(false)が表示される
// $a が $b 以上のときtrue、そうでなければ false を返す。
var_dump($a < $b);
//=> bool(false)が表示される
//$a が $b より小さいか、または等しいときに true、そうでなければ false を返す。
var_dump($a <= $b);
//=> bool(true) が表示される。
//$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
var_dump($a === $c);
//=> bool(false)が表示される。
//$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
var_dump($a !== $c);
//=> bool(true)が表示される。
//for文 決まった処理を繰り返し実行
for($i = 0; $i < 10; $i++) { //「$iは0から始まり、$iが10未満になるまで$iに1足し続ける」と解釈
    echo $i;
}
//=> 0123456789 が表示される。
$total = 0;
echo $total;
//=> 0 と表示される。
// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
//=> 5050 と表示される。
$furuits = array("apple","orange","lemon");
echo count($furuits);
//=> 3 と表示される。
//配列の要素の数は count() という関数で知る
for ($i = 0; $i < count($furuits); $i++) {
    echo "要素は" . $furuits[$i];
    echo "\n";
}
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> と表示される
//foreach 文 配列の要素を順番に処理するための構文
$animals = array("dog", "cat", "panda");
// $animals から一つずつ要素を取り出して、$animal に代入される
foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}
//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される