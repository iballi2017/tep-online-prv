<!-- Header -->
<?php include "../includes/headerfull.php";?>

<!--  -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../includes/sidebar.php'; ?>
        <!--  -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <div class="d-flex align-items-center justify-content-between flex-wrap">

                    <h1 class="h2">
                        <button class="btn btn-default p-0 back_btn"><span data-feather="arrow-left"
                                class="icon"></span>
                        </button> PRV ONLINE FORM 001
                    </h1>


                    <div class="font-weight-bold">
                        <a href="prv-request-form.php" class="btn btn-success rounded-0 uppercase">Request PRV Form</a>
                    </div>
                </div>
            </div>

            <section class="mb-5">
                <!-- Request Form -->
                <form action="#">
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="date" class="uppercase point_cursor">Date:</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="amount" class="uppercase point_cursor">Amount:</label>
                            <input type="number" class="form-control" id="amount">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="amountInWords" class="uppercase point_cursor">Amount in words:</label>
                            <input type="text" class="form-control" id="amountInWords">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="beneficiaryName" class="uppercase point_cursor">Beneficiary Name:</label>
                            <input type="text" class="form-control" id="beneficiaryName">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="address" class="uppercase point_cursor">Beneficiary Address:</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="bank" class="uppercase point_cursor">Beneficiary Bank:</label>
                            <input type="text" class="form-control" id="bank">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="accountNumber" class="uppercase point_cursor">Beneficiary Account
                                Number:</label>
                            <input type="text" class="form-control" id="accountNumber">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="orgContact" class="uppercase point_cursor">Organization Contact:</label>
                            <input type="text" class="form-control" id="orgContact">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="phone" class="uppercase point_cursor">Phone Number:</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="orgContact" class="uppercase point_cursor">Reason For Payment:</label>
                            <!-- Radios -->
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <span class="mr-2">
                                            <input type="radio" name="reson_for_payment" id="tech_logist_business"
                                                class="check">
                                            <label for="tech_logist_business" class="">
                                                <span class="custom_check"></span>
                                            </label>
                                        </span>
                                        <span>
                                            <label for="tech_logist_business" class="point_cursor">
                                                <span class="custom_check"></span>
                                                Expenses
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <span class="mr-2">
                                            <input type="radio" name="reson_for_payment" id="nice_innovation_support"
                                                class="check">
                                            <label for="nice_innovation_support" class="">
                                                <span class="custom_check"></span>
                                            </label>
                                        </span>
                                        <span>
                                            <label for="nice_innovation_support" class="point_cursor">
                                                <span class="custom_check"></span>
                                                Reimbursement
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <label for="comment" class="uppercase point_cursor">Comment:</label>
                            <textarea name="" class="form-control" id="comment" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <label for="name" class="uppercase point_cursor">Request By:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <button type="submit" class="btn px-5 btn_primary rounded-0 uppercase">Submit</button>
                </form>
            </section>
        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>