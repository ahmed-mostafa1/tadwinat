@include('layouts/header')

<!-- Start Content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            {{-- Sidebar --}}
            <div class="col-md-3">
                @include('layouts/sidebar')
            </div>
            {{-- End of Sidebar --}}
        </div>
    </div>
</div>
<!-- End Content -->


@include('layouts/footer')
