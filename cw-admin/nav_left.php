<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../dist/img/icon.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info" style="padding-top: 15px; text-transform:capitalize;">
                <p><?= $_SESSION['log_name']  ?></p>
                <?php 
                $log_type = $_SESSION['log_role'] ?>
                
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Menu List</li>
            <li class="<?= (activeMenu($page,"dashboard")); ?>" ><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="<?= (activeMenu($subpage,"add variety")); ?>"><a href="admin_add_rates.php"><i class="fa fa-circle-o text-red"></i> <span>Add Variety</span></a></li>
            <li class="<?= (activeMenu($subpage,"current orders")); ?>" ><a href="admin_current_order_list.php"><i class="fa fa-cart-arrow-down"></i> <span>Current Orders</span></a></li>
            <li class="<?= (activeMenu($page,"customer_list")); ?>" ><a href="admin_customer_list.php"><i class="fa fa-users"></i> <span>Customer List</span></a></li></li>
            <li class="<?= (activeMenu($page,"customer_orders")); ?>" ><a href="admin_customer_orders.php"><i class="fa fa-calendar-o"></i> <span>Customer Orders</span></a></li></li>
            <li class="<?= (activeMenu($page,"total_sales")); ?>" ><a href="total_sales.php"><i class="fa fa-bar-chart-o "></i> <span>Total Sales</span></a></li></li>
            <li class="<?= (activeMenu($page,"variety sales")); ?>" ><a href="variety_sales.php"><i class="fa fa-bar-chart-o "></i> <span>Variety Sales</span></a></li></li>        
        </ul>
    </section>
</aside>