
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/images/apple-touch-icon.png" rel="icon">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    @yield('css')
    <title>
        kianart
    </title>
</head>

<body id="index">
<main>

    {{--Error handle--}}

    @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>
<footer class="bigmenu">
    <ul class="d-none d-md-flex d-lg-flex  d-xl-flex  justify-content-between">
        <li>
            <a href="single-article.html">لینک اول</a>
            <ul class="submenu">
                <li>
                    <a href="single-article.html">زیر مجموعه 1</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 2</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="single-article.html">لینک دوم</a>
            <ul class="submenu">
                <li>
                    <a href="single-article.html">زیر مجموعه 1</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 2</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="single-article.html">لینک سوم</a>
            <ul class="submenu">
                <li>
                    <a href="single-article.html">زیر مجموعه 1</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 2</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="single-article.html">لینک چهارم</a>
            <ul class="submenu">
                <li>
                    <a href="single-article.html">زیر مجموعه 1</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 2</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="single-article.html">لینک پنجم</a>
            <ul class="submenu">
                <li>
                    <a href="single-article.html">زیر مجموعه 1</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 2</a>
                </li>
                <li>
                    <a href="single-article.html">زیر مجموعه 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="btn btn-outline-primary">
                لینک به بخش
            </a>
            <a class="btn btn-outline-primary">
                لینک به بخش
            </a>
            <a class="btn btn-outline-primary">
                نماد اعتماد
            </a>
        </li>
    </ul>

</footer>
<footer class="hmenu">
    <nav class="px-4">
        <ul class="d-block d-md-flex d-lg-flex  d-xl-flex  justify-content-between">
            <li>
                <a href="about-us.html">درباره ما</a>
            </li>
            <li>
                <a href="#">قوانین خرید</a>
            </li>
            <li>
                <a href="articles.html">وبلاگ</a>
            </li>
            <li>
                <a href="#"><img alt="" class="w-100=" src="assets/images/logo-white.svg"></a>
            </li>
            <li>
                <a href="#">سوالات متداول</a>
            </li>
            <li>
                <a href="#">استخدام</a>
            </li>
            <li>
                <a href="contact.blade.php">تماس</a>
            </li>
        </ul>
    </nav>
</footer>

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/swipwerasset.js"></script>
@yield('scripts')
</body>

</html>