<!-- NAVIGATION -->

<nav class="navbar navbar-expand-lg bg-light shadow-lg justify-content-center pt-2 pb-2">
    <div class="container pt-0">

        <a class="navbar-brand" href="index.php">
            <strong>DOERS</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#hero">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#service">Our Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#news">News & Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About Us</a>
                </li>

                <?php
                //Check session is set
                if (isset($_SESSION['f_name']) && !empty($_SESSION['f_name'])) {
                    echo "<li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Logout</a>
                        </li>";
                } else {
                    echo "<li class='nav-item'>
                              <a class='nav-link' href='login.php'>Login/Signup</a>                       
                        </li>";
                }
                ?>


            </ul>

            <?php
            if (isset($_SESSION['f_name']) && !empty($_SESSION['f_name'])) {
                $display_name = $_SESSION["f_name"];
                echo "<a class='m-2 text-uppercase' href='user-dashboard.php'>Welcome, $display_name </a>";
            }
            ?>

            <div class="header-ctn">

                <!-- Cart -->

                <button class="btn btn-warning fa fa-shopping-cart d-sm-none d-md-block" type="button" onclick="addtocart()"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">CART</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <div id='cart'></div>
                    
                    </div>
                    <div class="offcanvas-footer d-grid m-2">
                        <form action="cart.php" method="POST">
                            <button name="cart_dash" value="set" class='btn btn-warning btn-lg' onclick='dashboard()'>Proceed to
                                Pay</button><br>
                        </form>
                    </div>
                </div>
                <!-- /Cart -->

            </div>

        </div>
    </div>
</nav>

<!-- NAVIGATION -->