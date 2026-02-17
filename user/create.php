<?php include '../includes/header.php'; ?>
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header mb-4">
            <div class="breadcrumb-nav">
                 <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>User</span> / <span class="text-main font-bold">Create</span>
                <h1 class="page-title">Create User</h1>
            </div>
             <div class="header-actions">
                <a href="list.php" class="btn btn-primary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Back to List
                </a>
            </div>
        </header>

        <div class="card p-4">
            <h5 class="font-bold mb-4">User Details</h5>
            <form>
                <div class="grid-3" style="grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div>
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="johndoe">
                    </div>
                     <div>
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="+1 234 567 890">
                    </div>
                     <div>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="******">
                    </div>
                     <div>
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="******">
                    </div>
                </div>
                 <div class="mt-4">
                    <label class="form-label">Bio / About</label>
                    <textarea class="form-control" rows="4" placeholder="Tell us about yourself..."></textarea>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-link text-secondary me-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>

    </main>
</div>
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
