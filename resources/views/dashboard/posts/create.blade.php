@extends('layout.admin')
@extends('layout.adminheader')
@section('content')



    <h1>Create Post</h1>

    <div class="row">

        {!! Form::open([ 'method' => 'POST','action'=>'AdminPostController@store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'عنوان :'); !!}
            {!! Form::text('title',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'دسته بندی'); !!}
            {!! Form::select('category_id',[''=>'Choose Category'] + $categories,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'عکس'); !!}
            {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('caption', 'کپشن پست :'); !!}
            {!! Form::textarea('caption',null, ['class' => 'form-control my-editor', 'id'=>'tiny']) !!}
        </div>





        <div class="form-group">
            {!! Form::submit('ایجاد پست',['class' => 'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>



@endsection
