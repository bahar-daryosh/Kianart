@extends('layout.home')
@extends('layout.headermain')
@section('content')
    <section class="w-100 p-0 pb-5 m-0" id="services">
        <h1 class="text-center text-purple" id="firstheading">
            خدمات طراحی اپلیکیشن
        </h1>
        <p class="alias text-center text-gray font-16">
            ارائه دهنده خدمات برنامه نویسی تحت وب و اندروید و IOS
        </p>
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img alt="server" class="card-img-top" src="/images/{{$category->image}}">
                            <div class="card-body">
                                <h2 class="card-title text-purple">{{$category->name}}</h2>
                                <p class="card-text text-justify">
                                    {{$category->caption}}
                                </p>
                                <p class="text-right">
                                    <a class="btn btn-purple" href="">ادامه</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <!-- <p class="text-center mt-5">
            <a class="btn btn-purple" href="contact.html">
                <i class="fas fa-phone"></i>
                تماس با کیان آرت
            </a>
        </p> -->
    </section>
    <section class="py-5" id="customers">
        <h2 class="text-center text-purple">
            مشتریان کیان آرت
        </h2>
        <div class="container">
            <div id="costomerseffect">
                <div class="row">
                    @foreach($workSamples as $workSample)
                        <div class="col-12 col-md-4 ">
                            <div class="position-relative over-hiidden w-100 ourcustomer elem second ">

                                <img src="/images/{{$workSample->image}}" alt="" class="w-100 h-image">

                                <div class="position-absolute white-mover">
                                    &nbsp;
                                </div>
                                <div class="position-absolute text-over w-100">
                                    <p class="secondary-color-dark">
                                        مشخصات سایت
                                    </p>
                                    <table class="table table-hover w-100">
                                        <tbody class="center">
                                        <tr>
                                            <td>عنوان :</td><td>{{$workSample->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>نوع خدمات :</td><td>{{$workSample->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>زمینه فعالیت:</td><td>{{$workSample->workConspectus}}</td>
                                        </tr>
                                        <tr>
                                            <td>مهارت :</td><td>{{$workSample->skill->name}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="partialBorder">
                                    <div class="leftTop"></div>
                                    <div class="rightTop"></div>
                                    <div class="leftBot"></div>
                                    <div class="rightBot"></div>
                                </div>
                            </div>
                            <div class="ml-5 pl-4">
                                <a role="button" class="btn btn-outline-secondary ml-5 mt-2 " href="{{route('home.work-sample',$workSample->id)}}">
                                    مشاهده
                                </a>
                            </div>

                        </div>
                    @endforeach
{{--                    <div class="col-12 col-md-4">--}}
{{--                        <div class="position-relative over-hiidden w-100 ourcustomer elem second">--}}
{{--                            <img src="assets/images/article-01.png" alt="" class="w-100">--}}
{{--                            <div class="position-absolute white-mover">--}}
{{--                                &nbsp;--}}
{{--                            </div>--}}
{{--                            <div class="position-absolute text-over">--}}
{{--                                <p class="secondary-color-dark">--}}
{{--                                    مشخصات سایت--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="partialBorder">--}}
{{--                                <div class="leftTop"></div>--}}
{{--                                <div class="rightTop"></div>--}}
{{--                                <div class="leftBot"></div>--}}
{{--                                <div class="rightBot"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-4">--}}
{{--                        <div class="position-relative over-hiidden w-100 ourcustomer elem second">--}}
{{--                            <img src="assets/images/article-01.png" alt="" class="w-100">--}}
{{--                            <div class="position-absolute white-mover">--}}
{{--                                &nbsp;--}}
{{--                            </div>--}}
{{--                            <div class="position-absolute text-over">--}}
{{--                                <p class="secondary-color-dark">--}}
{{--                                    مشخصات سایت--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="partialBorder">--}}
{{--                                <div class="leftTop"></div>--}}
{{--                                <div class="rightTop"></div>--}}
{{--                                <div class="leftBot"></div>--}}
{{--                                <div class="rightBot"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-4 ">--}}
{{--                        <div class="position-relative over-hiidden w-100 ourcustomer elem second pt-4">--}}
{{--                            <img src="assets/images/article-01.png" alt="" class="w-100">--}}
{{--                            <div class="position-absolute white-mover">--}}
{{--                                &nbsp;--}}
{{--                            </div>--}}
{{--                            <div class="position-absolute text-over">--}}
{{--                                <p class="secondary-color-dark">--}}
{{--                                    مشخصات سایت--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="partialBorder">--}}
{{--                                <div class="leftTop"></div>--}}
{{--                                <div class="rightTop"></div>--}}
{{--                                <div class="leftBot"></div>--}}
{{--                                <div class="rightBot"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="" id="parallax">
        <div class="parallax"></div>
        <div class="parallax-text position-absolute">
            <h2 class="text-light-purple">
                طراحی ui به تناسب سلیقه مشتری
            </h2>
            <p>
                طراحی سایت اختصاصی بصورت بسیار حرفه ایی
            </p>
            <p></p>
        </div>
        <div class="parallax-img position-absolute">
            <p class="text-right">
                <img alt="" class="h-100" src="assets/images/uideisgn.svg">
            </p>
        </div>
    </section>
    <section class="pt-3 pb-5" id="blogin">
        <h2 class="text-center text-light-purple">
            وبلاگ کیان آرت
        </h2>
        <p class="text-center text-=light-gray">
            <a href="articles.blade.php">
                لیست مقالات سایت
            </a>
        </p>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($posts as $post)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img alt="" class="card-img-top" src="{{$post->photo->file}}">
                                        <div class="card-body">
                                            <h2 class="card-title text-purple">{{$post->title}}</h2>
                                            <p class="card-text">{{$post->caption}}</p>
                                            <p class="text-right">
                                                <a class="btn btn-purple" href="{{route('home.singleArticle',$post->id)}}">ادامه مقاله</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="swiper-slide">
                                <div class="card">
                                    <img alt="" class="card-img-top" src="assets/images/ui-design.svg">
                                    <div class="card-body">
                                        <h2 class="card-title text-purple">عنوان مقاله</h2>
                                        <p class="card-text">خلاصه مقاله را در این قسمت قرار داده تا کاربر
                                            تشویق شود بقیه مقاله را بخواند. و طبعا خود مقاله شما نیز
                                        </p>
                                        <p class="text-right">
                                            <a class="btn btn-purple" href="single-article.html">ادامه مقاله</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img alt="" class="card-img-top" src="assets/images/ui-design.svg">
                                    <div class="card-body">
                                        <h2 class="card-title text-purple">عنوان مقاله</h2>
                                        <p class="card-text">خلاصه مقاله را در این قسمت قرار داده تا کاربر
                                            تشویق شود بقیه مقاله را بخواند. و طبعا خود مقاله شما نیز
                                        </p>
                                        <p class="text-right">
                                            <a class="btn btn-purple" href="single-article.html">ادامه مقاله</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="parallax">
        <div class="parallax"></div>
        <div class="parallax-text position-absolute">
            <h2>
                محتوا گذاری طبق سلیقه مشتری
            </h2>
            <p>
                طراحی متن و محتوا برای سایت بصورت تهیه و ترجمه و تحقیق
            </p>
            <p></p>
        </div>
        <div class="parallax-img position-absolute">
            <p class="text-right">
                <img alt="" class="h-100" src="assets/images/content.svg">
            </p>
        </div>
    </section>
@stop
