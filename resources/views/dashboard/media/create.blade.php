@extends('layout.admin')
@extends('layout.adminheader')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">


@endsection
@section('content')


    <h1>Upload Media</h1>

    {!! Form::open([ 'method' => 'POST','url'=>'/dashboard/media', 'class'=>'dropzone']) !!}
    @csrf




    {!! Form::close() !!}


@endsection
@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>


@endsection
