<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>NekoTodo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}"/>
        </head>

        <body>
        
        <div id="app"></div>

        <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        
        <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,600');

        *  { box-sizing:border-box; margin:0; padding:0; }

        body {font-family: 'Open Sans', sans-serif;}

        :root{
        --red: #bf0023;
        --blue: #0079bf;
        --green: #6dbf00;
        }

        .sucess{
            color: #fff;
            background-color: #61BD4F !important;
            border-color: #61BD4F !important;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 6px;
            -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            width: auto;
        }

        .success:focus {
                box-shadow: 0 0 0 0.2rem rgba(97,189,79,0.5);
        }

        button{
            border: none;
            outline: none;
        }

        a{
            color: #fff;
            text-decoration: none;
            margin: 20px;
        }

        button,a{
        cursor: pointer;
        }

        </style>

    </body>
</html>
