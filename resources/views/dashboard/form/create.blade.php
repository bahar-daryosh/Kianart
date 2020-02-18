@extends('layout.admin')
@extends('layout.adminheader')
@section('content')
    <div class="build-wrap"></div>
    <div id="fb-editor"></div>


@endsection
@section('scripts')

    <script src="/admin/js/core/libraries/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        jQuery(function($) {
            $(document.getElementById('fb-editor')).formBuilder();
        });
    </script>

@endsection

