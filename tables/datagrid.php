<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>Tables</span> / <span class="text-main font-bold">Data Grid</span>
                <h1 class="page-title">Data Grid</h1>
            </div>
            
             <div class="header-actions">
                <button class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i> Add New Product</button>
            </div>
        </header>

        <!-- Product Grid -->
        <div class="card mb-4" style="margin-top: 1rem;">
             <div class="card-header-stats bg-dark-grad" style="position: absolute; top: -20px; left: 1rem; right: 1rem; padding: 1rem; border-radius: 0.5rem; color: #fff; box-shadow: var(--shadow-md); display: flex; justify-content: space-between; align-items: center;">
                 <div>
                    <h6 class="text-white mb-0 font-bold">Product Inventory</h6>
                    <p class="text-sm opacity-8 mb-0">Manage stock and prices</p>
                 </div>
                 <div class="d-flex">
                    <button class="btn btn-sm btn-link text-white me-2"><i class="bi bi-filter"></i> Filter</button>
                    <button class="btn btn-sm btn-link text-white"><i class="bi bi-download"></i> Export</button>
                 </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2" style="margin-top: 3rem;">
                <div class="table-responsive p-0">
                    <table class="custom-table align-items-center mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="text-center" style="width: 5%;">
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="checkAll">
                                    </div>
                                </th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                                <th class="text-upper text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Stock</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-upper text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item 1 -->
                            <tr>
                                <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/products/product-1-min.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="product1" style="height: 48px; width: 48px;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Nike V22 Running</h6>
                                            <p class="text-xs text-secondary mb-0">SKU: 890123</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class="text-xs font-weight-bold mb-0">Footwear</p></td>
                                <td><p class="text-xs font-weight-bold mb-0 text-success">$130.00</p></td>
                                <td class="text-center"><span class="text-xs font-weight-bold">128</span></td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-success-grad text-white px-2 py-1">In Stock</span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2" data-bs-toggle="tooltip" title="Edit">
                                        <i class="bi bi-pencil-square fs-6"></i>
                                    </a>
                                     <a href="javascript:;" class="text-danger font-weight-bold text-xs" data-bs-toggle="tooltip" title="Delete">
                                        <i class="bi bi-trash fs-6"></i>
                                    </a>
                                </td>
                            </tr>
                            
                             <!-- Item 2 -->
                             <tr>
                                <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/products/product-2-min.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="product2" style="height: 48px; width: 48px;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Business Suit</h6>
                                            <p class="text-xs text-secondary mb-0">SKU: 890456</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class="text-xs font-weight-bold mb-0">Clothing</p></td>
                                <td><p class="text-xs font-weight-bold mb-0 text-success">$300.00</p></td>
                                <td class="text-center"><span class="text-xs font-weight-bold">14</span></td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-warning-grad text-white px-2 py-1">Low Stock</span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2"><i class="bi bi-pencil-square fs-6"></i></a>
                                     <a href="javascript:;" class="text-danger font-weight-bold text-xs"><i class="bi bi-trash fs-6"></i></a>
                                </td>
                            </tr>
                            
                             <!-- Item 3 -->
                             <tr>
                                <td class="text-center">
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/products/product-3-min.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="product3" style="height: 48px; width: 48px;">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm font-bold">Black Chair</h6>
                                            <p class="text-xs text-secondary mb-0">SKU: 123456</p>
                                        </div>
                                    </div>
                                </td>
                                <td><p class="text-xs font-weight-bold mb-0">Furniture</p></td>
                                <td><p class="text-xs font-weight-bold mb-0 text-success">$80.00</p></td>
                                <td class="text-center"><span class="text-xs font-weight-bold">0</span></td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-secondary text-white px-2 py-1">Out of Stock</span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2"><i class="bi bi-pencil-square fs-6"></i></a>
                                     <a href="javascript:;" class="text-danger font-weight-bold text-xs"><i class="bi bi-trash fs-6"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Footer pagination -->
             <div class="d-flex justify-content-end p-3 align-items-center">
                 <button class="btn btn-sm btn-outline-secondary mb-0 me-2" disabled>Previous</button>
                 <button class="btn btn-sm btn-outline-primary mb-0">Next</button>
             </div>
        </div>

    </main>

</div> <!-- Close Wrapper -->

<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
