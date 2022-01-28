<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDo</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="bg-slate-900 text-white">
        <div id="app">
            <todo-app></todo-app>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>