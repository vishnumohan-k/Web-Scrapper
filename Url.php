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
            
        }

}
?>