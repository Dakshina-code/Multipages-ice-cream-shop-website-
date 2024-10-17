<?php

include '../components/connect.php'

      if (isset($_POST['submit'])) {
    
                    $id = unique_id();

                    $name = $_POST['name'];
                    $name = filter_var($name, FILTER_SANITIZE_STRING);
                
                    $email = $_POST['email'];
                    $email = filter_var($email, FILTER_SANITIZE_STRING);

                    $pass = sha1($_POST['pass']);
                    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

                    $cpass = sha1($_POST['cpass']);
                    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

                    $image = $_FILES['image']['name'];
                    $image = filter_var($image, FILTER_SANITIZE_STRING);
                    $ext = pathinfo(path)

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register" />
        <h3>register now</h3>
        <div class="flex">
            <div class="col">
                <div class="input-field">
                    <P>your name <span>*</span></P>
                    <input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box" />
                </div>
                <div class="input-field">
                    <P>your email <span>*</span></P>
                    <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box" />
                </div>
            </div>
            <div class="col">
                <div class="input-field">
                    <P>your password <span>*</span></P>
                    <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box" />
                </div>
                <div class="input-field">
                    <P>confirm password <span>*</span></P>
                    <input type="password" name="cpass" placeholder="confirm your password" maxlength="50" required class="box" />
                </div>
            </div>
        </div>
        <div class="input-field">
            <P>your profile <span>*</span></P>
            <input type="file" name="image" accept="image/*" required class="box" />
        </div>
        <p class="link">already have an account? <a href="login.php">login now</a> </p>
        <input type="submit" name="submit" value="register now" class="btn">
        </form>
    </div>

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- custom js link -->
    <script src="../js/script.js"></script>

    <?php include '../components/alert.php'; ?>
</body>

</html>