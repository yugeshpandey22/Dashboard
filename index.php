<?php
// Simple Chart Logic using Inline SVG (Chart.js replacement)
function generateLineChart($height, $path, $gradientStart, $gradientEnd) {
    return '
    <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="width:100%; height:100%; overflow:visible;">
        <defs>
            <linearGradient id="chartGrad-' . uniqid() . '" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#fff" stop-opacity="0.5"/>
                <stop offset="100%" stop-color="#fff" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <!-- Grid -->
        <g stroke="rgba(255,255,255,0.2)" stroke-width="0.5" stroke-dasharray="2">
            <line x1="0" y1="40" x2="100" y2="40" />
            <line x1="0" y1="25" x2="100" y2="25" />
            <line x1="0" y1="10" x2="100" y2="10" />
        </g>
        <!-- Line -->
        <path d="' . $path . '" fill="none" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round"/>
        <!-- Dots -->
        <circle cx="20" cy="35" r="1.5" fill="#fff" />
        <circle cx="40" cy="20" r="1.5" fill="#fff" />
        <circle cx="60" cy="30" r="1.5" fill="#fff" />
        <circle cx="80" cy="15" r="1.5" fill="#fff" />
    </svg>';
}

function generateBarChart() {
    return '
    <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="width:100%; height:100%;">
        <g fill="#fff">
            <rect x="5" y="30" width="6" height="20" rx="2" />
            <rect x="15" y="20" width="6" height="30" rx="2" />
            <rect x="25" y="35" width="6" height="15" rx="2" />
            <rect x="35" y="10" width="6" height="40" rx="2" />
            <rect x="45" y="25" width="6" height="25" rx="2" />
            <rect x="55" y="32" width="6" height="18" rx="2" />
            <rect x="65" y="15" width="6" height="35" rx="2" />
            <rect x="75" y="38" width="6" height="12" rx="2" />
            <rect x="85" y="22" width="6" height="28" rx="2" />
        </g>
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
                <span>Pages</span> / <span class="text-main font-bold">Dashboard</span>
                <h1 class="page-title">Dashboard</h1>
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

        <!-- Stats Cards Row -->
        <section class="grid-4 mb-4">
            <!-- Card 1 -->
            <div class="card">
                <div class="card-icon-box bg-dark-grad">
                    <i class="bi bi-hdd-stack"></i>
                </div>
                <div class="card-header-stats">
                    <div class="stats-container">
                        <p class="stats-label">Bookings</p>
                        <h3 class="stats-value">281</h3>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-success font-bold">+55%</span> than last week
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <div class="card-icon-box bg-primary-grad">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>
                <div class="card-header-stats">
                    <div class="stats-container">
                        <p class="stats-label">Today's Users</p>
                        <h3 class="stats-value">2,300</h3>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-success font-bold">+3%</span> than last month
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <div class="card-icon-box bg-success-grad">
                    <i class="bi bi-shop"></i>
                </div>
                <div class="card-header-stats">
                    <div class="stats-container">
                        <p class="stats-label">Revenue</p>
                        <h3 class="stats-value">34k</h3>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-success font-bold">+1%</span> than yesterday
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card">
                <div class="card-icon-box bg-info-grad">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <div class="card-header-stats">
                    <div class="stats-container">
                        <p class="stats-label">Followers</p>
                        <h3 class="stats-value">+91</h3>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-muted">Just updated</span>
                </div>
            </div>
        </section>

        <!-- Charts Row -->
        <section class="grid-3 mb-4">
            <!-- Website Views (Bar) -->
            <div class="card">
                <div class="chart-box bg-primary-grad">
                    <?php echo generateBarChart(); ?>
                </div>
                <div class="card-body-chart">
                    <h6 class="font-bold mb-1">Website Views</h6>
                    <p class="text-sm text-muted mb-3">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                    <i class="bi bi-clock"></i> campaign sent 2 days ago
                </div>
            </div>

            <!-- Daily Sales (Line) -->
            <div class="card">
                <div class="chart-box bg-success-grad">
                     <?php echo generateLineChart(200, "M0,40 Q20,35 40,20 T80,15 T100,5", "#fff", "#fff"); ?>
                </div>
                <div class="card-body-chart">
                    <h6 class="font-bold mb-1">Daily Sales</h6>
                    <p class="text-sm text-muted mb-3">(<span class="font-bold text-success">+15%</span>) increase in today sales.</p>
                </div>
                <div class="card-footer">
                    <i class="bi bi-clock"></i> updated 4 min ago
                </div>
            </div>

            <!-- Completed Tasks (Line) -->
            <div class="card">
                <div class="chart-box bg-dark-grad">
                    <?php echo generateLineChart(200, "M0,35 Q30,45 50,20 T100,20", "#fff", "#fff"); ?>
                </div>
                <div class="card-body-chart">
                    <h6 class="font-bold mb-1">Completed Tasks</h6>
                    <p class="text-sm text-muted mb-3">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                    <i class="bi bi-clock"></i> just updated
                </div>
            </div>
        </section>

        <!-- Projects & Orders Row -->
        <section class="grid-2-1">
            <!-- Projects Table -->
            <div class="card">
                 <div class="d-flex justify-between align-center mb-4">
                     <div>
                         <h6 class="font-bold mb-1">Projects</h6>
                         <p class="text-sm text-muted">
                             <i class="bi bi-check-lg text-info"></i>
                             <span class="font-bold">30 done</span> this month
                         </p>
                     </div>
                     <i class="bi bi-three-dots-vertical text-muted"></i>
                 </div>
                 
                 <div class="table-responsive">
                     <table class="custom-table">
                         <thead>
                             <tr>
                                 <th>Companies</th>
                                 <th>Members</th>
                                 <th>Budget</th>
                                 <th>Completion</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div class="avatar-sm d-flex align-center justify-center bg-light rounded-circle mr-3" style="margin-right:0.75rem;">
                                         <i class="bi bi-bootstrap-fill text-primary" style="font-size:1.2rem;"></i>
                                     </div>
                                     <span class="text-sm font-bold">Material XD Version</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" title="Ryan Tompson">R</div>
                                         <div class="avatar" title="Romina Hadid">R</div>
                                         <div class="avatar" title="Alexander Smith">A</div>
                                         <div class="avatar" title="Jessica Doe">J</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">$14,000</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 bg-light rounded-pill" style="height:4px; background:#e9ecef;">
                                         <div class="bg-info-grad rounded-pill" style="width:60%; height:100%;"></div>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div class="avatar-sm d-flex align-center justify-center bg-light rounded-circle mr-3" style="margin-right:0.75rem;">
                                         <i class="bi bi-shop text-info" style="font-size:1.2rem;"></i>
                                     </div>
                                     <span class="text-sm font-bold">Add Progress Track</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" title="Ryan Tompson">R</div>
                                         <div class="avatar" title="Jessica Doe">J</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">$3,000</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 bg-light rounded-pill" style="height:4px; background:#e9ecef;">
                                         <div class="bg-success-grad rounded-pill" style="width:10%; height:100%;"></div>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div class="avatar-sm d-flex align-center justify-center bg-light rounded-circle mr-3" style="margin-right:0.75rem;">
                                         <i class="bi bi-slack text-danger" style="font-size:1.2rem;"></i>
                                     </div>
                                     <span class="text-sm font-bold">Fix Platform Errors</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" title="Ryan Tompson">R</div>
                                         <div class="avatar" title="Romina Hadid">R</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">Not set</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 bg-light rounded-pill" style="height:4px; background:#e9ecef;">
                                         <div class="bg-success-grad rounded-pill" style="width:100%; height:100%;"></div>
                                     </div>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
            </div>

            <!-- Orders Overview -->
            <div class="card">
                <div class="mb-4">
                    <h6 class="font-bold mb-1">Orders overview</h6>
                    <p class="text-sm text-muted">
                        <i class="bi bi-arrow-up text-success"></i>
                        <span class="font-bold">24%</span> this month
                    </p>
                </div>

                <div class="timeline-activity">
                    <!-- Item 1 -->
                    <div class="d-flex mb-4 position-relative">
                        <div style="width: 20px; display: flex; flex-direction: column; align-items: center; margin-right: 1rem;">
                            <i class="bi bi-bell-fill text-success" style="z-index: 1; background: #fff;"></i>
                            <div style="width: 2px; height: 100%; background: #e9ecef; position: absolute; top: 20px;"></div>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0">$2400, Design changes</h6>
                            <p class="text-xs text-muted mb-0">22 DEC 7:20 PM</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="d-flex mb-4 position-relative">
                        <div style="width: 20px; display: flex; flex-direction: column; align-items: center; margin-right: 1rem;">
                            <i class="bi bi-code-slash text-danger" style="z-index: 1; background: #fff;"></i>
                            <div style="width: 2px; height: 100%; background: #e9ecef; position: absolute; top: 20px;"></div>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0">New order #1832412</h6>
                            <p class="text-xs text-muted mb-0">21 DEC 11 PM</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="d-flex mb-4 position-relative">
                        <div style="width: 20px; display: flex; flex-direction: column; align-items: center; margin-right: 1rem;">
                            <i class="bi bi-cart-fill text-info" style="z-index: 1; background: #fff;"></i>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0">Server payments for April</h6>
                            <p class="text-xs text-muted mb-0">21 DEC 9:34 PM</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>

    </div> <!-- Close Wrapper -->

    <script src="assets/js/script.js"></script>
</body>
</html>
