<?php
session_start();
include "dbconn.php";

// PHP for adding data on cart table 
if (isset($_REQUEST["q"])) {

    $p = $_REQUEST["q"];

    $stmt = $conn->prepare("INSERT INTO cart (service_id) VALUES (?)");
    $stmt->bind_param("i", $p);
    $stmt->execute();

    // fetching data from table
// prepare and execute the SQL SELECT statement

    $result1 = mysqli_query($conn, "SELECT * FROM cart");
    while ($row1 = mysqli_fetch_assoc($result1)) {

        $sql = "SELECT * FROM service_list";
        $result = mysqli_query($conn, $sql);

        // Second loop for printing element of card body 
        while ($row = mysqli_fetch_assoc($result)) {

            // Condition checking for only data entry which vae similar heading as above
            if ($row['service_id'] == $row1['service_id']) {

                echo " 
    
     <div class='modal-body'>
     <div id='sno' value='" . $row1['s_no'] . "'></div>
     <p class='modal-title mb-0 fw-bold text-dark' id='service_title'>" . $row["service_title"] . "</p>
     <button type='button' class='btn-close' onclick='removefromcart(" . $row['service_id'] . ")' data-bs-dismiss='modal' aria-label='Close'></button>
                            
      <img style=' height: 8rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='card-img-top' alt='...'>
      
      </div>
      ";
            }else{}
        }
        mysqli_free_result($result);
        unset($row);
    }
    mysqli_free_result($result1);
    unset($row1);
    echo "<script>alert('Service Successfully added to cart. ');</script>";
}

// PHP for removing data on cart table
elseif (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];

    $sql = "DELETE FROM cart WHERE service_id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $r);
    mysqli_stmt_execute($stmt);

    $null_id = 0;
    $sql = "DELETE FROM cart WHERE service_id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $null_id);
    mysqli_stmt_execute($stmt);

    // fetching data from table
// prepare and execute the SQL SELECT statement

    $result1 = mysqli_query($conn, "SELECT * FROM cart");
    $r1 = mysqli_fetch_assoc($result1);
    if (isset($r1["Service_id"])) {
        while ($row1 = mysqli_fetch_assoc($result1)) {

            $sql = "SELECT * FROM service_list";
            $result = mysqli_query($conn, $sql);

            // Second loop for printing element of card body 
            while ($row = mysqli_fetch_assoc($result)) {

                // Condition checking for only data entry which vae similar heading as above
                if ($row['service_id'] == $row1['service_id']) {

                    echo " 
    
     <div class='modal-body'>
     <p class='modal-title mb-0 fw-bold text-dark' id='service_title'>" . $row["service_title"] . "</p>
     <button type='button' class='btn-close' onclick='removefromcart(" . $row['service_id'] . ")' data-bs-dismiss='modal' aria-label='Close'></button>
                            
      <img style=' height: 8rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='card-img-top' alt='...'>
      </div>
      ";
                }
            }
            mysqli_free_result($result);
            unset($row);
        }
        mysqli_free_result($result1);
        unset($row1);
    }
}

//Check session is set for proceeding to dashboard from cart button
elseif (isset($_POST["cart_dash"])) {
    if (isset($_SESSION['f_name']) && !empty($_SESSION['f_name'])) {
        header("Location: user-dashboard.php");
    } else {
        echo "<script>alert('please login');</script>";
        header("Location: login.php");
    }
}
// Input of dashboard data dd or dashdes (dashboard description)
elseif (isset($_GET['dd'])) {

    $_SESSION["total_amount"] = 0;

    $result1 = mysqli_query($conn, "SELECT * FROM cart");
    while ($row1 = mysqli_fetch_assoc($result1)) {

        $sql = "SELECT * FROM service_list";
        $result = mysqli_query($conn, $sql);

        // Second loop for printing element of card body 
        while ($row = mysqli_fetch_assoc($result)) {

            // Condition checking for only data entry which vae similar heading as above
            if ($row['service_id'] == $row1['service_id']) {

                echo " 
                <div class='modal-body p-1'>
                <div id='sno' value='" . $row1['s_no'] . "'></div>
                <div class='row'>         
                <div class='col-7'>         
                <p class='modal-title mb-0 fw-bold text-dark' style='font-size: 15px' id='service_title'>" . $row["service_title"] . "</p>
                </div>
                <div class='col-5'>         
                     <p class='' style='font-size: 15px' >Price : &#x20B9; " . $row["service_price"] . "</p>
                </div>
                </div>
                 </div>
                 ";
                 $_SESSION["total_amount"] = $_SESSION["total_amount"] + $row["service_price"];
            }
        }
        mysqli_free_result($result);
        unset($row);
    }
    mysqli_free_result($result1);
    unset($row1);
}

//Load data on dashboard by checking login, cart, service list
if (isset($_GET['dash'])) {

    // Query to check if the table is empty
$sql = "SELECT COUNT(*) AS count FROM cart";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

$data = array(); // Initialize an empty array to store the fetched data

if ($result->num_rows > 0) {
    // Fetch the data row by row
    while ($row = $result->fetch_assoc()) {
        // Add each row to the $data array
        $data[] = $row['service_id'];
    }
}
$_SESSION['service_id_numbers'] = $data; 
$_SESSION['cart_count'] = $count;
mysqli_free_result($result);
unset($row);

// Check if the table is empty
if ($count == 0) {
    // Table is empty, display an image
    echo '<img style="padding: 125px 50px 160px 300px;" src="images\Empty_cart.gif" alt="...">';
} else {
    $result1 = mysqli_query($conn, "SELECT * FROM cart");
    while ($row1 = mysqli_fetch_assoc($result1)) {

        $sql = "SELECT * FROM service_list";
        $result = mysqli_query($conn, $sql);

        // Second loop for printing element of card body 
        while ($row = mysqli_fetch_assoc($result)) {

            // Condition checking for only data entry which vae similar heading as above
            if ($row['service_id'] == $row1['service_id']) {

                echo " 
                <div class='row p-1'>
                <div class='col-6 p-1' style='background-color: rgba(192,192,192,0.3); '>
                <img style=' height: 8rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='img-fluid rounded-start' alt='...'>
                </div>
                <div class='col-6 p-1 text-wrap lh-sm' style='white-space: nowrap;'>
                <p class='text-wrap lh-sm card-title mt-2 mb-2 fw-bold text-dark h6' id='service_title'>" . $row["service_title"] . "</p>
                <p class='h6 mb-0' style='display: inline-block; font-size: 0.8rem;'><strong>Market-Charge : <span style='color:red;text-decoration:line-through'><span style='color:black'>&#x20B9;" . $row["market_price"] . "</span></span></strong><span style='color: red; font-size: 0.6rem;'><strong> -" . $row["percentage_discount"] . "% off</strong></span></p>
                <p class='card-text mb-0 fs-6'><strong>Doers-Charge : <span style='color: black; font-size:0.8rem'>&#x20B9;" . $row["service_price"] . "</span></strong></p>
                <p class='card-text mb-0' style='color: green;'><small class='text-muted'>Currently Available</small></p>
                </div>
                </div>
                </div>
      ";
            }
        }
        mysqli_free_result($result);
        unset($row);
    }
    mysqli_free_result($result1);
    unset($row1);
    echo "<script>alert('Service Successfully added to cart. ');</script>";
}
}

// transaction amount from above [dd]
if (isset($_GET['ta'])){
    // for total amount
    echo"Total Amount : &#x20B9; ". $_SESSION['total_amount']."";
}

?>