<!-- MAIN HEADER -->
<?php 
    include_once '../lib/helpers.php';
?>
<header>
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="#" class="logo">
                        <img src="./img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        <input class="input" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            
           
                    <!-- /Wishlist -->
           
                <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Wishlist -->
                        <!-- Yecid -->
                    <!--Quite el user y lo puse abajo-->
            

                    <!-- /Wi-->
                    <!-- Cart -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Carrito</span>
                            <div class="qty">3</div>
                        </a>
                        <div class="cart-dropdown">
                            <div class="cart-list">
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                    </div>
                                    <button class="delete"><i class="fa fa-close"></i></button>
                                </div>

                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                    </div>
                                    <button class="delete"><i class="fa fa-close"></i></button>
                                </div>
                            </div>
                            <div class="cart-summary">
                                <small>3 Item(s) selected</small>
                                <h5>SUBTOTAL: $2940.00</h5>
                            </div>
                            <div class="cart-btns">
                                <a href="#">View Cart</a>
                                <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Cart -->
                   
                   
                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->

                    <!--Yecid-->
                    <?php 
                        if ($_SESSION['nombre']) {
                    ?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user">&nbsp;<?php echo $_SESSION['nombre']?></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <p>Usuarios</p>
                            <li><a href="<?php echo getUrl("Usuarios","Usuarios","getInsert")?>">Registar</a></li>
                            <li><a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>">Consultar</a></li>
                            <hr>
                            <p>roles</p>
                            
                            <li><a href="<?php echo getUrl("Roles","Roles","getInsert")?>">Registar</a></li>
                            <li><a href="<?php echo getUrl("Roles","Roles","consult")?>">Consultar</a></li>
                            <hr>
                            <p>Clientes</p>
                            
                            <li><a href="<?php echo getUrl("Usuarios","Usuarios","getInsert")?>">Registar</a></li>
                            <li><a href="<?php echo getUrl("Usuarios","Usuarios","consult")?>">Consultar</a></li>
                            <hr>
                            
                            <li><a href="<?php echo getUrl("Acceso","Acceso","logout")?>" >Cerrar Sesion</a></li>
                        </ul>
                        
                    </div>
                    <?php 
                        }
                    ?>
                    <!--/yecid-->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- /MAIN HEADER -->
</header>