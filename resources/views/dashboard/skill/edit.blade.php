@extends('layout.admin')
@extends('layout.adminheader')
@section('content')


    <h1>ویرایش مهارت</h1>

    <div class="col-sm-6">
        {!! Form::model($skill ,[ 'method' => 'PATCH','action'=>['AdminSkillsController@update' , $skill->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'نام مهارت :'); !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'توضیح :'); !!}
            {!! Form::text('body',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('ثبت ویرایش',['class' => 'btn btn-primary col-sm-6']) !!}

        </div>

        {!! Form::close() !!}

        {!! Form::open([ 'method' => 'DELETE','action'=>['AdminSkillsController@destroy', $skill->id]]) !!}



        <div class="form-group">
            {!! Form::submit('حذف مهارت',['class' => 'btn btn-primary col-sm-6']) !!}

        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">
        @if($skills)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>نام مهارت</th>
                    <th>تعریف مهارت</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($skills as $skill)
                    <tr>
                        <td>{{$skill->id}}</td>
                        <td><a href="{{route('skills.edit', $skill->id)}}">{{$skill->name}}</a></td>
                        <td>{{$skill->body}}</td>
                        <td>{{$skill->created_at ? $skill->created_at->diffForHumans() : "no date"}}</td>
                        <td>{{$skill->updated_at ? $skill->updated_at->diffForHumans() : "no date"}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

    </div>



@endsection
