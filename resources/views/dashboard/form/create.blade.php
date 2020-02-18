@extends('layout.admin')
@extends('layout.adminheader')
@section('content')
    {{--<div class="setDataWrap">--}}
        {{--<button id="getJSON" type="button">ثبت فرم</button>--}}
    {{--</div>    --}}
    {{--<div class="build-wrap"></div>--}}
    {{--<div id="fb-editor"></div>--}}



    <div class="setDataWrap">
        <button id="sendForm" type="submit">ثبت فرم</button>
    </div>
    <div id="build-wrap"></div>

@endsection
@section('scripts')

    <script src="/admin/js/core/libraries/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    {{--<script>--}}
        {{--jQuery(function($) {--}}
            {{--$(document.getElementById('fb-editor')).formBuilder();--}}
        {{--});--}}
    {{--</script>--}}

    <script>
        jQuery(function($) {
            var fbEditor = document.getElementById('build-wrap');
            var formBuilder = $(fbEditor).formBuilder();

            $("#sendForm").click(function(e) {

                e.preventDefault();
                // console.log(formBuilder.actions.getData('json'));

                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });
                $.ajax({
                    // action :'',
                    url:'/dashboard/forms',
                    type: 'POST',
                    dataType: 'JSON',
                    data: formBuilder.actions.getData('json'),
                    success:function(data){
                        console.log(data);
                    }

            });
            });



        });

    </script>

@endsection

