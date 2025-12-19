<?php

error_reporting(-1);
ini_set('desplay_errors', 'on');

function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

$input = $_GET['input_text'] ?? "";

echo "あなたが入力したのは " , h($input, ) , " ですね";