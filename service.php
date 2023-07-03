<?php
include "dbconn.php";

$p = $_REQUEST["p"];

if (isset($p)) {

  // fetching data from table
// prepare and execute the SQL SELECT statement
  $sql = "SELECT * FROM service_list";
  $result = mysqli_query($conn, $sql);

  // Second loop for printing element of card body 
  while ($row = mysqli_fetch_assoc($result)) {

    // Condition checking for only data entry which vae similar heading as above
    if ($row['service_id'] == $p) {

      echo " 
    
     <div class='modal-header'>
        <p class='modal-title mb-0 fw-bold text-dark' id='service_title'>" . $row["service_title"] . "</p>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <div class='row'>
          <div class='col-4'>                      
            <img style=' height: 12rem; width: 100%; object-fit: contain;' src='data:image/jpeg;base64," . base64_encode($row['service_image']) . "' class='card-img-top' alt='...'>
          </div>
          <div class='col-8'>      
              <p class='h6 mb-0' style='display: inline-block; '><strong>Market-Charge : <span style='color:red;text-decoration:line-through'><span style='color:black'>&#x20B9;" . $row["market_price"] . "</span></span></strong><span style='color: red; font-size: 0.6rem;'><strong> -" . $row["percentage_discount"] . "% off</strong></span></p>
              <p class='card-text mb-0 '><strong>Doers-Charge : <span style='color: black; '>&#x20B9;" . $row["service_price"] . "</span></strong></p>
              <br>
              <p>". $row["service_desc"]."</p>
          </div>
        </div>
      </div>
      <div class='modal-footer'>
      <div class='position-absolute bottom-0 start-0 translate-middle-y' id='verify'></div>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='button' id='add_to_cart' onclick='addtocart(this.value)' value='" . $row['service_id'] . "' class='btn btn-primary'>Add to cart</button>
      </div>
      
      ";
    }
  }
  mysqli_free_result($result);
  unset($row);
}
?>