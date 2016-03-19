<?php

$html = file_get_contents("http://www.amazon.in/gp/product/B009W2U5BQ/ref=s9_ri_bw_g147_i2?pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=merchandised-search-6&pf_rd_r=183D0R4X0F11JZEMWGYF&pf_rd_t=101&pf_rd_p=500311747&pf_rd_i=3010074031");
/*preg_match_all('/<span id="priceblock_ourprice" class=".*?">(.*?)<\/span>/s', $html, $posts, // will contain the article data
        PREG_SET_ORDER // formats data into an array of posts
);
preg_match_all('/<span id="productTitle" class=".*?">(.*?)<\/span>/s', $html, $title, PREG_SET_ORDER
);
$date = date('Y/m/d H:i:s');
echo $date . "<br>";
echo $title[0][0] . "   :   " . "<br>";
echo $posts[0][0];*/
echo $html;
?>