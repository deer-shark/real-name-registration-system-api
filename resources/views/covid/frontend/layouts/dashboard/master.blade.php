{{-- @include('covid.frontend.layouts.dashboard.topnav') --}}
<div class="container dashboard">
    <h3 class="data-h3">@yield('title')</h3>
    {{--  <div class="row">
        <div class="col-sm-4">
            @include('covid.frontend.layouts.dashboard.nav')
        </div>
        <div class="col-sm-8"></div>
    </div>  --}}
    @yield('dashboard')
</div>