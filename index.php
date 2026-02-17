<?php
// Chart Logic - Redesigned for "Green on White" clean aesthetic

function generateLineChart($path) {
    // Green line chart with grid
    return '
    <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="width:100%; height:100%; overflow:visible;">
        <!-- Grid Lines -->
        <g stroke="#e0e0e0" stroke-width="0.5" stroke-dasharray="0">
            <line x1="0" y1="40" x2="100" y2="40" />
            <line x1="0" y1="25" x2="100" y2="25" />
            <line x1="0" y1="10" x2="100" y2="10" />
        </g>
        
        <!-- Axis Labels (Simplified) -->
        <text x="0" y="48" font-size="3" fill="#999">A</text>
        <text x="10" y="48" font-size="3" fill="#999">M</text>
        <text x="20" y="48" font-size="3" fill="#999">J</text>
        <text x="30" y="48" font-size="3" fill="#999">J</text>
        <text x="40" y="48" font-size="3" fill="#999">A</text>
        <text x="50" y="48" font-size="3" fill="#999">S</text>
        <text x="60" y="48" font-size="3" fill="#999">O</text>
        <text x="70" y="48" font-size="3" fill="#999">N</text>
        <text x="80" y="48" font-size="3" fill="#999">D</text>

        <!-- The Line -->
        <path d="' . $path . '" fill="none" stroke="#4caf50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        
        <!-- Points -->
        <circle cx="20" cy="35" r="1.5" fill="#4caf50" />
        <circle cx="40" cy="20" r="1.5" fill="#4caf50" />
        <circle cx="60" cy="30" r="1.5" fill="#4caf50" />
        <circle cx="80" cy="15" r="1.5" fill="#4caf50" />
    </svg>';
}

