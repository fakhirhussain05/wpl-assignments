<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <?php include "nav.php"; ?>
</head>
<body>


<div class="form-card">
    <h2>Create account</h2>
    <form method="POST">
        <label>Email</label>
        <input type="email" placeholder="Please enter your email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Please enter your password" name="password" required>

        <button class="btn-primary" name="signup">Sign up</button>
    </form>
</div>
</body>
</html>
