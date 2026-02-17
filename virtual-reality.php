<?php include 'includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    
    <!-- Main Panel -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span class="text-main font-bold">Virtual Reality</span>
                <h1 class="page-title">Virtual Reality</h1>
            </div>
        </header>

        <!-- VR Background Content -->
        <!-- In a real VR dashboard, this might be a 3D context. Here we use styling to simulate the "floating" glassmorphism effect seen in Material VR demos. -->
        
        <div style="background: url('https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') center/cover; padding: 4rem 2rem; border-radius: 1rem; position: relative; min-height: 500px; display: flex; align-items: center; justify-content: center;">
            <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3); border-radius: 1rem;"></div>
            
            <!-- Glass Cards Container -->
            <div class="d-flex" style="gap: 2rem; z-index: 2; flex-wrap: wrap; justify-content: center;">
                
                <!-- Card 1 -->
                <div style="background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); padding: 2rem; border-radius: 1rem; width: 300px; text-align: center;">
                     <div style="width: 50px; height: 50px; background: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: #333; font-size: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
                        <i class="bi bi-cloud-sun-fill"></i>
                     </div>
                     <h3 class="font-bold">28°C</h3>
                     <p class="text-muted text-sm">Cloudy</p>
                </div>

                <!-- Card 2 (Music Player Mockup) -->
                <div style="background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); padding: 2rem; border-radius: 1rem; width: 300px;">
                     <div class="d-flex align-center mb-3">
                         <div style="width: 40px; height: 40px; background: #333; border-radius: 0.5rem; margin-right: 1rem;"></div>
                         <div>
                             <h6 class="font-bold mb-0">Night Jazz</h6>
                             <p class="text-xs text-muted mb-0">Gary Moore</p>
                         </div>
                     </div>
                     <div style="height: 4px; background: #ddd; border-radius: 2px; margin-bottom: 1rem;">
                         <div style="width: 60%; height: 100%; background: #333; border-radius: 2px;"></div>
                     </div>
                     <div class="d-flex justify-between font-bold" style="font-size: 1.25rem;">
                         <i class="bi bi-skip-backward-fill"></i>
                         <i class="bi bi-pause-fill"></i>
                         <i class="bi bi-skip-forward-fill"></i>
                     </div>
                </div>

                 <!-- Card 3 -->
                 <div style="background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); padding: 2rem; border-radius: 1rem; width: 300px;">
                     <div class="d-flex align-center justify-between mb-3">
                        <h6 class="font-bold">Messages</h6>
                        <span class="badge-dot" style="background: #e91e63;"></span>
                     </div>
                     <div class="d-flex align-center mb-2">
                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR040c5f2j48m8g8L60408j04j8j8j8j8j8j8&s" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.75rem;" alt="">
                         <div>
                             <p class="text-sm font-bold mb-0">Alicia</p>
                             <p class="text-xs text-muted mb-0">13 min ago</p>
                         </div>
                     </div>
                     <div class="d-flex align-center">
                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR040c5f2j48m8g8L60408j04j8j8j8j8j8j8&s" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.75rem;" alt="">
                         <div>
                             <p class="text-sm font-bold mb-0">Michael</p>
                             <p class="text-xs text-muted mb-0">1 hour ago</p>
                         </div>
                     </div>
                </div>

            </div>
        </div>

    </main>
</div> <!-- Close Wrapper -->

<script src="assets/js/script.js"></script>
</body>
</html>
