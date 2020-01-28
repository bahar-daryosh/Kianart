
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
                    <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">تمام پست ها</a>
                    </li>
                    <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">پست جدید</a>
                    </li>
                    <li><a href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">پست جدید</a>
                    </li>

                    <li class="navigation-divider"></li>
                    <li><a href="layout-light.html" data-i18n="nav.page_layouts.light_layout" class="menu-item">کامنت ها</a>
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
            <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">کارت ها</span></a>
                <ul class="menu-content">
                    <li><a href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap" class="menu-item">کارت های بوت استرپ</a>
                    </li>
                    <li><a href="card-actions.html" data-i18n="nav.cards.card_actions" class="menu-item">کارت های بوت استرپ</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">کارت های پیشرفته</span></a>
                <ul class="menu-content">
                    <li><a href="card-statistics.html" data-i18n="nav.cards.card_statistics" class="menu-item">آمار</a>
                    </li>
                    <li><a href="card-charts.html" data-i18n="nav.cards.card_charts" class="menu-item">نمودار</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">محتوا</span></a>
                <ul class="menu-content">
                    <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">گرید</a>
                    </li>
                    <li><a href="content-typography.html" data-i18n="nav.content.content_typography" class="menu-item">تایپوگرافی</a>
                    </li>
                    <li><a href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities" class="menu-item">ابزارهای متن</a>
                    </li>
                    <li><a href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes" class="menu-item">کلاس امدادگر</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">تکه کدها</span></a>
                <ul class="menu-content">
                    <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">پیام ها</a>
                    </li>
                    <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">دکمه های اصلی</a>
                    </li>
                    <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">چرخ فلک</a>
                    </li>
                    <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">فروپاشی</a>
                    </li>
                    <li><a href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns" class="menu-item">رها کننده</a>
                    </li>
                    <li><a href="component-list-group.html" data-i18n="nav.components.component_list_group" class="menu-item">لیست گروه ها</a>
                    </li>
                    <li><a href="component-modals.html" data-i18n="nav.components.component_modals" class="menu-item">مدال ها</a>
                    </li>
                    <li><a href="component-pagination.html" data-i18n="nav.components.component_pagination" class="menu-item">صفحه بندی</a>
                    </li>
                    <li><a href="component-navs-component.html" data-i18n="nav.components.component_navs_component" class="menu-item">اجزا نویگیشن</a>
                    </li>
                    <li><a href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component" class="menu-item">اجرای تب</a>
                    </li>
                    <li><a href="component-pills-component.html" data-i18n="nav.components.component_pills_component" class="menu-item">قرص کامپوننت</a>
                    </li>
                    <li><a href="component-tooltips.html" data-i18n="nav.components.component_tooltips" class="menu-item">راهنمای ابزار</a>
                    </li>
                    <li><a href="component-popovers.html" data-i18n="nav.components.component_popovers" class="menu-item">پاپ اور</a>
                    </li>
                    <li><a href="component-tags.html" data-i18n="nav.components.component_tags" class="menu-item">تگ ها</a>
                    </li>
                    <li><a href="component-pill-tags.html" class="menu-item">برچسب قرص</a>
                    </li>
                    <li><a href="component-progress.html" data-i18n="nav.components.component_progress" class="menu-item">پیش رفتن</a>
                    </li>
                    <li><a href="component-media-objects.html" data-i18n="nav.components.component_media_objects" class="menu-item">اشیاء رسانه ای</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">ایکن ها</span></a>
                <ul class="menu-content">
                    <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">پر</a>
                    </li>
                    <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">ایکن ها</a>
                    </li>
                    <li><a href="icons-fps-line.html" data-i18n="nav.icons.icons_fps_line" class="menu-item">FPS Line Icons</a>
                    </li>
                    <li><a href="icons-ico-moon.html" data-i18n="nav.icons.icons_ico_moon" class="menu-item">Ico Moon</a>
                    </li>
                    <li><a href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome" class="menu-item">Font Awesome</a>
                    </li>
                    <li><a href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons" class="menu-item">Meteocons</a>
                    </li>
                    <li><a href="icons-evil.html" data-i18n="nav.icons.icons_evil" class="menu-item">Evil Icons</a>
                    </li>
                    <li><a href="icons-linecons.html" data-i18n="nav.icons.icons_linecons" class="menu-item">Linecons</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="form-layout-basic.html"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">فرم های پایه</span></a>
            </li>
            <li class=" nav-item"><a href="table-basic.html"><i class="icon-table2"></i><span data-i18n="nav.bootstrap_tables.table_basic" class="menu-title">جدول های پایه</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span data-i18n="nav.google_charts.main" class="menu-title">چارت های گوگل</span></a>
                <ul class="menu-content">
                    <li><a href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts" class="menu-item">نمودار میله</a>
                    </li>
                    <li><a href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts" class="menu-item">نمودار خط</a>
                    </li>
                    <li><a href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts" class="menu-item">نمودارهای پای</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span data-i18n="nav.chartjs.main" class="menu-title">چارت جی اس</span></a>
                <ul class="menu-content">
                    <li><a href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts" class="menu-item">نمودار خط</a>
                    </li>
                    <li><a href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts" class="menu-item">نمودار خط</a>
                    </li>
                    <li><a href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts" class="menu-item">Pie &amp;نمودار دونات</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-pie-graph2"></i><span data-i18n="nav.flot_charts.main" class="menu-title">نمودار زیبا</span></a>
                <ul class="menu-content">
                    <li><a href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts" class="menu-item">نمودار میله</a>
                    </li>
                    <li><a href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts" class="menu-item">نمودار خط</a>
                    </li>
                    <li><a href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts" class="menu-item">نمودارهای پای</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-map22"></i><span data-i18n="nav.maps.main" class="menu-title">نقشه</span></a>
                <ul class="menu-content">
                    <li><a href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps" class="menu-item">نقشه</a>
                    </li>
                    <li><a href="vector-maps-jvq.html" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">نقسه برداری</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-paint-format"></i><span data-i18n="nav.color_palette.main" class="menu-title">پالت رنگ</span></a>
                <ul class="menu-content">
                    <li><a href="color-palette-primary.html" data-i18n="nav.color_palette.color_palette_primary" class="menu-item">پالت اولیه</a>
                    </li>
                    <li><a href="color-palette-danger.html" data-i18n="nav.color_palette.color_palette_danger" class="menu-item">پالت خطر</a>
                    </li>
                    <li><a href="color-palette-success.html" data-i18n="nav.color_palette.color_palette_success" class="menu-item">پابت موفقیت</a>
                    </li>
                    <li><a href="color-palette-warning.html" data-i18n="nav.color_palette.color_palette_warning" class="menu-item">پالت اخطار</a>
                    </li>
                    <li><a href="color-palette-info.html" data-i18n="nav.color_palette.color_palette_info" class="menu-item">پالت اطلاع</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a href="color-palette-red.html" data-i18n="nav.color_palette.color_palette_red" class="menu-item">پالت قرمز</a>
                    </li>
                    <li><a href="color-palette-pink.html" data-i18n="nav.color_palette.color_palette_pink" class="menu-item">پالت صورتی</a>
                    </li>
                    <li><a href="color-palette-purple.html" data-i18n="nav.color_palette.color_palette_purple" class="menu-item">پالت بنفش</a>
                    </li>
                    <li><a href="color-palette-deep-purple.html" data-i18n="nav.color_palette.color_palette_deep_purple" class="menu-item">پالت بنفش پررنگ</a>
                    </li>
                    <li><a href="color-palette-indigo.html" data-i18n="nav.color_palette.color_palette_indigo" class="menu-item">پالت Indigo</a>
                    </li>
                    <li><a href="color-palette-blue.html" data-i18n="nav.color_palette.color_palette_blue" class="menu-item">پالت آبی</a>
                    </li>
                    <li><a href="color-palette-light-blue.html" data-i18n="nav.color_palette.color_palette_light_blue" class="menu-item">پالت آبی کم رنگ</a>
                    </li>
                    <li><a href="color-palette-cyan.html" data-i18n="nav.color_palette.color_palette_cyan" class="menu-item">پالت سفید</a>
                    </li>
                    <li><a href="color-palette-teal.html" data-i18n="nav.color_palette.color_palette_teal" class="menu-item">پالت طال</a>
                    </li>
                    <li><a href="color-palette-green.html" data-i18n="nav.color_palette.color_palette_green" class="menu-item">پالت سبز</a>
                    </li>
                    <li><a href="color-palette-light-green.html" data-i18n="nav.color_palette.color_palette_light_green" class="menu-item">پالت سبز کم رنگ</a>
                    </li>
                    <li><a href="color-palette-lime.html" data-i18n="nav.color_palette.color_palette_lime" class="menu-item">پالت لیمو</a>
                    </li>
                    <li><a href="color-palette-yellow.html" data-i18n="nav.color_palette.color_palette_yellow" class="menu-item">پالت زرد</a>
                    </li>
                    <li><a href="color-palette-amber.html" data-i18n="nav.color_palette.color_palette_amber" class="menu-item">پالت Amber</a>
                    </li>
                    <li><a href="color-palette-orange.html" data-i18n="nav.color_palette.color_palette_orange" class="menu-item">پالت پرتغال</a>
                    </li>
                    <li><a href="color-palette-deep-orange.html" data-i18n="nav.color_palette.color_palette_deep_orange" class="menu-item">پالت پرتغالی پررنگ</a>
                    </li>
                    <li><a href="color-palette-brown.html" data-i18n="nav.color_palette.color_palette_brown" class="menu-item">پالت براون</a>
                    </li>
                    <li><a href="color-palette-blue-grey.html" data-i18n="nav.color_palette.color_palette_blue_grey" class="menu-item">پالت آبی خاکستری</a>
                    </li>
                    <li><a href="color-palette-grey.html" data-i18n="nav.color_palette.color_palette_grey" class="menu-item">پالت خاکستری</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="changelog.html"><i class="icon-copy"></i><span data-i18n="nav.changelog.main" class="menu-title">تغییرات</span><span class="tag tag tag-pill tag-danger float-xs-right">1.0</span></a>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="icon-eye-disabled"></i><span data-i18n="nav.disabled_menu.main" class="menu-title">منوی غیرفعال</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">سطوح منو</span></a>
                <ul class="menu-content">
                    <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">مرحله دوم</a>
                    </li>
                    <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">کودک دوم سطح</a>
                        <ul class="menu-content">
                            <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">سطح سوم</a>
                            </li>
                            <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main" class="menu-item">کودک سوم سطح</a>
                                <ul class="menu-content">
                                    <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1" class="menu-item">سطح چهارم</a>
                                    </li>
                                    <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2" class="menu-item">سطح چهارم</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
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
