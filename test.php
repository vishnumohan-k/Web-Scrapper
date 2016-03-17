<?php
include 'Url.php';
$item = new URL();
echo "object created";
    $url ="http://www.amazon.ca/gp/product/B00SGS7ZH4/ref=s9_acss_bw_hsb_LaptopsS_s2_n?pf_rd_m=A3DWYIK6Y9EEQB&pf_rd_s=merchandised-search-2&pf_rd_r=1S72BA42K5E9DADAAC62&pf_rd_t=101&pf_rd_p=2253690442&pf_rd_i=677252011";
	$item->insertion($url,870);
	$item->printWish();
?>