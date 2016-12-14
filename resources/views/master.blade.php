<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="{{asset(config("app.APP_ASSET_URL").'js/jquery.js') }}"></script>
        <script src="{{ asset(config("app.APP_ASSET_URL").'js/jquery-ui.js') }}"></script>    
        <script src="{{ asset(config("app.APP_ASSET_URL").'js/jquery.treemenu.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="{{asset(config("app.APP_ASSET_URL").'js/system.js') }}"></script>
         <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <link href="{{ asset(config("app.APP_ASSET_URL")."css/jquery.treemenu.css") }}" rel="stylesheet">
        <link href="{{ asset(config("app.APP_ASSET_URL")."css/app.css") }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">

    </head>

    <body>
      
        @yield('content')


    </body>
</html>







