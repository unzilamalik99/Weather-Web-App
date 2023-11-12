<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/registration_style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Weather App Project | Login</title>
</head>

<body>
    <!-- ================================== Form header ========================================== -->
    <div class="container">
        <div class="title">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
                <h2>Weather</h2>
            </div>
            <h3>Login</h3>
        </div>

        <!-- ================================== Alert messages ========================================== -->
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success">
                <?php echo $_GET['success']; ?>
            </p>
        <?php } ?>
        
            <!-- ================================== Input data form ========================================== -->
        <form action="php/login.php" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Email or Username</label>
                    <input type="text" id="email" name="email_or_username" placeholder="Enter Your Email/Username"
                        required>
                </div>
                <div class="input_box">
                    <label for="name">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Enter Your Password" required>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Login">
            </div>
            <h4>Don't have an account? <a href="signupForm.php">Signup</a>
            </h4>
        </form>
    </div>

</body>

</html>