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
                        PRV FORM
                    </h1>

                    <div class="font-weight-bold">
                        <a href="prv-request-form.php" class="btn btn-success rounded-0 uppercase">Request PRV Form</a>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <!-- Filter -->
                <form action="#">
                    <div class="">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6">
                                <div class="d-flex flex-wrap">
                                    <div class="spe_form_grp">
                                        <label for="filterDate">From</label>
                                        <input type="date" name="filterDate" id="filterDate">
                                    </div>
                                    <div class="spe_form_grp">
                                        <label for="filterDate2">To</label>
                                        <input type="date" name="filterDate2" id="filterDate2">
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-end">
                                <div class="spe_form_grp ml-md-auto">
                                    <div class="dropdown w-100 text-md-right">
                                        <a href="#" class="btn btn-default px-0 dropdown-toggle radio_select_option"
                                            type="button" id="status_filter_selection" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <!-- Selected Option appears here -->
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="status_filter_selection">
                                            <form action="#">
                                                <div class="form-check dropdown-item">
                                                    <input class="form-check-input" type="radio" name="prv_form_status"
                                                        id="view_all" value="view_all">
                                                    <label class="form-check-label" for="view_all">
                                                        View All
                                                    </label>
                                                </div>
                                                <div class="form-check dropdown-item">
                                                    <input class="form-check-input" type="radio" name="prv_form_status"
                                                        id="pending" value="pending">
                                                    <label class="form-check-label" for="pending">
                                                        Pending
                                                    </label>
                                                </div>
                                                <div class="form-check dropdown-item">
                                                    <input class="form-check-input" type="radio" name="prv_form_status"
                                                        id="declined" value="declined">
                                                    <label class="form-check-label" for="declined">
                                                        Declined
                                                    </label>
                                                </div>
                                                <div class="form-check dropdown-item">
                                                    <input class="form-check-input" type="radio" name="prv_form_status"
                                                        id="accepted" value="accepted">
                                                    <label class="form-check-label" for="accepted">
                                                        Accepted
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="min_w_200px">FORM NUMBER</th>
                            <th scope="col" class="min_w_100px">DATE</th>
                            <th scope="col" class="min_w_100px">STATUS</th>
                            <th scope="col" colspan="2" class="min_w_100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">PRV FORM 001</th>
                            <td>9/11/2019</td>
                            <td class="status uppercase">pending</td>
                            <td>
                                <button class="btn btn-sm btn-default p-0 text_primary"><span
                                        data-feather="trash"></span></button>
                                <a href="#" class="text_primary">
                                    <span data-feather="edit-2"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">PRV FORM 002</th>
                            <td>10/11/2017</td>
                            <td class="status uppercase">approved</td>
                            <td>
                                <button class="btn btn-sm btn-default p-0 text_primary"><span
                                        data-feather="trash"></span></button>
                                <a href="#" class="text_primary">
                                    <span data-feather="edit-2"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">PRV FORM 003</th>
                            <td>10/11/2016</td>
                            <td class="status uppercase">rejected</td>
                            <td>
                                <button class="btn btn-sm btn-default p-0 text_primary"><span
                                        data-feather="trash"></span></button>
                                <a href="#" class="text_primary">
                                    <span data-feather="edit-2"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>