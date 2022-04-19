<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-3"></div>
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header mb-3 text-center bg-success"><h3>Registration Form</h3></div>
                    <div class="card-body">
                        <form action="action.php" method="post">

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <label for="" class="col-md-3">Enter Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <label for="" class="col-md-3">Enter Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="" class="col-md-3">Enter Password</label>
                                    <input type="password" class="form-control" name="pass">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-12">
                                    <input type="submit" class="btn-lg btn-outline-success" name="regBtn" value="Register"/>
                                </div>
                            </div>
                            <br/>
                            <hr/>
                            <p class="text-danger text-center">Already Have An Account ?   <a href="action.php?page=home" class="text-success">Login Now</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
