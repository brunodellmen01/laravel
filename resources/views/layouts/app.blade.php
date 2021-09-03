<!DOCTYPE html>
<html lang="en">

@include('layouts.includes.head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.includes.navbar')
                <!-- End of Topbar -->
                @yield('content')
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.includes.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Code JavaScrip Start-->
    @include('layouts.includes.script-js')
    <!-- Code JavaScrip End-->

</body>

</html>
