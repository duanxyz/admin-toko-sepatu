<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Toko Sepatu</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('item') }}">
                    <i class="align-middle" data-feather="item"></i>
                    <span class="align-middle">Item</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('customer') }}">
                    <i class="align-middle" data-feather="item"></i>
                    <span class="align-middle">Customer</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('order') }}">
                    <i class="align-middle" data-feather="item"></i>
                    <span class="align-middle">Order</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Settings</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/brand') }}">Brand</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/category') }}">Category</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
