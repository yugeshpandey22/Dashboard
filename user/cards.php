<?php include '../includes/header.php'; ?>
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <header class="top-header mb-4">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span>User</span> / <span class="text-main font-bold">Cards</span>
                <h1 class="page-title">User Cards</h1>
            </div>
            
            <div class="header-actions">
                <button class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg me-1"></i> Add New
                </button>
            </div>
        </header>

        <div class="grid-3">
             <!-- Card 1 -->
             <div class="card text-center" style="overflow: visible; margin-top: 3rem;">
                 <div style="margin-top: -3.5rem; margin-bottom: 1rem; display: flex; justify-content: center;">
                     <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-1.jpg" class="avatar rounded-circle" style="width: 80px; height: 80px; border-radius: 50%; box-shadow: var(--shadow-md);">
                 </div>
                 <h5 class="font-bold mb-0">John Doe</h5>
                 <p class="text-sm text-muted">CEO / Co-Founder</p>
                 <p class="text-sm text-muted mt-2 mb-3">"Great work starts with great people."</p>
                 <div>
                    <button class="btn btn-primary btn-sm">Follow</button>
                    <button class="btn btn-link text-secondary btn-sm">Message</button>
                 </div>
             </div>
             
             <!-- Card 2 -->
             <div class="card text-center" style="overflow: visible; margin-top: 3rem;">
                 <div style="margin-top: -3.5rem; margin-bottom: 1rem; display: flex; justify-content: center;">
                     <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-2.jpg" class="avatar rounded-circle" style="width: 80px; height: 80px; border-radius: 50%; box-shadow: var(--shadow-md);">
                 </div>
                 <h5 class="font-bold mb-0">Alec Thompson</h5>
                 <p class="text-sm text-muted">Programmer</p>
                 <p class="text-sm text-muted mt-2 mb-3">"Code acts like magic."</p>
                 <div>
                    <button class="btn btn-primary btn-sm">Follow</button>
                    <button class="btn btn-link text-secondary btn-sm">Message</button>
                 </div>
             </div>
             
             <!-- Card 3 -->
             <div class="card text-center" style="overflow: visible; margin-top: 3rem;">
                 <div style="margin-top: -3.5rem; margin-bottom: 1rem; display: flex; justify-content: center;">
                     <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-3.jpg" class="avatar rounded-circle" style="width: 80px; height: 80px; border-radius: 50%; box-shadow: var(--shadow-md);">
                 </div>
                 <h5 class="font-bold mb-0">Alexa Liras</h5>
                 <p class="text-sm text-muted">Designer</p>
                 <p class="text-sm text-muted mt-2 mb-3">"Design is intelligence made visible."</p>
                 <div>
                    <button class="btn btn-primary btn-sm">Follow</button>
                    <button class="btn btn-link text-secondary btn-sm">Message</button>
                 </div>
             </div>
             
             <!-- Card 4 -->
             <div class="card text-center" style="overflow: visible; margin-top: 3rem;">
                 <div style="margin-top: -3.5rem; margin-bottom: 1rem; display: flex; justify-content: center;">
                     <img src="https://demos.creative-tim.com/material-dashboard/assets/img/team-4.jpg" class="avatar rounded-circle" style="width: 80px; height: 80px; border-radius: 50%; box-shadow: var(--shadow-md);">
                 </div>
                 <h5 class="font-bold mb-0">Peterson</h5>
                 <p class="text-sm text-muted">Manager</p>
                 <p class="text-sm text-muted mt-2 mb-3">"Managing is an art."</p>
                 <div>
                    <button class="btn btn-primary btn-sm">Follow</button>
                    <button class="btn btn-link text-secondary btn-sm">Message</button>
                 </div>
             </div>
        </div>

    </main>
</div>
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
