 <header class="clearfix" style="border-bottom: 1px solid #0000001a !important;">
            <div class="top-bar dark-bar navbar-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5">
                            <ul class="social-list ">
                                <li class="text-white">
                                    
                                    
                                    <?php if(isset( $_SESSION['cust_id'])){ ?>
                                        <i class="fa fa-user"></i>
                                        <a href="#" class="text-white"> <?= $_SESSION['cust_name']?></a>
                                    <?php }?>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">
                        <b style="color: #ee3733">
                            <img src="images/icons/icon.png" height="30" width="30" style="margin-left: 0px; margin-top: 0px;" >
                            Feather
                    </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <div class="search-side">
                            <?php  if(isset( $_SESSION['cust_id'])){ ?>
                                    <a href="logout.php" class="show-search"><i class="fa fa-power-off"></i></a>
                            <?php }?>
                            
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="<?= (activeMenu($page, 'Home'))?>" href="index.php"><i class="fa fa-home"></i>&nbsp; Home</a>
                            </li>
                            <li>                                
                                <a class="<?= activeMenu($page, 'Chicken')?>" href="product.php"><i class="fa fa-shopping-cart"></i>&nbsp; Product</a>
                            </li>
                            <?php  if(isset( $_SESSION['cust_id'])){ ?>
                                <li>                                
                                     <a class="<?= activeMenu($page, 'Profile')?>" href="profile.php"><i class="fa fa-user"></i>&nbsp; Profile</a>
                                </li>
                            <?php }else{?>
                                <li>                                
                                    <a class="<?= activeMenu($page, '')?>" href="login.php"><i class="fa fa-sign-in"></i>&nbsp; Login</a>
                                </li>
                                <?php } ?>
                           
                        </ul>
                    </div>
                </div>
            </div>
 </header>