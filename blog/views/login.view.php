<?php require 'header.php'?>
<?php require 'menubar.php'?>
<div class="container">
    <div class="tr-content">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="login-page">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div>
                </div><!-- /.login-page -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.tr-content -->
</div><!-- /.container -->

<?php require 'footer.php'?>


<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/main.js"></script>
</body>
</html>