<html class="h-full">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="h-full grid place-items-center bg-gray-800 text-white">

    <div id="app" class="grid gap-6">

        <example-assignments></example-assignments>
        <example-assignment-panel>

            <template v-slot:heading>
                Heading of th Bla, bla.
            </template>

            <template v-slot:body>
                Bla, bla, ballla balalalal val.
            </template>

        </example-assignment-panel>

        <example-assignment-panel>

            <template v-slot:body>
                Bla, bla, ballla balalalal val.
            </template>

        </example-assignment-panel>

        <example-assignment-panel theme="light">

            <template v-slot:body>
                Bla, bla, ballla balalalal val.
            </template>

        </example-assignment-panel>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
