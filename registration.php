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
        <?php if(isset($_REQUEST['msg']) == 'error'){?>
            <div class="alert alert-danger alert-dismissable text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <p>your email and contact number are wrong</p>
            </div>
        <?php } ?>

    
    <div class="login-box-body">


        <p class="login-box-msg"><i class="fa fa-file-text-o"></i> <b>Registeration</b>   </p>

        <form action="registration_save.php" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="cust_fname" class="form-control" placeholder="Enter your first name" required="" 
                oninvalid="this.setCustomValidity('Please enter your first name')"
                oninput="this.setCustomValidity('')"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="cust_lname" class="form-control" placeholder="Enter your last name" required=""
                oninvalid="this.setCustomValidity('Please enter your last name')"
                oninput="this.setCustomValidity('')"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="cust_email" class="form-control" placeholder="Enter your email ID" required="" 
                oninvalid="this.setCustomValidity('Please enter your email ID')"
                oninput="this.setCustomValidity('')"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input class="form-control"  id="password" name="cust_password" type="password"
             pattern="^\S{6,}$" 
             onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" 
             placeholder="Password" required=""/>
                <span class="glyphicon  glyphicon-eye-close form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input  class="form-control"  id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
                <span class="glyphicon  glyphicon-eye-close form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="number" name="cust_mobile" class="form-control" placeholder="Enter your mobile" required=""
                oninvalid="this.setCustomValidity('Please enter your mobile here')"
                oninput="this.setCustomValidity('')"/>
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
            
            <div class="row">
                <div class="col-xs-8">

                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit <i class="fa fa-plus-square-o"></i></button>

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
