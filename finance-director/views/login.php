<!-- Header -->
<?php include "../includes/header.php";?>
<main>
    <div class="container">
        <div id="loginFormWrapper" class="card">
            <div class="card-header bg_grey text-white">
                <h5 class="text-center my-0 py-2">Login</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label uppercase">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label uppercase">Password</label>
                        <span class="float-right"><a href="#" class="text_decoration_0 text-info">Forgot
                                Password</a></span>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <div id="passwordErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <button type="submit" class="btn btn-block btn_primary rounded-0 uppercase">Login</button>
                </form>

                <hr class="my-3" />

                <p>Don’t have an account <a href="register.php" class="text_decoration_0 text-info">CLICK HERE</a></p>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<?php include "../includes/footer.php";?>