<!-- Headerfull -->
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
                        </button> PRV FORM 001
                    </h1>

                    <div class="font-weight-bold">
                        Status: <span class="display_md_1 uppercase status">approved</span>
                        <!-- 
                            The innerText of this element class must be either 'pending', 'approved' or 'rejected'. This will enable the status get its appropriate color
                            EXAMPLE: 
                            Status: <span class="display_md_1 uppercase status">pending</span> will get a light-grey color
                            Status: <span class="display_md_1 uppercase status">approved</span> will get a light-blue color
                            Status: <span class="display_md_1 uppercase status">rejected</span> will get a light-red color
                         -->
                    </div>



                </div>
            </div>


            <section>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">
                                    <dl>
                                        <dt>Date:</dt>
                                        <dd>22 OF DEC 2021</dd>
                                    </dl>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <dl>
                                        <dt>AMOUNT:</dt>
                                        <dd>#<span>1,000,000</span></dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl>
                                        <dt>AMOUNT IN WORDS:</dt>
                                        <dd>One million naira</dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <dl>
                                        <dt>BENEFICIARY NAME:</dt>
                                        <dd>AKINOLA TOBI</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl>
                                        <dt>BENEFICIARY ADDRESS:</dt>
                                        <dd>Viverra nam libero justo . Viverra nam libero justo </dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <dl>
                                        <dt>BENEFICIARY BANK:</dt>
                                        <dd>First bank</dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl>
                                        <dt>BENEFICIARY ACCOUNT NUMBER:</dt>
                                        <dd>0112343234</dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <dl>
                                        <dt>Organization’s contact Person</dt>
                                        <dd>Viverra nam libero justo . Viverra nam libero justo </dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl>
                                        <dt>Phone Number</dt>
                                        <dd>07065135567</dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" colspan="2">
                                    <dl>
                                        <dt>REASON FOR PAYMENT:</dt>
                                        <dd>Expense</dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" colspan="2">
                                    <dl>
                                        <dt>COMMENTS:</dt>
                                        <dd>rum tellus. Auctor augue mauris augue neque gravida. Viverra nam libero
                                            justo
                                            laoreet sit amet cursus sit amet. Velit scelerisque in dictum non
                                            consectetur a.
                                            Morbi tristique senectus et netus et malesuada. Integer vitae justo eget
                                            magna
                                            fermentum iaculis eu.. Viverra nam libero justo . Viverra nam libero justo .
                                            Viverra nam libero justo . Viverra nam libero justo rum tellus. Auctor augue
                                            mauris augue neque gravida. Viverra nam libero justo laoreet sit amet cursus
                                            sit
                                            amet. Velit scelerisque in dictum non consectetur a. Morbi tristique
                                            senectus et
                                            netus et malesuada. Integer vitae justo eget magna fermentum iaculis eu..
                                            Viverra nam libero justo . Viverra nam libero justo . Viverra nam libero
                                            justo .
                                            Viverra nam libero justo </dd>
                                    </dl>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" colspan="2">
                                    <dl>
                                        <dt>REQUESTED BY:</dt>
                                        <dd>AKINOLA TOBI</dd>
                                    </dl>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section>
                <!-- Admin Response Area -->

                <!-- 1st level comments -->
                <div class="container-fluid">
                    <div class="row border-top pt-3">
                        <div class="col-12 col-md-6">
                            <!-- MANAGER/ UNIT HEAD -->
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Manager/ Unit Head:</dt>
                                                <dd class="uppercase">Adigun Abegunde</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Status:</dt>
                                                <dd class="uppercase status">approved</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Comment:</dt>
                                                <dd>rum tellus. Auctor augue mauris augue neque
                                                    gravida. Viverra nam libero justo laoreet sit amet cursus sit amet.
                                                    Velit scelerisque in dictum non consectetur a. Morbi tristique
                                                    senectus et netus et malesuada. Integer vitae justo eget </dd>
                                            </dl>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- FINANCE DIRECTOR -->
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Financial Director:</dt>
                                                <dd class="uppercase">Adigun Abegunde</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Status:</dt>
                                                <dd class="uppercase status">approved</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col">
                                            <dl>
                                                <dt class="uppercase">Comment:</dt>
                                                <dd>um tellus. Auctor augue mauris augue neque
                                                    gravida. Viverra nam libero justo laoreet sit amet cursus sit amet.
                                                    Velit scelerisque in dictum non consectetur a. Morbi tristique
                                                    senectus et netus et malesuada. Integer vitae justo eget </dd>
                                            </dl>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <hr />

            <div class="mb-5">
                <button class="btn btn-success uppercase px-5 rounded-0" disabled>Edit</button>
                <button class="btn btn-danger uppercase px-5 rounded-0" disabled>Delete</button>
            </div>
        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>