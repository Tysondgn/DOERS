<?php
include "header.php";
include "navigation.php";
include "dbconn.php";
if (isset($_POST['selected_check'])) {
    $_SESSION['check_service'] = $_POST['selected_check'];
} elseif (isset($_GET['s_key'])) {
    $_SESSION['check_service'] = $_GET['s_key'];
}
?>

<!-- Top Part start -->
<div class="container-sm pt-3 ">

    <!-- title row start -->
    <div class="row">
        <div class="col-10">

            <?php

            //Service_sector table data retrive
            // prepare and execute the SQL SELECT statement
            $sql = "SELECT * FROM service_sector";
            $result = mysqli_query($conn, $sql);

            // check for errors
            if (!$result) {
                die("Error retrieving services: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['s_id'] == $_SESSION['check_service']) {
                    echo "<h4 class='bd-title'>" . $row['service_name'] . "</h4>"; // shows the title
                }
            }

            // free the result set and close the database connection
            mysqli_free_result($result);
            unset($row);

            ?>

        </div>
        <div class="col-2">
        </div>
        <hr>
    </div>
    <!-- title row end -->
    <?php

    if ($_SESSION['check_service'] == 1) {
        echo "
    <!-- Icon box start  -->
    <div class='row text-center gap-4 col-12 mx-auto' style='font-size: 0.8rem'>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/switch.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Switch and socket</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/fan.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Fan</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/bulb.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Light</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/mcb.webp' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>MCB and Fuze</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/invertor.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Inverter & stabilizer</a>
        </div>
    
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/ea1.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Electrical Appliance</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/wire.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Wiring</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/doorbell.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Door bell</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/otr.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Others</a>
        </div>
    </div>
    <!-- Icon box end -->
    ";
    } elseif ($_SESSION['check_service'] == 2) {
        echo "
    <!-- Icon box start  -->
    <div class='row text-center gap-4 col-12 mx-auto' style='font-size: 0.8rem'>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\Plumber\basin-sink.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Basin & Sink</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\Plumber\bath.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Bath Filling</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\Plumber\pipe.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Blokage</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Plumber/tap.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Tap & Mixer</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Plumber/toilet.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Toilet</a>
        </div>
    
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Plumber/tank.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Water Tank</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\Plumber\motor.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Motor</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\Plumber\minor-installation.webp' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Minor Installation</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/Electrician/otr.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Others</a>
        </div>
    </div>
    <!-- Icon box end -->
    ";
    } elseif ($_SESSION['check_service'] == 3) {
        echo "
    <!-- Icon box start  -->
    <div class='row text-center gap-4 col-12 mx-auto' style='font-size: 0.8rem'>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\bride-makeup.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Wedding Special</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\package.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Makeup Package</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\waxing.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Waxing</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/beauty/facial.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Facials & cleanups</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\manicure.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Manicure</a>
        </div>
    
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\padicure.webp' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Pedicure</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/beauty/threading.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Threading & face wax</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\detan.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Bleach & detan</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\beauty\Hair-care.webp' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Hair care</a>
        </div>
    </div>
    <!-- Icon box end -->
    ";
    } elseif ($_SESSION['check_service'] == 4) {
        echo "
    <!-- Icon box start  -->
    <div class='row text-center gap-4 col-lg-7 col-12 mx-auto' style='font-size: 0.8rem'>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/saloon/cutting.jpg' class='zoom img-fluid'
                    style='height: 50px; width: 50px;'></img><br>Mens & Kids Haircut</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/saloon/care.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Face Care</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/saloon/beard.jpg' class='zoom img-fluid'
                    style='height: 50px; width: 50px;'></img><br>Shave/Beard Setting</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/saloon/color.jpg' class='zoom img-fluid'
                    style='height: 50px; width: 50px;'></img><br>Hair Color</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images/Service/saloon/massage.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Massage</a>
        </div>
    </div>
    <!-- Icon box end -->
    ";
    } elseif ($_SESSION['check_service'] == 5) {
        echo "
    <!-- Icon box start  -->
    <div class='row text-center gap-4 col-12 mx-auto' style='font-size: 0.8rem'>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\people\laundry.png' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Laundary</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\wash\mens.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Men</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\wash\women.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Women</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\wash\house.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Household</a>
        </div>
        <div class='col shadow p-1 mb-2 bg-body rounded '>
            <a href='electrical-service.php'><img src='images\Service\wash\woolen.jpg' class='zoom'
                    style='height: 50px; width: 50px;'></img><br>Woolen</a>
        </div>
    </div>
    <!-- Icon box end -->
    ";
    }

    ?>


    <hr> <!-- Line seperation -->

</div>
<!-- Top part end -->

