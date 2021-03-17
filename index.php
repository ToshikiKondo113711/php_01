<?php


function h ($val){
    return htmlspecialchars($val,ENT_QUOTES);
}

session_start();
$age = $_POST['age'];
$name = $_POST['name'];

echo 'おみくじ結果'.'<br>';
echo H($name).'さん'.'<br>';
echo  h($age).'歳'.'<br>';


$code = mt_rand(1,5);

if(1 === $code){
    
    echo '<img src =img/daikichi.jpg>'.'<br>';
    echo '大吉'.'<br>';
    echo 'ランダムな数字：'.$code;
}

if(2 === $code){
    
    echo '<img src =img/chuukichi.jpg>'.'<br>';
    echo '中吉'.'<br>';
    echo 'ランダムな数字：'.$code;
}
if(3 === $code){
    
    echo '<img src =img/shoukichi.jpg>'.'<br>';
    echo '小吉'.'<br>';
    echo 'ランダムな数字：'.$code;
}
if(4 === $code){
    
    echo '<img src =img/suekichi.jpg>'.'<br>';
    echo '末吉'.'<br>';
    echo 'ランダムな数字：'.$code;
}
if(5 === $code){
    
    echo '<img src =img/daikyou.jpg>'.'<br>';
    echo `大凶`.'<br>';
    echo 'ランダムな数字：'.$code;
}

echo '<br>';




?>





