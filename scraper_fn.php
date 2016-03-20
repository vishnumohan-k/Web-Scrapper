<?php

$html=file_get_contents("http://www.ebay.in/itm/262249949250");
preg_match_all('/<span class="notranslate" id="prcIsum" itemprop="price"  style=".*?">(.*?)<\/span>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);
preg_match_all('/<span id="vi-lkhdr-itmTitl" class="u-dspn">(.*?)<\/span>/s',
    $html,
    $title, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);
$domain = parse_url ("http://www.ebay.in/itm/262249949250" , PHP_URL_HOST);
echo $domain;
echo $title[0][0]."<br>";
echo $posts[0][0]."<br>";
?>

