<!DOCTYPE html>
<html>
<head>
    <title>Login — JobHunt</title>
    <link rel="stylesheet" href="style.css">
    <?php include "nav.php"; ?>
</head>
<body>



<div class="form-card">
    <h2>Login</h2>

    <form method="POST">
        <label>Email</label>
        <input type="email" placeholder="Please enter your email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Please enter your password" name="password" required>

        <button class="btn-primary" name="login">Login</button>

        <p style="margin-top:10px;">
            Don't have an account? <a href="signup.php">Sign Up</a>
        </p>
    </form>
</div>

</body>
</html>