function generateBarChart() {
    // Green bars
    return '
    <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="width:100%; height:100%;">
        <!-- Grid -->
        <line x1="0" y1="40" x2="100" y2="40" stroke="#e0e0e0" stroke-width="0.5"/>
        <line x1="0" y1="20" x2="100" y2="20" stroke="#e0e0e0" stroke-width="0.5"/>

        <g fill="#4caf50">
            <rect x="5" y="30" width="8" height="20" rx="2" />
            <rect x="18" y="22" width="8" height="28" rx="2" /> <!-- taller -->
            <rect x="31" y="35" width="8" height="15" rx="2" />
            <rect x="44" y="28" width="8" height="22" rx="2" />
            <rect x="57" y="15" width="8" height="35" rx="2" />
            <rect x="70" y="10" width="8" height="40" rx="2" /> <!-- max -->
            <rect x="83" y="5" width="8" height="45" rx="2" /> <!-- max -->
        </g>
        
        <!-- Labels -->
        <text x="7" y="58" font-size="4" fill="#999">M</text>
        <text x="20" y="58" font-size="4" fill="#999">T</text>
        <text x="33" y="58" font-size="4" fill="#999">W</text>
        <text x="46" y="58" font-size="4" fill="#999">T</text>
        <text x="59" y="58" font-size="4" fill="#999">F</text>
        <text x="72" y="58" font-size="4" fill="#999">S</text>
        <text x="85" y="58" font-size="4" fill="#999">S</text>
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
                <p class="text-sm text-muted">Check the sales, value and bounce rate by country.</p>
            </div>
            
            <div class="header-actions">
                <div class="search-wrapper d-none d-md-block"> 
                    <input type="text" class="search-input" placeholder="Type here...">
                </div>
                
                <button class="action-btn"><i class="bi bi-person-circle"></i></button>
                <button class="action-btn"><i class="bi bi-gear-fill"></i></button>
                <button class="action-btn">
                     <i class="bi bi-bell-fill"></i>
                </button>
            </div>
        </header>

        <!-- Stats Cards Row (New Design: Side-by-side with Black Icon) -->
        <section class="grid-4 mb-4">
            <!-- Card 1 -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
                <div class="d-flex justify-between">
                    <div>
                         <p class="text-sm text-muted mb-0 font-bold">Today's Money</p>
                         <h4 class="font-bold mb-0 text-dark">$53k</h4>
                    </div>
                     <div style="width: 48px; height: 48px; background: linear-gradient(195deg, #323a54, #1a2035); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: var(--shadow-md);">
                        <i class="bi bi-currency-dollar" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-success font-bold text-sm">+55%</span> <span class="text-sm text-muted">than last week</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
               <div class="d-flex justify-between">
                    <div>
                         <p class="text-sm text-muted mb-0 font-bold">Today's Users</p>
                         <h4 class="font-bold mb-0 text-dark">2,300</h4>
                    </div>
                     <div style="width: 48px; height: 48px; background: linear-gradient(195deg, #323a54, #1a2035); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: var(--shadow-md);">
                        <i class="bi bi-person-fill" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-success font-bold text-sm">+3%</span> <span class="text-sm text-muted">than last month</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
                <div class="d-flex justify-between">
                    <div>
                         <p class="text-sm text-muted mb-0 font-bold">New Clients</p>
                         <h4 class="font-bold mb-0 text-dark">3,462</h4>
                    </div>
                     <div style="width: 48px; height: 48px; background: linear-gradient(195deg, #323a54, #1a2035); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: var(--shadow-md);">
                        <i class="bi bi-person-plus-fill" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-danger font-bold text-sm">-2%</span> <span class="text-sm text-muted">than yesterday</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
               <div class="d-flex justify-between">
                    <div>
                         <p class="text-sm text-muted mb-0 font-bold">Sales</p>
                         <h4 class="font-bold mb-0 text-dark">$103,430</h4>
                    </div>
                     <div style="width: 48px; height: 48px; background: linear-gradient(195deg, #323a54, #1a2035); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: var(--shadow-md);">
                        <i class="bi bi-cart-fill" style="font-size: 1.5rem;"></i>
                    </div>
                </div>
                <div class="mt-3">
                   <span class="text-success font-bold text-sm">+5%</span> <span class="text-sm text-muted">than yesterday</span>
                </div>
            </div>
        </section>

        <!-- Charts Row (New Design: Clean White Cards with Green Charts) -->
        <section class="grid-3 mb-4">
            
            <!-- Website Views (Bar) -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
                <div class="mb-2">
                    <h6 class="font-bold mb-1">Website Views</h6>
                    <p class="text-sm text-muted mb-0">Last Campaign Performance</p>
                </div>
                <div class="chart-box-clean" style="height: 200px; width: 100%;">
                    <?php echo generateBarChart(); ?>
                </div>
                
                <div class="border-top mt-3 pt-3 text-muted text-sm d-flex align-center">
                    <i class="bi bi-clock me-1" style="margin-right: 0.5rem;"></i> campaign sent 2 days ago
                </div>
            </div>

            <!-- Daily Sales (Line) -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
                <div class="mb-2">
                    <h6 class="font-bold mb-1">Daily Sales</h6>
                    <p class="text-sm text-muted mb-0">(<span class="font-bold text-success">+15%</span>) increase in today sales.</p>
                </div>
                 <div class="chart-box-clean" style="height: 200px; width: 100%;">
                     <?php echo generateLineChart("M0,45 Q15,40 30,20 T45,35 T60,25 T75,40 T90,30 T100,35"); ?>
                </div>
                
                <div class="border-top mt-3 pt-3 text-muted text-sm d-flex align-center">
                     <i class="bi bi-clock me-1" style="margin-right: 0.5rem;"></i> updated 4 min ago
                </div>
            </div>

            <!-- Completed Tasks (Line) -->
            <div class="card" style="margin-top: 0; padding: 1.5rem;">
                <div class="mb-2">
                    <h6 class="font-bold mb-1">Completed Tasks</h6>
                    <p class="text-sm text-muted mb-0">Last Campaign Performance</p>
                </div>
                 <div class="chart-box-clean" style="height: 200px; width: 100%;">
                    <?php echo generateLineChart("M0,45 Q20,45 30,25 T50,20 T70,30 T85,25 T100,5"); ?>
                </div>
                
                <div class="border-top mt-3 pt-3 text-muted text-sm d-flex align-center">
                     <i class="bi bi-clock me-1" style="margin-right: 0.5rem;"></i> just updated
                </div>
            </div>
        </section>

        <!-- Projects & Orders Row -->
        <section class="grid-2-1">
            <!-- Projects Table -->
            <div class="card" style="margin-top: 0;">
                 <div class="d-flex justify-between align-center mb-4">
                     <div>
                         <h6 class="font-bold mb-1">Projects</h6>
                         <p class="text-sm text-muted">
                             <i class="bi bi-check-lg text-info"></i>
                             <span class="font-bold">30 done</span> this month
                         </p>
                     </div>
                     <i class="bi bi-three-dots-vertical text-muted cursor-pointer"></i>
                 </div>
                 
                 <div class="table-responsive">
                     <table class="custom-table" style="width: 100%;">
                         <thead>
                             <tr>
                                 <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Companies</th>
                                 <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                                 <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                                 <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Completion</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                         <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/logo-xd.svg" width="100%">
                                     </div>
                                     <span class="text-sm font-bold">Material XD Version</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" style="border: 2px solid #fff; background: #ccc;">R</div>
                                         <div class="avatar" style="border: 2px solid #fff; background: #666;">A</div>
                                         <div class="avatar" style="border: 2px solid #fff; background: #1a73e8;">J</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">$14,000</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 rounded-pill" style="height:4px; background:#f0f2f5;">
                                         <div class="bg-info-grad rounded-pill" style="width:60%; height:100%; background: var(--grad-info);"></div>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                          <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/logo-atlassian.svg" width="100%">
                                     </div>
                                     <span class="text-sm font-bold">Add Progress Track</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" style="border: 2px solid #fff; background: #00bcd4;">R</div>
                                         <div class="avatar" style="border: 2px solid #fff; background: #e91e63;">J</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">$3,000</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 rounded-pill" style="height:4px; background:#f0f2f5;">
                                         <div class="bg-success-grad rounded-pill" style="width:10%; height:100%; background: var(--grad-success);"></div>
                                     </div>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="d-flex align-center">
                                     <div style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                          <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/logo-slack.svg" width="100%">
                                     </div>
                                     <span class="text-sm font-bold">Fix Platform Errors</span>
                                 </td>
                                 <td>
                                     <div class="avatar-group">
                                         <div class="avatar" style="border: 2px solid #fff; background: #fb8c00;">R</div>
                                     </div>
                                 </td>
                                 <td class="font-bold text-muted text-sm">Not set</td>
                                 <td style="width: 30%;">
                                     <div class="w-100 rounded-pill" style="height:4px; background:#f0f2f5;">
                                         <div class="bg-success-grad rounded-pill" style="width:100%; height:100%; background: var(--grad-success);"></div>
                                     </div>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
            </div>

            <!-- Orders Overview -->
            <div class="card" style="margin-top: 0;">
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
                            <div style="width: 2px; height: 100%; background: #e9ecef; position: absolute; top: 15px; bottom: -20px;"></div>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0 text-dark">$2400, Design changes</h6>
                            <p class="text-xs text-muted mb-0">22 DEC 7:20 PM</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                     <div class="d-flex mb-4 position-relative">
                        <div style="width: 20px; display: flex; flex-direction: column; align-items: center; margin-right: 1rem;">
                            <i class="bi bi-code-slash text-danger" style="z-index: 1; background: #fff;"></i>
                           <div style="width: 2px; height: 100%; background: #e9ecef; position: absolute; top: 15px; bottom: -20px;"></div>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0 text-dark">New order #1832412</h6>
                            <p class="text-xs text-muted mb-0">21 DEC 11 PM</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="d-flex position-relative">
                        <div style="width: 20px; display: flex; flex-direction: column; align-items: center; margin-right: 1rem;">
                            <i class="bi bi-cart-fill text-info" style="z-index: 1; background: #fff;"></i>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold mb-0 text-dark">Server payments for April</h6>
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
