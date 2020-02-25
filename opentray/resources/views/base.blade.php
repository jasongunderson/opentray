<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenTray</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row bg-secondary text-light" style="height: 50px;">
            <div class="col-1">
            </div>
            <div class="col-5" style="margin: auto;">
                <div class="row">
                    <a href="{{ route('residents.index') }}" class="col btn btn-outline-light">
                        Residents
                    </a>
                    <a href="{{ route('staff.index') }}" class="col btn btn-outline-light">
                        Staff
                    </a>
                    <a href="{{ route('print') }}" class="col btn btn-outline-light">
                        Print
                    </a>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2" style="margin: auto; text-align: right">

            </div>
            <a href="{{ route('index') }}" class="col-1 btn btn-outline-light" style="margin: auto;">
                Sign Out
            </a>
            <div class="col-1">
            </div>
        </div>
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>