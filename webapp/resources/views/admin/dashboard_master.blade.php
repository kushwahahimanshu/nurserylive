<!DOCTYPE html>
<html>
    <head>
     @include('admin/common/admin_head_scripts') 
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper"> 
            @include('admin/common/admin_header')
            @include('admin/common/admin_sidevar')
            <div class="content-wrapper"> 
                <section class="content">
                  @include('admin/common.admin_message_box')
                     
                   @yield('main_content')

                </section>
            </div>
            @include('admin/common/admin_footer') 
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('admin/common/admin_foot_scripts') 
    </body>
</html>
