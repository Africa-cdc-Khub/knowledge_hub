@include('admin.layouts.partials.header')
@yield('styles')
@include("partials.general.thintable")
@include('admin.layouts.partials.preloader')

<!-- Page -->
<div class="page">

    @include("admin.layouts.partials.top_bar_main")
    @include("admin.layouts.partials.top_bar_mobile")
    @include("admin.layouts.partials.nav")

    <!-- Main Content -->
    <div class="main-content" style="margin-right: 20px; margin-left: 20px; margin-top: 20px;">
        <div class="container-fluid">
            @include('layouts.partials.alerts')
            @yield('content')
        </div>
    </div>

</div>
<!-- Page closed -->
@include("admin.layouts.partials.footer")

@yield('scripts')

@stack('modal-scripts')

</body>

</html>
