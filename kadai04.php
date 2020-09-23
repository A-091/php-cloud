<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function times2($num){
    return $num * 2;
}
echo times2(5)
?>
<?php
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a, $b){
    return $a + $b;
}
echo sum(2, 5);
?>
<?php
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++){
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}
function product2($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo product2(array(1, 3, 5, 7, 9));
?>
<?php
//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array(array(6, 2, 3, 10, 5));
 ?>
 <?php
 //5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
 //strip_tags　文字列からPHPタグを取り除く
 $string = '<a href="https://aaa.bbb.com">aaa</a>';
 $result = strip_tags($string);
 echo $result;
 //array_push　配列の最後に1つ以上の要素を追加
 $animal = ['cat', 'dog'];
 array_push($animal, 'bird');
 print_r($animal);
 //array_merge　配列と配列をまとめて一つの配列にする
 $array1 = [1, 2, 3];
 $array2 = [4, 5, 6];
 $array3 = [7, 8, 9];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 //time, mktime　指定した日時のタイムスタンプを取得する
 echo time();
 echo mktime(10, 52, 3, 9, 23, 2020);
 //date　ローカルの日付/時刻を書式化
 echo date('Y/ m/ d H : i : s',mktime(10, 52, 3, 23, 2020));
?>