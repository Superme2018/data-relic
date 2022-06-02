<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>


<style>

    .buttons-enter-from {
        opacity: 0;
        transform:translateX(400%);
    }

    .buttons-enter-to {
        opacity: 1;
        transform:translateX(0);
    }

    .buttons-enter-active {
        transition: all 1s ease-out;
    }

    .buttons-leave-from {
        opacity: 1;
    }

    .buttons-leave-to {
        opacity: 0;
    }

    .buttons-leave-active {
        transition: opacity 5s;
    }

</style>

<style>

    /* Color Blend */

    /* @keyframes color-flow {
        0%   {background-color:red; border-color: red; }
        25%  {background-color:yellow; border-color: yellow; }
        50%  {background-color:blue; border-color: blue; }
        75%  {background-color:green; border-color: green; }
        100% {background-color:red; border-color: red }
    }

    .color-mad
    {
        animation-delay: 2.5s;
        animation-name: color-flow;
        animation-duration: 4s;
    } */

    /* Logo Animations */

    /* @keyframes logo-in-from-right {
        0%   { left:500%; top:0px; opacity: 0; }
        100%  { left:0px; top:0px; opacity: 1; }
    }

    @keyframes logo-out-to-left {
        0%   { left:0; top:0px; opacity: 1; }
        100%  { left:-120%; top:0px; opacity: 0; }
    }

    .logo-animation-in
    {
        animation-name: logo-in-from-right;
        animation-duration: 2s;
        position: relative;
    }

    .logo-animation-out
    {
        animation-name: logo-out-to-left;
        animation-duration: 1.2s;
        position: relative;

        opacity: 0;
    } */

    /* Bar Animations */
/*
    @keyframes bar-in-from-right {
        0%   { left:300%; top:0px; opacity: 0; }
        100%  { left:0px; top:0px; opacity: 1; }
    }

    @keyframes bar-out-to-left {
        0%   { left:0; top:0px; opacity: 1; }
        100%  { left:-120%; top:0px; opacity: 0; }
    }

    .bar-animation-in
    {
        animation-name: bar-in-from-right;
        animation-duration: 1s;
        position: relative;
    }

    .bar-animation-out
    {
        animation-name: bar-out-to-left;
        animation-duration: 1s;
        position: relative;

        opacity: 0;
    } */

    /* Button Animation */

    /* @keyframes buttons-up-from-down {
        0%   { left:0; top:100%; opacity: 0; }
        100%  { left:0px; top:0px; opacity: 1; }
    }


    @keyframes buttons-out-to-left {
        0%   { left:0; top:0; opacity: 1; }
        100%  { left:-200%; top:0; opacity: 0; }
    }

    .buttons-animation-in
    {
        opacity: 1;
        position: relative;

        animation-name: buttons-up-from-down;
        animation-play-state: paused;
        animation-duration: 0.5s;
    }

    .buttons-animation-out
    {

        position: relative;

        animation-name: buttons-out-to-left;
        animation-play-state: paused;
        animation-duration: 1s;

        opacity: 0;

    } */

    /* Other */

    .backgroud-color {
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

</style>

<body class="backgroud-color text-white overflow-hidden">

    <div id="app" class="flex justify-center items-center h-full">

        <data-relic-module-home></data-relic-module-home>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

    <script>

        const bar01Container = document.querySelector('.bar-01-container');
        const bar02Container = document.querySelector('.bar-02-container');
        const logoAnimation = document.querySelector('.logo-container');
        const buttonsAnimation = document.querySelector('.buttons-container');

        // Buttons Wooooooo, love so much my buttons.
        const uploadCSV_Button = document.getElementById('upload_csv');
        const modifyData_Button = document.getElementById('modify_data');
        const viewData_Button = document.getElementById('view_data');

        // Animation event listener, kind of handy.
        logoAnimation.addEventListener('animationend', () => {
            console.log('Animation ended', buttonsAnimation.style.animationPlayState);
            buttonsAnimation.style.animationPlayState = "running";
        });

        uploadCSV_Button.addEventListener('click', () => {

            logoAnimation.classList.remove('logo-animation-in');
            logoAnimation.classList.add('logo-animation-out');

            bar01Container.classList.remove('bar-animation-in');
            bar01Container.classList.add('bar-animation-out');

            bar02Container.classList.remove('bar-animation-in');
            bar02Container.classList.add('bar-animation-out');

            buttonsAnimation.classList.remove('buttons-animation-in');
            buttonsAnimation.classList.add('buttons-animation-out');

        });

        modifyData_Button.addEventListener('click', () => {
            alert("Button clicks!")
        })

        viewData_Button.addEventListener('click', () => {

        })


    </script>

</body>

</html>
