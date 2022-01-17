@extends('layout.master')
@section('title')
    Halaman Admin
@endsection
@section('content')
<div id="wrapper">

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav in" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="/home/admin" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/home/admin/users"><i class="fa fa-users fa-fw"></i> Users</a>
                </li>
                <li>
                    <a href="/home/admin/pembimbing"><i class="fa fa-user fa-fw"></i> Pembimbing</a>
                </li>
                <li>
                    <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>

<div id="page-wrapper" style="min-height: 802px;">
    <div class="container-fluid">
        @yield('content1')
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
@endsection
