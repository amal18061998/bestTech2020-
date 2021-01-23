<?php session_start();
            if ($_SESSION['nameClient']!=null){
                    $nameClient=$_SESSION['nameClient']; }
           
                else {header("Location: ../signin.php"); }?>
<aside id="sidebar"  style="background-color:#edffe3;">
            <a href="../ecommerce/product.php" class="navbar-brand">
             
                <img src="php1/ADMIN/assets/img/logo/best.png" id="white-logo" alt="logo"><span>Administration</span>
            </a>
            <div class="user-thumb dropdown">
                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="user-desc">
                    <a href="javascript:void(0);" class="user-name"></a>
                    <?php echo $nameClient; ?><br/><br/>
                    <a href="../ecommerce/signin.php" class="btn btn-danger">Logout</a>
                </div>
            </div>

           
        </aside>