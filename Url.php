<?php
class URL
{   public $url_id;
    public $url;
    public $title;
    public $regx;
    public $notif_value;
    public $notif_greater;
    public $notif_now;
    public $current_value;

    function __construct($param) 
        {
        include "dbconnect.php";
        $this->url_id=$param;
        $query="select * from URL where url_id = ".$this->url_id."";
        $rslt=mysqli_query($con,$query);
           while($row=mysqli_fetch_row($rslt)) {
                $this->url=$row[1];
                $this->title=$row[2];
                $temp=$row[3];              
                $this->notif_value=$row[4];
                $this->notif_greater=$row[5];
                $this->notif_now=$row[6];
                $this->current_value=$row[7];
                } 
            $this->getRegx($temp,$con);
        mysqli_close($con);
        }

    public function printWish()
        {
            echo $this->url_id;
            echo "<br>";
            echo $this->regx;
        }

    public function getRegx($param,$con)
        {
            $this->regx="select regx from REGX where regx_id = param";
        }

    public function scrape()
        {
            $this->url ="http://www.amazon.ca/gp/product/B00SGS7ZH4/ref=s9_acss_bw_hsb_LaptopsS_s2_n?pf_rd_m=A3DWYIK6Y9EEQB&pf_rd_s=merchandised-search-2&pf_rd_r=1S72BA42K5E9DADAAC62&pf_rd_t=101&pf_rd_p=2253690442&pf_rd_i=677252011";
            $this->regx='/<span id="priceblock_ourprice" class=".*?">(.*?)<\/span>/s';
            $html=file_get_contents($this->url);
            preg_match_all($this->regx,
                $html,
                $posts, // will contain the article data
                PREG_SET_ORDER // formats data into an array of posts
                );
            $this->regx='/<span id="productTitle" class=".*?">(.*?)<\/span>/s';
            preg_match_all($this->regx,
                $html,
                $title,
                PREG_SET_ORDER
                );
            $date = date('Y/m/d H:i:s');
            echo $date."<br>";
            echo $title[0][0]."   :   ";
            echo "<br>";
            $temp1 =  $posts[0][0];
            $temp1 = preg_replace('/[^0-9\.]/', '',$temp1);
            echo $temp1; 
            echo "<br>";
            $this->current_value =  floatval($temp1);
            echo $this->current_value ;           
        }

}
?>