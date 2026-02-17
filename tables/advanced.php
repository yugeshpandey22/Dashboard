<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>Tables</span> / <span class="text-main font-bold">Advanced Tables</span>
                <h1 class="page-title">Advanced Tables</h1>
            </div>
            
             <div class="header-actions">
                <div class="search-wrapper d-none d-md-block">
                    <input type="text" class="search-input" placeholder="Search records...">
                </div>
            </div>
        </header>

        <!-- Advanced Table -->
        <div class="card mb-4" style="margin-top: 1rem;">
            <div class="card-header-stats bg-success-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; padding: 1rem; border-radius: 0.5rem; color: #fff; box-shadow: var(--shadow-md); display: flex; justify-content: space-between; align-items: center;">
                 <div>
                    <h6 class="text-white mb-0 font-bold">Employee Directory</h6>
                    <p class="text-sm opacity-8 mb-0">Searchable and sortable employee list</p>
                 </div>
                 <button class="btn btn-sm btn-outline-white mb-0" style="border-color: white; color: white;">Export CSV</button>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="p-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="text-xs text-secondary me-2">Show</span>
                        <select class="form-select form-select-sm" style="width: 70px;">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                        <span class="text-xs text-secondary ms-2">entries</span>
                    </div>
                    <div class="input-group input-group-sm" style="width: 200px;">
                         <span class="input-group-text"><i class="bi bi-search"></i></span>
                         <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0 table-hover">
                        <thead>
                            <tr>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Name</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Office</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Age</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Start Date</th>
                                <th class="text-end text-upper text-secondary text-xxs font-weight-bolder opacity-7 pe-3">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-3"><h6 class="mb-0 text-sm">Tiger Nixon</h6></td>
                                <td><p class="text-xs text-secondary mb-0">System Architect</p></td>
                                <td><p class="text-xs text-secondary mb-0">Edinburgh</p></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">61</span></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">2011/04/25</span></td>
                                <td class="text-end pe-3"><span class="text-secondary text-xs font-weight-bold">$320,800</span></td>
                            </tr>
                            <tr>
                                <td class="ps-3"><h6 class="mb-0 text-sm">Garrett Winters</h6></td>
                                <td><p class="text-xs text-secondary mb-0">Accountant</p></td>
                                <td><p class="text-xs text-secondary mb-0">Tokyo</p></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">63</span></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">2011/07/25</span></td>
                                <td class="text-end pe-3"><span class="text-secondary text-xs font-weight-bold">$170,750</span></td>
                            </tr>
                            <tr>
                                <td class="ps-3"><h6 class="mb-0 text-sm">Ashton Cox</h6></td>
                                <td><p class="text-xs text-secondary mb-0">Junior Technical Author</p></td>
                                <td><p class="text-xs text-secondary mb-0">San Francisco</p></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">66</span></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">2009/01/12</span></td>
                                <td class="text-end pe-3"><span class="text-secondary text-xs font-weight-bold">$86,000</span></td>
                            </tr>
                             <tr>
                                <td class="ps-3"><h6 class="mb-0 text-sm">Cedric Kelly</h6></td>
                                <td><p class="text-xs text-secondary mb-0">Senior Javascript Developer</p></td>
                                <td><p class="text-xs text-secondary mb-0">Edinburgh</p></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">22</span></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">2012/03/29</span></td>
                                <td class="text-end pe-3"><span class="text-secondary text-xs font-weight-bold">$433,060</span></td>
                            </tr>
                             <tr>
                                <td class="ps-3"><h6 class="mb-0 text-sm">Airi Satou</h6></td>
                                <td><p class="text-xs text-secondary mb-0">Accountant</p></td>
                                <td><p class="text-xs text-secondary mb-0">Tokyo</p></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">33</span></td>
                                <td class="text-center"><span class="text-secondary text-xs font-weight-bold">2008/11/28</span></td>
                                <td class="text-end pe-3"><span class="text-secondary text-xs font-weight-bold">$162,700</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center p-3">
                    <p class="text-xs text-secondary mb-0">Showing 1 to 5 of 57 entries</p>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </main>

</div> <!-- Close Wrapper -->

<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
