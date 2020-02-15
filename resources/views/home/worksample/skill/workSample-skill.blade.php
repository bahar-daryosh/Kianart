@extends('layout.home')
@extends('layout.headerlog')

@section('content')

    <section class="py-5" id="customers">
        <h2 class="text-center text-purple">
            مشتریان کیان آرت
        </h2>
        <div class="container">
            <div id="costomerseffect">
                <div class="row">
                    @if( count($workSamples)>0)
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
                                                <td>عنوان :</td><td>{{$workSample->title}}</td></tr>
                                            <tr>
                                                <td>نوع خدمات :</td><td>{{$workSample->category->name}}</td></tr>
                                            <tr>
                                                <td>زمینه فعالیت:</td><td>{{$workSample->workConspectus}}</td></tr>
                                            <tr>
                                                <td>مهارت :</td><td>{{$workSample->skill->name}}</td></tr>

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
                    @else
                        <p class="text-center">نمونه کاری وجود ندارد.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>



@endsection
