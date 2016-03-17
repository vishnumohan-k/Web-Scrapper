<head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!----script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script-->
</head>

<div class="container">
        <div class="row"><!--navigation-->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="USER.php">Easy Shopper</a>
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
            
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                    <li><a href="Wishlist.php"><i class="glyphicon glyphicon-shopping-cart"></i> WishList</a></li>
                    <li><a href="AddingURL.php"><i class="glyphicon glyphicon-plus-sign"></i> Add URL</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Notifications</a></li>
                    </ul>
                    <form method="POST" action="search.php" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" name="product" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                </form>
   
      <ul class="nav navbar-nav navbar-right">
        <li>
            <?php
            session_start();
            if(!isset($_SESSION['username']))
            {
                header("Location: ToLogin.php");
            }
            else
            {
                echo "<a href='USER.php' style='text-decoration:none'>";
                echo "<strong>".$_SESSION['username']."</strong></a>";
            }
            session_write_close ();
            ?>
        </li>
        <li><a href="Logout.php" style='text-decoration:none'><i class='glyphicon glyphicon-off'></i> Logout</a></li>
      </ul>
             </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        </div>

    </div><!--navigation-->
    
    

