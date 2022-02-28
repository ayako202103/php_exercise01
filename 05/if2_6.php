<?php

$score = 59;

echo 'あなたのテストの点数は'. $score.'点で、';

switch ($score) {
    case $score >= 90 ;
        echo '判定結果はAです。';
        break;
    case $score >= 80 && $score < 90 ;
        echo '判定結果はBです。';
        break;
    case $score >= 70 && $score < 80 ;
        echo '判定結果はCです。';
        break;
    case $score >= 60 && $score < 70 ;
        echo '判定結果はDです。';
        break;
    default:
        echo '判定結果はFです。';
        break;
}
