<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<style>
    @keyframes color-flow {
        0%   {background-color:red; border-color: red; }
        25%  {background-color:yellow; border-color: yellow; }
        50%  {background-color:blue; border-color: blue; }
        75%  {background-color:green; border-color: green; }
        100% {background-color:red; border-color: red }
    }

    @keyframes long-in-from-right {
        0%   { left:100%; top:0px; opacity: 0; }
        100%  { left:0px; top:0px; opacity: 1; }
    }

    @keyframes short-up-from-down {
        0%   { left:0; top:100%; opacity: 0; }
        100%  { left:0px; top:0px; opacity: 1; }
    }

    .bar-01-container {
        animation-name: long-in-from-right;
        animation-duration: 0.5s;
        position: relative;
    }

    .bar-02-container {
        animation-name: long-in-from-right;
        animation-duration: 0.5s;
        position: relative;
    }

    .logo-container
    {
        animation-name: long-in-from-right;
        animation-duration: 1.2s;
        position: relative;
    }

    .buttons-container
    {

        opacity: 1;
        position: relative;

        animation-name: short-up-from-down;
        animation-play-state: paused;
        animation-duration: 1.2s;
    }

    .color-mad
    {
        animation-delay: 2s;
        animation-name: color-flow;
        animation-duration: 4s;
    }

    .backgroud-color {
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

</style>

<body class="backgroud-color text-white overflow-hidden">

    <div class="flex justify-center items-center h-full">

        <div class="grid grid-cols-1 grid-rows-1 gap-5 w-1/2">

            <div class="bar-01-container">
                <img class="10 w-full" src="svg/ui-element.svg" alt="" >
            </div>

            <div class="logo-container">
                <img class="bar w-full" src="svg/text-logo.svg" alt="" >
            </div>

            <div class="bar-02-container">
                <img class="w-full" src="svg/ui-element.svg" alt="" >
            </div>

            <div class="buttons-container flex flex-row gap-1 text-black">
                <button class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">UPLOAD CSV</button>
                <button class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">MODIFY DATA</button>
                <button class="color-mad font-bold text-sm bg-slate-100 hover:bg-black hover:text-white font-bold py-2 w-32 border-2 hover:border-2 border-white">VIEW DATA</button>
            </div>

        </div>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

    <script>

        const logoAnimation = document.querySelector('.logo-container');
        const buttonsAnimation = document.querySelector('.buttons-container');

        // Sort of an animation event listener, kind of handy.
        logoAnimation.addEventListener('animationend', () => {
            console.log('Animation ended', buttonsAnimation.style.animationPlayState);
            buttonsAnimation.style.animationPlayState = "running";
        });

    </script>

</body>

</html>
