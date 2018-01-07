@extends('layouts.app')

@section('content')
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation" id="mainNav">
                <a class="navbar-brand" href="{{ url ('/admin') }}">{{ config('app.name', 'Admin Portal') }}</a>
            <!-- /.navbar-header -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard" {{ (Request::is('/') ? 'class="active"' : '') }}>
          <a class="nav-link" href="{{ url ('/home') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User" {{ (Request::is('*user') ? 'class="active"' : '') }}>
          <a class="nav-link" href="{{ url ('user') }}">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">  
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
            <ul class="navbar-nav ml-auto">
                <!-- /.dropdown -->
                <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#Modellogout" >
                                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                            </li>
                            <li></li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
    <div class="container-fluid">
            <div class="row">
                @yield('section')
            </div>

            <!-- /#page-wrapper -->
        <div style="height: 1000px;"></div>
    </div>


    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Dada 2018</small>
        </div>
      </div>
    </footer>

 <div class="modal fade" id="Modellogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-right">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <a href="{{ route('logout') }}" class="btn btn-primary"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          </div>
        </div>
      </div>
    </div>

                                        

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
     </div>
@stop
