<!doctype html>
<html>

<head>
    <!-- Use Scripts -->
    <script src=" {{ asset('js/app.js') }}" defer></script>

    <!-- Use Styles -->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
            <div class="col-sm-3">.col-sm-3</div>
        </div>

        <h1>This is profile page</h1>
        <a href="{{url('project')}}">Project</a>
    </div>

</body>

</html>