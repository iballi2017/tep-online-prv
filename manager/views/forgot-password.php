<!-- Header -->
<?php include "../includes/header.php";?>
<main>
    <div id="forgot_password_page">
        <div class="container" id="inner">
            <div class="card">
                <div class="card-header bg_grey text-white">
                    <h5 class="text-center my-0 py-2">FORGOT PASSWORD</h5>
                </div>
                <div class="card-body">
                    <form action="#">
                        <p>Please enter the email address you registered with. We will send you a link</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email address"
                                aria-label="Enter email address" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn_primary rounded-0" type="button" id="">SEND
                                    LINK</button>
                            </div>
                        </div>
                        <div id="emailErrorMsg" class="form-text text-danger">Error message.</div>
                    </form>
                </div>

                <div class="card-body">
                    <p class="text-center py-5 text_primary font-weight-bold">Please check your email</p>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<?php include "../includes/footer.php";?>