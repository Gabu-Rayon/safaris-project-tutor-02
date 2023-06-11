<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="includes/style.css" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="wrapper">
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg">
            <?php echo $_SESSION['message']['text'] ?>
        </div>
        <script>
        (function() {
            // removing the message 3 seconds after the page load
            setTimeout(function() {
                document.querySelector('.msg').remove();
            }, 3000)
        })();
        </script>
        <?php
                endif;
                // clearing the message
                unset($_SESSION['message']);
            ?>
        <form action="sign-in-query.php" method="POST">
            <h1>Sign In</h1>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <div class="form-group">
                <select name="user_type" placeholder="Select User Type">
                    <option value="option">Select User Type</option>
                    <option value="admin">admin</option>
                    <option value="staff">staff</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control" name="sign_in">Login</button>
            </div>
            <br>
            <p>Don't Have an Account ? <a href="sign-up.php"> Sign Up</a></p>
        </form>
    </div>
</body>

</html>