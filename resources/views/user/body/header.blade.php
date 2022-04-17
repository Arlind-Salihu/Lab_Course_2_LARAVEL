<header class="header_area">
                <!-- logo -->
                <div class="sidebar_logo">
                    <a href="index.html">
                <img src="{{asset('adminbackend/images/logo.png')}}" alt="" class="img-fluid logo1" style="height:50px; width:50px;">
                <h5 style="color:white; margin-left:70px;">Student Dashboard</h5>
                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
                    <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                        <div class="modal fade search_box" id="myModal">
                              <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                              <form action="#" class="modal-dialog modal-lg">
                                
                                <div class="modal-content bg-transparent">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <input class="form-control bg-transparent text-white form-control-lg"  type="text" placeholder="Search...">
                                        <button class="btn btn-lg submit-btn" type="submit">Search</button>
                                      </div>
                                </div>
                                 
                              </form>
                        </div>
                    </li>
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>4</span></a>
                        <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                            <div class="dropdown_header">
                                <p>you have 4 messages</p>
                            </div>
                            <div class="dropdown_footer">
                                <a href="#">See All Messages</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                    </li>
                    <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="{{asset('userbackend/panel/assets/images/admin.jpg')}}" alt=""></a>
                                </div>
                            <ul>
                                
                                <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                                <li><a href=" "><span><i class="fas fa-cogs"></i></span>  Password Change</a></li>
                                <li>

                                    <a href="{{route('user.logout')}}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header>