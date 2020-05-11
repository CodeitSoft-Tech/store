<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CodeitSoft Technology | My Account </title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <!-- Top Menu Finish -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="#">4 Items in your cart | Total Price: $300</a>
            </div>
            <div class="col-md-6">
              <ul class="menu">
                <li><a href="../customer_register.php">Register</a></li>
                <li><a href="customer/my_account.php">My Account</a></li>
                <li><a href="../cart.php">Go to Cart</a></li>
                <li><a href="../checkout.php">Login</a></li>
              </ul>
            </div>
        </div>
    </div>
     <!-- Top Menu Finish -->

     <!-- Main Navbar --> 
    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <!--
                    <img src="images/logo.jpg" alt="Logo" class="hidden-xs">
                    mobile view
                    src="images/logo.jpg" alt="Logo" class="visible-xs">
                    -->
                    <p>CodiStore</p>
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>           
                      <li>
                        <a href="../shop.php">Shop</a>
                      </li>
                      <li class="active">
                        <a href="customer/my_account.php">My Account</a>   
                      </li> 
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>   
                    </ul>
                </div>
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in your Cart</span>
                </a>
                <!-- Search Bar -->
                <div class="navbar-collapse collapse right">
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
               </div>
             <div class="collapse clearfix" id="search">
                <form method="get" action="results.php" class="navbar-form">
                 <div class="input-group">

                 <input type="text" name="user_query" class="form-control" placeholder="Search" required>

                    <span class="input-group-btn">

                    <button type="submit" name="search" value="Search" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                    </span>
                    </div>  
                </form>
             </div>
           </div>
        </div>
    </div> 
 <!-- Main Navbar End -->

 <!-- Main Shop -->
 <div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Order details
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
            <div class="col-md-9">
                <div class="box">
                    <h1 align="center">
                        Order Details
                    </h1>
                     <!-- Order Details goes here -->   
                </div>
            </div>
       </div>
    </div>

       







<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>