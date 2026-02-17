 <aside class="sidebar">
    <div class="sidebar-header">
        <a href="index.php" class="brand-logo">
            <i class="bi bi-layers-half text-white"></i>
            Material One
        </a>
    </div>

    <ul class="sidebar-nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="/dashboard/index.php" class="nav-link active">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </li>

        <!-- Divider -->
        <li class="nav-divider">Management</li>


        <!-- User Menu (Collapsible) -->
       <li class="nav-item">
  <a href="#userMenu" class="nav-link menu-collapse-toggle">
    <i class="bi bi-people"></i>
    <span>User</span>
    <i class="bi bi-chevron-right ms-auto collapse-icon"></i>
  </a>

  <ul class="nav-submenu" id="userMenu">
    <li><a href="/dashboard/user/profile.php">Profile</a></li>
    <li><a href="/dashboard/user/cards.php">Cards</a></li>
    <li><a href="/dashboard/user/list.php">List</a></li>
    <li><a href="/dashboard/user/create.php">Create</a></li>
    <li><a href="/dashboard/user/edit.php">Edit</a></li>
    <li><a href="/dashboard/user/account.php">Account</a></li>
  </ul>
</li>



        <!-- Tables (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link menu-collapse-toggle d-flex align-items-center" href="#tablesMenu">
                <i class="bi bi-table me-2"></i>
                <span>Tables</span>
                <i class="bi bi-chevron-right ms-auto collapse-icon"></i>
            </a>
            
            <ul class="nav-submenu" id="tablesMenu">
                <li><a href="/dashboard/tables/basic.php" class="nav-link">Basic Tables</a></li>
                <li><a href="/dashboard/tables/advanced.php" class="nav-link">Advanced Tables</a></li>
                <li><a href="/dashboard/tables/datagrid.php" class="nav-link">Data Grid</a></li>
                <li><a href="/dashboard/tables/reports.php" class="nav-link">Reports</a></li>
            </ul>
        </li>
        <!-- Billing (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link menu-collapse-toggle d-flex align-items-center" href="#billingMenu">
                <i class="bi bi-receipt me-2"></i>
                <span>Billing</span>
                <i class="bi bi-chevron-right ms-auto collapse-icon"></i>
            </a>
            
            <ul class="nav-submenu" id="billingMenu">
                <li><a href="/dashboard/billing/general.php" class="nav-link">General</a></li>
                <li><a href="/dashboard/billing/payment.php" class="nav-link">Payment Methods</a></li>
                <li><a href="/dashboard/billing/invoices.php" class="nav-link">Invoices</a></li>
            </ul>
        </li>
        
        <!-- Interactive -->
        <!-- Virtual Reality (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link menu-collapse-toggle d-flex align-items-center" href="#vrMenu">
                <i class="bi bi-box-seam me-2"></i>
                <span>Virtual Reality</span>
                <i class="bi bi-chevron-right ms-auto collapse-icon"></i>
            </a>
            
            <ul class="nav-submenu" id="vrMenu">
                <li><a href="/dashboard/virtual-reality/view.php" class="nav-link">VR View</a></li>
            </ul>
        </li>


        

        <!-- Divider -->
        <li class="nav-divider">Account Pages</li>

        <!-- Profile -->
    
        <!-- Sign In -->
        <li class="nav-item">
            <a href="/dashboard/login.php" class="nav-link">
                <i class="bi bi-box-arrow-in-right"></i>
                Sign In
            </a>
        </li>
        <!-- Sign Up -->
        <li class="nav-item">
            <a href="/dashboard/sign-up.php" class="nav-link">
                <i class="bi bi-person-plus"></i>
                Sign Up
            </a>
        </li>
    </ul>
    
    <!-- Footer in Sidebar (Optional) -->
    <div style="padding: 1rem; margin-top: auto; opacity: 0.7; font-size: 0.75rem; text-align: center;">
        &copy; 2026 Material One
    </div>
</aside>
