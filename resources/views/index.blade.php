<html>

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @keyframes spinner {
            to {transform: rotate(360deg);}
        }

        .is-loading:before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            border-radius: 50%;
            border: 2px solid #ccc;
            border-top-color: #000;
            animation: spinner .6s linear infinite;
        }
    </style>

</head>

<body>

    <div id="app">

       <example-component type="primary">Primary</example-component>
       <example-component type="secondary">Secondary</example-component>
       <example-component :processing=true>Default</example-component>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
