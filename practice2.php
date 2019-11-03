<?php
//課題1
$name = "Miho";
if($name == "Miho"){
echo "私は".$name."です";}
else{
    echo $name."ではありません";
}

//課題2
$total = 0;
for($i = 1; $i <=10000; $i++){
    $total += $i;
}
echo $total;

//課題3
$fruits = array('apple', 'banana', 'orange', 'strawberry', 'kiwi');
foreach($fruits as $fruit){
    echo $fruit;
}

//課題4
for($i = 1; $i <= 100; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
      echo $i;
  }
}