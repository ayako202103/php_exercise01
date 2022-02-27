<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money > $fund_raising) {
    echo 'あなたの所持金は'. $poket_money. 'です'.'<br>';
    echo $fund_raising .'募金しました'.'<br>';
    $poket_money = $poket_money - $fund_raising;
    echo '残りは'. $poket_money .'です。'. '<br>';
}

echo 'あなたはこれ以上募金できません。'. '<br>';






