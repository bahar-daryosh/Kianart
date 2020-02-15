

    <header>
        <div class="">
            <div class="position-relative">
                <nav
                        class="supernav d-xl-flex justify-content-between hiddeenonmobile d-none d-xl-block bg-solid-purple nopadding">
                    <ul id="logo">
                        <li><a href="/"><img src="/assets/images/logo-white.svg" alt=""></a></li>

                    </ul>
                    <ul id="mainnav">
                        <li>
                            <a href="{{route('about-us')}}">درباره ما<i class="fas fa-chevron-down"></i></a>

                        </li>
                        <li>
                            <a href="{{route('card')}}">میزبانی وب<i class="fas fa-chevron-down"></i></a>
                            <div class="submenu">
                                <ul class="submenu p-0">
                                    <li><a href="">هاست لینوکس اشتراکی B</a></li>
                                    <li><a href="">هاست لینوکس اشتراکی A</a></li>
                                    <li><a href="">هاست لینوکس اختصاصی</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('tags')}}">طراحی وب سایت<i class="fas fa-chevron-down"></i></a>
                            <div class="submenu">
                                <ul class="submenu p-0">
                                    <li>
                                        <a href="{{route('home.workSkill',['id'=> 5])}}">طراحی سایت های وردپرسی</a>
                                    </li>
                                    <li>
                                        <a href="{{route('home.workSkill',['id'=> 1])}}">طراحی سایت لاراول</a>
                                    </li>
                                    <li>
                                        <a href="{{route('home.workSkill',['id'=> 6])}}">طراحی Ui و Ux</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">پیام کوتاه <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu">
                                <ul class="submenu p-0">
                                    <li><a href="">سرویس پیام کوتاه وب سایت</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">شتابدهنده <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu">
                                <ul class="submenu p-0">
                                    <li><a href="">شتابدهنده استارتاپی</a></li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('home.work-samples')}}">نمونه کار</a>
                        </li>

                        <li>
                            <a href="">تماس با ما</a>
                        </li>
                    </ul>
                    <ul>
                        <li>

                            @if (Route::has('login'))

                                @auth
                                    <a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-power3"></i> خروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a  href="{{ route('login') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('login-form').submit();"><i class="icon-user"></i>ورود
                                    </a>
                                    @if (Route::has('register'))
                                        <a  href="{{ route('register') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('register-form').submit();">ثبت نام
                                        </a>
                                    @endif
                                @endauth

                            @endif



                            <form id="register-form" action="{{ route('register') }}" style="display: none;">
                                @csrf
                            </form>

                            <form id="login-form" action="{{ route('login') }}" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <ul id="signup">
                        <li><a href="">ثبت درخواست طراحی سایت</a></li>

                    </ul>
                </nav>
                <div class="hamburgers position-absolute d-xl-none">
                    <div class="hamburger" id="hamburger-6">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="aside-nav position-absolute d-xl-none hidd">
                    <ul id="mainnav2">
                        <li>
                            <a href="">سازمان ها <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه اول</a></li>
                                    <li><a href="">تست زیر مجموعه اول</a></li>
                                    <li><a href="">تست زیر مجموعه اول</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">میزبان ابری<i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه دوم</a></li>
                                    <li><a href="">تست زیر مجموعه دوم</a></li>
                                    <li><a href="">تست زیر مجموعه دوم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">ابر سرور <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه سوم</a></li>
                                    <li><a href="">تست زیر مجموعه سوم</a></li>
                                    <li><a href="">تست زیر مجموعه سوم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">سرور اختصاصی <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه چهارم</a></li>
                                    <li><a href="">تست زیر مجموعه چهارم</a></li>
                                    <li><a href="">تست زیر مجموعه چهارم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">CDN <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه پنجم</a></li>
                                    <li><a href="">تست زیر مجموعه پنجم</a></li>
                                    <li><a href="">تست زیر مجموعه پنجم</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">SSL</a>
                        </li>
                        <li>
                            <a href="">... <i class="fas fa-chevron-down"></i></a>
                            <div class="submenu disactiv">
                                <ul class="submenu p-0">
                                    <li><a href="">تست زیر مجموعه هفتم</a></li>
                                    <li><a href="">تست زیر مجموعه هفتم</a></li>
                                    <li><a href="">تست زیر مجموعه هفتم</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

