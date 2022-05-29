<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<style>

    @keyframes example {
        0%   { left:0px; top:0px; }
        50%  { left:400px; top:0px; }
        100%  { left:0px; top:0px; }
    }

    .logo-container
    {
        animation-name: example;
        animation-duration: 4s;
        position: relative;
    }

    .backgroud-color {
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

    .blurry-text {
        text-shadow: 0 0 2px black;
        color: transparent;
    }

</style>

<body class="backgroud-color text-white">

    <div class="flex justify-center items-center h-full">

        <div class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2">

            <img class="bar w-full" src="svg/ui-element.svg" alt="" >

            <div class="logo-container">
                <img class="bar w-full" src="svg/text-logo.svg" alt="" >
            </div>

            <img class="bar w-full" src="svg/ui-element.svg" alt="" >

            <div class="flex flex-row gap-1 text-black">
                <button class="blurry-text bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">UPLOAD CSV</button>
                <button class="blurry-text bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">MODIFY DATA</button>
                <button class="blurry-text bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">VIEW DATA</button>
            </div>

        </div>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
