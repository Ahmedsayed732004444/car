@use('App\Enums\PermissionEnum')
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand"> <a href="{{ route('dashboard') }}" class="brand-link">
            <span class="brand-text fs-3 fw-semibold">لوحة تحكم الإدارة</span> </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-house"></i>
                        <p>الرئيسية</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-gear"></i>
                        <p>الإعدادات</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{ route('dashboard.categories.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.categories.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-layer-group"></i>
                        <p> الأقسام</p>
                    </a>
                </li>

                <li class="nav-item"> <a href="{{ route('dashboard.customers.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.customers.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p> إدارة العملاء</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('dashboard.vendors-management.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('dashboard.vendors-management.*') ? 'active' : '' }}"> <i
                            class="nav-icon fa-solid fa-building"></i>
                        <p>إدارة الشركات <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('dashboard.vendors-management.vendors.index') }}"
                                class="nav-link {{ request()->routeIs('dashboard.vendors-management.vendors.*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>الشركات</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('dashboard.vendors-management.join-requests.index') }}"
                                class="nav-link {{ request()->routeIs('dashboard.vendors-management.join-requests.*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>طلبات الإنضمام</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"> <a href="{{ route('dashboard.requests-management.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.requests-management.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-clipboard"></i>
                        <p>الطلبات وردود الشركات</p>
                    </a>
                </li>

                <li class="nav-item"> <a href="{{ route('dashboard.shipping-request-management.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.shipping-request-management.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-truck-fast"></i>
                        <p>إدارة طلبات الشحن</p>
                    </a>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-money-check-dollar"></i>
                        <p>نظام العمولات</p>
                    </a>
                </li>

                <li class="nav-item"> <a href="{{ route('dashboard.complaint-management.complaints') }}"
                        class="nav-link {{ request()->routeIs('dashboard.complaint-management.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-flag"></i>
                        <p>الشكاوي</p>
                    </a>
                </li>

                <li class="nav-item"> <a href="{{ route('dashboard.logs.index') }}"
                        class="nav-link {{ request()->routeIs('dashboard.logs.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-note-sticky"></i>
                        <p>Logs</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
