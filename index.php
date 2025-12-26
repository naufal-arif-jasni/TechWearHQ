<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>TechWear HQ - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">TechWear HQ</h3>
                    <?php if(isset($_GET['error'])) echo "<div class='alert alert-danger'>".$_GET['error']."</div>"; ?>
                    <?php if(isset($_GET['msg'])) echo "<div class='alert alert-success'>".$_GET['msg']."</div>"; ?>
                    
                    <form action="auth_action.php?action=login" method="POST">
                        <div class="mb-3"><label>Username</label><input type="text" name="username" class="form-control" required></div>
                        <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <hr>
                    <p class="text-center">New here? <a href="register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>