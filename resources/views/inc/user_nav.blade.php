<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <div class="navbar-header">
            <a href="{{route('user')}}" class="navbar-brand">
                <img src="{{ asset('img/logo.png') }}" alt="Nifty Logo" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text" style="color:#26D3F9">KhaboKoi</span>
                </div>
            </a>
        </div>

        <div class="navbar-content">
            <ul class="nav navbar-top-links">

               @auth
                   <li><button data-target="#demo-sm-modal" data-toggle="modal" class="btn btn-success" style="margin-top:15px;">Add Restaurant</button></li>
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                            <span class="ic-user pull-right">
                                {{ Auth::user()->name }}
                                <i class="demo-pli-male" style="margin-left: 10px;"></i>
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                            <ul class="head-list">
                                <li>
                                    <a href="{{route('profile')}}"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout')}}"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
               @else
                    <li><a href="{{ route('login') }}">Login/Register</a></li>
               @endauth
            </ul>
        </div>

    </div>
</header>
