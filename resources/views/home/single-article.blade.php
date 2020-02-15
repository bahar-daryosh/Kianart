@extends('layout.home')
@extends('layout.headerlog')

@section('content')


    <!-- Blog Post -->

    <!-- Title -->
    <div class="container">
        <div class="row">
            <main class="col-12 col-md-8 col-lg-10 px-5">
                <h1 class="text-center text-purple" id="firstheading">
                    {{$post->title}}
                </h1>
                <section class="articles pb-5">
                    <div class="container-fluid">
                        <div class="row pb-5 d-block">
                            <div class="rtl">
                                <div>

                                    <img class="img-responsive w-100" src="{{$post->photo->file}}" alt="">

                                    <p class="text-justify">
                                        {{$post->caption}}
                                    </p>
                                </div>
                                <p class="lead">
                                    by <a href="#">{{$post->user->name}}</a>
                                </p>
                                <hr>

                                <!-- Date/Time -->
                                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>
                            </div>

                            {{session('comment_message')}}
                            <div class="well">
                                <h4>نظر خود را به اشتراک بگذارید:</h4>
                                {!! Form::open([ 'method' => 'POST','action' => 'PostCommentsController@store']) !!}

                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="form-group">
                                    {!! Form::label('caption', 'Comment:'); !!}
                                    {!! Form::textarea('caption',null, ['class' => 'form-control' , 'rows'=>3 ]) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('ارسال',['class' => 'btn btn-primary']) !!}

                                </div>

                                {!! Form::close() !!}
                            </div>

                            <hr>
                        @if(count($comments)>0)
                            <!-- Comment -->
                                @foreach($comments as $comment)
                                    <div  class=" media nested-comment">
                                        <a class="pull-left" href="#">
                                            <img height="64" width="64" class="media-object" src="{{$comment->photo}}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{$comment->author}}
                                                <small>{{$comment->created_at->diffForHumans()}}</small>
                                            </h4>
                                            <p>{{$comment->body}}</p>
                                            <!-- Nested Comment -->
                                            @if(count($comment->replies))
                                                @foreach($comment->replies as $reply)
                                                    @if($reply->is_active == 1)

                                                        <div style="margin-top: 40px" class="media">
                                                            <a class="pull-left" href="#">
                                                                <img height="64" width="64" class="media-object" src="{{$reply->photo}}" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">{{$reply->author}}
                                                                    <small>{{$reply->created_at->diffForHumans()}}</small>
                                                                </h4>
                                                                <p>{{$reply->body}}</p>
                                                            </div>
                                                        </div>

                                                    @endif

                                                @endforeach
                                            <!-- End Nested Comment -->
                                            @endif
                                            <div class="comment-reply-container">
                                                <button class="toggle-reply btn btn-primary pull-right">Reply</button>
                                                <div class="comment-reply col-sm-6" style="display: none">
                                                    {!! Form::open([ 'method' => 'POST','action' => 'CommentRepliesController@createReply']) !!}

                                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">

                                                    <div class="form-group">
                                                        {!! Form::label('body', 'Reply :'); !!}
                                                        {!! Form::textarea('body',null, ['class' => 'form-control','rows'=>1]) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}

                                                    </div>

                                                    {!! Form::close() !!}

                                                </div>

                                        </div>
                                    </div>
                        </div>
                        @endforeach
                        @endif
                    </div>

                    </div>
                </section>
            </main>
        </div>
    </div>


@endsection
@section('scripts')

    <script>
        $(".comment-reply-container .toggle-reply").click(function () {
            $(this).next().slideToggle("slow");
        })
    </script>


@endsection
