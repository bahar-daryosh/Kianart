@extends('layout.admin')
@extends('layout.adminheader')
@section('content')

    <h1>ویرایش نمونه کار</h1>

    <div class="row">
        <div class="col-sm-3 pt-2">
            <img src="/images/{{$workSample->image ? $workSample->image : 'http://placeholde.it/400x400'}}" alt="" class="img-responsive img-rounded width-90-per">
        </div>
        <div class="col-sm-9">


            {!! Form::model($workSample ,[ 'method' => 'PATCH','action'=>['AdminWorkSamplesController@update' , $workSample->id], 'files' => true]) !!}

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
                {!! Form::submit('ویرایش',['class' => 'btn btn-primary col-sm-6']) !!}

            </div>

            {!! Form::close() !!}

            {!! Form::open([ 'method' => 'DELETE','action'=>['AdminWorkSamplesController@destroy',$workSample->id]]) !!}

            <div class="form-group">
                {!! Form::submit('حذف نمونه کار',['class' => 'btn btn-danger col-sm-6']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection
