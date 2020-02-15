@extends('layout.admin')
@extends('layout.adminheader')
@section('content')

    @if(count($posts)>0)


        <h1>پست ها</h1>

        <table class="table table-hover col-10">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Post Link</th>
                <th>Comments</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img src="{{$post->photo ? $post->photo->file : 'http://placeholde.it/50x50'}}" alt="" height="50" class="img-responsive img-rounded"></td>
                        <td><a href="{{route('post.edit',$post->id)}}">{{$post->user->name}}</a></td>
                        <td>{{$post->category ? $post->category->name : "Un categorized"}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->caption}}
                        <td><a href="{{route('home.singleArticle',$post->id)}}">View Post</a></td>
                        <td><a href="{{route('comment.show',$post->id)}}">View Comments</a></td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <h1 class="text-center">پست وجود ندارد</h1>
        <a class="btn btn-info mt-3" href="{{route('post.create')}}">پست جدید <i class="icon-plus2"></i></a>
    @endif


@endsection
