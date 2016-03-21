<?php
$html=file_get_contents("http://www.amazon.in/Ray-Ban-Aviator-Sunglasses-RB3026-W202762/dp/B00KVC10H4/ref=sr_1_2?s=apparel&ie=UTF8&qid=1458592571&sr=1-2");

preg_match_all('/<span id="productTitle" class=".*?">(.*?)<\/span>/s',
    $html,http://www.amazon.in/WD-Passport-WDBBKD0020BBK-Portable-External/dp/B00ZFDD3YM/ref=sr_1_3?s=com
    $title,
    PREG_SET_ORDER
);

preg_match_all('/<span id="priceblock_saleprice" class="a-size-medium a-color-price"><span class=".*?">&nbsp;&nbsp;<\/span>(.*?)<\/span>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

$date = date('Y/m/d H:i:s');
echo $date."<br>";
echo $title[0][0]."   :   ";
echo $posts[0][0];
?>