<?php include '../includes/header.php'; ?>
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header mb-4">
             <div class="breadcrumb-nav">
                 <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>User</span> / <span class="text-main font-bold">Account</span>
                <h1 class="page-title">Account Settings</h1>
            </div>
        </header>

        <div class="grid-2-1" style="grid-template-columns: 1fr 3fr; gap: 1.5rem;">
            <!-- Sidebar / Nav for Settings -->
            <div class="card p-3">
                 <ul class="nav flex-column" style="list-style: none; padding: 0;">
                     <li class="nav-item mb-2">
                         <a href="#" class="nav-link active" style="color: var(--primary-color); font-weight: bold; background: rgba(233,30,99,0.1); border-radius: 0.5rem;">
                             <i class="bi bi-person me-2"></i> Profile
                         </a>
                     </li>
                      <li class="nav-item mb-2">
                         <a href="#" class="nav-link text-muted">
                             <i class="bi bi-shield-lock me-2"></i> Security
                         </a>
                     </li>
                      <li class="nav-item mb-2">
                         <a href="#" class="nav-link text-muted">
                             <i class="bi bi-bell me-2"></i> Notifications
                         </a>
                     </li>
                      <li class="nav-item mb-2">
                         <a href="#" class="nav-link text-muted text-danger">
                             <i class="bi bi-trash me-2"></i> Delete Account
                         </a>
                     </li>
                 </ul>
            </div>
            
            <!-- Main Settings Content -->
            <div class="card p-4">
                <h5 class="font-bold mb-4">Security Settings</h5>
                
                <form>
                     <div class="mb-4">
                        <label class="form-label">Current Password</label>
                        <input type="password" class="form-control" placeholder="******">
                    </div>
                     <div class="mb-4">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" placeholder="New Password">
                    </div>
                     <div class="mb-4">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    
                    <h6 class="font-bold mt-4 mb-3">Two-Factor Authentication</h6>
                    <div class="d-flex align-items-center justify-content-between p-3 border rounded mb-3">
                        <div>
                            <span class="d-block text-sm font-bold">Authenticator App</span>
                            <span class="d-block text-xs text-muted">Use an app to generate codes.</span>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm">Setup</button>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">Update Security</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</div>
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
