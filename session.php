<?php

ob_start();

function h(string $s) : string 
{
    return
}

$counter = $_SESSION['counter'] ?? 1;

echo "セッション)あなたがこのサイトを訪れたのは " , h( strval($counter) ) , "回目ですね。";

$next_counter = $counter + 1;

$_SESSION['counter'] = $next_counter;

ob_end_flush();