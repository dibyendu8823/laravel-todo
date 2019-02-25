<header>
        <a href="#" class="logo">
            <img src="{{ asset('user-link') }}/img/logo.png" alt="logo">
        </a>
        <div class="pull-right">
            <ul id="mini-nav" class="clearfix">               
                
                
                <!-- <li class="list-box dropdown hidden-xs">
                    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                    </a>
                    <span class="info-label danger-bg animated rubberBand">4</span>
                    <ul class="dropdown-menu bounceIn animated messages">
                        <li class="plain">Notifications</li>
                        <li>
                            <div class="icon">
                                <img src="img/user4.jpg" alt="Browser">
                            </div>
                            <div class="details">
                                <strong class="text-danger">Nyra <i class="fa fa-exclamation-triangle"></i></strong>
                                <span>Google Chrome is the world's most used browser today.</span>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <li class="list-box dropdown hidden-xs">                    
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
                    <a href="#">
                        <i class="fa fa-reorder"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>