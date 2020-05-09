<?php include("includes/header.php"); ?>

 <!-- Main Shop -->
 <div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    register
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php 

                include("includes/sidebar.php");

            ?>
        </div>
        <div class="row">
        <div class="col-md-8">
        <p class="text-center" style="line-height:20px;"><span style="color:#4fbfa8;  text-transform: uppercase; font-size: 33px;">Create Account</span>
        </p>

        <p style="width: 20%;height: 3px;background-color: #4fbfa8;text-align: center;margin-left: 40%;margin-top:  2%;margin-bottom: -2%;"></p>
        <br class="clear"/>
        <div style="background: #4fbfa8; width: 100%; max-width: 1170px; height: 2px; margin-top: 4%;">
        </div>
             <div class="box">
            <div class="box-header">
                <form action="customer_register.php" method="post" enctype="multipart/form-data">

                <div class="col-md-6 mb-3 form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3 form-group">
                    <label>Password</label>
                    <input type="password" name="password_1" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3 form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_2" class="form-control" required>
                </div>

                <div class="col-md-12 mb-3 form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>

                <div class="col-md-12 mb-3 form-group">
                    <label>Phone Number</label>
                    <input type="text" name="contact" placeholder="eg; 0541234567" class="form-control">
                </div>

                <div class="col-md-12 mb-3 form-group">
                  <p><input type="checkbox" name="subscribe"> I want to receive Newsletters with the best deal and offers</p>
                </div>
                
                <div class="text-center">
                    <button type="submit" name="create_account" class="btn btn-primary form-control" id="crt_account" style="font-weight: 700;">
                        <i class="fa fa-sign-in"></i> CREATE ACCOUNT
                    </button>
                </div>

                    <p class="text-center" style="margin-top: 20px;"> OR </p>

                    <div class="text-center">
                    <button type="submit" name="create_account" class="form-control" id="fb-btn">
                        <i id="icon" class="fa fa-facebook"></i>  Register with Facebook
                    </button>
                </div>

                <br>
                 <p class="text-center">
                   Already have an Account? <br>
                   <a href="login.php" id="login">Login</a>
                </p>         
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>





<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>