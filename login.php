<!DOCTYPE html>
<html>
<head>
    <?php include('cw-admin/dbcon.php');?>
    <meta charset="UTF-8">
    <title>Feather</title>
    
<!--tab icon-->
<link rel="shortcut icon" type="../images/icon2.png" href="../images/icon2.png" />
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

<link href="https://shahbaazchaviwale.github.io/js-css-library/css/style.css" rel="stylesheet" type="text/css" />
<!--Date picker-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
<div class="login-box">
        <?php if(isset($_REQUEST['msg']) == 'error' || isset($_REQUEST['msg']) == 'r_success' || isset($_REQUEST['msg']) == 'product'){?>
                <?php if($_REQUEST['msg'] == 'error'){?>
                        <div class="alert alert-danger alert-dismissable text-center">
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            <p>your email and password is wrong</p>
                        </div>
                <?php } else if ($_REQUEST['msg'] == 'r_success') {?>
                        <div class="alert alert-success alert-dismissable text-center">
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            <p>Registeration completed successfully please check email for credentials </p>
                        </div>
                <?php } else if ($_REQUEST['msg'] == 'product') {?>
                        <div class="alert alert-warning alert-dismissable text-center">
                            <p>Please login before enter into chicken product </p>
                        </div>
                <?php } ?>
                
        <?php } ?>
        

    <div class="login-logo">
        <a href="price_list.php"><i class="fa fa-rupee"></i> <b>Feather</b>   </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">


        <p class="login-box-msg">Sign-In</p>

        <form action="login_check.php" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="user_email" class="form-control" placeholder="Email" required="" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="user_password" class="form-control" 
                pattern="^\S{6,}$" 
                onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" 
                placeholder="Password" required=""/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="form-group">
                        <a href="registration.php" class="btn btn-primary  btn-flat">Register</a>
                        <button type="submit" class="btn btn-primary  btn-flat pull-right">Sign In</button>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 ">
                    <div class="form-group has-alert">
                      
                      <a href="forget_password.php" class="control-label">forgot password?</a>
                    </div>

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
