<?php
session_start();
// Start session if user manually navigates here while logged in? optional. 
// For now, let's just handle the form submission or simple "if logged in go to index"
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real app, validation & DB insert would happen here
    $_SESSION['user_id'] = 1; // Dummy user ID
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Material Dashboard</title>
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
    <div class="auth-centered-layout" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        
        <div class="auth-centered-card">
            
            <div class="mb-4 text-center">
                <div style="width: 60px; height: 60px; background: var(--grad-primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1rem; box-shadow: var(--shadow-md);">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <h3 class="font-bold">Sign Up</h3>
                <p class="text-muted text-sm">Create your account</p>
            </div>

            <form action="sign-up.php" method="POST"> 
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="John Doe" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="admin@material.com" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>

                <div class="d-flex align-center mb-4">
                     <input type="checkbox" id="terms" style="margin-right: 0.5rem; accent-color: #e91e63;" required>
                     <label for="terms" class="text-sm text-muted" style="cursor: pointer;">I agree the <a href="#" class="text-primary font-bold">Terms and Conditions</a></label>
                </div>

                <button type="submit" class="btn btn-primary btn-full">Sign Up</button>

                <div class="auth-footer text-center mt-4">
                    Already have an account? <a href="login.php" class="text-primary font-bold">Sign In</a>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
