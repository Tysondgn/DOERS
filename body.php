<?php
include "suggestionconn.php";
?>


<section class="hero" id="hero" style="height: 15rem;">
    <div class="heroText">
        <h2 class="text-white mt-2 mb-lg-2" data-aos="zoom-in" data-aos-delay="800">
            DOERS
        </h2>

        <p class="text-secondary-white-color h6" data-aos="fade-up" data-aos-delay="1000">
            Services at your Door Steps with <strong class="custom-underline">DOERS</strong>
        </p>
    </div>

    <div class="videoWrapper ratio ratio-21x9">
        <video autoplay="" loop="" muted="" class="custom-video" poster="videos/tools.jpg">
            <source src="videos/p.mp4" type="video/mp4">

            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
    </div>

</section>

<section class="pt-3 pb-0" id="service">

    <!-- icon box start-->

    <div class="container-fluid ">


        <div class="row text-center gap-4 col-lg-7 col-12 mx-auto ">
            <a href="electrical-service.php?s_key=1" class="col shadow p-3 mb-5 bg-body rounded zoom"
                style="width: 80px; hight: 80px; box-sizing: content-box; width: 100%;">
                <form action="electrical-service.php" method="POST">
                    <button class="zoom"
                        style="width: 50px; height: 50px; background-image: url('images/people/Electrician.png'); background-size: contain; background-color: transparent; background-repeat: no-repeat;  background-position: center; border: none; "
                        type="submit" name="selected_check" value="1"></button><br>
                    <button class="zoom" style='background-color: transparent; border: none; ' type="submit"
                        name="selected_check" value="1">Electrical Service</button>
                </form>
            </a>
            <a href="electrical-service.php?s_key=2" class="col shadow p-3 mb-5 bg-body rounded zoom">
                <form action="electrical-service.php" method="POST">
                    <button class="zoom"
                        style="width: 50px; height: 50px; background-image: url('images/people/plumber.png'); background-size: contain; background-color: transparent; background-repeat: no-repeat;  background-position: center; border: none; "
                        type="submit" name="selected_check" value="2"></button><br>
                    <button class="zoom" style='background-color: transparent; border: none; ' type="submit"
                        name="selected_check" value="2">Plumber Service</button>
                </form>
            </a>
            <a href="electrical-service.php?s_key=3" class="col shadow p-3 mb-5 bg-body rounded zoom">
                <form action="electrical-service.php" method="POST">
                    <button class="zoom"
                        style="width: 50px; height: 50px; background-image: url('images/people/beauty.png'); background-size: contain; background-color: transparent; background-repeat: no-repeat;  background-position: center; border: none; "
                        type="submit" name="selected_check" value="3"></button><br>
                    <button class="zoom" style='background-color: transparent; border: none; ' type="submit"
                        name="selected_check" value="3">Beautician Service</button>
                </form>
            </a>
            <a href="electrical-service.php?s_key=4" class="col shadow p-3 mb-5 bg-body rounded zoom">
                <form action="electrical-service.php" method="POST">
                    <button class="zoom"
                        style="width: 50px; height: 50px; background-image: url('images/people/beard.png'); background-size: contain; background-color: transparent; background-repeat: no-repeat;  background-position: center; border: none; "
                        type="submit" name="selected_check" value="4"></button><br>
                    <button class="zoom" style='background-color: transparent; border: none; ' type="submit"
                        name="selected_check" value="4">Men's Saloon</button>
                </form>
            </a>
            <a href="electrical-service.php?s_key=5" class="col shadow p-3 mb-5 bg-body rounded zoom">
                <form action="electrical-service.php" method="POST">
                    <button class="zoom"
                        style="width: 50px; height: 50px; background-image: url('images/people/laundry.png'); background-size: contain; background-color: transparent; background-repeat: no-repeat;  background-position: center; border: none; "
                        type="submit" name="selected_check" value="5"></button><br>
                    <button class="zoom" style='background-color: transparent; border: none; ' type="submit"
                        name="selected_check" value="5">Laundary Service</button>
                </form>
            </a>
        </div>

        <!-- <div class="col shadow p-3 mb-5 bg-body rounded zoom ">
        <form action="electrical-service.php" method="POST">
            <button type="submit" name="selected_check"
            value="2">2</button>
                </form>
                <a href="laundary-service.php"><img src="images\people\plumber.png" class="zoom"
                        style="height: 50px; width: 50;"></img><br>Plumber Service</a>
            </div>
            <div class="col shadow p-3 mb-5 bg-body rounded zoom ">
                <form action="electrical-service.php" method="POST">
                    <button type="submit" name="selected_check"
                        value="3">3</button>
                </form>
                <a href="Beauty-service.php"><img src="images\people\beauty.png" class="zoom"
                        style="height: 50px; width: 50;"></img><br>Beautician Services</a>
            </div>
            <div class="col shadow p-3 mb-5 bg-body rounded zoom ">
                <form action="electrical-service.php" method="POST">
                    <button type="submit" name="selected_check"
                        value="4">4</button>
                </form>
                <a href="mens-saloon.php"><img src="images\people\beard.png" class="zoom"
                        style="height: 50px; width: 50;"></img><br>Men's Saloon</a>
            </div>
            <div class="col shadow p-3 mb-5 bg-body rounded zoom ">
                <form action="electrical-service.php" method="POST">
                    <button type="submit" name="selected_check"
                        value="5">5</button>
                </form>
                <a href="laundary-service.php"><img src="images\people\laundry-machine.png" class="zoom"
                        style="height: 50px; width: 50;"></img><br>Laundry Services</a>
            </div> -->


    </div>

    <!-- icon box end-->

    <!-- <div class="container-sm">
        <div class=" row text-center shadow p-2 bg-body rounded mb-5">
            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 12rem; height: 12rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <p class="card-title fs-6 p-1" style='color: black;'>Card title</p>
                </div>
            </div>



        </div>
    </div> -->
    <div class="container mb-5 pb-lg-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3" data-aos="fade-up">Our Services...</h2>
            </div>

            <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300">You can book our <a rel="nofollow"
                        href="https://api.whatsapp.com/send?phone=916264452707&text=Hello%20Doers"
                        target="_blank">Electrician, Beautician, Plumber, Laundry Services</a> at the <a rel="nofollow"
                        href="https://api.whatsapp.com/send?phone=916264452707&text=Hello%20Doers"
                        target="_parent">DOERS </a>website or you can contact us on ( +91 62644-52707 ). This will help
                    us to
                    provide Best Services at your location. <br><br>We provide you 100% satisfaction with completion.
                    Our users needs are our first priority.</p>
            </div>

            <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                <p data-aos="fade-up" data-aos-delay="500">We offer a diverse range of services through various
                    partners, serving different fields. Our household services are not only affordable, but also adhere
                    to strict timelines without compromising on the quality of our professional work and performance.
                </p>
            </div>

        </div>
    </div>


