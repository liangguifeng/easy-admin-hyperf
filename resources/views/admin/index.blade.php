<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ \Admin\Facades\Admin::title() }} @if($header) | {{ $header }}@endif</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @if(!is_null($favicon = \Admin\Facades\Admin::favicon()))
    <link rel="shortcut icon" href="{{$favicon}}">
    @endif

    {!! \Admin\Facades\Admin::css() !!}

    <script src="{{ \Admin\Facades\Admin::jQuery() }}"></script>
    {!! \Admin\Facades\Admin::headerJs() !!}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition {{config('admin.skin')}} {{join(' ', config('admin.layout'))}}">

@if($alert = config('admin.top_alert'))
    <div style="text-align: center;padding: 5px;font-size: 12px;background-color: #ffffd5;color: #ff0000;">
        {!! $alert !!}
    </div>
@endif

<div class="wrapper">

    @include('admin::partials.header')

    @include('admin::partials.sidebar')
    {{--    这--}}

    <div class="content-wrapper" id="pjax-container">
        {!! \Admin\Facades\Admin::style() !!}
        <div id="app">
        @yield('content')
        </div>
        {!! \Admin\Facades\Admin::script() !!}
        {!! \Admin\Facades\Admin::html() !!}
    </div>

    @include('admin::partials.footer')

</div>

<button id="totop" title="Go to top" style="display: none;"><i class="fa fa-chevron-up"></i></button>

<script>
    function LA() {}
    LA.token = "{{ 111111111111 }}";
    LA.user = @json($_user_);
</script>

<!-- REQUIRED JS SCRIPTS -->
{!! \Admin\Facades\Admin::js() !!}

</body>
</html>
