<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>
    
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
        <div style="background: url('https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') center/cover; padding: 4rem 2rem; border-radius: 1rem; position: relative; min-height: 600px; display: flex; align-items: center; justify-content: center; overflow: hidden; box-shadow: var(--shadow-lg);">
            
            <!-- Overlay -->
            <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.4); border-radius: 1rem;"></div>
            
            <!-- 3D Transform Container -->
             <div class="vr-container" style="perspective: 1000px; z-index: 2; display: flex; gap: 3rem; transform-style: preserve-3d; animation: float 6s ease-in-out infinite;">
                
                <!-- Weather Card -->
                <div class="glass-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 2rem; border-radius: 1.5rem; width: 280px; text-align: center; color: white; transform: rotateY(15deg) translateZ(20px); box-shadow: 0 25px 45px rgba(0,0,0,0.2);">
                     <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="bi bi-cloud-sun-fill" style="font-size: 2rem; color: #ffd700;"></i>
                     </div>
                     <h2 class="font-bold mb-0">28°C</h2>
                     <p class="text-sm opacity-8">Cloudy &bull; New York</p>
                     
                     <div class="d-flex justify-content-between mt-4 text-xs opacity-7">
                         <span><i class="bi bi-wind"></i> 12km/h</span>
                         <span><i class="bi bi-droplet"></i> 48%</span>
                     </div>
                </div>

                <!-- Music Player Card (Center) -->
                <div class="glass-card" style="background: rgba(43, 43, 43, 0.6); backdrop-filter: blur(30px); -webkit-backdrop-filter: blur(30px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 1.5rem; width: 320px; color: white; transform: translateZ(50px); box-shadow: 0 30px 60px rgba(0,0,0,0.4);">
                     <div class="d-flex align-items-center mb-4">
                         <div style="width: 50px; height: 50px; background: url('https://demos.creative-tim.com/material-dashboard/assets/img/kal-visuals-square.jpg') center/cover; border-radius: 0.75rem; margin-right: 1rem; box-shadow: 0 4px 10px rgba(0,0,0,0.3);"></div>
                         <div>
                             <h6 class="font-bold mb-0 text-white">Midnight City</h6>
                             <p class="text-xs opacity-7 mb-0">M83</p>
                         </div>
                         <i class="bi bi-heart ms-auto cursor-pointer text-danger"></i>
                     </div>
                     
                     <!-- Progress Bar -->
                     <div style="height: 4px; background: rgba(255,255,255,0.2); border-radius: 2px; margin-bottom: 0.5rem; position: relative;">
                         <div style="width: 65%; height: 100%; background: #e91e63; border-radius: 2px; position: relative;">
                             <span style="position: absolute; right: -4px; top: -3px; width: 10px; height: 10px; background: white; border-radius: 50%;"></span>
                         </div>
                     </div>
                     <div class="d-flex justify-content-between text-xs opacity-7 mb-4">
                         <span>2:35</span>
                         <span>4:03</span>
                     </div>

                     <div class="d-flex justify-content-between align-items-center px-4" style="font-size: 1.5rem;">
                         <i class="bi bi-shuffle opacity-5 cursor-pointer" style="font-size: 1rem;"></i>
                         <i class="bi bi-skip-backward-fill cursor-pointer"></i>
                         <div class="play-btn" style="width: 50px; height: 50px; background: white; border-radius: 50%; color: #333; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 20px rgba(255,255,255,0.4);">
                             <i class="bi bi-pause-fill"></i>
                         </div>
                         <i class="bi bi-skip-forward-fill cursor-pointer"></i>
                         <i class="bi bi-repeat opacity-5 cursor-pointer" style="font-size: 1rem;"></i>
                     </div>
                </div>

                 <!-- Todo/Messages Card -->
                 <div class="glass-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 2rem; border-radius: 1.5rem; width: 280px; color: white; transform: rotateY(-15deg) translateZ(20px); box-shadow: 0 25px 45px rgba(0,0,0,0.2);">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="font-bold mb-0 text-white">Upcoming Events</h6>
                        <button class="btn btn-icon-only btn-rounded btn-outline-white mb-0 btn-sm"><i class="bi bi-plus"></i></button>
                     </div>
                     
                     <div class="d-flex align-items-center mb-3 p-2 border-radius-lg" style="background: rgba(255,255,255,0.1);">
                         <div class="icon icon-sm bg-gradient-primary border-radius-md text-center me-3 d-flex align-items-center justify-content-center" style="background: var(--grad-primary); width: 36px; height: 36px; border-radius: 0.5rem;">
                             <i class="bi bi-camera-video text-white text-xs"></i>
                         </div>
                         <div>
                             <h6 class="text-sm font-bold mb-0 text-white">Meeting with team</h6>
                             <p class="text-xs opacity-7 mb-0">10:00 AM</p>
                         </div>
                     </div>
                     
                     <div class="d-flex align-items-center p-2 border-radius-lg" style="background: rgba(255,255,255,0.1);">
                         <div class="icon icon-sm bg-gradient-success border-radius-md text-center me-3 d-flex align-items-center justify-content-center" style="background: var(--grad-success); width: 36px; height: 36px; border-radius: 0.5rem;">
                             <i class="bi bi-check-lg text-white text-xs"></i>
                         </div>
                         <div>
                             <h6 class="text-sm font-bold mb-0 text-white">Project Review</h6>
                             <p class="text-xs opacity-7 mb-0">02:30 PM</p>
                         </div>
                     </div>
                </div>

            </div>
        </div>

    </main>
</div> <!-- Close Wrapper -->

<style>
@keyframes float {
    0% { transform: translateY(0px) rotateX(0deg); }
    50% { transform: translateY(-15px) rotateX(2deg); }
    100% { transform: translateY(0px) rotateX(0deg); }
}
.glass-card {
    transition: transform 0.3s ease;
}
.glass-card:hover {
    transform: scale(1.05) translateZ(30px) !important;
    z-index: 10;
}
</style>

<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
