<?php include '../includes/header.php'; ?>
    <!-- Sidebar -->
    <?php include '../includes/sidebar.php'; ?>

    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header mb-4">
            <div class="breadcrumb-nav">
                <button class="menu-toggle"><i class="bi bi-list"></i></button>
                <span>Pages</span> / <span class="text-main font-bold">Profile</span>
                <h1 class="page-title">Profile</h1>
            </div>
        </header>

        <!-- Profile Header Image -->
        <div style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80'); min-height: 300px; background-position: center bottom; background-size: cover; border-radius: 1rem; margin-bottom: -4rem;">
            <div style="position: absolute; inset: 0; border-radius: 1rem; background-image: linear-gradient(195deg, #42424a 0%, #191919 100%); opacity: 0.6;"></div>
        </div>

        <!-- Profile Content Card -->
        <div class="card" style="margin-top: 0; padding: 2rem;">
            <div class="d-flex align-items-center mb-4">
                <div style="position: relative; margin-top: -6rem;">
                    <img src="https://demos.creative-tim.com/material-dashboard/assets/img/bruce-mars.jpg" alt="profile" style="width: 120px; height: 120px; border-radius: 1rem; box-shadow: 0 4px 20px 0 rgba(0,0,0,0.14), 0 7px 10px -5px rgba(64,64,64,0.4);">
                </div>
                <div style="margin-top: -2.5rem; margin-left: 1.5rem;">
                    <h5 class="font-bold mb-1">Richard Davis</h5>
                    <p class="text-sm font-weight-normal text-muted mb-0">CEO / Co-Founder</p>
                </div>
                <div style="margin-left: auto; margin-top: -2.5rem;">
                    <div style="background: #f8f9fa; border-radius: 0.5rem; padding: 0.5rem;">
                        <button class="action-btn active" style="padding: 0.5rem 1rem; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border-radius: 0.375rem; font-weight: 500;"><i class="bi bi-app"></i> App</button>
                        <button class="action-btn" style="padding: 0.5rem 1rem; font-weight: 500;"><i class="bi bi-chat"></i> Messages</button>
                        <button class="action-btn" style="padding: 0.5rem 1rem; font-weight: 500;"><i class="bi bi-gear"></i> Settings</button>
                    </div>
                </div>
            </div>

            <div class="grid-3" style="gap: 3rem;">
                <!-- Platform Settings -->
                <div>
                    <h6 class="font-bold text-uppercase text-xs text-muted mb-4">Platform Settings</h6>
                    <ul style="list-style: none;">
                        <li class="d-flex align-items-center mb-4">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked style="margin-right: 1rem; width: 30px; height: 16px; border-radius: 8px; appearance: none; background: #e9ecef; position: relative;">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0 text-sm text-muted" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1" style="margin-right: 1rem; width: 30px; height: 16px; border-radius: 8px; appearance: none; background: #e9ecef;">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0 text-sm text-muted" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked style="margin-right: 1rem; width: 30px; height: 16px; border-radius: 8px; appearance: none; background: #e9ecef;">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0 text-sm text-muted" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Profile Information -->
                <div style="border-left: 1px solid #f0f2f5; padding-left: 2rem;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                         <h6 class="font-bold text-uppercase text-xs text-muted">Profile Information</h6>
                         <i class="bi bi-pencil text-muted" style="cursor: pointer;"></i>
                    </div>
                    <p class="text-sm text-muted mb-4" style="line-height: 1.6;">
                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                    </p>
                    <hr class="horizontal gray-light my-4" style="border: 0; border-top: 1px solid #f0f2f5; margin: 1.5rem 0;">
                    <ul class="list-group">
                        <li class="d-flex border-0 ps-0 pt-0 text-sm mb-2"><strong class="text-dark me-2">Full Name:</strong> &nbsp; Alec M. Thompson</li>
                        <li class="d-flex border-0 ps-0 text-sm mb-2"><strong class="text-dark me-2">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                        <li class="d-flex border-0 ps-0 text-sm mb-2"><strong class="text-dark me-2">Email:</strong> &nbsp; alec@thompson.com</li>
                        <li class="d-flex border-0 ps-0 text-sm mb-2"><strong class="text-dark me-2">Location:</strong> &nbsp; USA</li>
                    </ul>
                </div>

                <!-- Conversations -->
                <div style="border-left: 1px solid #f0f2f5; padding-left: 2rem;">
                    <h6 class="font-bold text-uppercase text-xs text-muted mb-4">Conversations</h6>
                    <ul class="list-group">
                        <li class="d-flex align-items-center mb-4 pb-1">
                            <div class="d-flex align-items-center">
                                <img src="https://demos.creative-tim.com/material-dashboard/assets/img/kal-visuals-square.jpg" alt="kal" style="border-radius: 0.5rem; width: 48px; height: 48px; margin-right: 1rem;">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm font-bold">Sophie B.</h6>
                                    <p class="text-xs mb-0 text-muted">Hi! I need more information..</p>
                                </div>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto text-primary font-bold text-xs" href="javascript:;" style="margin-left: auto; text-transform: uppercase; text-decoration: none;">Reply</a>
                        </li>
                        <li class="d-flex align-items-center mb-4 pb-1">
                            <div class="d-flex align-items-center">
                                <img src="https://demos.creative-tim.com/material-dashboard/assets/img/marie.jpg" alt="kal" style="border-radius: 0.5rem; width: 48px; height: 48px; margin-right: 1rem;">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm font-bold">Anne Marie</h6>
                                    <p class="text-xs mb-0 text-muted">Awesome work, can you..</p>
                                </div>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto text-primary font-bold text-xs" href="javascript:;" style="margin-left: auto; text-transform: uppercase; text-decoration: none;">Reply</a>
                        </li>
                        <li class="d-flex align-items-center mb-4 pb-1">
                            <div class="d-flex align-items-center">
                                <img src="https://demos.creative-tim.com/material-dashboard/assets/img/ivana-square.jpg" alt="kal" style="border-radius: 0.5rem; width: 48px; height: 48px; margin-right: 1rem;">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm font-bold">Ivanna</h6>
                                    <p class="text-xs mb-0 text-muted">About files I can..</p>
                                </div>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto text-primary font-bold text-xs" href="javascript:;" style="margin-left: auto; text-transform: uppercase; text-decoration: none;">Reply</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>

    </main>

</div> <!-- Close Wrapper -->
<script src="/dashboard/assets/js/script.js"></script>
</body>
</html>
