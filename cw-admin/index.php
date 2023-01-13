<!DOCTYPE html>
<html>
<head>
    <?php include('dbcon.php');?>
    <meta charset="UTF-8">
    <title><?php titleName() ?></title>
    <?php include('CWCssLib.php');?>
</head>
<body class="login-page">
<div class="login-box">
        <?php if(isset($_REQUEST['msg']) == 'error'){?>
            <div class="alert alert-danger alert-dismissable text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <p>Your email and contact number is wrong</p>
            </div>
        <?php } ?>

    <div class="login-logo">
        <a href="#"><i class="fa fa-rupee"></i> <b>Feather</b>   </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign-In Box</p>
        <form action="check_login.php" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="user_mail" class="form-control" placeholder="Email" required="" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="contact_number" class="form-control" placeholder="Password" required=""/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

                </div>
            </div>
        </form>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="https://shahbaazchaviwale.github.io/js-css-library/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
