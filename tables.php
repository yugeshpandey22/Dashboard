<?php include 'includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span class="text-main font-bold">Tables</span>
                <h1 class="page-title">Tables</h1>
            </div>
        </header>

        <!-- Authors Table -->
        <div class="card mb-4">
            <div class="card-header-stats bg-primary-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; height: auto; min-height: auto; padding: 1rem; border-radius: 0.5rem; justify-content: flex-start; align-items: center; color: #fff; box-shadow: var(--shadow-md);">
                 <h6 class="text-white mb-0 font-bold">Authors Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
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
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" style="text-decoration: none; font-weight: 700;">Edit</a>
                                </td>
                            </tr>
                            
                            <!-- Row 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2" style="height: 40px; width: 40px; border-radius: 0.5rem; margin-right: 1rem;">
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
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" style="text-decoration: none; font-weight: 700;">Edit</a>
                                </td>
                            </tr>

                             <!-- Row 3 -->
                             <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3" style="height: 40px; width: 40px; border-radius: 0.5rem; margin-right: 1rem;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Laurent Perrier</h6>
                                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Executive</p>
                                    <p class="text-xs text-secondary mb-0">Projects</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-success-grad text-white px-2 py-1" style="border-radius: 0.375rem; font-size: 0.75rem;">Online</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" style="text-decoration: none; font-weight: 700;">Edit</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="card">
            <div class="card-header-stats bg-info-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; height: auto; min-height: auto; padding: 1rem; border-radius: 0.5rem; justify-content: flex-start; align-items: center; color: #fff; box-shadow: var(--shadow-md);">
                 <h6 class="text-white mb-0 font-bold">Projects Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Completion</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm me-3" alt="asana" style="height: 36px; width: 36px; margin-right: 1rem;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Asana</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$2,500</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">Working</span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-bold" style="margin-right: 0.5rem;">60%</span>
                                        <div style="width: 100px; height: 6px; background: #f0f0f0; border-radius: 3px;">
                                            <div style="width: 60%; height: 6px; background: var(--grad-info); border-radius: 3px;"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-secondary mb-0">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Row 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/github.svg" class="avatar avatar-sm me-3" alt="github" style="height: 36px; width: 36px; margin-right: 1rem;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Github</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$5,000</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">Done</span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-bold" style="margin-right: 0.5rem;">100%</span>
                                        <div style="width: 100px; height: 6px; background: #f0f0f0; border-radius: 3px;">
                                            <div style="width: 100%; height: 6px; background: var(--grad-success); border-radius: 3px;"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-secondary mb-0">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

</div> <!-- Close Wrapper -->

<script src="assets/js/script.js"></script>
</body>
</html>
