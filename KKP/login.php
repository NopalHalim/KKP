<html>
<?php
include("header.php");
?>
<title>Login</title>

<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title">login</p>
                <form action="proses_login.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" placeholder="Username" name="txtusername">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="txtpassword">
                    </div>
                    <button type="submit" class="btn1" name="btnlogin">Login</button>
                    <small>you don't have an account? </small>
                    <a class="btn2" href="./register.php" role="button">register</a>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>