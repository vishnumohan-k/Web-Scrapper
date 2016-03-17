<?php
class URL
{   public $url_id;
    public $url;
    public $title;
    public $regx_id;
    public $notif_value;
    public $notif_greater;
    public $notif_now;
    public $current_value;

    function __construct()
        {

        }

 /*   function __construct($param) 
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
            $this->getRegx(1,$con);
        mysqli_close($con);
        }
        */
    public function insertion($url,$notify)
        {
            include "dbconnect.php";
            $this->url = $url ;
            $this->notif_value = $notify ;
            $this->notif_greater = 0 ;
            $this->getRegx($con);
            $this->enterDB($con);
        }
    public function printWish()
        {
            echo $this->url;
            echo "<br>";
            echo $this->title;
            echo "<br>";
            echo $this->regx_id;
            echo "<br>";
            echo $this->notif_value;
            echo "<br>";
            echo $this->notif_greater;
            echo "<br>";
            echo $this->notif_now;
            echo "<br>";
            echo $this->current_value;
        }

    public function getRegx($con)
        {
            $domain = parse_url ($this->url , PHP_URL_HOST);
            echo $domain;
            echo "<br>";
            $query="select regx_id,title_regx,value_regx from REGX where host = '".$domain."' ";
            $rslt=mysqli_query($con,$query);
           while($row=mysqli_fetch_row($rslt)) {
                $this->regx_id = $row[0];
                echo $this->regx_id;
                echo "<br>";
                $title1=$row[1];
                echo $title1;
                echo "<br>";
                $price=$row[2];
                echo $price;
                echo "<br>";
                $this->scrape($title1 , $price);
                } 

        }

    public function scrape($title1 , $price)
        {
            $html=file_get_contents($this->url);
            preg_match_all($title1,
                $html,
                $title,
                PREG_SET_ORDER
                );
            preg_match_all($price,
                $html,
                $posts, // will contain the article data
                PREG_SET_ORDER // formats data into an array of posts
                );
            $date = date('Y/m/d H:i:s');
            $this->title = $title[0][0];
            $temp1 =  $posts[0][0];
            $temp1 = preg_replace('/[^0-9\.]/', '',$temp1);
            $this->current_value =  floatval($temp1);
            if ( $this->notif_value < $this->current_value )
            {
                $this->notif_now = 0;
            }
            else
            {
                 $this->notif_now = 1;               
            }
        }

    public function enterDB($con)
        {
            $query="INSERT INTO URL(url,title,regx_id_url,notif_value,notify_greater,notify_now,current_value) VALUES ('".$this->url."','".$this->title."',".$this->regx_id.",".$this->notif_value.",".$this->notif_greater.",".$this->notif_now.",".$this->current_value.") ";
            $rslt=mysqli_query($con,$query);
        }

}
?>