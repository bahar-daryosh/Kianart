@extends('layout.admin')
@extends('layout.adminheader')

@section('content')

    <h1> کابر جدید</h1>



    {!! Form::open([ 'method' => 'POST','url' => 'dashboard/users', 'files' => true]) !!}

            @csrf

            <div class="form-group">
                <label for="username">  نام کاربری:</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>

            @if($roles)
                <div class="form-group">
                    <label >Role :
                        <select>
                            @foreach($roles as $role)
                                <option value={{$role->id}}>{{$role->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            @endif
            <div class="form-group">
                <label for="avatar_id" >عکس پروفایل</label>
                <input type="file" id="avatar_id" class="">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">رمز عبور</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            </div>
            <div class="form-group">
                <label for="exampleConfrimInputPassword1">تکرار رمز عبور</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">آدرس ایمیل:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>

            <p class="text-center">
                <input type="submit" class="btn btn-info" value="ثبت نام">
            </p>
    {!! Form::close() !!}








@endsection
