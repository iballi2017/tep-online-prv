<!-- Header -->
<?php include "../includes/header.php";?>
<main>
    <div class="container">
        <div id="registerFormWrapper" class="card mb-5">
            <div class="card-header bg_grey text-white">
                <h5 class="text-center uppercase my-0 py-3">Sign Up</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label uppercase">First and Last Name</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        <div id="nameErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label uppercase">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp">
                        <div id="phoneErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAddress" class="form-label uppercase">Street Address</label>
                        <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp">
                        <div id="AddressErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label uppercase">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label uppercase">Re-Type Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="email2Help">
                        <div id="email2ErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <div id="passwordErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Re-Type Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2">
                        <div id="password2ErrorMsg" class="form-text text-danger hide">Error message.</div>
                    </div>
                    <button type="submit" class="btn btn-block btn_primary rounded-0 uppercase">Signup</button>
                </form>

                <hr class="my-3" />

                <p>Already have an account ? <a href="login.php" class="text_decoration_0 text-info">CLICK HERE</a></p>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<?php include "../includes/footer.php";?>