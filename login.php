<?php
// Simple hardcoded login for demonstration
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Demo Credentials
    // Email: admin@material.com
    // Password: admin
    if ($email === 'admin@material.com' && $password === 'admin') {
        // Redirect to dashboard
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid email or password (Try: admin@material.com / admin)';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Material Dashboard</title>
    <!-- Use Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="background: #fff;">

    <!-- Centered Layout: Full Screen Background with Centered Card -->
    <div class="auth-centered-layout" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        
        <div class="auth-centered-card">
            
            <div class="mb-4 text-center">
                <div style="width: 60px; height: 60px; background: var(--grad-info); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1rem; box-shadow: var(--shadow-md);">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h3 class="font-bold">Sign In</h3>
                <p class="text-muted text-sm">Enter your email and password</p>
            </div>

            <?php if($error): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-size: 0.875rem; text-align: center;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="admin@material.com" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>

                <div class="d-flex align-center justify-between mb-4">
                    <div class="d-flex align-center">
                        <input type="checkbox" id="rememberMe" style="margin-right: 0.5rem; accent-color: #1a73e8;">
                        <label for="rememberMe" class="text-sm text-muted" style="cursor: pointer;">Remember me</label>
                    </div>
                    <a href="#" class="text-sm font-bold text-info" style="text-decoration: none;">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-full bg-info-grad" style="background: var(--grad-info); color: #fff;">Sign In</button>

                <div class="auth-footer text-center mt-4">
                    Don't have an account? <a href="sign-up.php" class="text-info">Sign up</a>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
