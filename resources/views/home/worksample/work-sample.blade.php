@extends('layout.home')
@extends('layout.headerlog')

@section('content')

    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-sm-6">

                <table class="table table-hover w-100">
                    <tbody class="center">
                    <tr>
                        <td>عنوان :</td><td>{{$workSample->title}}</td>
                    </tr>
                    @if($workSample->subtitle)
                        <tr>
                            <td></td><td>{{$workSample->subtitle}}</td>
                        </tr>
                    @endif
                    <tr>
                        <td>نوع خدمات :</td><td><a href="{{route('home.workCategory',$workSample->category->id)}}">{{$workSample->category ? $workSample->category->name : "دسته بندی نشده است."}}</a></td>
                    </tr>
                    <tr>
                        <td>زمینه فعالیت:</td><td>{{$workSample->workConspectus}}</td>
                    </tr>
                    <tr>
                        <td>مهارت :</td><td><a href="{{route('home.workSkill',$workSample->skill->id)}}">{{$workSample->skill ? $workSample->skill->name : "مهارت به کار نرفته است."}}</a></td>
                    </tr>
                    <tr>
                        <td>درخواست دهنده :</td><td>{{$workSample->customerName}}</td>
                    </tr>
                    @if($workSample->caption)
                        <tr>
                            <td>توضیح مختصری درباره پروژه :</td><td>{{$workSample->caption}}</td>
                        </tr>
                    @endif

                    </tbody>
                </table>

            </div>
            <div class="col-sm-6">
                <img src="/images/{{$workSample->image ? $workSample->image : 'http://placeholde.it/400x400'}}" alt="" class="img-responsive img-rounded w-75 mr-5 pr-5">
            </div>

        </div>

    </div>

@endsection
