<html>
<?php
include("header.php");
?>
<title>Register</title>

<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title">Register</p>
                <form action="proses_register.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" placeholder="Username" name="txtusername">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="txtpassword">
                    </div>
                    <button type="submit" class="btn1" name="btnlogin">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>