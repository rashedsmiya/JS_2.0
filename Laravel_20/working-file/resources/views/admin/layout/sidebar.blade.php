<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">KT Family</h4>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-command '></i>
                </div>
                <div class="menu-title">UI Setting</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-setting'></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
        </li>

        <ul>
            <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Services</a>
            </li>
            <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage Services</a>
            </li>
        </ul>
        </li>
        <li>
            <a href="{{ url('profile') }}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">
                    Profile
                </div>
            </a>
        </li>
        <li class="pl-4">

            <a href="javascript:void(0)">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>