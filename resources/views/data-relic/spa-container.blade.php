<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf_token" content="{{ csrf_token() }}" >
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

<style>

    .backgroud-color {
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

</style>

<body class="backgroud-color text-white overflow-hidden">

    <div id="app">
        <data-relic-container-main
            home-active="false"
            uploader-active="true"
            rand-number="<?php echo rand(1, 30000) ?>"
            >
        </data-relic-container-main>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
