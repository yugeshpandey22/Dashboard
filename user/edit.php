<?php include '../includes/header.php'; ?>
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header mb-4">
             <div class="breadcrumb-nav">
                 <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>User</span> / <span class="text-main font-bold">Edit</span>
                <h1 class="page-title">Edit User</h1>
            </div>
             <div class="header-actions">
                <a href="list.php" class="btn btn-primary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Back to List
                </a>
            </div>
        </header>

        <div class="card p-4">
            <h5 class="font-bold mb-4">Edit Profile</h5>
            <div class="d-flex align-items-center mb-4">
                 <img src="https://demos.creative-tim.com/material-dashboard/assets/img/bruce-mars.jpg" alt="profile" style="width: 80px; height: 80px; border-radius: 50%; margin-right: 1.5rem;">
                 <div>
                     <button class="btn btn-primary btn-sm">Change Photo</button>
                     <button class="btn btn-link text-danger btn-sm">Remove</button>
                 </div>
            </div>

            <form>
                <div class="grid-4" style="grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div>
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="Richard Davis">
                    </div>
                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" value="richard@example.com">
                    </div>
                     <div>
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" value="+1 234 567 890">
                    </div>
                     <div>
                        <label class="form-label">Role</label>
                        <select class="form-control" style="background: transparent;">
                            <option>Admin</option>
                            <option selected>User</option>
                            <option>Editor</option>
                        </select>
                    </div>
                </div>
                 <div class="mt-4">
                    <label class="form-label">Bio / About</label>
                    <textarea class="form-control" rows="4">CEO / Co-Founder of some cool startup.</textarea>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-link text-secondary me-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>

    </main>
</div>
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
