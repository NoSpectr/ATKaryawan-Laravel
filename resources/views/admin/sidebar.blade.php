<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('karyawan') }}">
                <i class="bi bi-person-vcard"></i><span>Karyawan</span>
            </a>
        </li>
        <!-- End Karyawan Nav -->

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-cash-coin"></i><span>Gaji</span>
            </a>
        </li>
        <br><br>
        <!-- End Gaji Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-left"></i><span>Logout</span>
            </a>
        </li>
    </ul>
</aside>
<!-- End Sidebar-->
