
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<!-- navbar-fixed-top-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item"><a href="{{route('/dashboard')}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">داشبورد</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>

            </li>
            <li class=" nav-item"><a href="#"><i class="icon-android-contact"></i><span data-i18n="nav.page_layouts.main" class="menu-title">مدیریت کاربران</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('users.index')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">کاربران</a>
                    </li>
                    <li><a href="{{route('users.create')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">کابر جدید</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">مدیریت پست ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('post.index')}}" data-i18n="nav.page_layouts.1_column" class="menu-item">تمام پست ها</a>
                    </li>
                    <li><a href="{{route('post.create')}}" data-i18n="nav.page_layouts.2_columns" class="menu-item">پست جدید</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a href="{{route('comment.index')}}" data-i18n="nav.page_layouts.light_layout" class="menu-item">کامنت ها</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">گالری</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('media.index')}}" data-i18n="nav.invoice.invoice_template" class="menu-item">تمامی عکس ها</a>
                    </li>
                    <li><a href="{{route('media.create')}}" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">آپلود عکس</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">دسته بندی</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('skills.index')}}" data-i18n="nav.cards.card_bootstrap" class="menu-item">مهارت ها</a>
                    </li>
                    <li><a href="{{route('categories.index')}}" data-i18n="nav.cards.card_actions" class="menu-item">نوع خدمات</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">نمونه کار</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('workSample.index')}}" data-i18n="nav.cards.card_statistics" class="menu-item">تمام نمونه کارها</a>
                    </li>
                    <li><a href="{{route('workSample.create')}}" data-i18n="nav.cards.card_charts" class="menu-item">نمونه کار جدید</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="form-layout-basic.html"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">فرم های پایه</span></a>
            </li>

            <li class=" nav-item"><a href="changelog.html"><i class="icon-copy"></i><span data-i18n="nav.changelog.main" class="menu-title">تغییرات</span><span class="tag tag tag-pill tag-danger float-xs-right">1.0</span></a>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="icon-eye-disabled"></i><span data-i18n="nav.disabled_menu.main" class="menu-title">منوی غیرفعال</span></a>
            </li>


        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
            @yield('content')


        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="/admin/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="/admin/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="/admin/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="/admin/vendors/js/charts/chart.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="/admin/js/core/app-menu.js" type="text/javascript"></script>
<script src="/admin/js/core/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="/admin/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
@yield('scripts')
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:38:18 GMT -->
</html>
