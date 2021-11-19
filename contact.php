<?php include("./header-css.php");?>
<?php include("header.php");?>

<main>

    <section class="page-banner position-relative mb-80">
        <div class="container">
            <div class="page-benner-inner">
                <h4>Contact Us</h4>
            </div>
        </div>
    </section>

    <section class="contact-form position-relative mb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-adjust pr-0">
                    <div class="contact-form-left">
                        <ul>
                            <li>
                                <div class="d-flex align-items-start justify-content-start">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <p>Address</p>
                                </div>
                                <p>E 53 S/F Mahipalpur New Delhi 110037</p>
                            </li>
                            <li>
                                <div class="d-flex align-items-start justify-content-start">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <p>Phone No.</p>
                                </div>
                                <p><a href="tel:9990061912">9990061912</a></p>
                            </li>
                            <li>
                                <div class="d-flex align-items-start justify-content-start">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <p>Email</p>
                                </div>
                                <p><a href="mailto:Luxefoundationngo@gmail.com">Luxefoundationngo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-adjust">
                    <div class="contact-form-right">
                        <div class="title-section">
                            <h4 class='text-left'>Get in touch with Us</h4>
                            <div class="line"></div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id='name' placeholder='Enter Your Name Here'>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id='email' placeholder='Enter Your Email Here'>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" id='phone' placeholder='Enter Your Phone No. Here'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder='Enter Your Message Here'></textarea>
                            </div>
                            <div class="form-group m-0">
                                <a href="" class="btn btn-1">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map mb-80">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14018.80025808116!2d77.12650677114783!3d28.548733717971068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1c1514f5a741%3A0x545ffeef6b14c5aa!2sMahipalpur%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1637316699992!5m2!1sen!2sin"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

</main>

<?php include("footer.php");?>
<?php include("./footer-scripts.php");?>