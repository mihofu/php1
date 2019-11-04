<?php
//課題1
function twice($a){
    return $a*2;}
//課題2
function sum($a, $b){
    return $a + $b;}
//課題3
function result($arr){
    $total = 1;
    foreach($arr as $ar){
        $total *= $ar;}
    return $total;}
$array = array(1, 3, 5, 7, 9);
echo result($array);

//課題4
 function max_array($arr){
     $max_number = $arr[0];
 foreach($arr as $a){ 
     if($max_number < $a){
         $max_number = $a;}} 
         return $max_number;}
 echo max_array($array);
 
 //課題5
 //strip_tags 文字列からHTMLおよびPHPタグを取り除く
 $text = '<p>削除します</p>';
 echo strip_tags($text);
 echo $text;
 
 //array_push 配列へ要素を追加する
 $memo1 = array('卵', '納豆', '豆腐');
 array_push($memo1, 'キムチ', '塩');
 
 //array_merge 配列と配列を結合する
 $memo2 = array('鶏肉', 'キャベツ');
 $memo = array_merge($memo1, $memo2);
 
 //time 現在のUNIXタイムスタンプを取得
 //mktime　指定した日時のUNIXタイムスタンプを取得
 //date ローカルの日付/時刻を取得
 echo time();
 echo date("l");
 echo date('Y-F-j l');
 $lastmonth = mktime(0, 0, 0, date('m')-1, date('d'), date('Y'));
 echo $lastmonth;
 echo date("l", mktime(0,0,0,10,13,1996));
 