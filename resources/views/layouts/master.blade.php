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
                <!-- Catagories -->
                <div class="categories">
                    <h4>التصنيفات</h4>
                    <ul>
                        categories
                        <li>
                            <a href="#">
                                <span><i class="fas fa-tags"></i></span>
                                <span>categoryName</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Categories -->

                <!-- Start Latest Posts -->
                <div class="last-posts">
                    <h4>أحدث المنشورات</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="span-image"><img src="" alt="post-image"></span>
                                <span>postTitle</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Latest Posts -->
            </div>
            {{-- End of Sidebar --}}
        </div>
    </div>
</div>
<!-- End Content -->


@include('layouts/footer')
