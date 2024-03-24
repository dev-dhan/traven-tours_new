<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: admin.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome
        <?php echo $username; ?>
    </title>
    <style>
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #002C59;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            /* font-size: 28px; */
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .active-nav {
            color: white !important;
            text-decoration: underline !important;
        }
    </style>
</head>

<body>
    <div class="sidenav">
        <a href="#" class="active-nav">Admin Section</a>
        <a href="services.php">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="main">
        <?php
        include('adminUser.php');
        ?>
    </div>
</body>

</html>