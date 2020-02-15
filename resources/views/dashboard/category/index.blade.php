@extends('layout.admin')
@extends('layout.adminheader')
@section('content')


    <h1> خدمات جدید</h1>

    <div class="col-sm-6">
        {!! Form::open([ 'method' => 'POST','action'=>'AdminCategoriesController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'اسم خدمات :'); !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'عکس'); !!}
            {!! Form::file('image',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('caption', 'توضیح :'); !!}
            {!! Form::text('caption',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('اضافه کردن ',['class' => 'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">
        @if($categories)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>نوع خدمات</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : "no date"}}
                        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : "no date"}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection
