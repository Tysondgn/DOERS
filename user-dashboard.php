<?PHP
include "header.php";
include "navigation.php";
include "dbconn.php";
// include "data.php";


?>

<div class="container-xxl d-none d-lg-block">
    <div class="row shadow">
        <div class="col-8 shadow border-end border-dark border-2">
            <h4 class="pt-3">Selected Services</h4>
            <div id="dash"></div>
            <!-- <img src="images\empty_cart.gif"> -->
        </div>
        <div class="col-4 mx-auto mt-3 ">
            <!-- Address bar -->
            <div class="row">
                <!-- <div class="h5"> Address: </div> -->
                <div class="col">
                    <!-- <textarea class=" shadow border-dark border-1 border rounded pr-3"></textarea> -->

                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Address</h5>
                        </div>
                        <div class="card-body">
                            <form>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example3" class="form-control" placeholder="Address">
                                </div>

                                <!-- Text input -->
                                <div class="row">
                                    <div class="form-outline mb-4 col-6">
                                        <input type="text" id="form6Example4" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-outline mb-4 col-6">
                                        <input type="text" id="form6Example4" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <!-- Pincode input -->
                                <div class="form-outline mb-4">
                                    <input type="number" id="form6Example5" class="form-control" placeholder="pincode">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Price details  -->
            <div class"shadow" style="width: 100%;">
                <h5>Description</h5>
                <div class="shadow" style="width: 100%; height: 20%;">
                    <div id="dashdes"></div>
                </div>
            </div>
            <br>
            <!-- ta from cart.php -->
            <div id='ta'></div>
            <div>
                <br>
                <!-- Redirect to payment gateway -->
                <button class="form-control btn-success" id="rzp-button1">Pay</button>
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script>
                    var options = {
                        "key": "rzp_test_w7QpgRqaKsxNiu", // Enter the Key ID generated from the Dashboard
                        "amount": "<?php echo $_SESSION["total_amount"] . '00'; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": "DOERS", //your business name
                        "description": "Test Transaction",
                        "image": "",
                        // "order_id": "order_9A43XWu170gUt", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "handler": function (response) {
                            alert(response.razorpay_payment_id);
                            // alert(response.razorpay_order_id);
                            alert(response.razorpay_signature)
                        },
                        "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                            "name": "<?php echo $_SESSION["f_name"];?>", //your customer's name
                            "email": "<?php echo $_SESSION['user_email']; ?>",
                            "contact": "<?php echo $_SESSION['mobile_number'];?>"  //Provide the customer's phone number for better conversion rates 
                        },
                        "notes": {
                            "address": "<?php echo $_SESSION['user_address'];?>"
                        },
                        "theme": {
                            "color": "#ffc107"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.on('payment.failed', function (response) {
                        alert(response.error.code);
                        alert(response.error.description);
                        alert(response.error.source);
                        alert(response.error.step);
                        alert(response.error.reason);
                        alert(response.error.metadata.order_id);
                        alert(response.error.metadata.payment_id);
                    });
                    document.getElementById('rzp-button1').onclick = function (e) {
                        rzp1.open();
                        e.preventDefault();
                    }
                </script>
            </div>
            <br>
            <!-- Redirect to homepage -->
            <a href="index.php">
                <button type="submit" class="form-control mb-4 btn-warning">
                    Add More
                </button>
            </a>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>