@extends('layout.admin')
@extends('layout.adminheader')
@section('content')


    <h1>نمونه کار جدید</h1>

    <div class="row">

        {!! Form::open([ 'method' => 'POST','action'=>'AdminWorkSamplesController@store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'عنوان :'); !!}
            {!! Form::text('title',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'عنوان دوم :'); !!}
            {!! Form::text('subtitle',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('customerName', 'درخواست دهنده :'); !!}
            {!! Form::text('customerName',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('workConspectus', 'زمینه فعالیت :'); !!}
            {!! Form::text('workConspectus',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'دسته بندی'); !!}
            {!! Form::select('category_id',[''=>'Choose Category'] + $categories,null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('skill_id', 'دسته بندی'); !!}
            {!! Form::select('skill_id',[''=>'مهارت های به کار رفته'] + $skills,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'عکس'); !!}
            {!! Form::file('image',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('caption', 'توضیح مختصری برای نمونه کار'); !!}
            {!! Form::textarea('caption',null, ['class' => 'form-control my-editor', 'id'=>'tiny']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('ایجاد پست',['class' => 'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>




@endsection
