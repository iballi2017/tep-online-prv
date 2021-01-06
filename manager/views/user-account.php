<!-- Headerfull -->
<?php include "../includes/headerfull.php";?>

<!--  -->
<div class="container-fluid" id="user_account_page">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 uppercase">Profile</h1>
            </div>
            <section class="mb-4 px-3 border profile_details">
                <div class="table-responsive">
                    <table class="table table-borderless w-100">
                        <thead class="border-bottom">
                            <tr>
                                <th scope="col" class="min_w_350px uppercase">Account Details</th>
                                <th scope="col" class="min_w_200px uppercase">Position</th>
                                <th scope="col" class="min_w_200px uppercase">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <ul class="list_style_0 p-0 m-0">
                                        <li class="uppercase">
                                            <span data-feather="user" class="mr-2"></span> Oluwatobi Adeoye
                                        </li>
                                        <li><span data-feather="mail" class="mr-2"></span>Adeoyeoluwatobi.123@gmail.com
                                        </li>
                                        <li><span data-feather="phone" class="mr-2"></span>07065194485</li>
                                    </ul>
                                </th>
                                <td> <div class="border-left p-2 uppercase">Manager - TEP VENTURES</div></td>
                                <td>
                                    <div class="border-left p-2">19, 3tee Street, Ajegunle/iroko Town, Ado Odo/otta, Ogun, Nigeria</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="mb-4 p-3 border">
                <div class="border-bottom">
                    <h1 class="h5">Account Details</h1>
                </div>
                <div class="py-3">
                    <form action="#">
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name" class="uppercase point_cursor">First Name and Last Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="amountInWords" class="uppercase point_cursor">Position</label>
                                    <div class="select_drop_wrapper">
                                        <select class="custom-select">
                                            <option selected>Select Position</option>
                                            <option value="UI/UX DESIGNER - TEP TECH" class="uppercase">UI/UX DESIGNER - TEP TECH</option>
                                            <option value="Software Developer" class="uppercase">Software Developer</option>
                                            <option value="Graphics Designer" class="uppercase">Graphics Designer</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email" class="uppercase point_cursor">Email Address</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="phone" class="uppercase point_cursor">Phone Number</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <label for="streetAdrress" class="uppercase point_cursor">Street Address</label>
                                <input type="text" class="form-control" id="streetAdrress">
                            </div>
                        </div>
                        <button type="submit" class="btn px-5 btn_primary rounded-0 uppercase">Save Account
                            Details</button>
                    </form>
                </div>
            </section>

            <section class="mb-4 p-3 border">
                <div class="border-bottom">
                    <h1 class="h5">Password</h1>
                </div>
                <div class="py-3">
                    <form action="#">
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="old_password" class="uppercase point_cursor">Old Password</label>
                                <input type="password" class="form-control" id="old_password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="new_password" class="uppercase point_cursor">New Password</label>
                                <input type="password" class="form-control" id="new_password">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="confirm_new_password" class="uppercase point_cursor">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm_new_password">
                            </div>
                        </div>
                        <button type="submit" class="btn px-5 btn_primary rounded-0 uppercase">Save Password</button>
                    </form>
                </div>
            </section>
        </main>

    </div>
</div>
<!-- Footer -->
<?php include "../includes/footer.php";?>