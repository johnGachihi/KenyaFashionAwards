@extends('layouts.app')

@section('stylesheets')
@yield('_stylesheets')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <aside id="_sidebar" class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <!-- <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                        <div class="d-table m-auto">
                        <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                        <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
                        </div>
                    </a>
                    <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                    </nav>
                </div>
                <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                    <div class="input-group input-group-seamless ml-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
                </form> -->
                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                    <!-- <li class="nav-item">
                        <a class="nav-link " href="index.html">
                        <i class="material-icons">edit</i>
                        <span>Blog Dashboard</span>
                        </a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('admin/award_categories') }}">
                            <i class="material-icons">vertical_split</i>
                            <span>Categories</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('admin/add_award_category') }}">
                            <i class="material-icons">note_add</i>
                            <span>Add Category</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('admin/applications') }}">
                                <i class="material-icons">list_alt</i>
                                <span>Applications</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('admin/vote_stats') }}">
                                <i class="material-icons">bar_chart</i>
                                <span>Vote Statistics</span>
                            </a>
                        </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link " href="form-components.html">
                        <i class="material-icons">view_module</i>
                        <span>Forms &amp; Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="tables.html">
                        <i class="material-icons">table_chart</i>
                        <span>Tables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="user-profile-lite.html">
                        <i class="material-icons">person</i>
                        <span>User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="errors.html">
                        <i class="material-icons">error</i>
                        <span>Errors</span>
                        </a>
                    </li> -->
                    </ul>
                </div>

                {{--Collapse Button--}}
                @if(Route::currentRouteName() === 'vote-stats')
                <a id="sideMenuCollapser" class="material-icons rounded-circle" style="text-decoration: none;" href="#a">
                    remove
                </a>

                @endif
            </aside>
            <main id="_mainCont" class="col p-0 offset-lg-2 offset-md-3">
            {{--<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">--}}
                @yield('mainContent')
            </main>
        </div>
    </div>
@endsection

@section('scripts')
@yield('_scripts')
@endsection