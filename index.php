<?php

echo 'おみくじ'.'<br>';

$code = mt_rand(1,5);

// $daikichiPath = 'img/daikichi.jpg';
// $chuukichiPath = 'img/chuukichi.jpg';
// $shoukichiPath = 'img/shoukichi.jpg';
// $suekichiPath = 'img/suekichi.jpg';
// $daikyouPath = 'img/daikyou.jpg';

if(1 === $code){
    
    echo '<img src =img/daikichi.jpg>'.'<br>';
    echo '大吉'.'<br>';
    echo $code;
}

if(2 === $code){
    
    echo '<img src =img/chuukichi.jpg>'.'<br>';
    echo '中吉'.'<br>';
    echo $code;
}
if(3 === $code){
    
    echo '<img src =img/shoukichi.jpg>'.'<br>';
    echo '小吉'.'<br>';
    echo $code;
}
if(4 === $code){
    
    echo '<img src =img/suekichi.jpg>'.'<br>';
    echo '末吉'.'<br>';
    echo $code;
}
if(5 === $code){
    
    echo '<img src =img/daikyou.jpg>'.'<br>';
    echo `大凶`.'<br>';
    echo $code;
}

echo '<br>';




?>




