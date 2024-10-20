<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('admin-assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">eCom Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar pt-2">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @can('view-dashboard')
                    <li class="nav-item ">
                        <a href="#" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.category.index') || request()->routeIs('admin.category.createUI') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}" class="nav-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.createUI') }}" class="nav-link {{ request()->routeIs('admin.category.createUI') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.product.index') || request()->routeIs('admin.product.createUI') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link {{ request()->routeIs('admin.product.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.createUI') }}" class="nav-link {{ request()->routeIs('admin.product.createUI') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.variant.index') || request()->routeIs('admin.product.createUI') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Product Variants
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route('admin.variant.index') }}" class="nav-link {{ request()->routeIs('admin.variant.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Variants</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link {{ request()->routeIs('admin.product.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Variants</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.createUI') }}" class="nav-link {{ request()->routeIs('admin.product.createUI') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product Variant</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
