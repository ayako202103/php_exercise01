<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

$subjects = [
    '数学' => '明日',
    '英語' => '明後日',
    '理科' => '明々後日',
    '社会' => '昨日',
    '国語' => '中止',
];

foreach ($subjects as $subject => $date) {
    echo $subject . 'の試験は'. $date .'です。' . '<br>';
}
