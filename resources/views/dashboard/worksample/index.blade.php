@extends('layout.admin')
@extends('layout.adminheader')
@section('content')

    <h1>نمونه کارهاا</h1>

    <table class="table table-hover col-10">
        <thead>
        <tr>
            <th>Id</th>
            <th>عکس</th>
            <th>عنوان</th>
            <th>دسته بندی</th>
            <th>مهارت</th>
            <th>زیر عنوان</th>
            <th>توضیحات</th>
            <th>لینک نمونه کار</th>
            <th>درخواست دهنده</th>
            <th>زمینه فعالیت</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($workSamples)
            @foreach($workSamples as $workSample)
                <tr>
                    <td>{{$workSample->id}}</td>
                    <td><img src="/images/{{$workSample->image ? $workSample->image : 'http://placeholde.it/50x50'}}" alt="" height="50" class="img-responsive img-rounded"></td>
                    <td><a href="{{route('workSample.edit',$workSample->id)}}">{{$workSample->title}}</a></td>
                    <td><a href="{{route('categories.show',$workSample->category->id)}}">{{$workSample->category ? $workSample->category->name : "دسته بندی نشده است."}}</a></td>
                    <td><a href="{{route('skills.show',$workSample->skill->id)}}">{{$workSample->skill ? $workSample->skill->name : "مهارت به کار نرفته است."}}</a></td>
                    <td>{{$workSample->subtitle}}</td>
                    <td>{{$workSample->caption}}</td>
                    <td><a href="{{route('home.work-sample',$workSample->id)}}">نمایش نمونه کار</a></td>
                    <td>{{$workSample->customerName}}</td>
                    <td>{{$workSample->workConspectus}}</td>
                    <td>{{$workSample->created_at->diffForHumans()}}</td>
                    <td>{{$workSample->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@endsection
