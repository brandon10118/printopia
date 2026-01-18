<div class="row g-4 mt-3" style="min-height: 85vh;">
    <!-- Toggle Button -->
    <button class="btn btn-primary position-fixed d-lg-none" id="sidebarToggle"
        style="top: 20px; left: 20px; z-index: 1050; border-radius: 8px; padding: 8px 12px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>

    <!-- Sidebar -->
    <aside class="col-lg-2 position-relative" id="sidebar" style="transition: all 0.3s ease;">
        <div class="sidebar-content" style="position: sticky; top: 20px;">
            <!-- Brand -->
            <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <h5 class="mb-0 fw-bold d-flex align-items-center gap-2">
                    <span class="text-primary">PRINTOPIA</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5">
                        <path d="M3 6l18-3-8 18-2.5-6.5L3 6z" />
                    </svg>
                </h5>
                <button class="btn btn-sm btn-link text-muted p-0 d-lg-none" id="closeSidebar">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Navigation Items -->
            <nav class="d-flex flex-column gap-2 mb-4">
                <!-- Paper Order 1 -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2"
                    style="transition: all 0.2s ease;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8"></polyline>
                    </svg>
                    <span>Paper Order</span>
                </a>

                <!-- Paper Order 2 -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2"
                    style="transition: all 0.2s ease;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="9" y1="9" x2="15" y2="9"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                    <span>Paper Order</span>
                </a>

                <!-- Order Status 1 -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center justify-content-between gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2 position-relative"
                    style="transition: all 0.2s ease;">
                    <div class="d-flex align-items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        <span>Order Status</span>
                    </div>
                    <span class="badge bg-dark rounded-circle"
                        style="width: 22px; height: 22px; display: flex; align-items: center; justify-content: center; font-size: 11px;">3</span>
                </a>

                <!-- Order Status 2 -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2"
                    style="transition: all 0.2s ease;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="1"></circle>
                        <path d="M12 8v-1"></path>
                        <path d="M4 12H3"></path>
                        <path d="M20 12h1"></path>
                        <path d="M4.22 4.22l-.71.71"></path>
                        <path d="M19.79 19.79l.71.71"></path>
                        <path d="M4.22 19.78l.71-.71"></path>
                        <path d="M19.78 4.22l.71.71"></path>
                    </svg>
                    <span>Order Status</span>
                </a>

                <!-- Settings -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2"
                    style="transition: all 0.2s ease;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6m8.66-15L15 7.5M9 16.5 3.34 20m17.32 0L15 16.5M9 7.5 3.34 4"></path>
                    </svg>
                    <span>Settings</span>
                </a>
                <!-- Storage -->
                <a href="#"
                    class="nav-link-item d-flex align-items-center gap-2 text-decoration-none text-dark fw-500 small px-3 py-2 rounded-2"
                    style="transition: all 0.2s ease;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6m8.66-15L15 7.5M9 16.5 3.34 20m17.32 0L15 16.5M9 7.5 3.34 4"></path>
                    </svg>
                    <span>Storage</span>
                </a>

                <!-- 3D Mockup Studio -->
                <button type="button"
                    class="btn btn-outline-primary btn-sm w-100 d-flex align-items-center justify-content-between rounded-2 fw-500 mt-2"
                    id="mockupButton" style="transition: all 0.3s ease; padding: 10px 12px; font-size: 13px;">
                    <div class="d-flex align-items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16" />
                        </svg>
                        <span>3D Mockup Studio</span>
                    </div>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="mockupToggle"
                            style="cursor: pointer; margin: 0;">
                    </div>
                </button>
            </nav>

            <!-- Payment & Balance Section -->
            <div class="mt-4 pt-4 border-top">
                <h6 class="text-muted text-uppercase small fw-bold mb-3"
                    style="letter-spacing: 0.5px; font-size: 11px;">Payment & Balance</h6>

                <div class="bg-light rounded-3 p-3 mb-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <div class="small text-muted">Remaining Balance</div>
                    </div>
                    <div class="fw-bold h5 mb-0">₱12,500.00</div>
                </div>

                <button class="btn btn-primary w-100 fw-bold rounded-2" style="padding: 10px;">Pay Now</button>
            </div>

            <!-- User Profile Section (Empty State) -->
            <div class="mt-4 pt-4 border-top">
                <div class="rounded-3 p-3"
                    style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border: 1px solid #dee2e6;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 48px; height: 48px; background: linear-gradient(135deg, #4A70A9 0%, #2563eb 100%); box-shadow: 0 2px 8px rgba(74, 112, 169, 0.3);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow-1">
                            <div class="small text-muted mb-1"
                                style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px;">Guest User
                            </div>
                            <div class="fw-bold text-dark" style="font-size: 13px;">Not signed in</div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-sm fw-semibold text-white"
                            style="background: linear-gradient(135deg, #4A70A9 0%, #3a5a8a 100%); border: none; padding: 8px; font-size: 13px; box-shadow: 0 2px 6px rgba(74, 112, 169, 0.25);">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" class="me-1">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                <polyline points="10 17 15 12 10 7"></polyline>
                                <line x1="15" y1="12" x2="3" y2="12"></line>
                            </svg>
                            Login
                        </a>
                        <a href="#" class="btn btn-sm fw-semibold"
                            style="background: white; color: #4A70A9; border: 1.5px solid #4A70A9; padding: 8px; font-size: 13px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" class="me-1">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            Sign Up
                        </a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="#" class="text-decoration-none small" style="color: #6c757d; font-size: 11px;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="me-1">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 1v6m0 6v6m8.66-15L15 7.5M9 16.5 3.34 20m17.32 0L15 16.5M9 7.5 3.34 4">
                                </path>
                            </svg>
                            Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="col-lg-10" id="mainContent" style="transition: all 0.3s ease;">
        <!-- Dashboard Navigation Tabs -->
        <div class="mb-4">
            <div class="d-flex align-items-center gap-2 flex-wrap border-bottom pb-2">
                <button class="btn btn-sm fw-semibold px-3 py-2 rounded-2 active" data-section="overview"
                    style="background: #4A70A9; color: white; border: none;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="me-1">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                    </svg>
                    Overview
                </button>
                <button class="btn btn-sm fw-semibold px-3 py-2 rounded-2" data-section="orders"
                    style="background: transparent; color: #4A70A9; border: 1px solid #e0e0e0;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="me-1">
                        <path d="M9 11l3 3L22 4M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Active Orders
                </button>
                <button class="btn btn-sm fw-semibold px-3 py-2 rounded-2" data-section="mockups"
                    style="background: transparent; color: #4A70A9; border: 1px solid #e0e0e0;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="me-1">
                        <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16"></path>
                    </svg>
                    My Mockups
                </button>
                <button class="btn btn-sm fw-semibold px-3 py-2 rounded-2" data-section="history"
                    style="background: transparent; color: #4A70A9; border: 1px solid #e0e0e0;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="me-1">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18M9 3v18"></path>
                    </svg>
                    Order History
                </button>
                <button class="btn btn-sm fw-semibold px-3 py-2 rounded-2" data-section="storage"
                    style="background: transparent; color: #4A70A9; border: 1px solid #e0e0e0;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="me-1">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18M9 3v18"></path>
                    </svg>
                    Storage
                </button>
            </div>
        </div>

        <!-- Section: Overview -->
        <div id="section-overview" class="dashboard-section">
            <!-- Section Header -->
            <div class="d-flex align-items-center gap-2 mb-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 32px; height: 32px; background: #4A70A9;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                    </svg>
                </div>
                <h5 class="mb-0 fw-bold">Dashboard Overview</h5>
                <span class="ms-auto badge rounded-pill" style="background: #8FABDA; color: #000;">3 Active
                    Projects</span>
            </div>

            <!-- Quick Actions Header -->
            <div class="row g-3 mb-4">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm"
                        style="background: linear-gradient(135deg, #4A70A9 0%, #3a5a8a 100%);">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-white">
                                    <h5 class="fw-bold mb-2">Ready to Create?</h5>
                                    <p class="mb-0 opacity-75 small">Start a new printing project in seconds</p>
                                </div>
                                <button class="btn btn-light btn-lg fw-bold rounded-3 px-4"
                                    style="box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2.5" class="me-2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                    Start New Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Remaining Balance Quick-Pay Widget -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100"
                        style="background: #EFECE3; border: 3px solid #000000 !important;">
                        <div class="card-body p-4 d-flex flex-column justify-content-center">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="small fw-semibold text-muted">BALANCE DUE</span>
                                <a href="#" class="small text-decoration-none fw-semibold"
                                    style="color: #4A70A9;">History →</a>
                            </div>
                            <div class="display-6 fw-bold mb-2" style="color: #000000;">₱12,500.00</div>
                            <button class="btn btn-dark btn-sm fw-bold rounded-2" style="background: #000000;">
                                Quick Pay
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards Row -->
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px; background: rgba(74, 112, 169, 0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                        stroke-width="2">
                                        <path d="M20 7h-9M14 17H5M17 12H3" />
                                    </svg>
                                </div>
                                <span class="badge bg-success small">+12%</span>
                            </div>
                            <div class="h4 fw-bold mb-0">28</div>
                            <div class="small text-muted">Total Orders</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px; background: rgba(139, 171, 218, 0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8FABDA"
                                        stroke-width="2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2" />
                                    </svg>
                                </div>
                                <span class="badge bg-warning text-dark small">2 due</span>
                            </div>
                            <div class="h4 fw-bold mb-0">5</div>
                            <div class="small text-muted">In Progress</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px; background: rgba(22, 163, 74, 0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                                        stroke-width="2">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                <span class="badge bg-light text-dark small">This month</span>
                            </div>
                            <div class="h4 fw-bold mb-0">23</div>
                            <div class="small text-muted">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px; background: rgba(239, 236, 227, 1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000"
                                        stroke-width="2">
                                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                                    </svg>
                                </div>
                                <span class="badge bg-info small">↑ 8%</span>
                            </div>
                            <div class="h4 fw-bold mb-0">₱210K</div>
                            <div class="small text-muted">Revenue</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity & Quick Links Row -->
            <div class="row g-3 mb-4">
                <!-- Recent Activity -->
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                    stroke-width="2">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                Recent Activity
                            </h6>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 32px; height: 32px; background: rgba(74, 112, 169, 0.1);">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                            stroke-width="2">
                                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                            <polyline points="14 2 14 8 20 8" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Order #12847 shipped</div>
                                        <div class="text-muted" style="font-size: 12px;">Business cards • 2 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 32px; height: 32px; background: rgba(139, 171, 218, 0.1);">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#8FABDA"
                                            stroke-width="2">
                                            <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">New mockup created</div>
                                        <div class="text-muted" style="font-size: 12px;">Tri-fold brochure • 5 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 32px; height: 32px; background: rgba(22, 163, 74, 0.1);">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                                            stroke-width="2">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Payment received</div>
                                        <div class="text-muted" style="font-size: 12px;">₱9,000.00 • Yesterday</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 32px; height: 32px; background: rgba(239, 236, 227, 1);">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#000"
                                            stroke-width="2">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0110 0v4" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="small fw-semibold">Order #12840 delivered</div>
                                        <div class="text-muted" style="font-size: 12px;">Packaging boxes • 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-link text-decoration-none small p-0 mt-3"
                                style="color: #4A70A9;">View all activity →</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links & Shortcuts -->
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                    stroke-width="2">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                Quick Actions
                            </h6>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="p-3 rounded-3 text-center"
                                            style="background: rgba(74, 112, 169, 0.05); border: 1px solid rgba(74, 112, 169, 0.1); transition: all 0.2s;">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                                stroke-width="2" class="mb-2">
                                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                                <polyline points="14 2 14 8 20 8" />
                                            </svg>
                                            <div class="small fw-semibold text-dark">New Order</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="p-3 rounded-3 text-center"
                                            style="background: rgba(139, 171, 218, 0.05); border: 1px solid rgba(139, 171, 218, 0.1); transition: all 0.2s;">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8FABDA"
                                                stroke-width="2" class="mb-2">
                                                <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16" />
                                            </svg>
                                            <div class="small fw-semibold text-dark">3D Mockup</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="p-3 rounded-3 text-center"
                                            style="background: rgba(22, 163, 74, 0.05); border: 1px solid rgba(22, 163, 74, 0.1); transition: all 0.2s;">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#16a34a"
                                                stroke-width="2" class="mb-2">
                                                <path
                                                    d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z">
                                                </path>
                                            </svg>
                                            <div class="small fw-semibold text-dark">Templates</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="p-3 rounded-3 text-center"
                                            style="background: rgba(239, 236, 227, 1); border: 1px solid #000; transition: all 0.2s;">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000"
                                                stroke-width="2" class="mb-2">
                                                <path
                                                    d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12" />
                                            </svg>
                                            <div class="small fw-semibold text-dark">Upload File</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-3 p-3 rounded-3"
                                style="background: #f8f9fa; border-left: 3px solid #4A70A9;">
                                <div class="d-flex align-items-center gap-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                        stroke-width="2">
                                        <path
                                            d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z">
                                        </path>
                                        <line x1="12" y1="9" x2="12" y2="13"></line>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                    <div class="small">
                                        <strong class="d-block" style="font-size: 12px;">Reminder</strong>
                                        <span class="text-muted" style="font-size: 11px;">Order #12845 needs
                                            approval</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Deliveries -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3 d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                stroke-width="2">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                            </svg>
                            Upcoming Deliveries
                        </span>
                        <a href="#" class="small text-decoration-none" style="color: #4A70A9;">View all →</a>
                    </h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3"
                                style="background: rgba(74, 112, 169, 0.05); border: 1px solid rgba(74, 112, 169, 0.1);">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge" style="background: #4A70A9;">Tomorrow</span>
                                    <span class="small text-muted">#12847</span>
                                </div>
                                <div class="fw-semibold mb-1">Business Cards (500 pcs)</div>
                                <div class="small text-muted">Premium matte finish</div>
                                <div class="small text-muted mt-2">📍 123 Main St, NY 10001</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3"
                                style="background: rgba(139, 171, 218, 0.05); border: 1px solid rgba(139, 171, 218, 0.1);">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge" style="background: #8FABDA; color: #000;">Jan 12</span>
                                    <span class="small text-muted">#12845</span>
                                </div>
                                <div class="fw-semibold mb-1">Brochures (100 pcs)</div>
                                <div class="small text-muted">Glossy tri-fold</div>
                                <div class="small text-muted mt-2">📍 456 Oak Ave, CA 90210</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3"
                                style="background: rgba(239, 236, 227, 0.5); border: 1px solid #dee2e6;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-secondary">Jan 15</span>
                                    <span class="small text-muted">#12843</span>
                                </div>
                                <div class="fw-semibold mb-1">Display Banners (3 pcs)</div>
                                <div class="small text-muted">Large format vinyl</div>
                                <div class="small text-muted mt-2">📍 789 Pine Rd, TX 73301</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Storage -->
        <div id="section-storage" class="dashboard-section" style="display: none;">
            <div class="card border-0 shadow-sm p-4">
                <h5 class="fw-bold mb-4">Cloudinary Storage</h5>

                <form id="cloudinary-upload-form" class="mb-4 pb-4 border-bottom">
                    <div class="d-flex gap-2">
                        <input type="file" id="file-input" class="form-control form-control-sm"
                            style="max-width: 300px;" required>
                        <button type="submit" id="upload-btn" class="btn btn-primary btn-sm">
                            <span id="btn-text">Upload to Cloud</span>
                        </button>
                    </div>
                </form>

                <div id="media-gallery" class="row g-3">
                </div>
            </div>
        </div>

        <!-- Section: Active Orders -->
        <div id="section-orders" class="dashboard-section" style="display: none;">
            <!-- Section Header -->
            <div class="d-flex align-items-center gap-2 mb-3 mt-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 32px; height: 32px; background: #4A70A9;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <path d="M9 11l3 3L22 4M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h5 class="mb-0 fw-bold">Active Orders</h5>
            </div>

            <!-- Live Progress Tracker Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 fw-bold d-flex align-items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                stroke-width="2.5">
                                <path d="M9 11l3 3L22 4M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Active Order Progress
                        </h6>
                        <span class="badge rounded-pill px-3 py-2" style="background: #8FABDA; color: #000;">Order
                            #12847</span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="position-relative mb-3">
                        <div class="progress" style="height: 12px; border-radius: 10px; background: #e9ecef;">
                            <div class="progress-bar" role="progressbar"
                                style="width: 60%; background: linear-gradient(90deg, #8FABDA 0%, #4A70A9 100%); border-radius: 10px;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <!-- Progress Steps -->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-center" style="flex: 1;">
                            <div class="small fw-semibold mb-1" style="color: #16a34a;">✓ Pre-press</div>
                            <div class="small text-muted">Completed</div>
                        </div>
                        <div class="text-center" style="flex: 1;">
                            <div class="small fw-semibold mb-1" style="color: #4A70A9;">● Printing</div>
                            <div class="small text-muted">In Progress</div>
                        </div>
                        <div class="text-center" style="flex: 1;">
                            <div class="small fw-semibold mb-1 text-muted">○ Quality Check</div>
                            <div class="small text-muted">Pending</div>
                        </div>
                        <div class="text-center" style="flex: 1;">
                            <div class="small fw-semibold mb-1 text-muted">○ Shipping</div>
                            <div class="small text-muted">Pending</div>
                        </div>
                    </div>

                    <div class="mt-3 p-3 rounded-3" style="background: #f8f9fa; border-left: 4px solid #4A70A9;">
                        <small class="text-muted">
                            <strong>Estimated completion:</strong> Tomorrow, 3:00 PM •
                            <a href="#" class="text-decoration-none" style="color: #4A70A9;">Contact Support</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: My Mockups -->
        <div id="section-mockups" class="dashboard-section" style="display: none;">
            <!-- Section Header -->
            <div class="d-flex align-items-center gap-2 mb-3 mt-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 32px; height: 32px; background: #4A70A9;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16"></path>
                    </svg>
                </div>
                <h5 class="mb-0 fw-bold">My Mockups</h5>
            </div>

            <!-- Recent Mockup Carousel -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h6 class="mb-4 fw-bold d-flex align-items-center justify-content-between">
                        <span class="d-flex align-items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4A70A9"
                                stroke-width="2.5">
                                <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16" />
                            </svg>
                            Pick Up Where You Left Off
                        </span>
                        <a href="#" class="small text-decoration-none fw-semibold" style="color: #4A70A9;">View All
                            →</a>
                    </h6>

                    <div class="row g-3">
                        <!-- Mockup 1 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100"
                                style="cursor: pointer; transition: transform 0.2s;">
                                <div class="position-relative"
                                    style="height: 200px; background: linear-gradient(135deg, #8FABDA 0%, #4A70A9 100%); border-radius: 8px 8px 0 0;">
                                    <div
                                        class="position-absolute top-50 start-50 translate-middle text-white text-center">
                                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.5">
                                            <path d="M4 8l8-4 8 4v8l-8 4-8-4zM12 4v16" />
                                        </svg>
                                        <div class="small mt-2">Business Card Design</div>
                                    </div>
                                    <span class="badge position-absolute top-0 end-0 m-2"
                                        style="background: #16a34a;">Ready to Print</span>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">Professional Business Cards</h6>
                                    <p class="small text-muted mb-2">Last edited: 2 hours ago</p>
                                    <button class="btn btn-sm w-100 fw-semibold"
                                        style="background: #4A70A9; color: white;">Continue Editing</button>
                                </div>
                            </div>
                        </div>

                        <!-- Mockup 2 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100"
                                style="cursor: pointer; transition: transform 0.2s;">
                                <div class="position-relative"
                                    style="height: 200px; background: linear-gradient(135deg, #EFECE3 0%, #d4cfc0 100%); border-radius: 8px 8px 0 0;">
                                    <div
                                        class="position-absolute top-50 start-50 translate-middle text-dark text-center">
                                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.5">
                                            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                            <path d="M3 9h18M9 3v18"></path>
                                        </svg>
                                        <div class="small mt-2">Brochure Layout</div>
                                    </div>
                                    <span class="badge position-absolute top-0 end-0 m-2"
                                        style="background: #ef4444;">Draft</span>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">Tri-fold Brochure</h6>
                                    <p class="small text-muted mb-2">Last edited: Yesterday</p>
                                    <button class="btn btn-sm w-100 fw-semibold"
                                        style="background: #4A70A9; color: white;">Continue Editing</button>
                                </div>
                            </div>
                        </div>

                        <!-- Mockup 3 - Add New -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100 d-flex align-items-center justify-content-center"
                                style="cursor: pointer; border: 2px dashed #4A70A9 !important; background: #f8f9fa;">
                                <div class="card-body text-center py-5">
                                    <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                        style="width: 60px; height: 60px; background: #4A70A9;">
                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white"
                                            stroke-width="2.5">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </div>
                                    <h6 class="fw-bold mb-2">Create New Mockup</h6>
                                    <p class="small text-muted">Start from scratch or use a template</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Order History -->
        <div id="section-history" class="dashboard-section" style="display: none;">
            <!-- Section Header -->
            <div class="d-flex align-items-center gap-2 mb-3 mt-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 32px; height: 32px; background: #4A70A9;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <path d="M3 9h18M9 3v18"></path>
                    </svg>
                </div>
                <h5 class="mb-0 fw-bold">Order History</h5>
                <span class="ms-auto badge rounded-pill" style="background: #e0e0e0; color: #666;">Last 30 days</span>
            </div>

            <!-- Recent Orders Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h6 class="mb-5 fw-bold d-flex align-items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 3v18" />
                        </svg>
                        Recent Orders
                    </h6>

                    <div class="row g-4">
                        <!-- Order 1 -->
                        <div class="col-md-4">
                            <div class="p-5 text-center mb-3 rounded"
                                style="min-height: 240px; border: 2px dashed #0ea5e9; display: flex; align-items: center; justify-content: center; background: rgba(226, 239, 250, 0.5);">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#0284c7"
                                    stroke-width="1.5">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.15 5.05L11 12.7l-2.15-2.2c-.1-.1-.1-.26 0-.36.1-.1.26-.1.36 0L11 12.1l4.04-4.15c.1-.1.26-.1.36 0 .09.1.09.26 0 .36z" />
                                </svg>
                            </div>
                            <h6 class="fw-bold text-dark text-center mb-1">Box Packaging</h6>
                            <p class="text-muted small text-center mb-0">Standard packaging</p>
                        </div>

                        <!-- Order 2 -->
                        <div class="col-md-4">
                            <div class="p-5 text-center mb-3 rounded"
                                style="min-height: 240px; border: 2px dashed #ef4444; display: flex; align-items: center; justify-content: center; background: rgba(254, 226, 226, 0.5);">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#dc2626"
                                    stroke-width="1.5">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                            </div>
                            <h6 class="fw-bold text-dark text-center mb-1">Flat Card</h6>
                            <p class="text-muted small text-center mb-0">Business card</p>
                        </div>

                        <!-- Order 3 -->
                        <div class="col-md-4">
                            <div class="p-5 text-center mb-3 rounded"
                                style="min-height: 240px; border: 2px dashed #10b981; display: flex; align-items: center; justify-content: center; background: rgba(209, 250, 229, 0.5);">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#059669"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 8v8M16 12H8"></path>
                                </svg>
                            </div>
                            <h6 class="fw-bold text-dark text-center mb-1">Display Stand</h6>
                            <p class="text-muted small text-center mb-0">Promotional stand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
    .dashboard-section {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .nav-link-item:hover {
        background-color: #f8f9fc;
        color: #2563eb !important;
    }

    .nav-link-item:hover svg {
        stroke: #2563eb;
    }

    @media (max-width: 991.98px) {
        #sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            height: 100vh;
            width: 280px;
            background: white;
            z-index: 1040;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            padding: 20px;
        }

        #sidebar.show {
            left: 0;
        }

        .sidebar-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1030;
            display: none;
        }

        .sidebar-backdrop.show {
            display: block;
        }
    }
</style>

<div class="sidebar-backdrop" id="sidebarBackdrop"></div>

<!-- AI Chat Bubble -->
<div class="chat-bubble" id="chatBubble">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
</div>

<!-- AI Chat Window -->
<div class="chat-window" id="chatWindow">
    <!-- Chat Header -->
    <div class="chat-header">
        <div class="d-flex align-items-center gap-3">
            <div class="position-relative">
                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <span class="online-indicator"></span>
            </div>
            <div>
                <div class="fw-bold text-white">AI Assistant</div>
                <div class="small text-white-50">Online</div>
            </div>
        </div>
        <button class="btn btn-link text-white p-0" id="closeChatBtn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <!-- Chat Messages -->
    <div class="chat-messages" id="chatMessages">
        <div class="d-flex gap-2 mb-3">
            <div class="rounded-circle bg-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm"
                style="width: 32px; height: 32px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>
            <div class="flex-grow-1">
                <div class="bg-white text-dark p-3 rounded-3 shadow-sm mb-1"
                    style="border-bottom-left-radius: 4px !important; max-width: 85%;">
                    Hello! I'm your AI assistant. How can I help you with your printing orders today?
                </div>
                <div class="small text-muted">Just now</div>
            </div>
        </div>
    </div>

    <!-- Chat Input -->
    <div class="chat-input">
        <div class="input-group">
            <input type="text" class="form-control border-0" id="chatInput" placeholder="Type your message..."
                style="background: #f3f4f6; padding: 12px 16px; border-radius: 24px;">
            <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" id="sendBtn"
                style="width: 44px; height: 44px; margin-left: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </button>
        </div>
    </div>
</div>

<style>
    /* Chat Bubble */
    .chat-bubble {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3), 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }

    .chat-bubble:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4), 0 3px 6px rgba(0, 0, 0, 0.15);
    }

    .chat-bubble.hide {
        transform: scale(0);
        opacity: 0;
    }

    @keyframes pulse {

        0%,
        100% {
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3), 0 2px 4px rgba(0, 0, 0, 0.1), 0 0 0 0 rgba(37, 99, 235, 0.4);
        }

        50% {
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3), 0 2px 4px rgba(0, 0, 0, 0.1), 0 0 0 10px rgba(37, 99, 235, 0);
        }
    }

    /* Chat Window */
    .chat-window {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 380px;
        height: 550px;
        background: white;
        border-radius: 16px;
        box-shadow: 0 12px 48px rgba(0, 0, 0, 0.15);
        z-index: 1001;
        display: flex;
        flex-direction: column;
        transform: scale(0) translateY(20px);
        opacity: 0;
        transform-origin: bottom right;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .chat-window.show {
        transform: scale(1) translateY(0);
        opacity: 1;
    }

    /* Chat Header */
    .chat-header {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        padding: 20px;
        border-radius: 16px 16px 0 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .online-indicator {
        position: absolute;
        bottom: 2px;
        right: 2px;
        width: 10px;
        height: 10px;
        background: #10b981;
        border: 2px solid white;
        border-radius: 50%;
    }

    /* Chat Messages */
    .chat-messages {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        background: #f9fafb;
    }

    .message {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .message-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .message-content {
        flex: 1;
    }

    .message-bubble {
        padding: 12px 16px;
        border-radius: 16px;
        margin-bottom: 4px;
        max-width: 85%;
        word-wrap: break-word;
    }

    .message-bubble.bot {
        background: white;
        color: #1f2937;
        border-bottom-left-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .message-bubble.user {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        border-bottom-right-radius: 4px;
        margin-left: auto;
    }

    .user-message {
        flex-direction: row-reverse;
    }

    .user-message .message-content {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .user-message .message-avatar {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }

    .user-message .message-avatar svg {
        stroke: white;
    }

    .message-time {
        font-size: 11px;
        color: #9ca3af;
        margin-top: 4px;
        padding: 0 4px;
    }

    /* Chat Input */
    .chat-input {
        padding: 16px 20px;
        background: white;
        border-radius: 0 0 16px 16px;
        border-top: 1px solid #e5e7eb;
    }

    .chat-input .input-group {
        display: flex;
        align-items: center;
    }

    .chat-input input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    /* Typing Indicator */
    .typing-indicator {
        display: flex;
        gap: 4px;
        padding: 12px 16px;
    }

    .typing-dot {
        width: 8px;
        height: 8px;
        background: #9ca3af;
        border-radius: 50%;
        animation: typing 1.4s infinite;
    }

    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }

    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes typing {

        0%,
        60%,
        100% {
            transform: translateY(0);
        }

        30% {
            transform: translateY(-10px);
        }
    }

    /* Mobile Responsive */
    @media (max-width: 480px) {
        .chat-window {
            width: calc(100vw - 20px);
            height: calc(100vh - 20px);
            bottom: 10px;
            right: 10px;
            border-radius: 12px;
        }

        .chat-bubble {
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<script>
    (function () {
        // Mockup toggle functionality
        const toggle = document.getElementById('mockupToggle');
        const button = document.getElementById('mockupButton');
        function updateGlow() {
            if (toggle.checked) {
                button.style.boxShadow = '0 0 0 3px rgba(37,99,235,.25), 0 10px 24px rgba(37,99,235,.15)';
                button.classList.add('btn-primary');
                button.classList.remove('btn-outline-primary');
            } else {
                button.style.boxShadow = 'none';
                button.classList.remove('btn-primary');
                button.classList.add('btn-outline-primary');
            }
        }
        toggle.addEventListener('change', updateGlow);
        updateGlow();

        // Sidebar toggle functionality
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const closeSidebar = document.getElementById('closeSidebar');
        const backdrop = document.getElementById('sidebarBackdrop');

        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function () {
                sidebar.classList.add('show');
                backdrop.classList.add('show');
            });
        }

        if (closeSidebar) {
            closeSidebar.addEventListener('click', function () {
                sidebar.classList.remove('show');
                backdrop.classList.remove('show');
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () {
                sidebar.classList.remove('show');
                backdrop.classList.remove('show');
            });
        }

        // Dashboard Section Navigation
        const sectionButtons = document.querySelectorAll('[data-section]');
        const dashboardSections = document.querySelectorAll('.dashboard-section');

        sectionButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetSection = this.getAttribute('data-section');

                // Update button styles
                sectionButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.background = 'transparent';
                    btn.style.color = '#4A70A9';
                    btn.style.border = '1px solid #e0e0e0';
                });

                this.classList.add('active');
                this.style.background = '#4A70A9';
                this.style.color = 'white';
                this.style.border = 'none';

                // Show/hide sections
                dashboardSections.forEach(section => {
                    section.style.display = 'none';
                });

                const targetElement = document.getElementById('section-' + targetSection);
                if (targetElement) {
                    targetElement.style.display = 'block';
                }

                if (targetSection === 'storage') {
                    fetchCloudinaryMedia(); // This triggers the gallery refresh
                }
            });
        });

        // AI Chat functionality
        const chatBubble = document.getElementById('chatBubble');
        const chatWindow = document.getElementById('chatWindow');
        const closeChatBtn = document.getElementById('closeChatBtn');
        const chatInput = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendBtn');
        const chatMessages = document.getElementById('chatMessages');

        // Initialize conversation history for Claude
        let conversationHistory = [];

        // Wait for Puter to be ready
        let puterReady = false;

        // Check if Puter is loaded
        window.addEventListener('load', function () {
            if (typeof puter !== 'undefined') {
                puterReady = true;
                console.log('Puter.js loaded successfully');
            } else {
                console.error('Puter.js failed to load');
            }
        });

        // Open chat
        chatBubble.addEventListener('click', function () {
            chatWindow.classList.add('show');
            chatBubble.classList.add('hide');
            chatInput.focus();
        });

        // Close chat
        closeChatBtn.addEventListener('click', function () {
            chatWindow.classList.remove('show');
            chatBubble.classList.remove('hide');
        });

        // Send message function with Claude AI via Puter
        async function sendMessage() {
            const message = chatInput.value.trim();
            if (message === '') return;

            console.log('Sending message:', message); // Debug log

            // Disable input while processing
            chatInput.disabled = true;
            sendBtn.disabled = true;

            // Escape HTML to prevent XSS (moved up for immediate use)
            function escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            // Add user message
            const escapedMessage = escapeHtml(message);
            console.log('Escaped message:', escapedMessage); // Debug log

            const userMessageHTML = `
            <div class="d-flex gap-2 mb-3 flex-row-reverse">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 32px; height: 32px; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow-1 d-flex flex-column align-items-end">
                    <div class="text-white p-3 rounded-3 shadow-sm mb-1" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border-bottom-right-radius: 4px !important; max-width: 85%;">
                        ${escapedMessage}
                    </div>
                    <div class="small text-muted">Just now</div>
                </div>
            </div>
        `;
            chatMessages.insertAdjacentHTML('beforeend', userMessageHTML);
            chatInput.value = '';

            // Add to conversation history
            conversationHistory.push({
                role: 'user',
                content: message
            });

            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Show typing indicator
            const typingHTML = `
            <div class="d-flex gap-2 mb-3 typing-message">
                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 32px; height: 32px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <div class="flex-grow-1">
                    <div class="bg-white p-3 rounded-3 shadow-sm d-flex gap-1" style="border-bottom-left-radius: 4px !important; max-width: 85%;">
                        <span class="typing-dot"></span>
                        <span class="typing-dot"></span>
                        <span class="typing-dot"></span>
                    </div>
                </div>
            </div>
        `;
            chatMessages.insertAdjacentHTML('beforeend', typingHTML);
            chatMessages.scrollTop = chatMessages.scrollHeight;

            try {
                // Check if Puter is ready
                if (!puterReady || typeof puter === 'undefined') {
                    throw new Error('Puter.js is not loaded. Please refresh the page.');
                }

                // Build system prompt for printing business context
                const systemPrompt = "You are a helpful AI assistant for Printopia, a professional printing service based in the Philippines. You help customers with their printing orders, answer questions about paper types, pricing (use Philippine Peso ₱ for all amounts), delivery options, order tracking, and custom print jobs. Be friendly, professional, and concise in your responses. Always use ₱ (Philippine Peso) when discussing prices or costs.";

                // Prepare the message with context
                const userMessage = conversationHistory.length > 0
                    ? `${systemPrompt}\n\nConversation history:\n${conversationHistory.map(m => `${m.role}: ${m.content}`).join('\n')}\n\nUser: ${message}`
                    : `${systemPrompt}\n\nUser: ${message}`;

                // Call Claude AI through Puter with streaming
                console.log('Calling Puter AI with message:', userMessage);
                const response = await puter.ai.chat(userMessage, {
                    model: 'claude-sonnet-4-5',
                    stream: true
                });
                console.log('Puter AI response received:', response);

                // Remove typing indicator
                const typingMessage = document.querySelector('.typing-message');
                if (typingMessage) {
                    typingMessage.remove();
                }

                // Create message container for streaming response
                const botMessageHTML = `
                <div class="d-flex gap-2 mb-3 streaming-message">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 32px; height: 32px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <div class="flex-grow-1">
                        <div class="bg-white text-dark p-3 rounded-3 shadow-sm mb-1" style="border-bottom-left-radius: 4px !important; max-width: 85%; word-wrap: break-word;" id="streaming-response"></div>
                        <div class="small text-muted">Just now</div>
                    </div>
                </div>
            `;
                chatMessages.insertAdjacentHTML('beforeend', botMessageHTML);

                const streamingResponse = document.getElementById('streaming-response');
                let fullResponse = '';
                let chunkCount = 0;

                // Stream the response - Following Puter.js docs pattern
                console.log('Starting to stream response...');
                for await (const part of response) {
                    chunkCount++;
                    console.log(`Chunk ${chunkCount}:`, part);

                    // Use part?.text as per Puter.js documentation
                    if (part?.text) {
                        fullResponse += part.text;
                        // Use innerHTML to preserve line breaks
                        streamingResponse.innerHTML = fullResponse.replace(/\n/g, '<br>');
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    } else {
                        console.warn('Chunk received without text property:', part);
                    }
                }

                console.log('Total chunks received:', chunkCount);
                console.log('Full response:', fullResponse);

                // If no response was received, show a fallback message
                if (!fullResponse) {
                    fullResponse = 'I received your message but encountered an issue generating a response. Please try again or refresh the page.';
                    streamingResponse.textContent = fullResponse;
                }

                // Add AI response to conversation history
                conversationHistory.push({
                    role: 'assistant',
                    content: fullResponse
                });

                // Remove streaming ID
                streamingResponse.removeAttribute('id');
                const streamingMsg = document.querySelector('.streaming-message');
                if (streamingMsg) {
                    streamingMsg.classList.remove('streaming-message');
                }

            } catch (error) {
                console.error('Error calling Claude AI:', error);
                console.error('Error details:', error.message);

                // Remove typing indicator
                const typingMessage = document.querySelector('.typing-message');
                if (typingMessage) {
                    typingMessage.remove();
                }

                // Show detailed error message
                let errorMessage = 'Sorry, I\'m having trouble connecting right now. Please try again in a moment.';
                if (error.message.includes('Puter.js is not loaded')) {
                    errorMessage = 'Chat service is loading. Please refresh the page and try again.';
                }

                const errorHTML = `
                <div class="d-flex gap-2 mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 32px; height: 32px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <div class="flex-grow-1">
                        <div class="p-3 rounded-3 shadow-sm mb-1 text-danger" style="background: #fee; border-bottom-left-radius: 4px !important; max-width: 85%;">
                            ${errorMessage}
                        </div>
                        <div class="small text-muted">Just now</div>
                    </div>
                </div>
            `;
                chatMessages.insertAdjacentHTML('beforeend', errorHTML);
            } finally {
                // Re-enable input
                chatInput.disabled = false;
                sendBtn.disabled = false;
                chatInput.focus();
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }

        // Send button click
        sendBtn.addEventListener('click', sendMessage);

        // Enter key to send
        chatInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Cloudinary Media Fetcher
        async function fetchCloudinaryMedia() {
            const gallery = document.getElementById('media-gallery');
            if (!gallery) return;

            gallery.innerHTML = '<div class="col-12 text-center py-5"><div class="spinner-border text-primary"></div></div>';

            try {
                const response = await fetch('<?= base_url("cloudmanager/getFilesJSON") ?>');
                const data = await response.json();

                gallery.innerHTML = '';
                data.files.forEach(file => {
                    gallery.innerHTML += `
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow-sm overflow-hidden">
                                <img src="${file.secure_url}" class="card-img-top object-fit-cover" style="height: 120px;">
                            </div>
                        </div>`;
                });
            } catch (err) {
                gallery.innerHTML = '<p class="text-danger text-center">Failed to load media.</p>';
            }
        }

        // 2. AND THE UPLOAD HANDLER HERE
        document.getElementById('cloudinary-upload-form')?.addEventListener('submit', async function (e) {
            e.preventDefault();
            const fileInput = document.getElementById('user_file');
            const formData = new FormData();
            formData.append('user_file', fileInput.files[0]);

            try {
                const response = await fetch('<?= base_url("cloudmanager/upload") ?>', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                if (result.status === 'success') {
                    alert('Uploaded!');
                    fetchCloudinaryMedia(); // Refresh
                }
            } catch (err) {
                alert('Upload failed.');
            }
        });

    })();
</script>
