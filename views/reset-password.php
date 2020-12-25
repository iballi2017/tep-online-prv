<!-- Header -->
<?php include "../includes/header.php";?>
<div id="reset_password_page">
    <div class="hide" id="overlay" onclick="closeOverlay()">
        <div class="inner d-flex align-items-center h-100">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center text_primary font-weight-bold">Password Change!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div id="loginFormWrapper" class="card">
                <div class="card-header bg_grey text-white">
                    <h5 class="text-center my-0 py-2">RESET PASSWORD</h5>
                </div>
                <div class="card-body">
                    <form class="my-4">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="passwordErrorMsg" class="form-text text-danger hide">Error message.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputConfirmPassword">
                            <div id="confirmPasswordErrorMsg" class="form-text text-danger hide">Error message.</div>
                        </div>
                        <button type="button" class="btn btn-block btn_primary rounded-0 uppercase"
                            onclick="openOverlay()">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>

<script>
let overlay = document.getElementById("overlay");

function openOverlay() {
    if (overlay.classList.contains("hide")) {
        overlay.classList.remove("hide");
    }
}

function closeOverlay() {
    if (!overlay.classList.contains("hide")) {
        overlay.classList.add("hide");
    }
}
</script>