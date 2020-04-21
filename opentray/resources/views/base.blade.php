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
                    @if (session()->get('permission', 'default') < 3 && strcmp(session()->get('permission', 'default'), 'default'))
                    <a href="{{ route('residents.index') }}" class="col btn btn-outline-light" dusk="button_residents">
                        Residents
                    </a>
                    @endif
                    @if (session()->get('permission', 'default') < 2 && strcmp(session()->get('permission', 'default'), 'default'))
                    <a href="{{ route('staff.index') }}" class="col btn btn-outline-light" dusk="button_staff">
                        Staff
                    </a>
                    @endif
                    @if (session()->get('permission', 'default') < 2 && strcmp(session()->get('permission', 'default'), 'default'))
                    <a href="{{ route('foods.index') }}" class="col btn btn-outline-light" dusk="button_foods">
                        Foods
                    </a>
                    @endif
                    @if (session()->get('permission', 'default') < 1 && strcmp(session()->get('permission', 'default'), 'default'))
                    <a href="{{ route('facilities.index') }}" class="col btn btn-outline-light" dusk="button_facilities">
                        Facilities
                    </a>
                    @endif
                    @if (strcmp(session()->get('permission', 'default'), 'default'))
                    <a href="{{ route('print') }}" class="col btn btn-outline-light" dusk="button_print">
                        Print
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-2" style="margin: auto; text-align: right">
                {{ session()->get('fname') }}
                {{ session()->get('lname') }}
            </div>
            @if (!strcmp(session()->get('permission', 'default'), 'default'))
            <a href="{{ route('index') }}" class="col-2 btn btn-outline-light" style="margin: auto;" dusk="button_signout">
                Sign In
            </a>
            @else
            <a href="{{ route('signout') }}" class="col-2 btn btn-outline-light" style="margin: auto;" dusk="button_signout">
                Sign Out
            </a>
            @endif
            <div class="col-1">
            </div>
        </div>
        @if ($errors->any())
        <div class="row">
            <div class="col-3"></div>
            <div class="alert alert-danger col">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
            <div class="col-3"></div>
        </div>
        @endif
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>