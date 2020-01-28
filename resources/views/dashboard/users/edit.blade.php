
@extends('layout.admin')
@extends('layout.adminheader')

@section('content')





    <h1>Edit User</h1>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-3">
                <img src="{{$user->photo ? $user->photo->file : 'http://placeholde.it/400x400'}}" alt="" height="200 px" class="img-responsive img-rounded">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-sm-6">

                {!! Form::model($user , [ 'method' => 'PATCH','action'=>['AdminUserController@update',$user->id], 'files' => true]) !!}

                        {{@csrf_field()}}
                        <div class="form-group">
                            {!! Form::label('name', 'User name'); !!}
                            {!! Form::text('name',null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:'); !!}
                            {!! Form::email('email',null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('role_id', 'Role'); !!}
                            {!! Form::select('role_id',$roles,null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Status'); !!}
                            {!! Form::select('is_active',array( 1=> 'Active' , 0 => 'Not Active'),null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('avatar_id','Title:'); !!}
                            {!! Form::file('avatar_id',null, ['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Update User',['class' => 'btn btn-primary col-sm-6']) !!}

                        </div>
                        {!! Form::close() !!}

                        {!! Form::open([ 'method' => 'DELETE','action'=>['AdminUserController@destroy',$user->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete User',['class' => 'btn btn-danger col-sm-6']) !!}

                        </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>
@endsection
