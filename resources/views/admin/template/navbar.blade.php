<nav class="navbar panel-nav py-1 py-lg-0 navbar-expand-lg">
    <div class="mycontainer d-flex justify-content-between flex-wrap align-items-center custom-padd">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand logo-panel">
            <img src="{{asset('img/logo.png')}}" alt="logo" class="w-100 h-100">
        </a>
        <div class="d-flex align-items-center">
            <div class="d-flex me-2 d-lg-none justify-content-between align-items-center">
                <a class="mb-0 text-decoration-none d-flex align-items-center me-2 ">
                    <div class="d-none me-2 d-sm-flex d-lg-none d-xl-flex  flex-column align-items-end">
                        <h6 class="mb-0 fw-medium text-dark">Name Here</h6>
                        <span class="font-12 mb-0 text-secondary">
                            Admin
                        </span>
                    </div>
                      <div class="border-blue rounded-circle p-1">
                        <img src="{{asset('img/profile.png')}}" alt="profile" class="profile">
                    </div>
                </a>
                <a href="{{ route('admin.notification') }}" class="text-decoration-none not-bg position-relative">
                    <span class="d-flex align-items-center position-relative">
                        <i class="fas fa-bell fs-5 not-icon text-black"></i>
                        <span
                            class="position-absolute border-2 border-white bg-blue dot-active rounded-circle"></span>
                    </span>
                    <span class="mybadge black2 position-absolute fw-medium">
                        5
                    </span>
                </a>
            </div>
            <button class="navbar-toggler focus-none px-0 mx-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <FaBars class="navbar-toggler-icon text-white opacity-hover" />
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex px-xl-3 mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.userManagement') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.userManagement') ? 'active' : '' }}">
                        User Management
                    </a>
                </li>
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.rentalLog') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.rentalLog') ? 'active' : '' }}">
                        Rental Log
                    </a>
                </li>
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.saleLog') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.saleLog') ? 'active' : '' }}">
                        Sale Log
                    </a>
                </li>
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.categoryManagement') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.categoryManagement') ? 'active' : '' }}">
                        Category Management
                    </a>
                </li>
                <li class="nav-item mx-1 mx-xl-2">
                    <a href="{{ route('admin.itemsManagement') }}" class="nav-link ex-small px-1 px-xl-2 {{ request()->routeIs('admin.itemsManagement') ? 'active' : '' }}">
                        Items Management
                    </a>
                </li>
            </ul>
            
            <div class="d-none d-lg-flex justify-content-between align-items-center">
                <a class="mb-0 text-decoration-none d-flex align-items-center me-2 ">
                    <div class="d-none me-2 d-sm-flex d-lg-none d-xl-flex  flex-column align-items-end">
                        <h6 class="mb-0 fw-medium text-dark">Dj RobinSon</h6>
                        <span class="font-12 mb-0 text-secondary">
                            Admin
                        </span>
                    </div>
                    <div class="border-blue rounded-circle p-1">
                        <img src="{{asset('img/profile.png')}}" alt="profile" class="rounded-circle profile">
                    </div>
                </a>
                <a href="{{ route('admin.notification') }}" class="text-decoration-none not-bg position-relative">
                    <span class="d-flex align-items-center position-relative">
                        <i class="fas fa-bell fs-5 not-icon text-black"></i>
                        <span
                            class="position-absolute border-2 border-white bg-blue dot-active rounded-circle"></span>
                    </span>
                    <span class="mybadge black2 position-absolute fw-medium">
                        5
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>