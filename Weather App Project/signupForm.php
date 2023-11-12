<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/registration_style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Weather App Project | Sign Up</title>
</head>

<body>
    <!-- ================================== Form Header ========================================== -->
    <div class="container">
        <div class="title">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
                <h2>Weather</h2>
            </div>
            <h3>Register</h3>
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
        <form action="php/signup.php" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Your Username" required>
                </div>
                <div class="input_box">
                    <label for="name">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input_box">
                    <label for="name">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Enter Your Password" required>
                </div>
                <div class="input_box">
                    <label for="name">Confirm Password</label>
                    <input type="password" id="confimPass" name="confirm_password" placeholder="Confirm Your Password"
                        required>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Register">
            </div>
            <h4>Already registered? <a href="index.php">Login</a> </h4>
        </form>
    </div>

</body>

</html>