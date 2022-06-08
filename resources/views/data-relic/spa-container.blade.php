<html class="h-full w-screen">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf_token" content="{{ csrf_token() }}" >
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

<style>

    /** Rand color animation for buttons */
    @keyframes color-flow {
        0%   {background-color:red; border-color: red; }
        25%  {background-color:yellow; border-color: yellow; }
        50%  {background-color:blue; border-color: blue; }
        75%  {background-color:green; border-color: green; }
        100% {background-color:red; border-color: red }
    }

    .color-mad
    {
        animation-name: color-flow;
        animation-duration: 4s;
    }

    /** Buttons Animations */
    .buttons-enter-from {
        opacity: 0;
        transform:translateY(200%);
    }

    .buttons-enter-to {
        opacity: 1;
        transform:translateY(0);
    }

    .buttons-enter-active {
        transition: all 1s ease;
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

    /** Bar Animations */
    .bar-enter-from {
        opacity: 0;
        transform:translateX(400%);
    }

    .bar-enter-to {
        opacity: 1;
        transform:translateX(0);
    }

    .bar-enter-active {
        transition: all 1.2s ease-in;
    }

    .bar-leave-from {
        opacity: 1;
    }

    .bar-leave-to {
        opacity: 0;
    }

    .logo-leave-active {
        transition: opacity 5s;
    }

    /** Logo Animations */
    .logo-enter-from {
        opacity: 0;
        transform:translateX(400%);
    }

    .logo-enter-to {
        opacity: 1;
        transform:translateX(0);
    }

    .logo-enter-active {
        transition: all 0.6s ease-in;
    }

    .logo-leave-from {
        opacity: 1;
    }

    .logo-leave-to {
        opacity: 0;

    }

    .buttons-leave-active {
        transition: opacity 5s;
    }

    .backgroud-color {
        background: linear-gradient(180deg, rgba(13,17,16,1) 0%, rgb(9, 18, 27) 100%);
    }

    /* FilePond */

    /* use a hand cursor intead of arrow for the action buttons */
    .filepond--file-action-button {
        cursor: pointer;
    }

    /* the text color of the drop label*/
    .filepond--drop-label {
        color: #555;
    }

    /* underline color for "Browse" button */
    .filepond--label-action {
        text-decoration-color: #aaa;
    }

    /* the background color of the filepond drop area */
    .filepond--panel-root {
        background-color: #eee;
    }

    /* the border radius of the drop area */
    .filepond--panel-root {
        border-radius: 0.5em;
    }

    /* the border radius of the file item */
    .filepond--item-panel {
        border-radius: 0.5em;
    }

    /* the background color of the file and file panel (used when dropping an image) */
    .filepond--item-panel {
        background-color: #555;
    }

    /* the background color of the drop circle */
    .filepond--drip-blob {
        background-color: #999;
    }

    /* the background color of the black action buttons */
    .filepond--file-action-button {
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* the icon color of the black action buttons */
    .filepond--file-action-button {
        color: white;
    }

    /* the color of the focus ring */
    .filepond--file-action-button:hover,
    .filepond--file-action-button:focus {
        box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.9);
    }

    /* the text color of the file status and info labels */
    .filepond--file {
        color: white;
    }

    /* error state color */
    [data-filepond-item-state*='error'] .filepond--item-panel,
    [data-filepond-item-state*='invalid'] .filepond--item-panel {
        background-color: red;
    }

    [data-filepond-item-state='processing-complete'] .filepond--item-panel {
        background-color: green;
    }

    /* bordered drop area */
    .filepond--panel-root {
        background-color: transparent;
        border: 2px solid #2c3340;
    }

</style>

<body class="backgroud-color text-white overflow-hidden">

    <div id="app">
        <data-relic-container-main
            home-active="true"
            uploader-active="false"
            rand-number="<?php echo rand(1, 30000) ?>"
            >
        </data-relic-container-main>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
