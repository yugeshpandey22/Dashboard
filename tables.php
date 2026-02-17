<?php
// Table Graphs Logic
function generateMiniLineChart() {
    return '
    <svg viewBox="0 0 50 20" preserveAspectRatio="none" style="width:50px; height:25px;">
        <path d="M0,15 Q5,10 10,12 T20,8 T30,15 T40,5 T50,10" fill="none" stroke="#4caf50" stroke-width="2" />
    </svg>';
}
function generateMiniBarChart() {
    return '
    <svg viewBox="0 0 50 20" preserveAspectRatio="none" style="width:50px; height:25px;">
        <rect x="0" y="5" width="4" height="15" fill="#e91e63" />
        <rect x="6" y="10" width="4" height="10" fill="#e91e63" />
        <rect x="12" y="2" width="4" height="18" fill="#e91e63" />
        <rect x="18" y="8" width="4" height="12" fill="#e91e63" />
        <rect x="24" y="12" width="4" height="8" fill="#e91e63" />
        <rect x="30" y="4" width="4" height="16" fill="#e91e63" />
    </svg>';
}
?>

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
            
             <div class="header-actions">
                <div class="search-wrapper d-none d-md-block"> <!-- Hidden on small mobile -->
                    <input type="text" class="search-input" placeholder="Search here...">
                </div>
                
                <button class="action-btn"><i class="bi bi-person-fill"></i></button>
                <button class="action-btn"><i class="bi bi-gear-fill"></i></button>
                <button class="action-btn">
                    <i class="bi bi-bell-fill"></i>
                    <span class="badge-dot"></span>
                </button>
            </div>
        </header>

        <!-- Authors Table -->
        <div class="card mb-4">
            <div class="card-header-stats bg-primary-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; height: auto; min-height: auto; padding: 1rem; border-radius: 0.5rem; justify-content: space-between; align-items: center; color: #fff; box-shadow: var(--shadow-md); display: flex;">
                 <h6 class="text-white mb-0 font-bold">Authors Table</h6>
                 <!-- Header Chart -->
                 <div style="opacity: 0.8;">
                     <svg width="100" height="40" viewBox="0 0 100 40">
                         <path d="M0,35 Q25,10 50,25 T100,5" fill="none" stroke="#fff" stroke-width="2" />
                     </svg>
                 </div>
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
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Activity</th>
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
                                 <td class="align-middle text-center">
                                    <?php echo generateMiniBarChart(); ?>
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
                                 <td class="align-middle text-center">
                                    <?php echo generateMiniBarChart(); ?>
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
                                 <td class="align-middle text-center">
                                    <?php echo generateMiniBarChart(); ?>
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
            <div class="card-header-stats bg-info-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; height: auto; min-height: auto; padding: 1rem; border-radius: 0.5rem; justify-content: space-between; align-items: center; color: #fff; box-shadow: var(--shadow-md); display: flex;">
                 <h6 class="text-white mb-0 font-bold">Projects Table</h6>
                 <!-- Header Chart -->
                 <div style="opacity: 0.8;">
                     <svg width="100" height="40" viewBox="0 0 100 40">
                         <rect x="0" y="10" width="10" height="30" fill="#fff" rx="2" />
                         <rect x="15" y="20" width="10" height="20" fill="#fff" rx="2" />
                         <rect x="30" y="5" width="10" height="35" fill="#fff" rx="2" />
                         <rect x="45" y="15" width="10" height="25" fill="#fff" rx="2" />
                         <rect x="60" y="25" width="10" height="15" fill="#fff" rx="2" />
                     </svg>
                 </div>
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
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Trend</th>
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
                                <td class="align-middle text-center">
                                     <?php echo generateMiniLineChart(); ?>
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
                                <td class="align-middle text-center">
                                     <?php echo generateMiniLineChart(); ?>
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
