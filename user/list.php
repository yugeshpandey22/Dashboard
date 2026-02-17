<?php include '../includes/header.php'; ?>
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header mb-4">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>User</span> / <span class="text-main font-bold">List</span>
                <h1 class="page-title">User List</h1>
            </div>
             <div class="header-actions">
                <a href="create.php" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg me-1"></i> Add User
                </a>
            </div>
        </header>

        <div class="card mb-4" style="margin-top: 1rem;">
             <div class="card-header-stats bg-primary-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; padding: 1rem; border-radius: 0.5rem; color: #fff; box-shadow: var(--shadow-md);">
                 <h6 class="text-white mb-0 font-bold">All Users</h6>
                 <p class="text-sm opacity-8 mb-0">See all registered users</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1" style="height: 40px; width: 40px; border-radius: 0.5rem; margin-right: 1rem;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">John Michael</h6>
                                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                                    <p class="text-xs text-secondary mb-0">Organization</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-success-grad text-white px-2 py-1" style="border-radius: 0.375rem; font-size: 0.75rem;">Online</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                </td>
                                <td class="align-middle">
                                    <a href="edit.php" class="text-secondary font-weight-bold text-xs" style="text-decoration: none;">Edit</a>
                                </td>
                            </tr>
                             <!-- Row 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1" style="height: 40px; width: 40px; border-radius: 0.5rem; margin-right: 1rem;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Alexa Liras</h6>
                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Programmer</p>
                                    <p class="text-xs text-secondary mb-0">Developer</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-dark-grad text-white px-2 py-1" style="border-radius: 0.375rem; font-size: 0.75rem;">Offline</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                </td>
                                <td class="align-middle">
                                    <a href="edit.php" class="text-secondary font-weight-bold text-xs" style="text-decoration: none;">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
</div>
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