</section>

<section class="news section-padding" id="news">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
            </div>

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="news-thumb" data-aos="fade-up">
                    <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                        <img src="images/news/caroline-lm-uqveD8dYPUM-unsplash.jpg"
                            class="img-fluid large-news-image news-image" alt="">
                    </a>

                    <div class="news-category bg-warning text-white">News</div>

                    <div class="news-text-info">
                        <h5 class="news-title">
                            <a href="news-detail.html" class="news-title-link">We are Soon going to avail, more streams
                                of services. to Save your time and money.</a>
                        </h5>

                        <span class="text-muted">22 hours ago</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                    <div class="news-top w-100">

                        <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                            <img src="images/news/jean-philippe-delberghe-MmanXAs1sKw-unsplash.jpeg"
                                class="img-fluid news-image" alt="">
                        </a>

                        <div class="news-category bg-primary text-white">Events</div>
                    </div>

                    <div class="news-bottom w-100">
                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href="employee_login.php" class="news-title-link">Job Opportunities: Electrician,
                                    Beautician.</a>
                            </h5>

                            <div class="d-flex flex-wrap">
                                <span class="text-muted me-2">
                                    <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                    India,
                                </span>

                                <span class="text-muted">August 6, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                    <div class="news-top w-100" data-aos="fade-up">

                        <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                            <img src="images/news/maria-stewart-p4tj0g-_aMM-unsplash.jpeg" class="img-fluid news-image"
                                alt="">
                        </a>

                        <div class="news-category bg-success text-white">News</div>
                    </div>

                    <div class="news-bottom w-100">
                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href="news-detail.html" class="news-title-link">What is the new topic of Home
                                    automation ?</a>
                            </h5>

                            <span class="text-muted">6 days ago</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=" contact section-padding" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12 mx-auto">

                <h2 class="mb-4 text-center" data-aos="fade-up">Dont' be shy, write to us</h2>

                <form action="" method="post" class="contact-form" role="form" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-6 col-6">
                            <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name"
                                required>
                        </div>

                        <div class="col-lg-6 col-6">
                            <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="Email address" required>
                        </div>

                        <div class="col-12 my-4">
                            <label for="message" class="form-label">How can we help?</label>

                            <textarea name="suggestion" rows="6" class="form-control" id="message"
                                placeholder="Tell us about the project" required></textarea>

                        </div>

                        <div class="col-12">
                            <label for="services" class="form-label">Services<sup class="text-danger">*</sup></label>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox1" name="service" value="Electrician"
                                    class="form-check-input">

                                <label class="form-check-label" for="checkbox1">Electrician</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-2 my-lg-0">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox2" name="service" value="Plumbing/waterworks"
                                    class="form-check-input">

                                <label class="form-check-label" for="checkbox2">Plumbing/waterworks</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox3" name="service" value="Beautician/Salon"
                                    class="form-check-input">

                                <label class="form-check-label" for="checkbox3">Beautician/Salon</label>
                            </div>
                        </div>


                        <div class="col-lg-4 col-12">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox3" name="service" value="Laundary/Drycleaning"
                                    class="form-check-input">

                                <label class="form-check-label" for="checkbox4">Laundary/Drycleaning</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="form-check">
                                <input type="checkbox" id="checkbox3" name="service" value="Other Services"
                                    class="form-check-input">

                                <label class="form-check-label" for="checkbox5">Other Services</label>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 col-12 mx-auto mt-5">
                        <button type="submit" class="form-control">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="pt-3 pb-0" id="about">


</section>

<section class="google-map">
    <iframe
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=yadunandan%20nagar%20tifra%20bilaspur+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>