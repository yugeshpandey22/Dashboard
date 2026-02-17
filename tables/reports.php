<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>Tables</span> / <span class="text-main font-bold">Reports</span>
                <h1 class="page-title">Reports</h1>
            </div>
             <div class="header-actions">
                 <button class="btn btn-outline-primary btn-sm"><i class="bi bi-calendar-event me-1"></i> Date Range</button>
                <button class="btn btn-primary btn-sm ms-2"><i class="bi bi-printer me-1"></i> Print Report</button>
            </div>
        </header>

        <!-- Summary Cards Row -->
        <div class="grid-3 mb-4" style="grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
            <div class="card p-3 d-flex flex-row align-items-center justify-content-between">
                <div>
                     <p class="text-xs text-secondary mb-0 font-weight-bold text-uppercase">Total Revenue</p>
                     <h4 class="font-bold mb-0">$53,000</h4>
                     <p class="text-xs text-success mb-0 font-weight-bolder">+55%</p>
                </div>
                 <div class="icon icon-lg icon-shape bg-success-grad shadow-success text-center border-radius-xl mt-n4 position-absolute end-0 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; top: -10px;">
                    <i class="bi bi-currency-dollar text-white fs-4"></i>
                </div>
            </div>
            
             <div class="card p-3 d-flex flex-row align-items-center justify-content-between">
                <div>
                     <p class="text-xs text-secondary mb-0 font-weight-bold text-uppercase">New Orders</p>
                     <h4 class="font-bold mb-0">2,300</h4>
                     <p class="text-xs text-success mb-0 font-weight-bolder">+3%</p>
                </div>
                 <div class="icon icon-lg icon-shape bg-primary-grad shadow-primary text-center border-radius-xl mt-n4 position-absolute end-0 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; top: -10px;">
                    <i class="bi bi-cart text-white fs-4"></i>
                </div>
            </div>
            
             <div class="card p-3 d-flex flex-row align-items-center justify-content-between">
                <div>
                     <p class="text-xs text-secondary mb-0 font-weight-bold text-uppercase">Growth</p>
                     <h4 class="font-bold mb-0">+3,462</h4>
                     <p class="text-xs text-danger mb-0 font-weight-bolder">-2%</p>
                </div>
                 <div class="icon icon-lg icon-shape bg-info-grad shadow-info text-center border-radius-xl mt-n4 position-absolute end-0 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px; top: -10px;">
                    <i class="bi bi-graph-up text-white fs-4"></i>
                </div>
            </div>
        </div>

        <!-- Reports Table -->
        <div class="card mb-4" style="margin-top: 1rem;">
             <div class="card-header-stats bg-info-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; padding: 1rem; border-radius: 0.5rem; color: #fff; box-shadow: var(--shadow-md); display: flex; justify-content: space-between; align-items: center;">
                 <div>
                    <h6 class="text-white mb-0 font-bold">Monthly Sales Report</h6>
                    <p class="text-sm opacity-8 mb-0">Financial performance overview</p>
                 </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0 text-center">
                        <thead class="bg-light">
                            <tr>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-3 text-start">Month</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Orders</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Gross Revenue</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Expenses</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Net Profit</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start ps-3"><h6 class="mb-0 text-sm font-bold">January 2026</h6></td>
                                <td><span class="text-secondary text-xs font-weight-bold">1,203</span></td>
                                <td><span class="text-success text-xs font-weight-bold">$40,000</span></td>
                                <td><span class="text-danger text-xs font-weight-bold">-$15,000</span></td>
                                <td><span class="text-primary text-xs font-weight-bold text-success">+$25,000</span></td>
                                <td><button class="btn btn-link btn-sm text-secondary"><i class="bi bi-download"></i></button></td>
                            </tr>
                             <tr>
                                <td class="text-start ps-3"><h6 class="mb-0 text-sm font-bold">February 2026</h6></td>
                                <td><span class="text-secondary text-xs font-weight-bold">1,504</span></td>
                                <td><span class="text-success text-xs font-weight-bold">$52,000</span></td>
                                <td><span class="text-danger text-xs font-weight-bold">-$18,000</span></td>
                                <td><span class="text-primary text-xs font-weight-bold text-success">+$34,000</span></td>
                                <td><button class="btn btn-link btn-sm text-secondary"><i class="bi bi-download"></i></button></td>
                            </tr>
                             <tr>
                                <td class="text-start ps-3"><h6 class="mb-0 text-sm font-bold">March 2026</h6></td>
                                <td><span class="text-secondary text-xs font-weight-bold">1,820</span></td>
                                <td><span class="text-success text-xs font-weight-bold">$60,000</span></td>
                                <td><span class="text-danger text-xs font-weight-bold">-$20,000</span></td>
                                <td><span class="text-primary text-xs font-weight-bold text-success">+$40,000</span></td>
                                <td><button class="btn btn-link btn-sm text-secondary"><i class="bi bi-download"></i></button></td>
                            </tr>
                             <tr>
                                <td class="text-start ps-3"><h6 class="mb-0 text-sm font-bold">April 2026</h6></td>
                                <td><span class="text-secondary text-xs font-weight-bold">2,021</span></td>
                                <td><span class="text-success text-xs font-weight-bold">$68,500</span></td>
                                <td><span class="text-danger text-xs font-weight-bold">-$22,000</span></td>
                                <td><span class="text-primary text-xs font-weight-bold text-success">+$46,500</span></td>
                                <td><button class="btn btn-link btn-sm text-secondary"><i class="bi bi-download"></i></button></td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top">
                            <tr>
                                <td class="text-start ps-3"><h6 class="mb-0 text-sm font-bold">YTD Total</h6></td>
                                <td><span class="text-secondary text-xs font-weight-bold">6,548</span></td>
                                <td><span class="text-dark text-xs font-weight-bold">$220,500</span></td>
                                <td><span class="text-danger text-xs font-weight-bold">-$75,000</span></td>
                                <td><span class="text-success text-xs font-weight-bold">+$145,500</span></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </main>

</div> <!-- Close Wrapper -->

<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
