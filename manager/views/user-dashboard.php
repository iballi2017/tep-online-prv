<!-- Header -->
<?php include "../includes/header.php";?>
<!-- Headerfull -->
<?php include "../includes/headerfull.php";?>

<!--  -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../includes/sidebar.php'; ?>
        <!--  -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <section class="mb-4" id="dashboard-counters">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-6">
                            <div class="card m-2">
                                <div class="card-body">
                                    <h4>TOTAL NUMBERS OF REQUESTED FORMS</h4>
                                    <h1 class="count">100</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card m-2">
                                <div class="card-body">
                                    <h4>TOTAL AMOUNT OF PENDING FORMS</h4>
                                    <h1 class="count">60</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card m-2">
                                <div class="card-body">
                                    <h4>TOTAL AMOUNT OF DECLINED FORMS</h4>
                                    <h1 class="count">0</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card m-2">
                                <div class="card-body">
                                    <h4>TOTAL NUMBERS OF ACCEPTED FORMS</h4>
                                    <h1 class="count">26</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h4 class="uppercase">Form Summary</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>FORM NUMBER</th>
                                <th>DATE</th>
                                <th style="width: 150px">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PRV FORM 001</td>
                                <td>9/11/2019</td>
                                <td>
                                    <span class="text-grey">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PRV FORM 002</td>
                                <td>10/11/2017</td>
                                <td>
                                    <span class="text-danger">Decline</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PRV FORM 003</td>
                                <td>10/11/2016</td>
                                <td>
                                    <span class="text-success">Accepted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PRV FORM 004</td>
                                <td>10/11/2016</td>
                                <td>
                                    <span class="text-success">Accepted</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>