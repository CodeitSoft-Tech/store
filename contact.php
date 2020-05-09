<?php 

        $active = 'Contact';
        include("includes/header.php"); 

?>

    <!-- Contact -->
    <div id="content">
    <div class="container">
      <div class="row">
        <p class="text-center" style="line-height:20px;"><span style="color:#4fbfa8;  text-transform: uppercase; font-size: 33px;">Contact us</span>
        </p>

        <p style="width: 20%;height: 3px;background-color: #4fbfa8;text-align: center;margin-left: 40%;margin-top:  2%;margin-bottom: -2%;"></p>
        <br style=".clear: both;" class="clear"/>
        <div style="background: #4fbfa8; width: 100%; max-width: 1170px; height: 2px; margin-top: 4%;"></div>

        <div class="box">
            <div class="box-header">
                <center>
                    <h2>Feel free to Contact us</h2>
                    <p class="text-muted">
                        Get in touch with us anytime, anyday. We provide our customers with <strong>24/7</strong> services.
                    </p>
                </center>
                <form action="contact.php" method="post">
                <div class="form-group">
                    <label>Contact Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10" class="form-control">
                        
                    </textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-user"></i> Submit
                    </button>
                </div>                
                </form>
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