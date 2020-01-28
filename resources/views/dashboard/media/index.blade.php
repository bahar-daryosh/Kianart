@extends('layout.admin')
@extends('layout.adminheader')
@section('content')

    <h1>Media</h1>

    @if(isset($photos))

        {{@csrf_field()}}

        <form action="dashborad/media" method="post" class="form-inline">

            @csrf
            {{ method_field('delete') }}

{{--            <div class="form-group">--}}
{{--                <select name="checkBoxArray" id="" class="form-control">--}}

{{--                    <option value="" > Delete</option>--}}

{{--                </select>--}}
{{--            </div>--}}

            <div class="form-group">

                <input type="submit" name="delete_all" class="btn-primary">

            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th><input type="checkbox" id="selectAllBoxes"></th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>

                @foreach($photos as $photo)
                    <tr>
{{--                        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>--}}
                        <td>{{$photo->id}}</td>
                        <td><img height="50" class="rounded" src="{{$photo->file ? $photo->file : 'http://placeholde.it/50x50'}}" alt=""></td>
                        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'no date'}}</td>
                        <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : 'no date'}}</td>
                        <td>
                            <input type="hidden" value="{{$photo->id}}" name="photosingle">
                            <div class="form-group">
                                <input type="submit" name="delete_single" value="Delete"  class="btn btn-danger">
                            </div>



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
@endif

@endsection
