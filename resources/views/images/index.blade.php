<!DOCTYPE html>

<html>

    <head>
        <title>File Uploading with Vue + Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <meta name="csrf_token" content="{{ csrf_token() }}" >
    </head>

    <body>

        <div class="max-w-lg mx-auto mt-24">
            <h1 class="text-4xl font-bold text-center">File Uploader .ZIP and 10MB max</h1>
        </div>

        <div id="app">
            <image-uploader></image-uploader>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>

    </body>

</html>
