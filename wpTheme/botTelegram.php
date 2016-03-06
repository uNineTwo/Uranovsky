<?php

echo('Привет, Настя.')

$token='169845565:AAHOW6Vwwbh3cLNpFQ3Q19tO9RFQxNLg9DA';

$chatId = 189549098;
$text = 'Настя перешла по странице';

$parameters = [
    'chat_id' => $schatID,
    'text' => $text,
];

$url = 'https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($parameters);
file_get_contents($url);
?>