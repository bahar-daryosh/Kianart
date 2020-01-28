@extends('layout.admin')
@extends('layout.adminheader')
@section('content')


    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>عکس</th>
            <th>نام کابری</th>
            <th>ایمیل</th>
            <th>Role</th>
            <th>وضعیت کاربر</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>

        </thead>
        <tbody>
        @if($users)

            {{@csrf_field()}}

            @foreach($users as $user)



                <tr>
                    <td>{{$user->id}}</td>
                    <td><img src="{{$user->photo ? $user->photo->file : 'http://placeholde.it/50x50'}}" alt="" height="50px" class="img-responsive img-rounded"></td>
                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}
                    @foreach($user->roles as $role)
                    <td>{{$role->name }}</td>
                    @endforeach
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>




@endsection
