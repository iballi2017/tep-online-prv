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
                <h1 class="h2">Notification</h1>
            </div>

            <ul class="list_style_0 px-0">
                <li class="container">
                    <a href="#" class="link_primary border d-block my-1 py-2 px-3 rounded bg-success text-white">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <div class="notice_item">
                                    Your request was APPROVED, kindly click to check the instructions.
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <span class="h-100 float-md-right d-flex align-items-center">25 DEC, 2020</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!--  -->
                <li class="container">
                    <a href="#" class="link_primary border d-block my-1 py-2 px-3 rounded">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <div class="notice_item">
                                    Your request was <span class="uppercase">rejected</span>, kindly click to check the instructions.
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <span class="h-100 float-md-right d-flex align-items-center">25 DEC, 2020</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>