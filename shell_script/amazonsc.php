<?php
$html=file_get_contents("http://www.amazon.in/gp/product/B00N2BWF6Q/ref=s9_simh_gw_p364_d29_i3?pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=desktop-6&pf_rd_r=122QGC523ZAHB1Q0APX4&pf_rd_t=36701&pf_rd_p=864400327&pf_rd_i=desktop");

preg_match_all('/<span id="productTitle" class=".*?">(.*?)<\/span>/s',
    $html,
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