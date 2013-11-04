<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    {{ get_title() }}
    {{ stylesheet_link('css/bootstrap.css') }}
    {{ stylesheet_link('css/style.css') }}
    {{ stylesheet_link('css/smoothness/jquery-ui-1.10.3.custom.css') }}
    {{ javascript_include('js/jquery.js') }}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test this suckorr">
    <meta name="author" content="Phalcon Team">
    </head>
    <body>
        {{ content() }}

        {{ javascript_include('js/jquery-ui-1.10.3.custom.js') }}
        {{ javascript_include('js/bootstrap.js') }}
        {{ javascript_include('js/utils.js') }}
    </body>
</html>
