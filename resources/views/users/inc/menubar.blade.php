<aside id="sidebar">

        <div class="user-profile">
            {{-- <div class="user-avtar animated rubberBand">
            <img src="{{ asset('user-link') }}/img/user5.jpg" alt="user avatar">
                <span class="busy"></span>
            </div> --}}
            <h5 class="welcome-user">Welcome <span><br>{{ Auth::user()->name }}</span></h5>
            <div class="progress progress-xs">
                <div class="progress-bar progress-bar-indo" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width: 75%">
                </div>
            </div>
        </div>

        <!-- Menu start -->
        <div id='menu'>
            <ul>
                <li>
                    <a href="{{ route('task.index') }}">
                        <i class="fa fa-dashboard text-success"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class='has-sub'>
                    <a href='#'><i class="fa fa-key text-warning"></i><span>Permission Management</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('permission.index') }}"><span>Permission List</span></a>
                        </li>
                        <li>
                            <a href="{{ route('permission.create') }}"><span>Permission Add</span></a>
                        </li>
                    </ul>
                </li>

                <li class='has-sub'>
                    <a href='#'><i class="fa fa-key text-warning"></i><span>Role Management</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('role.index') }}"><span>Role List</span></a>
                        </li>
                        <li>
                            <a href="{{ route('role.create') }}"><span>Role Add</span></a>
                        </li>
                    </ul>
                </li>

                <li class='has-sub'>
                    <a href='#'><i class="fa fa-user text-warning"></i><span>User Management</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('user.index') }}"><span>User List</span></a>
                        </li>
                        <li>
                            <a href="{{ route('user.create') }}"><span>User Add</span></a>
                        </li>
                    </ul>
                </li>                

                <li class='has-sub'>
                    <a href='#'><i class="fa fa-tasks text-warning"></i><span>Category Management</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('category.index') }}"><span>Categoty List</span></a>
                        </li>
                        <li>
                            <a href="{{ route('category.create') }}"><span>Categoty Add</span></a>
                        </li>
                    </ul>
                </li>

                <li class='has-sub'>
                    <a href='#'><i class="fa fa-edit text-warning"></i><span>Task Management</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('task.index') }}"><span>Task List</span></a>
                        </li>
                        <li>
                            <a href="{{ route('task.create') }}"><span>Task Add</span></a>
                        </li>
                    </ul>
                </li>
                
                <li class='has-sub'>
                    <a href='#'>
                        <i class="fa fa-gears text-danger"></i> 
                        <span>Account Management</span>
                        <em class="arrow"></em>
                    </a>
                    <ul>
                        {{-- <li>
                            <a href=""><span>Profile Update</span></a>
                        </li>
                        <li>
                            <a href=""><span>Change Password</span></a>
                        </li> --}}
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <span>Sign Out</span>
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

</aside>