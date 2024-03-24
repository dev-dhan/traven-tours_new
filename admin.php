<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #f1f1f1;
            /* max-width: 1000px; */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 35px 25px;
            background-color: white;
            max-width: 450px;
            margin: 0 auto;
            /* border-radius: 8px; */
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .loginbtn {
            background-color: #002C59;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .loginbtn:hover {
            opacity: 1;
        }

        .homepage-link {
            text-align: center;
        }

        .heading {
            text-align: center;
            font-weight: 600;
            font-size: 25px;
            margin-bottom: -10px;
            margin-top: 5px;
            color: #002C59;
        }

        .sub-heading {
            text-align: center;
            font-size: 14px;
            color: #002C59;
        }

        .admin-icon {
            /* background-color: #5C6061; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-icon img {
            height: 70px;
            width: 70px;
        }
    </style>
</head>

<body>
    <form action="adminLogin.php" method="post" class="container" id="loginForm">
        <div>
            <div class="admin-icon">
                <img src="assets/images/administrator.png" alt="">
            </div>
            <h1 class="heading">Admin Login</h1>
            <p class="sub-heading">Please fill in this form to login on the admin dashboard</p>
            <hr>
            <?php if (isset($_GET['error'])) { ?>

                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>

            <?php } ?>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            <input type="checkbox" onclick="togglePassword()"> Show Password

            <button type="submit" class="loginbtn">Login</button>
            <div class="homepage-link">
                <a href="index.php">go back to homepage</a>.</p>
            </div>
        </div>
    </form>

    <script>
        // Client-side validation (you can use a more robust method)
        document.getElementById("loginForm").addEventListener("submit", function (e) {
            e.preventDefault();
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            this.submit();
        });

        function togglePassword() {
            let passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>


</html>