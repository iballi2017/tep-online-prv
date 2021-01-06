<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <!-- <link rel="icon" href="../assets/images/favicon.png" type="image/gif" sizes="16x16"> -->
    <!-- Normalize css -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Fontawesome 5.15.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Bootstrap 4.2.1 -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <!-- Bootstrap 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../stylesheet/main.css">
    <title>TEP PRV</title>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 bg-white">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 uppercase bg-dark" href="#">PRV Online</a>
        <button class="btn navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span data-feather="menu" class="icon"></span>
        </button>
        <span class="w-100"></span>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3 col-12 col-md-3 col-lg-2 d-flex flex-row justify-content-between">
            <li class="nav-item text-nowrap mr-3 mr-md-0">
                <a class="nav-link text-dark" href="../views/login.php">Login</a>
            <li class="nav-item text-nowrap">
                <a class="nav-link text-dark" href="../views/register.php">Register</a>
            </li>
            <li class="nav-item text-nowrap acct_wrapper ml-auto ml-md-0">
                <a href="#" class="nav-link text-dark user_account_toggler"><span data-feather="user"></span></a>
                <div class="acct_dropdown bg-danger bg-white shadow hide">
                    <ul class="list_style_0 px-3 py-2">
                        <li class="p-0">
                            <a href="../views/user-account.php" class="uppercase dropdown-item py-2 text_primary">My Profile</a>
                        </li>
                        <li class="p-0">
                            <a href="#" class="uppercase dropdown-item py-2 text_primary">Log Out</a>
                        </li>
                    </ul>
                </div>
                <!-- <a class="nav-link" href="#">Logout</a> -->
            </li>
        </ul>
    </nav>