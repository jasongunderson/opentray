<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<style>
    html,
    body,
    .container,
    .row {
        height: 100%;
    }

    .col-6 {
        background-color: grey;
        border-style: solid;
        border-color: red;
        align-items: center;
        justify-content: center;
        display: flex;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container text-center" dusk="test">
        <div class="row">
            <div class="col-6">
                <img src="images/test.png">
            </div>
            <div class="col-6">
                <img src="images/test.png">
            </div>
            <div class="col-6">
                <img src="images/test.png">
            </div>
            <div class="col-6">
                <img src="images/test.png">
            </div>
        </div>
    </div>
</body>

</html>