<!-- item display start -->
<div class="container">
    <!-- <h5 class="row col-12 text-start">Switch & socket</h5> -->
    <div class="row align-items-center gap-4  mx-auto p-3">
        <?php

        // fetching data from table
        // prepare and execute the SQL SELECT statement
        $result1 = mysqli_query($conn, "SELECT DISTINCT sub_head, service_sector FROM service_list"); // Custom query for Distinct data retrival
        
        // Starting first loop of data fetch for heading print
        while ($row1 = mysqli_fetch_assoc($result1)) {

            // Checking Condition for fetching data of Service_sector to 1.Electrician only which have value '1'
            if ($row1['service_sector'] == $_SESSION['check_service']) {

                // Main Heading of the data under which sub data are present  
                echo "<h5 class='row col-12 text-start'>" . $row1["sub_head"] . "</h5>";

                // fetching data from table
                // prepare and execute the SQL SELECT statement
                $sql = "SELECT * FROM service_list";
                $result = mysqli_query($conn, $sql);

                // Second loop for printing element of card body 
                while ($row = mysqli_fetch_assoc($result)) {

                    // Condition checking for only data entry which vae similar heading as above
                    if ($row['service_sector'] == $_SESSION['check_service'] && $row['sub_head'] == $row1["sub_head"]) {

                        $select = $row['service_id'];
                        // Showing data inside card
                        echo "
                            <div class='card m-1 shadow zoom d-none d-lg-block' style='width: 200px; box-sizing: border-box; '>
                        
                            <p class='card-title mb-0 fw-bold text-dark h6' id='service_title'>" . $row["service_title"] . "</p>
                            
                            <img style=' height: 8rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='card-img-top' alt='...'>
                            <div class='card-body p-0' style='white-space: nowrap;'>
                            <p class='h6 mb-0' style='display: inline-block; font-size: 0.8rem;'><strong>Market-Charge : <span style='color:red;text-decoration:line-through'><span style='color:black'>&#x20B9;" . $row["market_price"] . "</span></span></strong><span style='color: red; font-size: 0.6rem;'><strong> -" . $row["percentage_discount"] . "% off</strong></span></p>
                            <p class='card-text mb-0 fs-6'><strong>Doers-Charge : <span style='color: black; font-size:0.8rem'>&#x20B9;" . $row["service_price"] . "</span></strong></p>
                            <p class='card-text mb-0' style='color: green;'><small class='text-muted'>Currently Available</small></p>
                            </div>
                            
                            <button  onclick='s1(this.value)' id='submit' value='" . $row['service_id'] . "' class='btn btn-warning btn-lg m-1' name='submit' data-bs-toggle='modal' data-bs-target='#exampleModal'>Book Now</button><br>
                            </div>
                            
                            <div class='card m-1 shadow zoom d-lg-none' style='width: 100%; box-sizing: border-box; '>
                            
                            <div class='row'>
                            <div class='col-4 p-1' style='background-color: rgba(192,192,192,0.3); '>
                            <img style=' height: 8rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='img-fluid rounded-start' alt='...'>
                            </div>
                            <div class='col-8 p-0 text-wrap lh-sm' style='white-space: nowrap;'>
                            <p class='text-wrap lh-sm card-title mt-2 mb-2 fw-bold text-dark h6' id='service_title'>" . $row["service_title"] . "</p>
                            <p class='h6 mb-0' style='display: inline-block; font-size: 0.8rem;'><strong>Market-Charge : <span style='color:red;text-decoration:line-through'><span style='color:black'>&#x20B9;" . $row["market_price"] . "</span></span></strong><span style='color: red; font-size: 0.6rem;'><strong> -" . $row["percentage_discount"] . "% off</strong></span></p>
                            <p class='card-text mb-0 fs-6'><strong>Doers-Charge : <span style='color: black; font-size:0.8rem'>&#x20B9;" . $row["service_price"] . "</span></strong></p>
                            <p class='card-text mb-0' style='color: green;'><small class='text-muted'>Currently Available</small></p>
                            </div>
                            </div>
                            <button  onclick='s1(this.value)' id='submit' value='" . $row['service_id'] . "' class='btn btn-warning btn-lg m-1' name='submit' data-bs-toggle='modal' data-bs-target='#exampleModal'>Book Now</button><br>
                            </div>
                            ";
                    }
                }
                mysqli_free_result($result);
                unset($row);
            }
            // echo "<hr>";
        }
        // free the result set and close the database connection
        mysqli_free_result($result1);
        unset($row1);
        // mysqli_close($conn);
        ?>

    </div>
</div>
<!-- item display end -->

<!-- Modal -->
<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
        <div class='modal-content'>
            <div id='modal'></div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>