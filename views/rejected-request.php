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
                        Status: <span class="display_md_1 uppercase status">rejected</span>
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
                                                <dd class="uppercase status">rejected</dd>
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
                                                <dd>No Comment</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <!-- 2nd level comments -->
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
                                                <dd class="uppercase status">rejected</dd>
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
                                                <dd>No Comment</dd>
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
                <a href="./edit-prv-form.php" class="btn btn-success uppercase px-5 rounded-0">Edit</a>
                <button class="btn btn-danger uppercase px-5 rounded-0">Delete</button>
            </div>


            <!-- Process form modal -->
            <!-- Modal (Form submitted) -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                id="modal_show_btn">
                Launch demo modal
            </button>

            <!-- Bootstrap Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h5 class="modal-title text-center w-100">
                                Kindly Fill Details
                            </h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label uppercase">Name:</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="comment" class="form-label uppercase">Comment:</label>
                                    <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
                                    <textarea name="comment" id="" cols="30" rows="6" class="form-control"
                                        id="comment"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn-block btn_primary rounded-0 uppercase">Complete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>