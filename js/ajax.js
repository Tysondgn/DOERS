//  ajax for navigation file cart without add service to cart
function addtocart() {
    var xmlhttp = new XMLHttpRequest(); //refresh free request
    xmlhttp.onreadystatechange = function () { // this will be called when the readyState property changes
        if (this.readyState == 4 && this.status == 200) // 4: request finished and response is ready //  200: "OK"
        {
            document.getElementById("txt").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "cart.php?q=0", true); //  Specifies the request for the php page (cart.php) with parameter q value str // method POST
    xmlhttp.send(); // Sends the request to the server Used for GET requests // xmlhttp.send(str); str is post parameters

}

//  ajax for navigation.php file to load cart on page start calling function addtocart() without adding data to table cart 
window.onload = addtocart;

//  ajax from navigation.php file for remove service from cart
function removefromcart(r) {
    alert('Service removed');

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cart").innerHTML = this.responseText;
            addtodash();
            dashdes();
            totalamount();
        }
    };
    xmlhttp.open("GET", "cart.php?r=" + r, true);
    xmlhttp.send();
    // alert('ok');
}


//  ajax for electrical-service.php this add service to Modal
function s1(p) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("modal").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "service.php?p=" + p, true);
    xmlhttp.send();
}

//  ajax for electrical-service.php this add show service on cart 
function addtocart(q) {
    var xmlhttp = new XMLHttpRequest(); //refresh free request
    xmlhttp.onreadystatechange = function () { // this will be called when the readyState property changes
        if (this.readyState == 4 && this.status == 200) // 4: request finished and response is ready //  200: "OK"
        {
            document.getElementById("cart").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "cart.php?q=" + q, true); //  Specifies the request for the php page (cart.php) with parameter q value str // method POST
    xmlhttp.send(); // Sends the request to the server Used for GET requests // xmlhttp.send(str); str is post parameters

    document.getElementById("verify").innerHTML = "Added to cart ✅";

}

// ajax for user-dashboard.php show data from cart
function addtodash() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("dash").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "cart.php?dash=1", true);
    xmlhttp.send();
}


// ajax for user-dashboard.php show description for billing
function dashdes() {
    var xmlhttp = new XMLHttpRequest(); //refresh free request
    xmlhttp.onreadystatechange = function () { // this will be called when the readyState property changes
        if (this.readyState == 4 && this.status == 200) // 4: request finished and response is ready //  200: "OK"
        {
            document.getElementById("dashdes").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "cart.php?dd=1", true); //  Specifies the request for the php page (cart.php) with parameter q value str // method POST
    xmlhttp.send(); // Sends the request to the server Used for GET requests // xmlhttp.send(str); str is post parameters
}
function totalamount() {
    var xmlhttp = new XMLHttpRequest(); //refresh free request
    xmlhttp.onreadystatechange = function () { // this will be called when the readyState property changes
        if (this.readyState == 4 && this.status == 200) // 4: request finished and response is ready //  200: "OK"
        {
            document.getElementById("ta").innerHTML = this.responseText;
            document.getElementById("nav_u_name").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "cart.php?ta=1", true); //  Specifies the request for the php page (cart.php) with parameter q value str // method POST
    xmlhttp.send(); // Sends the request to the server Used for GET requests // xmlhttp.send(str); str is post parameters
}



function dashboard(){
    addtodash();
    dashdes();
    totalamount();
}

window.onload=dashboard;