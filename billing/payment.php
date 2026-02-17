<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>Billing</span> / <span class="text-main font-bold">Payment Methods</span>
                <h1 class="page-title">Payment Methods</h1>
            </div>
        </header>

        <div class="grid-2-1" style="gap: 1.5rem; align-items: start;">
            
            <!-- LEFT COLUMN -->
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                
                <!-- Cards Row -->
                <div class="grid-2-1" style="grid-template-columns: 1.5fr 1fr; gap: 1.5rem;"> <!-- Sub-grid -->
                    <!-- Master Card -->
                    <div class="card" style="margin-top: 0; background: linear-gradient(195deg, #42424a, #191919); color: #fff; min-height: 220px; justify-content: space-between; position: relative; overflow: hidden;">
                        <div style="position: absolute; top:0; right:0; width: 100%; height: 100%; background: url('https://demos.creative-tim.com/material-dashboard/assets/img/patterns/pattern-tree.svg'); opacity: 0.2;"></div>
                        <div style="z-index: 2; display: flex; justify-content: space-between; align-items: center;">
                            <i class="bi bi-wifi" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 1.2rem; font-weight: bold; font-style: italic; opacity: 0.8;">VISA</span>
                        </div>
                        <div style="z-index: 2;">
                            <h4 style="letter-spacing: 4px; font-weight: 500; font-size: 1.5rem; margin-bottom: 2rem;">4562 &nbsp;&nbsp; 1122 &nbsp;&nbsp; 4594 &nbsp;&nbsp; 7852</h4>
                            <div class="d-flex justify-between">
                                <div>
                                    <p class="text-xs mb-0 opacity-7 font-weight-light">Card Holder</p>
                                    <h6 class="text-sm font-bold mb-0">Jack Peterson</h6>
                                </div>
                                <div>
                                    <p class="text-xs mb-0 opacity-7 font-weight-light">Expires</p>
                                    <h6 class="text-sm font-bold mb-0">11/22</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salary & Paypal Stats -->
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <!-- Salary -->
                        <div class="card" style="margin-top: 0; display: flex; flex-direction: row; align-items: center; justify-content: center; padding: 1.5rem; text-align: center;">
                            <div style="width: 64px; height: 64px; background: var(--grad-primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #fff; font-size: 1.5rem; box-shadow: var(--shadow-md);">
                                <i class="bi bi-bank"></i>
                            </div>
                            <div style="text-align: left;">
                                <p class="text-xs text-muted mb-0 font-bold">Salary</p>
                                <h5 class="font-bold mb-0">+$2000</h5>
                            </div>
                        </div>
                        <!-- Paypal -->
                        <div class="card" style="margin-top: 0; display: flex; flex-direction: row; align-items: center; justify-content: center; padding: 1.5rem; text-align: center;">
                             <div style="width: 64px; height: 64px; background: var(--grad-dark); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem; color: #fff; font-size: 1.5rem; box-shadow: var(--shadow-md);">
                                <i class="bi bi-paypal"></i>
                            </div>
                            <div style="text-align: left;">
                                <p class="text-xs text-muted mb-0 font-bold">Paypal</p>
                                <h5 class="font-bold mb-0">$455.00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="card" style="margin-top: 0;">
                    <div class="card-header pb-0 px-3 d-flex justify-between align-center mb-3">
                         <h6 class="font-bold mb-0">Payment Method</h6>
                         <button class="btn btn-primary" style="background: #344767; box-shadow: var(--shadow-md); padding: 0.5rem 1rem;">
                             <i class="bi bi-plus" style="font-size: 1rem;"></i> Add New Card
                         </button>
                    </div>
                    <div class="card-body pt-4 p-3 d-flex" style="gap: 1.5rem; flex-wrap: wrap;">
                        
                        <div style="border: 1px solid #dee2e6; border-radius: 1rem; padding: 1.5rem; flex: 1; min-width: 250px; display: flex; align-items: center; align-content: center;"> 
                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/logos/mastercard.png" width="40" style="margin-right: 1rem;">
                            <h6 class="mb-0 text-sm font-bold">**** &nbsp;&nbsp; **** &nbsp;&nbsp; **** &nbsp;&nbsp; 7852</h6>
                            <i class="bi bi-pencil ms-auto text-dark cursor-pointer" style="margin-left: auto;"></i>
                        </div>

                        <div style="border: 1px solid #dee2e6; border-radius: 1rem; padding: 1.5rem; flex: 1; min-width: 250px; display: flex; align-items: center;"> 
                            <img src="https://demos.creative-tim.com/material-dashboard/assets/img/logos/visa.png" width="40" style="margin-right: 1rem;">
                            <h6 class="mb-0 text-sm font-bold">**** &nbsp;&nbsp; **** &nbsp;&nbsp; **** &nbsp;&nbsp; 5248</h6>
                            <i class="bi bi-pencil ms-auto text-dark cursor-pointer" style="margin-left: auto;"></i>
                        </div>

                    </div>
                </div>

            </div> <!-- End Left Column -->


            <!-- RIGHT COLUMN (Invoices) -->
            <div class="card" style="margin-top: 0; min-height: 100%;">
                 <div class="card-header pb-0 px-3 d-flex justify-between align-center mb-3">
                     <h6 class="font-bold mb-0">Invoices</h6>
                     <button class="btn btn-link text-primary text-xs font-bold my-auto ps-4">VIEW ALL</button>
                 </div>
                 <div class="card-body p-3 pt-0">
                     <ul class="list-group" style="list-style: none;">
                         
                         <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-2 p-0">
                             <div class="d-flex flex-column">
                                 <h6 class="mb-1 text-dark text-sm font-bold">March, 01, 2020</h6>
                                 <span class="text-xs text-muted">#MS-415646</span>
                             </div>
                             <div class="d-flex align-items-center">
                                 <span class="text-sm font-bold me-2 text-dark">$180</span>
                                 <div class="d-flex align-items-center text-sm font-bold ms-3" style="margin-left: 1rem;">
                                      <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> PDF
                                 </div>
                             </div>
                         </li>
                         
                         <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-2 p-0 mt-3">
                             <div class="d-flex flex-column">
                                 <h6 class="mb-1 text-dark text-sm font-bold">February, 10, 2021</h6>
                                 <span class="text-xs text-muted">#RV-126749</span>
                             </div>
                             <div class="d-flex align-items-center">
                                 <span class="text-sm font-bold me-2 text-dark">$250</span>
                                 <div class="d-flex align-items-center text-sm font-bold ms-3" style="margin-left: 1rem;">
                                      <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> PDF
                                 </div>
                             </div>
                         </li>

                         <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-2 p-0 mt-3">
                             <div class="d-flex flex-column">
                                 <h6 class="mb-1 text-dark text-sm font-bold">April, 05, 2020</h6>
                                 <span class="text-xs text-muted">#FB-212562</span>
                             </div>
                             <div class="d-flex align-items-center">
                                 <span class="text-sm font-bold me-2 text-dark">$560</span>
                                 <div class="d-flex align-items-center text-sm font-bold ms-3" style="margin-left: 1rem;">
                                      <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> PDF
                                 </div>
                             </div>
                         </li>

                          <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-2 p-0 mt-3">
                             <div class="d-flex flex-column">
                                 <h6 class="mb-1 text-dark text-sm font-bold">June, 25, 2019</h6>
                                 <span class="text-xs text-muted">#QW-103578</span>
                             </div>
                             <div class="d-flex align-items-center">
                                 <span class="text-sm font-bold me-2 text-dark">$120</span>
                                 <div class="d-flex align-items-center text-sm font-bold ms-3" style="margin-left: 1rem;">
                                      <i class="bi bi-file-earmark-pdf-fill text-danger me-1"></i> PDF
                                 </div>
                             </div>
                         </li>
                        
                     </ul>
                 </div>
            </div>

        </div> <!-- End Top Grid -->

        <!-- Bottom Grid: Billing Info & Transactions -->
        <div class="grid-2-1 mt-4" style="gap: 1.5rem;">
            
            <!-- Billing Info -->
            <div class="card" style="margin-top: 0;">
                <div class="card-header pb-0 px-3 mb-3">
                     <h6 class="font-bold mb-0">Billing Information</h6>
                </div>
                <div class="card-body pt-0 p-3">
                    <ul class="list-group" style="list-style: none;">
                        
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="background: #f8f9fa; border-radius: 0.75rem; justify-content: space-between;">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm font-bold">Oliver Liam</h6>
                                <span class="mb-2 text-xs text-muted">Company Name: <span class="text-dark font-bold ms-sm-2">Viking Burrito</span></span>
                                <span class="mb-2 text-xs text-muted">Email Address: <span class="text-dark ms-sm-2 font-bold">oliver@burrito.com</span></span>
                                <span class="text-xs text-muted">VAT Number: <span class="text-dark ms-sm-2 font-bold">FRB1235476</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="bi bi-trash me-2"></i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="bi bi-pencil me-2"></i>Edit</a>
                            </div>
                        </li>

                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="background: #f8f9fa; border-radius: 0.75rem; justify-content: space-between; margin-top: 1rem;">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm font-bold">Lucas Harper</h6>
                                <span class="mb-2 text-xs text-muted">Company Name: <span class="text-dark font-bold ms-sm-2">Stone Tech Zone</span></span>
                                <span class="mb-2 text-xs text-muted">Email Address: <span class="text-dark ms-sm-2 font-bold">lucas@stone-tech.com</span></span>
                                <span class="text-xs text-muted">VAT Number: <span class="text-dark ms-sm-2 font-bold">FRB1235476</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="bi bi-trash me-2"></i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="bi bi-pencil me-2"></i>Edit</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Transactions -->
             <div class="card" style="margin-top: 0;">
                <div class="card-header pb-0 px-3 mb-3 d-flex justify-between">
                     <h6 class="font-bold mb-0">Your Transaction's</h6>
                     <div class="d-flex align-center text-sm text-muted">
                         <i class="bi bi-calendar-event me-2" style="margin-right: 0.5rem;"></i> 23 - 30 March 2020
                     </div>
                </div>
                <div class="card-body pt-0 p-3">
                     <ul class="list-group" style="list-style: none;">
                         <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" style="border: 1px solid #f44336; color: #f44336; width: 34px; height: 34px; border-radius: 50%; margin-right: 1rem;">
                                    <i class="bi bi-arrow-down"></i>
                                </button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm font-bold">Netflix</h6>
                                    <span class="text-xs text-muted">27 March 2020, at 12:30 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-danger text-gradient text-sm font-bold">
                                - $ 2,500
                            </div>
                        </li>

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg" style="margin-top: 1rem;">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" style="border: 1px solid #4caf50; color: #4caf50; width: 34px; height: 34px; border-radius: 50%; margin-right: 1rem;">
                                    <i class="bi bi-arrow-up"></i>
                                </button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm font-bold">Apple</h6>
                                    <span class="text-xs text-muted">27 March 2020, at 04:30 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-bold">
                                + $ 2,000
                            </div>
                        </li>
                     </ul>

                     <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3 text-muted">Yesterday</h6>

                     <ul class="list-group" style="list-style: none;">
                         <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center" style="border: 1px solid #4caf50; color: #4caf50; width: 34px; height: 34px; border-radius: 50%; margin-right: 1rem;">
                                    <i class="bi bi-arrow-up"></i>
                                </button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm font-bold">Stripe</h6>
                                    <span class="text-xs text-muted">26 March 2020, at 13:45 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-bold">
                                + $ 750
                            </div>
                        </li>
                     </ul>

                </div>
             </div>

        </div>

    </main>

</div>

<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
