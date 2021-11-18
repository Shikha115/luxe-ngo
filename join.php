<?php include("./header-css.php");?>
<?php include("header.php");?>

<main>

    <section class="page-banner position-relative mb-80">
        <div class="container">
            <div class="page-benner-inner">
                <h4>Join Us</h4>
            </div>
        </div>
    </section>

    <section class="join-quote mb-80">
        <div class="container">
            <div class="title-section">
                <h4 class="text-center"><i>"Volunteers do not necessarily have the time; they have the heart."</i></h4>
                <p class="text-center">- Elizabeth Andrew</p>
            </div>
        </div>
    </section>

    <section class="join-form position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-adjust">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id='name'>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id='email'>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id='phone'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="" class="btn btn-1 w-100">Submit</a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-adjust">
                    <div class="title-section">
                        <h4>Join Us Now</h4>
                    </div>
                    <img src="./src/images/sw-3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="join-img">
        <img src="./src/images/volunteer.png" alt="">
    </section>

</main>

<?php include("footer.php");?>
<?php include("./footer-scripts.php");?>