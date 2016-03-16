<?php
$html=file_get_contents("http://www.amazon.ca/gp/product/B00SGS7ZH4/ref=s9_acss_bw_hsb_LaptopsS_s2_n?pf_rd_m=A3DWYIK6Y9EEQB&pf_rd_s=merchandised-search-2&pf_rd_r=1S72BA42K5E9DADAAC62&pf_rd_t=101&pf_rd_p=2253690442&pf_rd_i=677252011");
preg_match_all('/<span id="priceblock_ourprice" class=".*?">(.*?)<\/span>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);
preg_match_all('/<span id="productTitle" class=".*?">(.*?)<\/span>/s',
    $html,
    $title,
    PREG_SET_ORDER
);
$date = date('Y/m/d H:i:s');
echo $date."<br>";
echo $title[0][0]."   :   ";
echo $posts[0][0];
?>