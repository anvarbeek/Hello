@include('admin.inc.header')
@include('admin.inc.navbar')
@include('admin.inc.navs')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        @yield('content')
    </div>
    <!-- /.content-header -->
</div>

@include('admin.inc.footer')
