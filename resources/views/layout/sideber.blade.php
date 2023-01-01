        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu leftside-menu-detached" style="height: 100vh;">

            <div class="leftbar-user">
                <a href="javascript: void(0);">
                    @if(Session::has('avatar'))
                    <img src="{{  asset('uploads/profile/'.Session::get('avatar')) }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    @endif
                    <span class="leftbar-user-name">
                        @if(Session::has('userName'))
                        {{ Crypt::decrypt(Session::get('userName')) }}
                        @endif
                    </span>
                </a>
            </div>
            <!--- Sidemenu -->
            <ul class="side-nav">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> My Accounts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('member.show',Crypt::decrypt(Session::get('userId')))}}">Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Update Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> {{__('Dashaboard')}} </span>
                    </a>
                </li>

                <li class="side-nav-title side-nav-item">Construstions</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> {{ __('vaccine registration')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('project.index')}}">
                                    {{__('Registration')}}
                                </a>
                            </li>
                           
                            {{-- <li>
                                <a href="{{route('project.create')}}">{{__('Create Project')}} <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                            </li> --}}
                            
                           
                            
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarFloor">
                                    <span>{{__('Registration Details')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse ml-3" id="sidebarFloor">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('floorDetails.index')}}">
                                                {{__('List')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('floorBudget.index')}}">
                                                {{__('Create Registration')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </li>

               

                <li class="side-nav-item">
                    
                    <div class="collapse" id="sidebarProjects">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('country.index')}}">
                                    {{__('Coutries')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('division.index')}}">
                                    {{__('Divions/State')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('district.index')}} " class="side-nav-link">
                                    {{_('Districts')}}
                                    <span class="badge rounded-pill badge-dark-lighten text-dark font-10 float-end">New</span>
                                </a>
                            </li>
                            {{-- <li>
                                        <a href="apps-projects-add.html">Create Project <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                    </li> --}}
                        </ul>
                    </div>
                </li>
               

                
                

            </ul>


            <!-- End Sidebar -->

            <div class="clearfix">
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="btn btn-light rounded closeBtn float-end" id="condensed-check" onclick="sidebarHandler()">
                    <i class="mdi mdi-chevron-left-box-outline"></i>
                </button>
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="d-none btn btn-light justify-content-center" id="opentBtn">
                    <i class="mdi mdi-dock-left"></i>
                </button>
            </div>



            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @push('scripts')
        <script>
            let condensed = $('#condensed-check')
            let fixed = $('#fixed-check')

            function sidebarHandler() {
                // data-leftbar-compact-mode="condensed"
                $('body').attr('data-leftbar-compact-mode', 'condensed');
                $('.closeBtn').toggleClass('d-none');
                $('#opentBtn').removeClass('d-none');
            }
            $('#opentBtn').click(() => {
                $('.closeBtn').removeClass('d-none');
                $('#opentBtn').addClass('d-none');
                $('body').removeAttr('data-leftbar-compact-mode');
            });
        </script>
        @endpush