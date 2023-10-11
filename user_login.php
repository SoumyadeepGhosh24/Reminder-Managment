<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS|  Login Page</title>
    <!-- jQuery file -->
    <script src="../includes/jquery_latest.js"></script>
    <!-- Bootstrap file -->
    <link rel="stylesheet" text="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" text="text/css" href="css/style.css">
</head>
<body>
<div class="row">
        <div class="col-md-3 m-auto" id="login_home_page">
            <center><h3 style="background-color: #5a8f7b;padding:5px; width:15vw">User Login</h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <center></center><input type="submit" name="userLogin" value="Login" class="btn btn-warning"></center>
                </div>
            </form>
            <center></center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
        </div>
    </div>
</body>
</html>