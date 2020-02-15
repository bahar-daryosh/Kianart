@extends('layout.admin')
@extends('layout.adminheader')
@section('content')


    <h1>مهارت ها</h1>

    <div class="col-sm-6">
        {!! Form::open([ 'method' => 'POST','action'=>'AdminSkillsController@store','files'=>true]) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('name', 'نام مهارت :'); !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'عکس'); !!}
            {!! Form::file('image',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'توضیح :'); !!}
            {!! Form::text('body',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('اضافه کردن مهارت',['class' => 'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}
    </div>



    <div class="col-sm-6">
        @if(count($skills)>0)
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
        @else
            <h2 class="text-center">مهارتی وجود ندارد</h2>
        @endif

    </div>






@endsection
