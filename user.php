<?php
class User
{
    function __construct()
        {
        }
    public function signIn($username, $password) 
        {
        include 'dbconnect.php'; 
        $query="select user_id from user where email = '".$username."' AND pwd = '".$password."'";
        $rslt=mysqli_query($con,$query);
        if(! $rslt )
            {
                die('Could not get data: ' . mysql_error());
            } 
        while($row=mysqli_fetch_row($rslt))
            {
            session_start();
                $_SESSION['username'] = $username;
                session_write_close ();
            }   
        mysqli_close($con);
        }

    public function getUserId()
        {

        session_start();
        if(!isset($_SESSION['username']))
        {
                session_write_close ();
                return 0;
        }
        else
        {
            $query="select user_id from user where email = '".$_SESSION['username']."'";
            session_write_close ();
        }

        include 'dbconnect.php';
        $rslt=mysqli_query($con,$query);
            if(! $rslt )
            {
                die('Could not get data: ' . mysql_error());
            } 
            while($row=mysqli_fetch_row($rslt))
                {
                    $temp = $row[0];
                } 
                        mysqli_close($con);
            return $temp;
        }

    function __destruct() 
        {  
        }
        
}
?>