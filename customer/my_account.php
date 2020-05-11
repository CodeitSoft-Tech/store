<?php include("includes/header.php"); ?>

 <!-- Main Shop -->
 <div id="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    My Account
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
          <div class="box">
            <?php
            if(isset($_GET['my_orders']))
            {
                include("my_orders.php");
            }
            ?>

            <?php
            if(isset($_GET['edit_account']))
            {
              include("edit_account.php");
            }
            ?>

            <?php
            if(isset($_GET['address_book']))
            {
              include("address_book.php");
            }
            ?>
             <?php
            if(isset($_GET['change_pass']))
            {
              include("change_pass.php");
            }
            ?>
             <?php
            if(isset($_GET['delete_account']))
            {
              include("delete_account.php");
            }
            ?>

        </div>
        </div>
    </div>
</div>














<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>