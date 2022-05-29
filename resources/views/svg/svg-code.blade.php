<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<style>

    .backgroud-color {
        background: rgb(13,17,16);
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

</style>

<body class="backgroud-color text-white">

    <div class="flex justify-center items-center h-full">

        <div class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2">
            <img class="bar w-full" src="svg/ui-element.svg" alt="" >
            <img class="bar w-full" src="svg/text-logo.svg" alt="" >
            <img class="bar w-full" src="svg/ui-element.svg" alt="" >
        </div>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
