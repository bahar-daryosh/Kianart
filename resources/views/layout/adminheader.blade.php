<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:27 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>وب سایت من</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/images/ico/apple-icon-152.png">

    <link rel="shortcut icon" type="image/png" href="/admin/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="/admin/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="/admin/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/app.css">
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/custom-rtl.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin/css-rtl/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin/css/style-rtl.css">

    @yield('styles')
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  fixed-navbar">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                <li class="nav-item"><a href="{{route('/dashboard')}}" class="navbar-brand nav-link"><img alt="branding logo" src="/admin/images/logo/robust-logo-light.png" data-expand="/admin/images/logo/robust-logo-light.png" data-collapse="/admin/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5">         </i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">
                    <li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-ir"></i><span class="selected-language">فارسی</span></a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-ir"></i> فارسی</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a></div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">اعلان ها</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 جدید</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="0985c8c7-5a9e-3232-755b-df64ee42c274"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">شما سفارش جدیدی دارید</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% لود سرور</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">اعلان های خطر</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">تکمیل کار</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">آخر هفته</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">گزارش ماهانه را تولید کنید</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 236px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">خواندن همه اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="f8126846-773c-12a0-f9f9-d0207f7ecec5"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="/admin/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">علی عابدی</h6>
                                            <p class="notification-text font-small-3 text-muted">من نمونه کارهای شما را دوست دارم، بگذارید پروژه را شروع کنیم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">امروز</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="/admin/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">حسین توکلی</h6>
                                            <p class="notification-text font-small-3 text-muted">من کار شما را دیده ام، وجود دارد</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">سشنبه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="/admin/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">عارف محمدزاده</h6>
                                            <p class="notification-text font-small-3 text-muted">آیا می توانیم در این هفته تماس بگیریم؟ ?</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">جمعه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="/admin/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">اکبر جوی</h6>
                                            <p class="notification-text font-small-3 text-muted">ما این شب شنبه شب جشن پروژه داریم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 258px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">تمام پیام ها را بخوانید</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="/admin/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">جان دویی</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> ویرایش پروفایل</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> صندوق ورودی من</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> کار</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> تقویم</a>
                            <div class="dropdown-divider"></div><a  class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-power3"></i> خروج</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
