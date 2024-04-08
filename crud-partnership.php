<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: admin.php');
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/travel-logo.png">
    <title>See and Explore</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap');

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 0.875rem;
            opacity: 1;
            overflow: scroll;
            margin: 0;
        }

        a {
            cursor: pointer;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        li {
            list-style: none;
        }

        h4 {
            font-size: 1.275rem;
        }

        .wrapper {
            align-items: stretch;
            display: flex;
            width: 100%;
        }

        #sidebar {
            max-width: 264px;
            min-width: 264px;
            background-color: var(--bs-dark);
            transition: all 0.35s ease-in-out;
        }

        .main {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-width: 0;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            width: 100%;
            background-color: var(--bs-primary-bg-subtle-light);
        }

        /*Sidebar Element*/
        .sidebar-logo {
            padding: 1.15rem;
            font-weight: 600;

        }

        .sidebar-logo a {
            color: #fff;
            font-size: 1.15rem;
            font-weight: 600;
        }

        .sidebar-nav {
            flex-grow: 1;
            list-style: none;
            margin-bottom: 0;
            margin-left: 0;
            padding-left: 0;
        }

        .sidebar-header {
            color: #e9ecef;
            font-size: .75rem;
            padding: 1.5rem 1.5rem .375rem;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #e9ecef;
            position: relative;
            display: block;
            font-size: 0.875rem;
        }

        .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem 0.075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;

        }

        .avatar {
            height: 40px;
            width: 40px;
        }

        .navbar-expand .navbar-nav {
            margin-left: auto;
        }

        .content {
            flex: 1;
            max-width: 100vw;
            width: 100vw;
        }

        @media (min-width:768px) {
            .content {
                max-width: auto;
                width: auto;
            }

            .card {
                box-shadow: 0 0 .875rem 0 rgba(34, 46, 60, .05);
                margin-bottom: 24px;
            }

            .illustration {
                background-color: var(--bs-primary-bg-subtle);
                color: var(--bs-emphasis-color);
                padding: 10px;
            }

            .illustration-img {
                max-width: 150px;
                min-width: 100%;
            }
        }

        /* Sidebar Toggle*/

        #sidebar.collapsed {
            margin-left: -264px;
        }

        /*footer*/
        @media (max-width:767.98) {

            .navbar,
            footer {
                width: 100vw;
            }
        }

        /*Night Mode*/
        .theme-toggle {
            position: fixed;
            top: 50%;
            transform: translateY(-65%);
            text-align: center;
            z-index: 10;
            right: 0;
            left: auto;
            border: none;
            background-color: var(--bs-body-color);
        }

        html[data-bs-theme="dark"] .theme-toggle .fa-sun,
        html[data-bs-theme="light"] .theme-toggle .fa-moon {
            cursor: pointer;
            padding: 10px;
            display: block;
            font-size: 1.25rem;
            color: #FFF;
        }

        html[data-bs-theme="dark"] .theme-toggle .fa-moon {
            display: none;
        }

        html[data-bs-theme="light"] .theme-toggle .fa-sun {
            display: none;
        }

        @media (min-width:600px) {
            .row {
                display: flex;
            }
        }


        .side-nav {
            background-color: #26b7d8;
        }

        a {
            text-decoration: none!important;
        }

        a:hover {
            color: #fff!important;
        }

        li {
            list-style: none;
        }
    </style>

<body>
    <div class="wrapper">
        <?php 
            include("./components/dashboardSidebar.php");
        ?>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span><i class="fas fa-bars fa-1x"></i></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link">
                                <img src="assets/images/businessman.png" class="avatar img-fluid rounded"
                                    alt="Admin Profile">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="adminLogout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 px-2">
                <?php
                include('crud-partnershipContent.php');
                ?>
            </main>
        </div>
    </div>
    <script src="assets/js/adminDashboardV2.js"></script>
</body>

</html>