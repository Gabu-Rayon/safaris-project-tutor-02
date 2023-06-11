<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <div class="wrapper">
        <form action="sign-up-query.php" method="POST">
            <h1>Sign Up</h1>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Firstname" name="firstname">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Lastname" name="lastname">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="branch_id" placeholder="Branch ID">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
            </div>
            <div class="form-group">
                <select name="user_type" placeholder="Select User Type">
                    <option value="option">Select User Type</option>
                    <option value="admin">admin</option>
                    <option value="staff">staff</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control" name="register">Sign Up</button>
            </div>
            <br>
            <p>Already an Admin ? <a href="sign-in.php"> Sign In</a></p>
        </form>
    </div>
    </div>
</body>

</html>