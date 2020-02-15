@extends('layout.admin')
@extends('layout.adminheader')
@section('content')



    <h1>Edit Post</h1>

    <div class="row">
        <div class="col-sm-3">
            <img src="{{$post->photo ? $post->photo->file : 'http://placeholde.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">

            {!! Form::model($post ,[ 'method' => 'PATCH','action'=>['AdminPostController@update',$post->id], 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title :'); !!}
                {!! Form::text('title',null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category'); !!}
                {!! Form::select('category_id',[''=>'Choose Category'] + $categories,null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo'); !!}
                {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('caption', 'Description :'); !!}
                {!! Form::textarea('caption',null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Post',['class' => 'btn btn-primary col-sm-6']) !!}

            </div>

            {!! Form::close() !!}


            {!! Form::open([ 'method' => 'DELETE','action'=>['AdminPostController@destroy',$post->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Post',['class' => 'btn btn-danger col-sm-6']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div>




@endsection
