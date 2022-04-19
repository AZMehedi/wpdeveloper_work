<?php include 'header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mx-auto">
                        <div class="card-header mb-3 text-center"><h3>Login</h3></div>
                        <div class="card-body">
                            <form action="action.php" method="POST">

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="" class="col-md-3">Email</label>
                                        <input type="email" class="form-control" name="email" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="" class="col-md-3">Password</label>
                                        <input type="password" class="form-control" name="pass" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn-lg btn-outline-success" name="logBtn" value="Login"/>
                                    </div>
                                </div>
                                <br/>
                                <hr/>
                                <p class="text-danger text-center">Not Register? <a href="action.php?page=register" class="text-success">Register</a></p>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>