<?php
include "header.php";
?>

<div class="container">
    <h1>Join us as Our Partner!!!</h1>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login</div>
            <div class="title signup">
                Signup</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab">
                </div>
            </div>

            <div class="form-inner">
                <form action="" class="login" method="post">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a></div>
                </form>
                <form action="" class="signup" method="post">
                    <div class="field">
                        <input type="text" name="f_name" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <input type="text" name="l_name" placeholder="Last Name">
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                        <p class="des">The password must contain at least one uppercase , one numeric value and one
                            special character.</p>
                    </div></br></br>
                    <div class="field">
                        <input type="password" name="repassword" placeholder="Confirm password" required>
                    </div>
                    <div class="field">
                        <input type="text" name="mobile" placeholder="Mobile Number" required>
                    </div>
                    <div class="field">
                        <input type="text" name="address" placeholder="Address" required>
                    </div>

                    <input type="checkbox" required> I Agree to Terms and conditions.</input>

                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>


<script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>

    <?php
    include "footer.php";
    ?>